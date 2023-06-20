<?php
include "includes/worddb.php";

if (isset($_POST["client"]))
{
    $client = $_POST["client"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $sql = "INSERT INTO wp_users (user_login, user_nicename, user_email) VALUES(?, ?, ?);";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array($client, $phone, $email));
    echo "<script>if (!alert('El Cliente se ha Agregado a la Base de Datos')) window.open('registro', '_self');</script>";
}
?>