<?php
include "includes/conn.php";
$title = "Usuario Eliminado";
include "includes/header.php";
include "includes/nav-pc.html";
include "includes/nav-mob.html";
include "includes/modal-index.html";
?>
<section class="container-fluid pt-3">
    <div class="row">
        <div class="col-md-1"></div>
            <div class="col-md-10">
                <div id="view1">
                    <br><br><br><br>
                </div>
            </div>
        <div class="col-md-1"></div>
    </div>
</section>
<?php
if (isset($_REQUEST["id"]))
{
    $id = $_REQUEST["id"];
    $sql = "DELETE FROM user WHERE id=$id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo "<script>toast(0, 'Usuario Eliminado', 'Se Ha Eliminado el Usuario Correctamente.')</script>";
}
include "includes/footer.html";
?>