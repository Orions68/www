<?php
include "includes/conn.php";
$id = $_GET["id"];
$sql = "DELETE FROM alumno WHERE ID=$id"; // Asigno a la variable $sql la consuta a la base de datos.
$stmt = $conn->prepare($sql); // Preparo la conexión con la consulta.
$stmt->execute(); // La ejecuto.
if ($stmt->rowCount()) // Si hubo modificación de fila(tupla), lo borró de la base de datos.
{
    session_destroy(); // Destruyo la sesión.
    echo "<script>if (!alert('Se Han Eliminado Tus Datos, Gracias por Haber sido parte de Esta Academia.')) window.open('index.php', '_self');</script>"; // Muestro una alerta, se ha eliminado.
}
?>