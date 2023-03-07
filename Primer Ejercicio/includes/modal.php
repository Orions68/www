<!-- Modal Button, Diálogo general, muestra distintos mensajes y se queda en el script en el que está. -->
<button id="alerta" type="button" class="btn btn-primary" style="visibility: hidden;" data-bs-toggle="modal" data-bs-target="#alertDialog">Diálogo</button>

<!-- Modal -->
<div class="modal fade" id="alertDialog" tabindex="-1" aria-labelledby="alertDialogLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title" id="alertDialogLabel">Dialogo de Avisos</h4>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="window.open('doit.php?id=<?php echo $id; ?>', '_self')"></button>
      </div>
      <div class="modal-body">
          <h4><span id="title"></span></h4>
          <h5 id="message"></h5>
      </div>
      <div class="modal-footer">
      <button type="button" id="close_dialog" class="btn btn-secondary" data-bs-dismiss="modal" onclick="window.open('doit.php?id=<?php echo $id; ?>', '_self')">Aceptar</button>
      <button type="button" id="close_dialog" class="btn btn-secondary" data-bs-dismiss="modal" onclick="window.open('index.php', '_self')">Cancelar</button>
      </div>
  </div>
  </div>
</div>