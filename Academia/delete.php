<?php // Script para eliminar un perfil de alumno.
include "includes/conn.php"; // Incluyo la conexión con la bese de datos.

if (isset($_POST["id"])) // Si se recibe la ID del alumno.
{
    $id = $_POST["id"]; // Asigno a $id la ID del alumno.
    $sql = "DELETE FROM alumno WHERE ID=$id"; // Asigno a la variable $sql la consuta a la base de datos.
    $stmt = $conn->prepare($sql); // Preparo la conexión con la consulta.
    $stmt->execute(); // La ejecuto.
    if ($stmt->rowCount()) // Si hubo modificación de fila(tupla), lo borró de la base de datos.
    {
        session_destroy(); // Destruyo la sesión.
        echo "<script>if (!alert('Se Han Eliminado Tus Datos, Gracias por Haber sido parte de Esta Academia.')) window.open('index.php', '_self');</script>"; // Muestro una alerta, se ha eliminado.
    }
}
else // Si no llegaron datos por POST.
{
    echo "<script>if (!alert('Llegaste Aquí por Error, No se ha Eliminado Ningún Perfil.')) window.open('index.php', '_self');</script>"; // Nada se ha eliminado, vuelve a index.php.
}
?>