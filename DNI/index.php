<?php
$title = "Averigua la Letra del DNI";
include "header.php";
include "modal-index.html";
include "nav-pc.html";
include "nav-mob.html";
?>
<section class="container-fluid pt-3">
    <div class="row">
        <div class="col-md-1"></div>
            <div class="col-md-10">
                <div id="view1">
                    <br><br><br><br>
                    <h1>Ver Letra de Cualquier D.N.I.</h1>
                    <br>
                    <h3>Ingresa el Número de D.N.I. del que Quieres ver la Letra</h3>
                    <br>
                    <form action="index.php" method="post">
                        <label><input type="text" name="dni"> Número de D.N.I.</label>
                        <br><br>
                        <input type="submit" value="Ver Letra">
                    </form>
                </div>
                <div id="view2">
                    <br><br><br><br>
                    <h1>Resultado</h1>
                    <br>
                    <?php
                    if (isset($_POST["dni"]))
                    {
                        $dni = $_POST["dni"];
                        $number = $dni;

                        $dni = $dni % 23;
                        $letras = 'TRWAGMYFPDXBNJZSQVHLCKET';
                        $letra = substr($letras, $dni, 1);
                        echo "<h1>Al D.N.I. Nº: $number, Le Corresponde la Letra: $letra</h1>
                        <script>const element = document.getElementById('view2')
                        element.scrollIntoView();</script>";
                    }
                    else
                    {
                        echo "<h3>Esperando Datos.</h3>";
                    }
                    ?>
                </div>
            </div>
        <div class="col-md-1"></div>
    </div>
</section>
<?php
include "footer.html";
?>