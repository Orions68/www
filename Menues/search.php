<?php
$title = "Resultados de la Busqueda";
include "includes/header.php";
include "includes/nav.html";
include "includes/nav-mob.html";
include "includes/modal-mode.html";

if (isset($_POST["search"]))
{
    $search = $_POST["search"];
}
?>
<section class="container-fluid pt-3">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div id="view1">
            <br><br><br><br>
                <h1>Resultados de la Busqueda</h1>
                <br>
                <?php echo "<h3>" . $search . "</h3>"; ?>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</section>
<?php
include "includes/footer.html";
?>