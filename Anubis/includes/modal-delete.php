<button id="alerta" type="button" style="visibility: hidden;" data-bs-toggle="modal" data-bs-target="#choose">Confirmación de Borrado</button>
  
  <!-- Modal -->
  <div class="modal fade" id="choose" tabindex="-1" role="dialog" aria-labelledby="chooseLabel" aria-hidden="true" data-bs-keyboard="false" data-bs-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="chooseLabel">Borrando Alumno</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" onclick="window.open('indice#view2', '_self')">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <h4><span id="title"></span></h4>
            <hr>
            <h5 id="message"></h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="window.open('indice#view2', '_self')">Me Arrepiento</button>
          <form action="doit.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" value="Sí, Bórrame de la Base de Datos." class="btn btn-danger">
          </form>
        </div>
      </div>
    </div>
  </div>