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
    $name = $_POST["username"];
    $surname = $_POST["surname"];
    $surname2 = $_POST["surname2"];
    if ($surname == "")
    {
        $surname = null;
    }
    $dni = $_POST["dni"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    $sql = "SELECT email FROM user WHERE dni='$dni'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_OBJ);
    if ($row->phone == $phone)
    {
        if ($row->email == $email)
        {
            $sql = "UPDATE user SET name='$name', surname='$surname', surname2='$surname2' WHERE dni='$dni';";
            $stmt = $conn->prepare($sql);
        }
        else
        {
            $sql = "UPDATE user SET name='$name', surname='$surname', surname2='$surname2', email='$email' WHERE dni='$dni';";
        }
    }
    else
    {
        if ($row->email == $email)
        {
            $sql = "UPDATE user SET name='$name', surname = '$surname', surname2='$surname2', phone='$phone' WHERE dni='$dni';";
        }
        else
        {
            $sql = "UPDATE user SET name='$name', surname='$surname', surname2='$surname2', phone='$phone', email='$email' WHERE dni='$dni';";
        }
    }
    $stmt->execute();
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
                                    $number[$i] = $row2->phone;
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
                                    echo '<label><input type="text" name="phone" value="' . $row->phone . '" required> Teléfono</label>';
                                }
                            }
                            else
                            {
                                $number = [];
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