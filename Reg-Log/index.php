<?php
$title = "Inicio de Register Login";
include "includes/header.php";
?>
    <h1>Registro de Usuario con E-mail y Cotraseña.</h1>
    <form action="register.php" method="post" onsubmit="return verify()">
    <label for="usename"><input type="text" name="username" required> Nombre de Usuario</label>
    <br><br>
    <label for="email"><input type="email" name="email" required> E-mail de Usuario</label>
    <br><br>
    <label for="pass"><input type="password" id="pass" name="pass" required> Contraseña</label>
    <br><br>
    <label for="pass2"><input type="password" id="pass2" name="pass2" required> Repite Contraseña</label>
    <br><br>
    <input type="submit" value="Registrate!">
    </form>
    <br><br>
    <h2>Login de Usuario</h2>
    <form action="login.php" method="post">
    <label for="email"><input type="email" name="email" required> E-mail de Usuario</label>
    <br><br>
    <label for="pass"><input type="password" name="pass" required> Contraseña</label>
    <br><br>
    <input type="submit" name="login" value="Login">
    </form>
    <script src="js/script.js"></script>
<?php
include "includes/footer.html";
?>