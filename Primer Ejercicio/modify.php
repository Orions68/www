<?php
include "includes/conn.php";
include "includes/phone.php";
$title = "Modificando Datos de Usuario";
include "includes/header.php";
include "includes/nav-pc.html";
include "includes/nav-mob.html";
include "includes/modal-index.html";

if (isset($_POST["username"]))
{
    $number = [];
    $name = $_POST["username"];
    $surname = $_POST["surname"];
    $surname2 = $_POST["surname2"];
    if ($surname2 == "")
    {
        $surname2 = null;
    }
    $dni = $_POST["dni"];
    if (isset($_POST["phone0"]) && $_POST["phone0"] != "")
    {
        $number[0] = $_POST["phone0"];
        if (isset($_POST["phone1"]) && $_POST["phone1"] != "")
        {
            $number[1] = $_POST["phone1"];
            if (isset($_POST["phone2"]) && $_POST["phone2"] != "")
            {
                $number[2] = $_POST["phone2"];
            }
            else
            {
                $number[2] = NULL;
            }
        }
        else
        {
            $number[1] = NULL;
        }
    }
    else
    {
        $number[0] = NULL;
    }
    $email = $_POST["email"];

    $sql = "SELECT id, email FROM user WHERE dni='$dni'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_OBJ);
    $id = $row->id;
    if ($row->email == $email)
    {
        if ($surname2 == null)
        {
            $sql = "UPDATE user SET name='$name', surname = '$surname', surname2=NULL WHERE id=$id;";
        }
        else
        {
            $sql = "UPDATE user SET name='$name', surname = '$surname', surname2='$surname2' WHERE id=$id;";
        }
    }
    else
    {
        if ($surname2 == null)
        {
            $sql = "UPDATE user SET name='$name', surname = '$surname', surname2=NULL, email='$email' WHERE id=$id;";
        }
        else
        {
            $sql = "UPDATE user SET name='$name', surname='$surname', surname2='$surname2', email='$email' WHERE id=$id;";
        }
    }
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $sql = "SELECT number FROM phone WHERE user_id=$id;";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    if ($stmt->rowCount() > 0)
    {
        $i = 0;
        while ($row = $stmt->fetch(PDO::FETCH_OBJ))
        {
            if ($number[$i] != $row->number)
            {
                $sql = "UPDATE phone SET number='$number[$i]' WHERE user_id=$id AND number='$row->number';";
                $stmt2 = $conn->prepare($sql);
                $stmt2->execute();
            }
            $i++;
        }
    }
    else
    {
        for ($i = 0; $i < count($number); $i++)
        {
            $sql = "INSERT INTO phone VALUES (:user_id, :number);";
            $stmt2 = $conn->prepare($sql);
            $stmt2->execute(array(':user_id' => $id, ':number' => $number[$i]));
        }
    }
    echo "<script>toast(0, 'Actualizado', 'El Usuario " . $name . " se ha Actualizado Correctamente')</script>";
}
?>
<section class="container-fluid pt-3">
    <div class="row">
        <div class="col-md-1"></div>
            <div class="col-md-10">
                <div id="view1">
                    <br><br><br><br>
                    <?php
                    if (isset($_POST["id"]))
                    {
                        $id = $_POST["id"];
                        $sql = "SELECT * FROM user WHERE id=$id;";
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();
                        if ($stmt->rowCount() > 0)
                        {
                            $sql = "SELECT * FROM phone WHERE user_id=$id;";
                            $stmt2 = $conn->prepare($sql);
                            $stmt2->execute();
                            $number = [];
                            if ($stmt2->rowCount() > 0)
                            {
                                $i = 0;
                                while ($row2 = $stmt2->fetch(PDO::FETCH_OBJ))
                                {
                                    $number[$i] = $row2->number;
                                    $i++;
                                }
                            }
                            $row = $stmt->fetch(PDO::FETCH_OBJ);
                            echo '<form action="modify.php" method="post">
                            <label><input type="text" name="username" value="' . $row->name . '" required> Nombre</label>
                            <br><br>
                            <label><input type="text" name="surname" value="' . $row->surname . '" required> Apellido</label>
                            <br><br>
                            <label><input type="text" name="surname2" value="' . $row->surname2 . '"> Segundo Apellido</label>
                            <br><br>
                            <label><input type="text" name="dni" value="' . $row->dni . '" readonly> D.N.I.</label>
                            <br><br>';
                            if (count($number) > 0)
                            {
                                for ($i = 0; $i < count($number); $i++)
                                {
                                    echo '<label><input type="text" name="phone' . $i . '" value="' . $number[$i] . '"> Teléfono</label><br><br>';
                                }
                                if ($i < 3)
                                {
                                    switch ($i)
                                    {
                                        case 1:
                                            echo '<label><input type="text" name="phone1" value=""> Teléfono</label><br><br>';
                                            echo '<label><input type="text" name="phone2" value=""> Teléfono</label><br><br>';
                                            break;
                                        default :
                                            echo '<label><input type="text" name="phone2" value=""> Teléfono</label><br><br>';
                                    }
                                }
                            }
                            else
                            {
                                echo '<label><input type="text" name="phone0" value=""> Teléfono</label><br><br>';
                                echo '<label><input type="text" name="phone1" value=""> Teléfono</label><br><br>';
                                echo '<label><input type="text" name="phone2" value=""> Teléfono</label><br><br>';
                            }
                            echo '<br><br>
                            <label><input type="text" name="email" value="' . $row->email . '" required> E-mail</label>
                            <br><br>
                            <input type="submit" value="Modifico Estos Datos">
                            </form>';
                        }
                    }
                    else
                    {
                        if (!isset($_POST["username"]))
                        {
                            echo '<script>toast (2, "Error Grave", "Haz llegado aquí por Error.");</script>';
                        }
                    }
                    ?>
                </div>
            </div>
        <div class="col-md-1"></div>
    </div>
</section>
<?php
include "includes/footer.html";
?>