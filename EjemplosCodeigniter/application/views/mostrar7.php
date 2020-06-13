<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ci3as</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

	<header class="container" style="padding-top:10px;">
		<div class="jumbotron">
			<p class="lead">Insertar con Query Builder</p>
		</div>
	</header>
	
	
	<main class="container">
		
            <?php

            $nombre="Celeste";
            $apellidos="Carballo";
            $email="cc@ar.com";
            $fecha= date("Y-m-d");
            
            $datos = array(
                'nombre' => $nombre,
                'apellidos' => $apellidos,
                'email' => $email,
                'fecha' => $fecha
               );

               // Produce este efecto: 
               // INSERT INTO mi_tabla ( nombre, apellidos,fecha) 
               // VALUES ('{$nombre}',
               // '{$apellidos}', '{$fecha}')
               // no olvides curdate() es la fecha de hoy en mysql
               
               $this->db->insert('mi_tabla', $datos); 

               ?>
 
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Señor Usuario:</strong> la fila fué insertada en la tabla.
                </div>               
                <p><a class='btn btn-primary' title='Volver al inicio...' href="<?php echo base_url(); ?>">inicio</a></p>
                               
    </main>
	
</body>
</html>





   
      
      
