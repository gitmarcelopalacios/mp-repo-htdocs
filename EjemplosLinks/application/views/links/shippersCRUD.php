<!-- SHIPPERSCRUD.PHP -->

<!-- APERTURA INSERTO PHP -->
<?php

  // CONTROL DE ACCESO AL SCRIPT
	defined('BASEPATH') OR exit('No direct script access allowed');

// CIERRE INSERTO PHP
?>

<!-- DEFINO TIPO DE DOCUMENTO HTML -->
<!DOCTYPE html>

<!-- DEFINO EL LENGUAJE DEL DOCUMENTO HTML -->
<html lang="ES">

<!-- DEFINO LA APERTURA DEL ENCABEZADO -->
<head>

  <!-- DEFINO EL TITULO DE LA PESTAÑA -->
	<title><?php echo $pageTitle;?></title>

<!-- DEFINO EL CIERRE DEL ENCABEZADO   -->
</head>

<!-- DEFINO LA APERTURA DEL CUERPO DEL DOCUMENTO -->
<body>

  <!-- DEFINO EL TITULO DEL DOCUMENTO-->
  <h3><?php echo $pageTitle;?></h3>

  <!-- // CREO UNA LINEA DIVISORIA -->
  <hr>

  <!-- DEFINO EL ENLACE AL ALTA -->
  <a href="<?php echo base_url(); ?>index.php/controller/shipperAdd"
     title="Agregar un nuevo item."    
     >Agregar</a> |


  <!-- ENLACE A HOME -->
  <a href="<?php echo base_url(); ?>"
     title="Ir a la página de inicio."    
     >Inicio</a>

  <!-- LINEA DIVISORIA -->
  <hr>

  <!-- TABLA DE SHIPPERS -->
  <!-- <table border=1 width="100%"> -->
  <table border=1 >

    <!-- APERTURA DE LA FILA DE ENCABEZADO -->
    <tr>
      
      <!-- DEFINICION DE ITEMS DEL ENCABEZADO -->
      <th>Núm.</th>
      <th>Transportista</th>
      <th>Teléfono</th>
      <th>Opciones</th>
    
    <!-- CIERRE FILA ENCABEZADO -->
    </tr>

    <!-- INSERTO PHP PARA MOSTRAR LAS FILAS DE DATOS DE LA TABLA DESDE EL MODELO -->
    <?php

      // PREGUNTO SI TRAE DATOS EL MODELO
      if($tableReceived){

        // PARA CADA UNA DE LAS FILAtable DE DATOS DEL MODELO
        foreach ($tableReceived as $table) {
        
          // DEFINO LA FILA        
          echo "<tr>";

          // MUESTRO LA PRIMER COLUMNA
          echo "<td align=center>".$table->Column1."</td>";
          
          // MUESTRO LA SEGUNDA COLUMNA
          echo "<td>".$table->Column2."</td>";

          // MUESTRO LA TERCER COLUMNA
          echo "<td>".$table->Column3."</td>";

          // INDICO QUE AQUI COMIENZA LA CUARTA COLUMNA
          echo "<td align=center>";

          // MUESTRO TRES ESPACIOS EN BLANCO
          echo "&nbsp;&nbsp;&nbsp;";

           // MUESTRO EL ENLACE A LA EDICION DE LA FILA
          echo "<a title='Editar Número "
              .$table->Column1." - ".$table->Column2.".".
              " ' href='shipperEdit/"
              .$table->Column1.
              "'>Editar</a> | ";

          // MUESTRO EL ENLACE A LA BAJA DE UNA FILA
          echo "<a title='Borrar Número "
               .$table->Column1." - ".$table->Column2.".".
               " ' href='shipperDelete/"
               .$table->Column1.
               "'>Borrar</a>"; 

          // MUESTRO TRES ESPACIOS EN BLANCO
          echo "&nbsp;&nbsp;&nbsp;";

          // INDICO QUE AQUI TERMINA LA CUARTA COLUMNA
          echo "</td>";
          // INDICO QUE TERMINA LA FILA
          echo "</tr>";
        
        }

      // SI NO HAY ELEMENTOS PARA MOSTRAR
      }else{

        // SI NO TIENE ELEMENTOS PARA MOSTRAR
        // EL ARRAY DEL MODELO

      }

      // FIN INSERTO PHP
      ?>

    <!-- CIERRO TABLA -->
    </table>

  <!-- CIERRO DIVISION -->
  </div>

<!-- CIERRO CUERPO DE LA PAGINA -->
</body>

<!-- CIERRO DEL DOCUMENTO HTML -->
</html>



