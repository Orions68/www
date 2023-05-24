<?php
include "includes/conn.php"; // Incluyo el script de conexión con la base de datos.
$title = "Almacenar Fecha"; // Título de la página.
include "includes/header.php"; // Incluyo el header.
include "includes/modal-index.html"; // Incluyo el diálogo para mostrar mensajes.
include "includes/nav-index.html"; // Incluyo el menú para ordenador.
include "includes/nav-mob-index.html"; // Incluyo en menú para movil.
?>
<section class="container-fluid pt-3">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div id="view1">
                <br><br>
                <?php
                if (isset($_POST["day"])) // Si recibo datos por POST, day estará disponible.
                {
                    $day = $_POST["day"]; // Asigno a la variable $day el contenido del POST day.
                    $month = $_POST["month"];
                    $year = $_POST["year"];
                    $day_name = $_POST["day_name"];
                    $month_name = $_POST["month_name"];
                    $date_mysql = $year . "-" . $month . "-" . $day;
                    $date_latin = $day_name . " " . $day . " de " . $month_name . " de " . $year;
                    echo "La Fecha es: " . $date_latin; // Muestro la fecha en pantalla.
                    $sql = "INSERT INTO fecha VALUES (:ID, :day_name, :day, :month_name, :year, :date);"; // Asigno a $sql la consulta a la base de datos.
                    $stmt = $conn->prepare($sql); // Preparo la conexión con la consulta.
                    try // Intento la conexión.
                    {
                        $stmt->execute(array(':ID' => NULL, ':day_name' => $day_name, ':day' => $day, ':month_name' => $month_name, ':year' => $year, ':date' => $date_mysql)); // La ejecuto.
                        echo '<script>toast(0, "La Fecha: ' . $date_latin . '", "Se Ha Almacenado Correctamente, Usa el formulario para Registrar tus Datos.");</script>'; // Muestro el mensaje que todo ha ido bien.
                    }
                    catch(EXCEPTION $e) // Si se produce un error.
                    {
                        echo '<script>toast(1, "Fecha ya Registrada", "La Fecha ya Estaba Registrada: ' . $e->getMessage() . '.");</script>'; // Muestro el mensaje de error.
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