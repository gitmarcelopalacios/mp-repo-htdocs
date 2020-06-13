<form action="<?php echo base_url();?>index.php/Cfrases/save" method="POST">
    <h3 class="text-primary mb-3">Frases</h3>
    <hr>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Frase:</span>
        </div>
        <input type="text" class="form-control" 
        id="text1" name="text1">
    </div>        

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Autor:</span>
        </div>
        <input type="text" class="form-control" 
        id="text2" name="text2">
    </div>        

    <hr>
    <div>
        <input class="btn btn-outline-success" title="Guardar" value=' Guardar Frase ' type="submit" >
        <a class="btn btn-outline-primary" href="<?php echo base_url(); ?>"><i class="fa fa-home"></i></a> 
    </div>
</form>

