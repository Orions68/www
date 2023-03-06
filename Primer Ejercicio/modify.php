<?php
include "includes/conn.php";
$title = "Modificando Datos de Usuario";
include "includes/header.php";
include "includes/nav-pc.html";
include "includes/nav-mob.html";
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
                            $row = $stmt->fetch(PDO::FETCH_OBJ);
                            echo '<form action="modifyit.php" method="post">
                            <label><input type="text" name="username" value="' . $row->name . '" required> Nombre</label>
                            <br><br>
                            <label><input type="text" name="surname" value="' . $row->surname . '" required> Apellido</label>
                            <br><br>
                            <label><input type="text" name="surname2" value="' . $row->surname2 . '"> Segundo Apellido</label>
                            <br><br>
                            <label><input type="text" name="dni" value="' . $row->dni . '" required> D.N.I.</label>
                            <br><br>
                            <label><input type="text" name="phone" value="' . $row->phone . '" required> Teléfono</label>
                            <br><br>
                            <label><input type="text" name="email" value="' . $row->email . '" required> E-mail</label>
                            <br><br>
                            <input type="submit" value="Modifico Estos Datos">
                            </form>';
                        }
                    }
                    else
                    {
                        echo '<script>toast (2, "Error Grave", "Haz llegado aquí por Error.");</script>';
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