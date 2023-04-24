<?php // Documento de script php
include "includes/conn.php";
if (isset($_POST['email'])) // Si recibe datos por POST en la variable array $_POST["email"].
{
    $ok = false;
	$email = $_POST['email']; // Asigna a la variable $user el contenido del array $_POST["email"].
	$pass = $_POST['pass']; // Lo mismo con $_POST["pass"].

    $sql = "SELECT email, pass FROM alumno WHERE email='$email';";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    if ($stmt->rowCount() > 0)
    {
        $row = $stmt->fetch(PDO::FETCH_OBJ);
        if (password_verify($pass, $row->pass))
        {
            $ok = true;
        }
    }
}
$title = "Buenvenido " . $email;
include "includes/header.php";
include "includes/modal-index.html";
include "includes/nav-index.html";
include "includes/nav-mob-index.html";
echo "<script src='js/script.js'></script>";
?>
<section class="container-fluid pt-3">
    <div class="row">
        <div class="col-md-1"></div>
            <div class="col-md-10">
                <div id="view1">
                    <br><br><br><br>
                    <?php
                    if ($ok)
                    {
                        $_SESSION["email"] = $email;
                        echo "<h3>Bienvenido Usuario $email</h3>
                        <h4>Visita tu Perfil</h4>
                        <button onclick='window.open(\"profile.php\", \"_self\")'>Mi Perfil</button>";
                    }
                    else
                    {
                        echo '<script>toast(2, "DATOS INCORRECTOS", "Las Credenciales Introducidas no Corresponden a Ningún Usuario Registrado. Verifica los datos y Vuelve a Intentar el Login.");</script>';
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