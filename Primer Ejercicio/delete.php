<?php
include "includes/conn.php";
$title = "Eliminando un Usuario";
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
                    <?php
                    if (isset($_POST["id"]))
                    {
                        $id = $_POST["id"];
                        $sql = "SELECT name FROM user WHERE id=$id";
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();
                        if ($stmt->rowCount() > 0)
                        {
                            $row = $stmt->fetch(PDO::FETCH_OBJ);
                            $name = $row->name;
                            include "includes/modal.php";
                            
                                echo "<script>toast(2, 'Estás Intentando Eliminar un Usuario', 'Estás Seguro que quieres Eliminar el Usuario " . $name . " de la Base de Datos.')</script>";
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