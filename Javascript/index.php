<?php
$title = "JavaScript";
include "includes/header.php";
include "includes/nav.html";
?>
    <section class="container-fluid pt-3">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div id="view1">
                    <br><br><br>
                    <h1>JavaScript</h1>
                    <br>
                    <h3>Ejercicio 1</h3>
                    <br><br>
                    <input type="text" id="nueva-tarea" placeholder="Nueva tarea">
                    <button onclick="agregarTarea()">Agregar</button>
                    <br><br>
                    <ul id="lista-tareas"></ul>
                </div>
                <div id="view2">
                    <br><br><br><br><br>
                    <h3>Ejercicio 2</h3>
                    <br><br>
                    <form onsubmit="validarFormulario(event)">
                        <input type="text" id="nombre" placeholder="Nombre">
                        <input type="email" id="email" placeholder="Correo Electrónico">
                        <input type="submit" value="Registrarse">
                    </form>
                    <br>
                    <div id="mensaje-error"></div>
                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </section>
<?php
include "includes/footer.html";
?>