<?php
include "includes/conn.php"; // Incluyo la conexión con la base de datos.
$title = "Modificando los Datos del Alumno"; // Título de la página.
include "includes/header.php"; // Incluyo el header
include "includes/modal-index.html"; // Incluyo el diálogo.

if (isset($_POST["id"])) // Si llegan datos por post.
{
    $ok = true; // Uso la variable $ok para verificar que no se repita el teléfono ni el E-mail.
    $id = $_POST["id"]; // Asigno a la variable $id el valor de la sesión id.
    $name = htmlspecialchars($_POST["username"]); // Asigno a variables lo recibido por post.
    $surname = htmlspecialchars($_POST["surname"]);
    $surname2 = htmlspecialchars($_POST["surname2"]);
    $gender = htmlspecialchars($_POST["gender"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $email = htmlspecialchars($_POST["email"]);
    $pass = htmlspecialchars($_POST["pass"]);
    if ($pass != "") // Si se cambió la contraseña
    {
        $hash = password_hash($pass, PASSWORD_DEFAULT); // Asigno a la variable $hash la contraseña recibida encriptada con la función de PHP password_hash.
    }
    $bday = $_POST["bday"];
    $path = $_POST["path"];
    $img = htmlspecialchars($_FILES["profile"]["name"]); // Asigno a la variable $img la imagen que llega por POST.
    $tmp = htmlspecialchars($_FILES["profile"]["tmp_name"]); // Asigno a la variable tmp la ruta temporal del archivo enviado por POST.
    if ($img != "") // Si se sube una imagen, $img será distinto de texto vacio.
    {
        if (!is_dir("alumno/" . $id . "/pic")) // Si no existe la carpeta alumno + ID del alumno + pic.
        {
            mkdir("alumno/" . $id . "/pic", 0777, true); // La creo con permiso de acceso total.
        }
        $path = "alumno/" . $id . "/pic/" . basename($img); // Asigno a $path la ruta a la imagen del alumno.
        move_uploaded_file($tmp, $path); // Mueve la imagen de la carpeta temporal($tmp), a la ruta $path, con el nombre original de la imagen.
    }

    $sql = "SELECT ID, email, phone FROM alumno;"; // Asigno a la variable $sql la consulta de la ID, Teléfono e E-mail de toda la tabla alumno.
    $stmt = $conn->prepare($sql); // Preparo la consulta en la variable $stmt
    $stmt->execute(); // La ejecuto.
    while($row = $stmt->fetch(PDO::FETCH_OBJ)) // Mientras reciba datos, asigno a la variable $row el resultado de la consulta.
    {
        if ($id != $row->ID) // Verifico que la ID del alumno que está modificando sus datos no sea su propia ID en la base de datos.
        {
            if ($row->email == $email || $row->phone == $phone) // Si el email o el teléfono enviados por post están en la tabla, son datos que ya tienen otros alumnos.
            {
                $ok = false; // $ok es false.
            }
        }
    }
    if ($ok) // Si $ok está a true, no hubo coincidencias.
    {
        $sql = "SELECT phone, email FROM alumno WHERE id=$id;"; // Preparo la consulta a la ID del alumno.
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_OBJ); // Asigno el resultado a la variable $row.
        if ($row->email != $email) // Verifico que el E-mail enviado por post es distinto que el de la tabla.
        {
            if ($row->phone != $phone)
            {
                if ($pass != "")
                {
                    $sql = "UPDATE alumno SET name='$name', surname='$surname', surname2='$surname2', gender = '$gender', phone='$phone', email='$email', pass='$hash', bday='$bday', path='$path' WHERE id=$id;"; // Preparo la consulta modificando todo.
                }
                else
                {
                    $sql = "UPDATE alumno SET name='$name', surname='$surname', surname2='$surname2', gender = '$gender', phone='$phone', email='$email', bday='$bday', path='$path' WHERE id=$id;"; // Preparo la consulta modificando todo.
                }
            }
            else
            {
                if ($pass != "")
                {
                    $sql = "UPDATE alumno SET name='$name', surname='$surname', surname2='$surname2', gender = '$gender', email='$email', pass='$hash', bday='$bday', path='$path' WHERE id=$id;"; // Preparo la consulta modificando todo.
                }
                else
                {
                    $sql = "UPDATE alumno SET name='$name', surname='$surname', surname2='$surname2', gender = '$gender', email='$email', bday='$bday', path='$path' WHERE id=$id;"; // Preparo la consulta modificando todo.
                }
            }
        }
        else // Si el E-mail está repetido, el cliente no cambió su E-mail.
        {
            if ($row->phone != $phone)
            {
                if ($pass != "")
                {
                    $sql = "UPDATE alumno SET name='$name', surname='$surname', surname2='$surname2', gender = '$gender', phone='$phone', pass='$hash', bday='$bday', path='$path' WHERE id=$id;"; // Preparo la consulta modificando todo.
                }
                else
                {
                    $sql = "UPDATE alumno SET name='$name', surname='$surname', surname2='$surname2', gender = '$gender', phone='$phone', bday='$bday', path='$path' WHERE id=$id;"; // Preparo la consulta modificando todo, menos la contraseña que no ha cambiado.
                }
            }
            else
            {
                if ($pass != "")
                {
                    $sql = "UPDATE alumno SET name='$name', surname='$surname', surname2='$surname2', gender = '$gender', pass='$hash', bday='$bday', path='$path' WHERE id=$id;"; // Preparo la consulta modificando todo menos los datos repetidos.
                }
                else
                {
                    $sql = "UPDATE alumno SET name='$name', surname='$surname', surname2='$surname2', gender = '$gender', bday='$bday', path='$path' WHERE id=$id;"; // Preparo la consulta modificando todo menos los datos repetidos.
                }
            }
        }

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        if ($stmt->rowCount() > 0) // Ejecuto la consulta y compruebo si se modifico la tupla.
        {
            echo "<script>toast(0, 'Todo ha ido Bien', 'Se han Modificado tus Datos $name, Vuelve a Iniciar Sesión con tus Nuevos Datos.');</script>";
            // Muestro el aviso que todo ha ido bien.
        }
        else // Si hubo algún error.
        {
            echo "<script>toast(1, 'Algo Ha Fallado', 'No se Han Podido Modificar tus Datos $name.');</script>";
            // Muestro error, algo ha fallado
        }
    }
    else
    {
        echo "<script>toast(1, 'Ya Registrado:', 'El E-mail $email o el Teléfono $phone, ya Están Registrados en Este Sitio y Alguno es de otro Alumno. No Puedes Usar Datos de Otro Alumno, si haz Cambiado el Teléfono Hace Poco, Comunícate con la Academia.');</script>"; // Muestro el error, el E-mail o teléfono ya está registrado.
    }
}
include "includes/footer.html";
?>