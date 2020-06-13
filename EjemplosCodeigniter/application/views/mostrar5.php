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
			<p class="lead">Consulta estándar con resultado único (versión array)</p>
		</div>
	</header>
	
	
	<main class="container">
		
            <?php
            
                $nombre="Julian";
                $apellidos="Barrientos";
                $email="mj@uk.com";
                $fecha= date("Y-m-d");

                $sql = "INSERT INTO 
                mi_tabla (nombre, apellidos, email, fecha) 
                VALUES ("
                .$this->db->escape($nombre).", "
                .$this->db->escape($apellidos).", "
                .$this->db->escape($email).", "
                .$this->db->escape($fecha).")";
                
                $this->db->query($sql);
                
 			?>
 
	
            <div class="alert alert-primary" role="alert">
                Filas Insertadas:
                <h4 class="alert-heading"><?php echo $this->db->affected_rows(); ?></h4>
                
            </div>			

            <p><a class='btn btn-primary' title='Volver al inicio...' href="<?php echo base_url(); ?>">inicio</a></p>


    </main>
	
</body>
</html>





   
      
      
