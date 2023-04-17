<?php
include "includes/conn.php";

if (isset($_POST["username"]))
{
    $ok = false;
    $user = $_POST["username"];
    $surname1 = $_POST["surname"];
    $surname2 = $_POST["surname2"];
    if ($surname2 == "")
    {
        $surname2 = NULL;
    }
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $bday = $_POST["bday"];
    $pass = $_POST["pass"];
    $encrypted = password_hash($pass, PASSWORD_DEFAULT);
    $hash = hash("crc32", $email, false);
    $path = "";
    $img = htmlspecialchars($_FILES["profile"]["name"]);
    $tmp = htmlspecialchars($_FILES["profile"]["tmp_name"]);
    $sql = "SELECT phone, email FROM user WHERE phone='$phone' OR email='$email'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    if ($stmt->rowCount() > 0)
    {
        $ok = false;
    }
    else
    {
        $ok = true;
    }
}
if ($ok)
{
    $title = "Registro de Usuario";
    include "includes/header.php";

    $sql = "INSERT INTO user VALUES(:id, :name, :surname, :surname2, :phone, :email, :pass, :bday, :hash, :path, :active)";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array(':id' => NULL, ':name' => $user, ':surname' => $surname1, ':surname2' => $surname2, ':phone' => $phone, ':email' => $email, ':pass' => $encrypted, ':bday' => $bday, ':hash' => $hash, ':path' => $path, ':active' => false));
    // $sql = "SELECT id FROM user ORDER BY id DESC LIMIT 1;";
    // $stmt = $conn->prepare($sql);
    // $stmt->execute();
    // $row = $stmt->fetch(PDO::FETCH_OBJ);
    // $id = $row->id;
    $id = $conn->lastInsertId(); // Asigno a la variable $id la última id guardada en la tabla.

    $subject = "Por Favor Contactame en Esta Dirección";
    $message = "<h3>Gracias por registrarte</h3><p>Por favor haz click en el botón Activar mi cuenta para empezar a subir tus fotos.</p><a href='http://" . $_SERVER['SERVER_NAME'] . "/Login/activate.php/" . $hash . "/" . $id . "'><div style='background-color:aquamarine; border:thin; width:120px; height:60px; text-align:center;'>Activar mi cuenta</div></a><br /><br /><small>Copyright © 2021 César Matelat <a href='mailto:matelat@gmail.com'>matelat@gmail.com</a></small>";
    $server_email = "matelat@gmail.com";
    $headers  = "From: $server_email" . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion(). "\r\n";
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
    if(mail($email, $subject, $message, $headers))
    {
        echo 'Se ha enviado un mensaje a tu cuenta de E-mail.';
        chdir ("users");
        if ($img != "")
        {
            if (!file_exists($id))
            {
                mkdir($id . "/pic", 0777, true);
            }
            $path = $id . "/pic/" . basename($img);
            move_uploaded_file($tmp, $path);
            $stmt = $conn->prepare("UPDATE user SET path='$path' WHERE id=$id;"); // Preparo una consulta para Actualizar la tabla.
            $stmt->execute(); // La Ejecuto.
        }
    }
    else
    {
        echo "Error al enviar el mensaje si vuelves a intentarlo y vuelve a dar error, por favor escribe a matelat@gmail.com";
    }
    echo "<script>if (!alert('Ya estás dado de alta, consulta tu E-mail para confirmar tu inscripción.')) window.location = 'index.php'</script>";
    include "includes/footer.html";
}
else
{
    echo "<script>if (!alert('Tus Datos ya Están Registrados en este Sitio, Por Favor Accede con tu Datos en la Página de Login. Si has Olvidado la Contraseña Puedes Recuperarla Desde la Página de Login.')) window.location = 'index.php'</script>";
}
?>