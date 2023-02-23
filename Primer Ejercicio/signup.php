<?php
include "includes/conn.php";
$title = "Primera Base de Datos";
include "includes/header.php";
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
                        $name = $_POST["username"];
                        $surname = $_POST["surname"];
                        $dni = $_POST["dni"];
                        $phone = $_POST["phone"];
                        $email = $_POST["email"];
                        $sql = "INSERT INTO users VALUES(:id, :name, :surname, :dni, :phone, :email);";
                        $stmt = $conn->prepare($sql);
                        $stmt->execute(array(':id' => null, ':name' => $name, ':surname' => $surname, ':dni' => $dni, ':phone' => $phone, ':email' => $email));
                        echo "<script>if (!alert('Usuario " . $name . " Agregado Correctamente.')) window.open('index.php', '_self');</script>";
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