<?php
include "includes/conn.php";
$title = "Perfil de Usuario";
include "includes/header.php";
include "includes/modal-index.html";
if (isset($_POST["dni"]))
{
    $ok = false;
    $email = $_POST["email"];
    $dni = $_POST["dni"];
    $sql = "SELECT * FROM user WHERE dni='$dni'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    if ($stmt->rowCOunt() > 0)
    {
        while ($row = $stmt->fetch(PDO::FETCH_OBJ))
        {
            if ($email == $row->email && $dni == $row->dni)
            {
                $name = $row->name;
                $ok = true;
            }
        }
    }
}
?>
<section class="container-fluid pt-3">
    <div class="row">
        <div class="col-md-1"></div>
            <div class="col-md-10">
                <div id="view1">
                    <br><br><br><br>
                    <h1>Entrada de Usuario</h1>
                    <br>
                    <?php
                    if ($ok)
                    {
                        echo "<h3>Bienvenido Usuario $name.</h3>";
                    }
                    else
                    {
                        echo "<script>toast(2, 'Datos Erroneos', 'Los Datos Introducidos no Pertenecen a Ningún Usuario Registrado.')</script>";
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