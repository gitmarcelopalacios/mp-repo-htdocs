<?php	defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="ES">
<head><title><?php echo $pageTitle;?></title></head>
<body>
  <h3><?php echo $pageTitle;?></h3>
  <hr>
  <form id="buscar2" method="GET" action="<?=base_url()?>index.php/controller/shippersSearch">
  		<input title="Ingrese aquí el patrón de búsqueda." type="text" id="text_patron_busqueda" 
  		 	name="text_patron_busqueda" size=40 style="width:400px"/>
		<input title="Ejecutar la búsqueda según el patron." type="submit" id="buscar" value="Buscar" />
		<a href="<?php echo base_url(); ?>" title="Ir a la página de inicio." >Inicio</a>
  </form>
  <hr>
  <table border=1 >
    <tr>
      <th>Núm.</th>
      <th>Transportista</th>
      <th>Teléfono</th>
    </tr>
    <?php
	   $filas_filtradas=0;
      if($tableReceived){
        foreach ($tableReceived as $table) {
          echo "<tr>";
          echo "<td align=center>".$table->Column1."</td>";
          echo "<td>".$table->Column2."</td>";
          echo "<td>".$table->Column3."</td>";
          echo "</tr>";
			 $filas_filtradas++; 
        }
			
      }else{
      }
      echo "</table>";
      echo "<p>Cantidad de Filas: ".$filas_filtradas."</p>";
      ?>
  </div>
</body>
</html>



