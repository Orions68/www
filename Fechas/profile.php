<?php
include "includes/conn.php";
$title = "Perfil del Alumno";
include "includes/header.php";
include "includes/modal-profile.html";

if (isset($_POST['email'])) // Si recibe datos por POST en la variable array $_POST["email"].
{
    $ok = false;
	$email = $_POST['email']; // Asigna a la variable $email el contenido del array $_POST["email"].
	$pass = $_POST['pass']; // Lo mismo con $_POST["pass"].

    $sql = "SELECT ID, email, pass FROM alumno WHERE email='$email';";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    if ($stmt->rowCount() > 0)
    {
        $row = $stmt->fetch(PDO::FETCH_OBJ);
        if (password_verify($pass, $row->pass))
        {
            $_SESSION["id"] = $row->ID; // Asigno a la variable $id el valor de la sesión id.
            $sql = "SELECT * FROM alumno WHERE email='$email';"; // Preparo una consulta por la ID.
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_OBJ); // Asigno el resultado a la variable $row.
            $id = $row->ID;
            $name = $row->name; // Asigno el contenido de $row a variables.
            $surname = $row->surname;
            $surname2 = $row->surname2;
            $gender = $row->gender;
            if ($surname2 == NULL)
            {
                $surname2 = "";
            }
            $phone = $row->phone;
            $path = $row->path;
            $bday = $row->bday;
            $sql = "SELECT date from fecha WHERE ID=$bday;";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_OBJ);
            $date = date('d-m-Y', strtotime($row->date)); // Ojo al formato de fecha.
            include "includes/nav-profile.html";
            echo "<span>Te Damos la Bienvenida $name </span>
            <img src='" . $path . "' alt='Imagen de Perfil' width='100' height='100'>"; // Muestro la bienvenida en el NAV y el nombre del cliente.
            echo "</div></nav>";
        }
    }
}
else
{
    echo "<script>toast(2, 'Ha Habido un Error', 'Has Llegado Aquí por Error.');</script>"; // Error, has llegado por el camino equivocado.
}
    
    // Muestro el formulario con los datos del cliente por si quiere modificar o eliminar su perfil.
    ?>
    </div>
</nav>
<section class="container-fluid pt-3">
    <div class="row">
        <div class="col-md-1" style="width: 2%;"></div>
            <div class="col-md-10">
                <div id="view1">
                <br><br><br><br>
                <div class="row">
                    <div class="col-md-6">
                        <h2>Aquí Podrás Modificar tus Datos.</h2>
                        <br>
                        <h3><span style="color: red; font-size: 1.5rem;">Atención: </span> por razones de seguridad la Contraseña no se muestra, si no quieres cambiarla deja ambas casillas en blanco y se mantendrá la contraseña que tenías.</h3>
                        <br>
                        <form action='modify.php' method='post' enctype='multipart/form-data' onsubmit='return checkpass()'>
                        <input type='hidden' name='id' value='<?php echo $id; ?>'>
                        <label><input type='text' name='username' value='<?php echo $name; ?>' required> Nombre</label>
                        <br><br>
                        <label><input type='text' name='surname' value='<?php echo $surname; ?>' required> Apellido 1</label>
                        <br><br>
                        <label><input type='text' name='surname2' value='<?php echo $surname2; ?>'> Apellido 2</label>
                        <br><br>
                        <?php
                        if ($gender == 0)
                        {
                            echo '<label><input type="radio" name="gender" value="0" checked> Mujer</label>
                            <br><br>
                            <label><input type="radio" name="gender" value="1"> Varón</label>
                            <br><br>';
                        }
                        else
                        {
                            echo '<label><input type="radio" name="gender" value="0"> Mujer</label>
                            <br><br>
                            <label><input type="radio" name="gender" value="1" checked> Varón</label>
                            <br><br>';
                        }
                        ?>
                        <label><input type='text' name='phone' value='<?php echo $phone; ?>' required> Teléfono</label>
                        <br><br>
                        <label><input type='email' name='email' value='<?php echo $email; ?>' required> E-mail</label>
                        <br><br>
                        <label><input id='pass1' type='password' name='pass' onkeypress="showEye(1)"> Contraseña</label>
                        <i id="toggle1" onclick="spy(1)" class="far fa-eye" style="margin-left: -140px; cursor: pointer; visibility: hidden;"></i>
                        <br><br>
                        <label><input id='pass2' type='password' onkeypress="showEye(2)"> Repite Contraseña</label>
                        <i id="toggle2" onclick="spy(2)" class="far fa-eye" style="margin-left: -205px; cursor: pointer; visibility: hidden;"></i>
                        <br><br>
                        <label><input type='text' value='<?php echo $date; ?>' readonly> Fecha de Nacimiento</label>
                        <input type='hidden' name='bday' value='<?php echo $bday; ?>'>
                        <br><br>
                        <label><img src='<?php echo $path; ?>' alt='Tú Imagen de Perfil' width='100' height='100'><input type='file' name='profile'> Sube tu Imagen</label>
                        <input type='hidden' name='path' value='<?php echo $path; ?>'>
                        <br><br>
                        <input type='submit' value='Modificar'>
                        </form>
                    </div>
                    <div class="col-md-1" style="border: 1px solid grey; width: 1%;"></div>
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-6">
                                <h2>O Eliminar tu Perfil</h2>
                                <br><br><br>
                                <form action="delete.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $_SESSION["id"]; ?>">
                                    <input type="submit" value="Elimino Mi Perfil">
                                </form>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Para Usos Posteriores</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="col-md-1" style="width: 2%;"></div>
    </div>
</section>
<?php
include "includes/footer.html";
?>