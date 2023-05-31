<?php // Script para eliminar un perfil de alumno.
include "includes/conn.php"; // Incluyo la conexión con la base de datos.
$title = "Borrando Alumno";
include "includes/header.php";

if (isset($_SESSION["id"])) // Verifica si la sesión está abierta.
{
    if (isset($_POST["id"])) // Si Llegan datos por post.
    {
        if ($_POST["id"] == $_SESSION["id"]) // Si la ID de la sesión es igual a la ID recibida.
        {
            $id = $_POST["id"]; // Asigno a $id la ID del alumno.
            include "includes/modal-delete.php";
            $sql = "SELECT * FROM alumno WHERE ID=$id;";
            $stmt = $conn->prepare($sql); // Preparo la conexión con la consulta.
            $stmt->execute(); // La ejecuto.
            if ($stmt->rowCount()) // Si hubo modificación de fila(tupla), está en la base de datos.
            {
                $row = $stmt->fetch(PDO::FETCH_OBJ);
                echo '<script>toast(2, "Eliminando a ' . $row->name . " " . $row->surname . '.", "Por Favor Confirma que Quieres Eliminar tus Datos.");</script>';
            }
        }
        else // Si no llegaron datos por POST.
        {
            echo "<script>if (!alert('Llegaste Aquí por Error, No se ha Eliminado Ningún Perfil.'))
            {
                window.open('index.php', '_self');
            }
            </script>"; // Nada se ha eliminado, vuelve a index.php.
        }
    }
}
?>