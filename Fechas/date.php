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
                if (isset($_POST["day"]))
                {
                    $day = $_POST["day"];
                    $month = $_POST["month"];
                    $year = $_POST["year"];
                    $day_name = $_POST["day_name"];
                    $month_name = $_POST["month_name"];
                    $date = date("Y-m-d", strtotime($year . "-" . $month . "-" . $day));
                    echo "La Fecha es: " . $day_name . " " . $day . " de " . $month_name . " de ". $year;
                    $sql = "INSERT INTO fecha VALUES (:ID, :day_name, :day, :month_name, :year, :date);";
                    $stmt = $conn->prepare($sql);
                    try
                    {
                        $stmt->execute(array(':ID' => NULL, ':day_name' => $day_name, ':day' => $day, ':month_name' => $month_name, ':year' => $year, ':date' => $date));
                        echo '<script>toast(0, "La Fecha: ' . $date . '", "Se Ha Almacenado Correctamente, Ahora ve a Alumno en el Menú y Registra tus Datos.");</script>';
                    }
                    catch(EXCEPTION $e)
                    {
                        echo '<script>toast(1, "Fecha ya Registrada", "La Fecha ya Estaba Registrada: ' . $e->getMessage() . ' Ve a Alumno en el Menú y Registra tus Datos.");</script>';
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