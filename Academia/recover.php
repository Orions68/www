<?php
include "includes/conn.php"; // Incluyo la conexión con la base de datos.
$title = "Recupera tu Contraseña"; // Título de la página.
include "includes/header.php";
include "includes/modal-index.html";
include "includes/nav-index.html";
include "includes/nav-mob-index.html";

if (isset($_POST["email"])) // Si recibo datos por POST.
{
    $email = htmlspecialchars($_POST["email"]); // Asigno a variables los datos recibidos por POST.
    $ok = false; // Pongo $ok a false, se usará para verificar si el E-mail introducido corresponde a un alumno en la base de datos.
    $sql = "SELECT ID, email FROM alumno;"; // Asigno a $sql la consulta de todos los E-mail de alumnos de la tabla alumno.
    $stmt = $conn->prepare($sql); // Preparo la conexión con la consulta.
    $stmt->execute(); // La ejecuto.
    while($row = $stmt->fetch(PDO::FETCH_OBJ)) // Asigno a la variable $row el contenido de la consulta.
    {
        if ($row->email == $email) // Si el E-mail está en la base de datos.
        {
            $id = $row->ID;
            $ok = true; // $ok es true.
            break; // Rompo el bucle, si se encuentra el E-mail en los primeros resultados no hace falta seguir buscando, el E-mail es clave unica.
        }
    }
    if (!$ok) // Si $ok es false.
    {
        echo "<script>toast(2, 'Hay un Error', 'Lo Siento no Existe Ningún Alumno con E-mail: $email, Vuelve a Intentarlo con la Dirección con la que te Registraste.');</script>"; // Error.
    }
    else // Si el E-mail está en la base de datos.
    {
        $hash = substr(md5(uniqid($email, true)), 8, 8); // Genero una clave de 8 caracteres al azar con el E-mail del alumno como semilla.
        $pass = password_hash($hash, PASSWORD_DEFAULT); // Encripto esa clave con la función password_hash de PHP y se la asigno a la variable $pass.
        $sql = "UPDATE alumno SET pass='$pass' WHERE ID=$id;"; // Hago un update de la contraseña de ese E-mail.
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        echo "<script>toast(0, 'Todo ha Ido Bien', 'Se ha cambiado tu Contraseña a: $hash, Selecciónala y Cópiala, Después Vuelve a Iniciar Sesión con los Nuevos Datos. Te Recomendamos que Cambies la Contraseña, Gracias.');</script>"; // Muestro un mensaje con la nueva contraseña y pido que entre con los nuevos datos y cambie la contraseña.
    }
}
?>
<section class="container-fluid pt-3">
    <div class="row">
        <div class="col-md-1"></div>
            <div class="col-md-10">
                <div id="view1">
                <br><br><br><br>
                    <h1>Vas a Modificar tu Contraseña por una Provisoria</h1>
                    <br><br>
                    <h2>Por Favor Después de Loguearte Modifícala Entrando en tu Perfil</h2>
                    <br><br>
                    <form action="" method="post">
                        <label><input type="email" name="email" required> Escribe el E-mail con el que te Registraste</label>
                        <br><br>
                        <input type="submit" value="Recupero mi Contraseña">
                    </form> <!-- Formulario para recuperar la contraseña poniendo el E-mail con el que se registró el alumno, el formualrio se envía al mismo script, recover.php. -->
                </div>
            </div>
        <div class="col-md-1"></div>
    </div>
</section>
<?php
include "includes/footer.html";
?>