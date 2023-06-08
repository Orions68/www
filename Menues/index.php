<?php
$title = "Página Principal";
include "includes/header.php";
include "includes/nav.html";
include "includes/nav-mob.html";
include "includes/modal-mode.html";
?>
<section class="container-fluid pt-3">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div id="view1">
            <br><br><br><br>
            <script>
                let cookie = document.cookie;
                if (cookie.length <= 7)
                {
                    toast(0, "Selecciona tu Modo Favorito", "Elige el Modo en el que Prefieres ver este Sitio.<br>Solo Verás este Aviso la primera vez que lo visites, si Deseas Cambiar la Forma de ver el Sitio, puedes cambiarla en el menú Principal");
                }
                console.log("La Cookie mide: " + cookie.length);
                console.log("El contenido es: " + cookie);
            </script>
                <h1>Empezamos Aquí</h1>
                <br>
                <h2>Tamaño H2</h2>
                <br>
                <h3>Tamaño H3</h3>
                <br>
                <h4>Tamaño H4</h4>
                <br>
                <h5>Tamaño H5</h5>
                <br>
                <h6>Tamaño H6</h6>
            </div>
            <div id="view2">
            <br><br><br><br>
                <h1>Segunda Página Aquí</h1>
            </div>
            <div id="view3">
            <br><br><br><br>
                <h1>Última Página Aquí</h1>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</section>
<?php
include "includes/footer.html";
?>