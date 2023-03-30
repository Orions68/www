<?php
$title = "Página de Registro";
include "header.php";
include "includes/fw.php";

if (isset($_POST["email"]))
{
    $already = false;
    $name = $_POST["username"];
    $surname1 = $_POST["surname1"];
    $surname2 = $_POST["surname2"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    // $hash = password_hash($pass, PASSWORD_DEFAULT, ["cost" => 10]); // Ojo con el costo de 10 a 20 el tiempo que tarda en codificar/decodificar es 1000 veces mayor, cost = 10 es por default.
    $hash = password_hash($pass, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("SELECT email FROM user WHERE email='$email'");
    $stmt->execute();

    if ($stmt->fetch(PDO::FETCH_OBJ))
    {
        $already = true;
    }

    if (!$already)
    {
        $stmt = $conn->prepare("INSERT INTO users VALUES (:id, :name, :surname1, :surname2, :email, :pass);");
        $stmt->execute(array(':id' => null, ':name' => $name, ':surname1' => $surname1, ':surname2' => $surname2, ':email' => $email, ':pass' => $hash));
        echo "<script>if (!alert('Datos del Usuario: " . $email . " Agregados Correctamente.')) window.open('index.php', '_self')</script>";
    }
    else
    {
        echo "<script>if (!alert('El E-mail ya está registrado.')) window.open('index.php', '_self')</script>";
    }
}
include "includes/footer.html";
?>