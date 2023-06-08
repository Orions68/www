<nav class="navbar fixed-top bg-white" id="pc">
  <div class="col-md-8"> <!-- Columnas con el menú de navegación. -->
    <div class="nav nav-tabs" id="nav-tab" role="tablist" >
        <a class="nav-link" aria-current="page" href="inicio#view1" aria-selected="false" role="tab" aria-controls="nav-contact">Fecha</a></li>
        <a class="nav-link" aria-current="page" href="inicio#view2" aria-selected="false" role="tab" aria-controls="nav-contact">Alumno</a></li>
        <a class="nav-link" aria-current="page" href="inicio#view3" aria-selected="false" role="tab" aria-controls="nav-contact">Lista de Alumnos</a></li>
    </div>
  </div>
    <div class="col-md-4 d-flex"> <!-- Columnas con la bienvenida al alumno. -->
    <h5>Te damos la Bienvenida: <?php echo $name; ?></h5>
        <img src="<?php echo $path; ?>" alt='Imagen de Perfil' width='100' height='100'>
        <span><button onclick="window.open('endsession', '_self')" class="btn btn-danger btn-sm">Cerrar Sesión</button></span>
    </div>
</nav>