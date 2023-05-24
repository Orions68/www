<?php
include "includes/conn.php";
$title = "Agregando Campos desde Javascript";
include "includes/header.php";
include "includes/nav-pc.html";
include "includes/nav-mob.html";
?>
<section class="container-fluid pt-3">
    <div class="row">
        <div class="col-md-1"></div>
            <div class="col-md-10">
                <div id="view1">
                    <br><br><br><br>
                    <h1>Agregando Campos desde Javascript</h1>
                    <br>
                    <form action="invoice.php" method="post">
                        <?php
                        phpinfo();
                        if (isset($_POST["username"]))
                        {
                            if (!isset($_SESSION["form"]))
                            {
                                $_SESSION["form"] = 1;
                            }
                            else
                            {
                                $_SESSION["form"]++;
                            }
                            $number = $_POST["field"];
                            $name = $_POST["username"];
                            echo '<label><input id="user" type="text" name="username" value="' . $name . '">
                            <br><br><label><input type="text" name=""> Teléfono</label><br><br>';
                        }
                        else
                        {
                            ?>
                            <label><input id="user" type="text" name="username" required> Nombre</label>
                            <?php
                        }
                        ?>
                    <br><br>
                    <buttton class="btn btn-link" type="button" onclick="addfield()">Agrega un campo</button>
                    <br><br><br>
                    <input class="btn btn-primary btn-lg" type="submit" value="Enviar este Usuario">
                </div>
                <div id="view2">
                    <br><br><br><br>
                    <h1>Prueba de Archivo</h1>
                    <button onclick="load();">Carga el Archivo</button>
                    <br>
                </div>
            </div>
        <div class="col-md-1"></div>
    </div>
</section>
<?php
include "includes/footer.html";
?>