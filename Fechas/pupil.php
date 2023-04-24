<?php
include "includes/conn.php";
$title = "Almacenar Fecha";
include "includes/header.php";
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
                if (isset($_POST["pupil"]))
                {
                    $name = $_POST["pupil"];
                    $surname = $_POST["surname"];
                    $surname2 = $_POST["surname2"];
                    if ($surname2 == "")
                    {
                        $surname2 = NULL;
                    }
                    $gender = $_POST["gender"];
                    $phone = $_POST["phone"];
                    $email = $_POST["email"];
                    $pass = $_POST["pass"];
                    $encrypted = password_hash($pass, PASSWORD_DEFAULT);
                    $bday = $_POST["bday"];
                    $path = "";
                    $img = htmlspecialchars($_FILES["profile"]["name"]);
                    $tmp = htmlspecialchars($_FILES["profile"]["tmp_name"]);
                    $sql = "INSERT INTO alumno VALUES(:ID, :name, :surname, :surname2, :gender, :phone, :email, :pass, :bday, :path);";
                    $stmt = $conn->prepare($sql);
                    try
                    {
                        $stmt->execute(array(':ID' => NULL, ':name' => $name, ':surname' => $surname, ':surname2' => $surname2, ':gender' => $gender, ':phone' => $phone, ':email' => $email, ':pass' => $encrypted, ':bday' => $bday, ':path' => $path));
                        $id = $conn->lastInsertId(); // Asigno a la variable $id la última id guardada en la tabla.
                        if ($img != "") // Si se sube una imagen.
                        {
                            chdir ("alumno");
                            if (!file_exists($id))
                            {
                                mkdir($id . "/pic", 0777, true);
                            }
                            $path = "alumno". $id . "/pic/" . basename($img); // Ruta a la imagen del alumno.
                            move_uploaded_file($tmp, $path); // Mueve la imagen de la carpeta temporal a la ruta $path, con el nombre asignado en la ruta.
                        }
                        else // Si no
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
                        $stmt = $conn->prepare("UPDATE alumno SET path='$path' WHERE id=$id;"); // Preparo una consulta para Actualizar la tabla.
                        $stmt->execute(); // La Ejecuto.
                        echo '<script>toast(0, "Datos del Alumno: ' . $name . '", "Almacenados Correctamente, Ya Puedes Loguearte en la App y Modificar o Eliminar tu Perfil. Gracias.");</script>';
                    }
                    catch (EXCEPTION $e)
                    {
                        echo '<script>toast(1, "Datos Repetidos", "Tus Datos Ya Estaban en la Base de Datos: ' . $e->getMessage() . '");</script>';
                    }
                }
                ?>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</section>
<?php
include "includes/footer.html";
?>