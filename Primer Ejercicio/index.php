<?php
include "includes/conn.php";
$title = "Primera Base de Datos";
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
                    <h1>Ver Lista de Usuarios</h1>
                    <br>
                    <table>
                        <th>Nombre</th><th>Apellidos</th><th>DNI</th><th>Teléfono</th><th>E-mail</th>
                        <?php
                        $sql = "SELECT * FROM users";
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();
                        if ($stmt->rowCount() > 0)
                        {
                            while ($row = $stmt->fetch(PDO::FETCH_OBJ))
                            {
                                echo "<tr><td>$row->name</td>
                                <td>$row->surname</td>
                                <td>$row->dni</td>
                                <td>$row->phone</td>
                                <td>$row->email</td></tr>";
                            }
                        }
                        ?>
                    </table>
                </div>
                <div id="view2">
                    <br><br><br><br>
                    <h1>Agregar Usuarios</h1>
                    <br>
                    <form action="signup.php" method="post" onsubmit="return verify()">
                        <label><input type="text" name="username" required> Nombre</label>
                        <br><br>
                        <label><input type="text" name="surname" required> Apelidos</label>
                        <br><br>
                        <label><input id="dni" type="text" name="dni" required> D.N.I.</label>
                        <br><br>
                        <label><input type="text" name="phone" required> Teléfono</label>
                        <br><br>
                        <label><input type="text" name="email" required> E-mail</label>
                        <br><br>
                        <input class="btn btn-primary btn-lg" type="submit" value="Registro a este Usuario">
                    </form>
                </div>
            </div>
        <div class="col-md-1"></div>
    </div>
</section>
<?php
include "includes/footer.html";
?>