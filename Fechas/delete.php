<?php // Script para eliminar un perfil de espectador.
include "includes/conn.php";

if (isset($_POST["id"])) // Si se recibe la id del espectador.
{
    $id = $_POST["id"];
    $sql = "DELETE FROM alumno WHERE ID=$id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    if ($stmt->rowCount()) // Lo borró de la base de datos.
    {
        session_destroy(); // Destruyo la sesión
        echo "<script>if (!alert('Se Han Eliminado Tus Datos, Gracias por Haber sido parte de Esta Academia.')) window.open('index.php', '_self');</script>"; // Muestro una alerta, se ha eliminado.
    }
}
else // Si no llegaron datos por POST.
{
    echo "<script>if (!alert('Llegaste Aquí por Error, No se ha Eliminado Ningún Perfil.')) window.open('index.php', '_self');</script>"; // Nada se ha eliminado.
}
?>