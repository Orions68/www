<?php
include "includes/conn.php";
$title = "Primera Base de Datos";
include "includes/header.php";
include "includes/modal-index.html";
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
                        <th>Nombre</th><th>Primer Apellido</th><th>Segundo Apellido</th><th>DNI</th><th>Teléfono</th><th>Teléfono2</th><th>Teléfono3</th><th>E-mail</th>
                        <?php
                        $sql = "SELECT * FROM user";
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();
                        if ($stmt->rowCount() > 0)
                        {
                            while ($row = $stmt->fetch(PDO::FETCH_OBJ))
                            {
                                $id = $row->id;
                                $sql = "SELECT number FROM phone WHERE user_id=$id;";
                                $stmt2 = $conn->prepare($sql);
                                $stmt2->execute();
                                if ($stmt2->rowCount() > 0)
                                {
                                    $i = 0;
                                    while ($phone = $stmt2->fetch(PDO::FETCH_OBJ))
                                    {
                                        $number[$i] = $phone->number;
                                        $i++;
                                    }
                                }
                                else
                                {
                                    $number = [];
                                }
                                echo "<tr><td>$row->name</td>
                                <td>$row->surname</td>
                                <td>$row->surname2</td>
                                <td>$row->dni</td>";
                                if (count($number) > 0)
                                {
                                    for ($i = 0; $i < count($number); $i++)
                                    {
                                        echo "<td>" . $number[$i] . "</td>";
                                    }
                                    if ($i < 3)
                                    {
                                        switch ($i)
                                        {
                                            case 1:
                                                echo "<td></td>";
                                                echo "<td></td>";
                                                break;
                                            default :
                                                echo "<td></td>";
                                        }
                                    }
                                }
                                else
                                {
                                    echo "<td></td>";
                                    echo "<td></td>";
                                    echo "<td></td>";
                                }
                                echo "<td>$row->email</td></tr>";
                            }
                        }
                        ?>
                    </table>
                </div>
                <div id="view2">
                    <br><br><br><br>
                    <div class="row">
                    <div class="col-md-6">
                    <h1>Agregar Usuarios</h1>
                    <br>
                    <form action="signup.php" method="post" onsubmit="return verify()">
                        <label><input type="text" name="username" required> Nombre</label>
                        <br><br>
                        <label><input type="text" name="surname" required> Primer Apelido</label>
                        <br><br>
                        <label><input type="text" name="surname2"> Segundo Apelido</label>
                        <br><br>
                        <label><input id="dni" type="text" name="dni" required> D.N.I.</label>
                        <br><br>
                        <label><input type="text" name="phone" required> Teléfono</label>
                        <br><br>
                        <label><input type="text" name="phone2"> Teléfono-1</label>
                        <br><br>
                        <label><input type="text" name="phone3"> Teléfono-2</label>
                        <br><br>
                        <label><input type="text" name="email" required> E-mail</label>
                        <br><br>
                        <input class="btn btn-primary btn-lg" type="submit" value="Registro a este Usuario">
                    </form>
                    </div>
                    <div class="col-md-6">
                    <h1>Entrada de Usuario</h1>
                        <form action="login.php" method="post">
                            <label><input type="text" name="email"> E-mail</label>
                            <br><br>
                            <label><input type="text" name="dni"> D.N.I.</label>
                            <br><br>
                            <input type="submit" value="A Mi Perfil">
                        </form>
                    </div>
                    </div>
                </div>
                <div id="view3">
                    <br><br><br><br>
                    <div class="row">
                        <div class="col-md-6">
                            <h1>Modificador de Datos de Usuario</h1>
                            <br>
                            <h3>Seleciona el Usuario a Modificar</h3>
                            <br>
                            <form action="modify.php" method="post">
                                <label><select name="id">
                                <option value="">Selecciona un Usuario</option>
                                <?php
                                $sql = "SELECT id, name FROM user;";
                                $stmt = $conn->prepare($sql);
                                $stmt->execute();
                                if ($stmt->rowCount() > 0)
                                {
                                    while ($row = $stmt->fetch(PDO::FETCH_OBJ))
                                    {
                                        echo '<option value="' . $row->id . '">' . $row->name . '</option>';
                                    }
                                }
                                ?>
                                </select> Selecciona un Usuario para Modificar sus Datos</label>
                                <br><br>
                                <input class="btn btn-primary btn-lg" type="submit" value="Modifica los Datos de Este Usaurio">
                            </form>
                        </div>
                        <div class="col-md-6">
                            <h1>Borrar un Usuario</h1>
                            <br>
                            <h3>Seleciona el Usuario a Eliminar</h3>
                            <br>
                            <form action="delete.php" method="post">
                                <label><select name="id">
                                <option value="">Selecciona un Usuario</option>
                                <?php
                                $sql = "SELECT id, name FROM user;";
                                $stmt = $conn->prepare($sql);
                                $stmt->execute();
                                if ($stmt->rowCount() > 0)
                                {
                                    while ($row = $stmt->fetch(PDO::FETCH_OBJ))
                                    {
                                        echo '<option value="' . $row->id . '">' . $row->name . '</option>';
                                    }
                                }
                                ?>
                                </select> Selecciona un Usuario para Eliminar sus Datos</label>
                                <br><br>
                                <input class="btn btn-danger btn-lg" type="submit" value="Elimina los Datos de Este Usaurio">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <div class="col-md-1"></div>
    </div>
</section>
<?php
include "includes/footer.html";
?>