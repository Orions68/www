<?php
include "includes/conn.php"; // Incluyo la conexión con la base de datos.
$title = "Almacena el Alumno"; // Título del a página.
include "includes/header.php"; // Incluyo el header.
include "includes/modal-index.html";
include "includes/nav-index.html";
include "includes/nav-mob-index.html";
?>
<section class="container-fluid pt-3">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div id="view1">
                <br><br>
                <?php
                if (isset($_POST["pupil"])) // Si se reciben datos por POST, $_POST["pupil"] estará disponible.
                {
                    $name = htmlspecialchars($_POST["pupil"]); // Asigno a la variable $name el contenido del POST pupil.
                    $surname = htmlspecialchars($_POST["surname"]); // Asigno a la variable $surname el contenido del POST surname.
                    $surname2 = htmlspecialchars($_POST["surname2"]);
                    if ($surname2 == "") // Si $surname2 está vacio.
                    {
                        $surname2 = NULL; // $surname2 es NULL.
                    }
                    $gender = htmlspecialchars($_POST["gender"]);
                    $phone = htmlspecialchars($_POST["phone"]);
                    $email = htmlspecialchars($_POST["email"]);
                    $pass = htmlspecialchars($_POST["pass"]);
                    $encrypted = password_hash($pass, PASSWORD_DEFAULT); // Encripto la contraseña en $pass con la función password_hash de PHP y la asigno a la variable $encrypted.
                    $bday = htmlspecialchars($_POST["bday"]);
                    $path = ""; // Asigno a la variable $path texto vacio.
                    $img = htmlspecialchars($_FILES["profile"]["name"]); // Asigno a la variable $img la imagen que llega por POST.
                    $tmp = htmlspecialchars($_FILES["profile"]["tmp_name"]); // Asigno a la variable tmp la ruta temporal del archivo enviado por POST.
                    $sql = "INSERT INTO alumno VALUES(:ID, :name, :surname, :surname2, :gender, :phone, :email, :pass, :bday, :path);"; // Asigno la consulta MySQL a la variable $sql.
                    $stmt = $conn->prepare($sql); // Asigno a la variable $stmt la preparación de la consulta a la conexión con la base de datos.
                    try // Intento la consulta.
                    {
                        $stmt->execute(array(':ID' => NULL, ':name' => $name, ':surname' => $surname, ':surname2' => $surname2, ':gender' => $gender, ':phone' => $phone, ':email' => $email, ':pass' => $encrypted, ':bday' => $bday, ':path' => $path)); // Ejecuto la consulta, en este caso es un INSERT en la base de datos.
                        $id = $conn->lastInsertId(); // Asigno a la variable $id la última id guardada en la tabla.
                        if ($img != "") // Si se sube una imagen, $img será distinto de texto vacio.
                        {
                            if (!is_dir("alumno/" . $id . "/pic")) // Si no existe la carpeta alumno + ID del alumno + pic.
                            {
                                mkdir("alumno/" . $id . "/pic", 0777, true); // La creo con permiso de acceso total.
                            }
                            $path = "alumno/" . $id . "/pic/" . basename($img); // Asigno a $path la ruta a la imagen del alumno.
                            move_uploaded_file($tmp, $path); // Mueve la imagen de la carpeta temporal($tmp), a la ruta $path, con el nombre original de la imagen.
                        }
                        else // Si no, no se sube una imagen
                        {
                            if ($gender == 0) // Si el genero es femenino.
                            {
                                $path = "img/female.jpg"; // Imagen de mujer.
                            }
                            else // Si no
                            {
                                $path = "img/male.jpg"; // Imagen de varón.
                            }
                        }
                        $stmt = $conn->prepare("UPDATE alumno SET path='$path' WHERE id=$id;"); // Preparo una consulta para Actualizar la tabla con la ruta a la imagen de perfil.
                        $stmt->execute(); // La Ejecuto.
                        echo '<script>toast(0, "Hola: ' . $name . '", "Tus Datos se han Almacenado Correctamente, Ya Puedes Loguearte en la App y Modificar o Eliminar tu Perfil. Gracias.");</script>'; // Muestro el mensaje que todo ha ido bien.
                    }
                    catch (EXCEPTION $e) // En caso de error
                    {
                        echo '<script>toast(1, "Datos Repetidos", "Tus Datos Ya Estaban en la Base de Datos: ' . $e->getMessage() . '");</script>'; // Muestro un mensaje con el error.
                    }
                }
                ?>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</section>
<?php
include "includes/footer.html"; // Incluyo el footer.
?>