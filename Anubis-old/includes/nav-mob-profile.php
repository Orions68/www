<!-- Menú para pantalla de Teléfono -->
<nav class="navbar fixed-top bg-white" id="mobile">
    <div class="col-md-8"> <!-- Columnas con el menú de navegación. -->
        <div class="nav nav-tabs" id="nav-tab" role="tablist" ></div>
            <select class="form-select" id="change" onchange="goThere()">
                <option value="">Selecciona Tu Opcion</option>
                <option value="view1">Fecha</option>
                <option value="view2">Alumno</option>
                <option value="view3">Lista de Alumnos</option>
            </select>
        </div>
    </div>
    <div class="col-md-4 d-flex"> <!-- Columnas con la bienvenida al alumno. -->
        <h6>Te damos la Bienvenida: <span><?php echo $name; ?></h6>
        <img src="<?php echo $path; ?>" alt='Imagen de Perfil' width='64' height='64'>
        <span><button onclick="window.open('endsession', '_self')" class="btn btn-danger btn-sm">Cerrar Sesión</button></span>
        </div>
    </nav>