<?php
include "includes/conn.php";
$title = "Primera Base de Datos";
include "includes/header.php";
include "includes/modal-index.html";
?>
<section class="container-fluid pt-3">
    <div class="row">
        <div class="col-md-1"></div>
            <div class="col-md-10">
                <div id="view1">
                    <br><br><br><br>
                    <h1>Registro de Usuarios</h1>
                    <br>
                    <?php
                    if (isset($_POST["username"]))
                    {
                        $already = false;
                        $name = $_POST["username"];
                        $surname = $_POST["surname"];
                        $surname2 = $_POST["surname2"];
                        if ($surname2 == "")
                        {
                            $surname2 = null;
                        }
                        $dni = $_POST["dni"];
                        $phone = $_POST["phone"];
                        $email = $_POST["email"];

                        $sql = "SELECT dni, phone, email FROM user";
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();
                        if ($stmt->rowCount() > 0)
                        {
                            while ($row = $stmt->fetch(PDO::FETCH_OBJ))
                            {
                                if ($row->dni == $dni || $row->phone == $phone || $row->email == $email)
                                {
                                    $already = true;
                                }
                            }
                        }
                        if (!$already)
                        {
                            $sql = "INSERT INTO user VALUES(:id, :name, :surname, :surname2, :dni, :phone, :email);";
                            $stmt = $conn->prepare($sql);
                            $stmt->execute(array(':id' => null, ':name' => $name, ':surname' => $surname, ':surname2' => $surname2, ':dni' => $dni, ':phone' => $phone, ':email' => $email));
                            echo "<script>toast(0, 'El Usuario " . $name . " Agregado Correctamente.', 'Se ha Agregado el Usuario a la Base de Datos');</script>";
                        }
                        else
                        {
                            echo "<script>toast(2, 'El Usuario " . $name . " ya existe.', 'Verifica que el Usuario no Esté Registrado, Alguno de los datos DNI, Teléfono o E-mail ya están Registrados en la Base de Datos.');</script>";
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