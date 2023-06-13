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
            <div id="view3">
                <br><br><br><br>
                <h3>Calculadora</h3>
                <br><br>
                <input type="number" id="num1" placeholder="numero">&nbsp;&nbsp;
                <input type="number" id="percentage" placeholder="Porcentaje">
                <br><br>
                <input type="number" id="num2" placeholder="numero">
                <br><br>
                <button onclick="Calcula('')">Limpia Entradas</button>
                <br><br><br>
                <button onclick="Calcula('+')">Suma</button>
                <button onclick="Calcula('*')">Multiplica</button>
                <br>
                <button onclick="Calcula('-')">Resta</button>
                <button onclick="Calcula('/')">Divide</button>
                <br><br>
                <button onclick="Calcula('%')">Porcentaje</button>
                <h3 id="result"></h3>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </section>
<?php
include "includes/footer.html";
?>