<nav class="navbar fixed-top bg-white">
    <div class="col-md-6"> <!-- Columnas con el menú de navegación. -->
      <div class="nav nav-tabs" id="nav-tab" role="tablist" >
          <a class="nav-link" aria-current="page" href="index.php#view1" aria-selected="false" role="tab" aria-controls="nav-contact">Inicio</a></li>
          <a class="nav-link" aria-current="page" href="index.php#view2" aria-selected="false" role="tab" aria-controls="nav-contact">Lista de Precios</a></li>
          <a class="nav-link" aria-current="page" href="login" aria-selected="false" role="tab" aria-controls="nav-contact">Perfil de Cliente</a></li>
          <a class="nav-link" aria-current="page" href="contact" target="_blank" aria-selected="false" role="tab" aria-controls="nav-contact">Contacto</a>
        </div>
        </div>
        <div class="col-md-3">
        </div>
      <div class="col-md-3 nav-tabs">
        <h3>Te damos la Bienvenida: </h3><span><?php echo $_SESSION["name"]; ?></span>
        <button onclick="window.open('endsession', '_self')" class="btn btn-danger">Cerrar Sesión</button>
      </div>
  </nav>
  <!-- NAV/Menú con el carro de la compra cuando no está logueado un espectador. -->