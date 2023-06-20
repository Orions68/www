<?php
include "includes/minedb.php";

if (isset($_POST["client"]))
{
    $client = $_POST["client"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $sql = "INSERT INTO client VALUES(:ID, :name, :email, :phone);";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array(':ID' => NULL, ':name' => $client, ':email' => $email, ':phone' => $phone));
    echo "<script>if (!alert('El Cliente se ha Agregado a la Base de Datos')) window.open('registro', '_self');</script>";
}
?>