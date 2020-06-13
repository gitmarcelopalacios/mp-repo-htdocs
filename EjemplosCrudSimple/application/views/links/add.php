<form action="<?php echo base_url();?>index.php/Clinks/save" method="POST">
    <h3 class="text-primary mb-3">Links</h3>
    <hr>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Título:</span>
        </div>
        <input type="text" class="form-control" 
        id="texttitulo" name="texttitulo">
    </div>        

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Categorías:</span>
        </div>
        <input type="text" class="form-control" 
        id="textcategorias" name="textcategorias">
    </div>        

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">URL:</span>
        </div>
        <input type="text" class="form-control" 
        id="textlink" name="textlink">
    </div>        

    <hr>
    <div>
        <input class="btn btn-outline-success" title="Guardar" value=' Guardar Link ' type="submit" >
        <a class="btn btn-outline-primary" href="<?php echo base_url(); ?>"><i class="fa fa-home"></i></a> 
    </div>
</form>

