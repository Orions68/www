<?php
include "includes/conn.php";
include "includes/modal.html";
?>
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> <!-- Script de Bootstrap. -->
<?php
if (isset($_POST["id"]))
{
	if (!isset($_POST["price"]))
	{
		$id = $_POST['id'];
		$service = $_POST['service'];
		$stmt = $conn->prepare("DELETE FROM services WHERE id='$id'");
		$stmt->execute();
		echo "<script>toast(2, 'Servicio Quitado:', 'El Servicio " . $service . " ha Sido Quitado Correctamente.');</script>";
	}
	else
	{
		$service = $_POST['service'];
		$price = $_POST['price'];
		$id = $_POST['id'];
		$stmt = $conn->prepare("UPDATE services SET service='$service', price='$price' WHERE id='$id'");
		$stmt->execute();
		echo "<script>toast(0, 'Todo Ha Ido Bien:', 'Servicio : " . $service . " Modificado correctamente.');</script>";
	}
}
$title = "Modificar/Eliminar Servicio";
include "includes/header.php";
?>
<img alt="logo" src="img/logo.jpg" height="300" width="100%"/>
<br>
<section class="container-fluid pt-3">
    <div class="row">
        <div class="col-md-1"></div>
            <div class="col-md-10">
                <div id="view1">
                    <br><br>
					<h1>Menú Para Modificar o Eliminar los Servicios.</h1>
					<?php
					$stmt = $conn->prepare('SELECT * FROM services');
					$stmt->execute();
					while($row = $stmt->fetch(PDO::FETCH_OBJ))
					{
						echo '<br>';
						echo '<div style="border:4px solid blue;">';
						echo '<form action="" method="post">';
						echo '<input type="hidden" name="id" value="' . $row->id . '">';
						echo '<label><input type="text" name="service" value="' . $row->service .'"> Servicio</label>';
						echo '<br><br>';
						echo '<label><input type="text" name="price" value="' . $row->price .'"> Precio</label>';
						echo '<br><br>';
						echo '<input type="submit" value="Modificar" style="width:160px; height:60px;" class="btn btn-success">';
						echo '</form>';
						echo '<form action="" method="post">';
						echo '<input type="hidden" name="id" value="' . $row->id . '">';
						echo '<input type="hidden" name="service" value="' . $row->service . '">';
						echo '<br><br>';
						echo '<input type="submit" value="Borrar Servicio." style="width:160px; height:60px;" class="btn btn-danger">';
						echo '</form>';
						echo '</div>';
					}
					?>
					<br><br>
					<input type="button" value="Cierra esta Ventana" onclick="window.close()">
				</div>
            </div>
        <div class="col-md-1"></div>
    </div>
</section>
</body>

</html>