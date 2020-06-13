  <?php foreach ($rowEdit as $rowDisplay) { ?>
  <form action="<?php echo base_url();?>index.php/Cpersonas/update/"
    method="POST">
    <h3 class="text-primary mb-3"><?php echo $rowDisplay->nombres;?></h3>
    <hr>
      <input type="hidden" name="textId" id_textid value="<?php echo $rowDisplay->id; ?>">
      <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Apellido(s), Nombre(s)</span>
            </div>
            <input type="text" class="form-control" 
            id="textNombres" name="textNombres" value="<?php echo $rowDisplay->nombres; ?>">
        </div>        
        <hr>
        <div>
            <input class="btn btn-outline-success" title="Guardar" type="submit" value="Guardar">
            <a class="btn btn-outline-warning" 
            href="<?php echo base_url(); ?>index.php/Cpersonas/crud"
            title="Cancelar" type="submit">Cancelar</a>
        </div>
    </form>
  <?php }  ?>

