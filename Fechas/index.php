<?php
include "includes/conn.php";
$stmt = $conn->prepare("SET lc_time_names = 'es_ES'");
$stmt->execute();
$title = "Validar Fecha";
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
                <br><br><br>
                <h1>Ingresa tu Fecha de Nacimiento</h1>
                <br><br>
                <form action="date.php" method="post" onsubmit="return verify()">
                    <label><input id="day" type="number" name="day" min="1" max="31" required> Ingresa el Día</label>
                    <br><br>
                    <label><input id="month" type="number" name="month" min="1" max="12" required> Ingresa el Mes</label>
                    <br><br>
                    <label><input id="year" type="number" name="year" min="0000" max="3000" required> Ingresa el Año</label>
                    <br><br>
                    <div id="extra"></div>
                    <input id="date_verify" class="btn btn-primary btn-lg" type="submit" value="Verifica la Fecha">
                </form>
                <br><br><br>
            <h3 id="result"></h3>
            </div>
            <div id="view2">
                <br><br><br>
                <div class="row">
                    <div class="col-md-6">
                        <h4>Ingresa tus Datos de Alumno y Selecciona tu Fecha de Nacimiento.</h4>
                        <br><br>
                        <form action="pupil.php" method="post" enctype="multipart/form-data" onsubmit="return checkpass()">
                            <label><input type="text" name="pupil" required> Nombre</label>
                            <br><br>
                            <label><input type="text" name="surname" required> Apellido 1</label>
                            <br><br>
                            <label><input type="text" name="surname2"> Apellido 2</label>
                            <br><br>
                            <fildset>
                            <legend>Selecciona el Genero con el que te Identificas</legend>
                            <label><input type="radio" name="gender" value="0" checked> Mujer</label>
                            <br><br>
                            <label><input type="radio" name="gender" value="1"> Varón</label>
                            <br><br>
                            </fieldset>
                            <label><input type="text" name="phone" required> Teléfono</label>
                            <br><br>
                            <label><input type="text" name="email" required> E-mail</label>
                            <br><br>
                            <label><input id="pass1" type="password" name="pass" onkeypress="showEye(1)" required> Contraseña</label>
                            <i onclick="spy(1)" class="far fa-eye" id="toggle1" style="margin-left: -140px; cursor: pointer; visibility: hidden;"></i>
                            <br><br>
                            <label><input id="pass2" type="password" onkeypress="showEye(2)" required> Repite Contraseña</label>
                            <i onclick="spy(2)" class="far fa-eye" id="toggle2" style="margin-left: -205px; cursor: pointer; visibility: hidden;"></i>
                            <br><br>
                            <label><select name="bday" required>
                                <option value="">Selecciona tu Fecha de Nacimiento</option>
                                <?php
                                $sql = "SELECT ID, DATE_FORMAT(date,'%d %M %Y') as date FROM fecha ORDER BY DAY(date), MONTH(date), YEAR(date);";
                                $stmt = $conn->prepare($sql);
                                $stmt->execute();
                                if ($stmt->rowCount() > 0)
                                {
                                    while ($row = $stmt->fetch(PDO::FETCH_OBJ))
                                    {
                                        echo '<option value="' . $row->ID . '">' . $row->date . '</option>';
                                    }
                                }
                                ?>
                                </select> Fecha de Nacimiento</label>
                                <br><br>
                                <label><input type="file" name="profile"> Foto de Perfil<small>(opcional)</small></label>
                                <br><br>
                                <input type="submit" value="Agrégame a la Base de Datos">
                        </form>
                    </div>
                    <div class="col-md-6">
                        <h4>Escribe tus Credenciales Para Entrar en el Sistema</h4>
                        <br><br>
                        <form action="profile.php" method="post">
                            <label><input type="text" name="email" required> E-mail</label>
                            <br><br>
                            <label><input id="pass3" type="password" name="pass" onkeypress="showEye(3)" required> Contraseña</label>
                            <i onclick="spy(3)" class="far fa-eye" id="toggle3" style="margin-left: -140px; cursor: pointer; visibility: hidden;"></i>
                            <br><br>
                            <input type="submit" value="Login">
                        </form>
                        <a href="recover.php"><small>Olvidaste tu Contraseña</small></a>
                    </div>
                </div>
            </div>
            <div id="view3">
                <br><br><br>
                <h1>Lista de Todos los Alumnos Registrados</h1>
                <br><br>
                <table><tr>
                    <th>Nombre</th><th>Apellido 1</th><th>Apellido 2</th><th>Teléfono</th><th>E-mail</th><th>Día</th><th>Fecha de Nacimiento</th></tr>
                <?php
                $sql = "SELECT *, DATE_FORMAT(date,'%d %M %Y') as date FROM alumno a JOIN fecha f ON a.bday=f.ID;";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                if ($stmt->rowCount() > 0)
                {
                    while ($row = $stmt->fetch(PDO::FETCH_OBJ))
                    {
                        $name = $row->name;
                        echo '<tr><td>' . $name . '</td>';
                        $surname = $row->surname;
                        echo '<td>' . $surname . '</td>';
                        if ($row->surname2 != NULL)
                        {
                            $surname2 = $row->surname2;
                        }
                        else
                        {
                            $surname2 = "";
                        }
                        echo '<td>' . $surname2 . '</td>';
                        $phone = $row->phone;
                        echo '<td><a href="https://wa.me/' . $phone . '" target="_blank">' . $phone . '</a></td>';
                        $email = $row->email;
                        echo '<td><a href="mailto:' . $email . '">' . $email . '</a></td>';
                        $day = $row->day_name;
                        echo '<td>' . $day . '</td>';
                        $date = $row->date;
                        echo '<td>' . $date . '</td></tr>';
                    }
                }
                ?>
                </table>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</section>
<?php
include "includes/footer.html";
?>