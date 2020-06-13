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
			<p class="lead">Consultas Enlazadas II</p>
		</div>
	</header>
	
	
	<main class="container">
        
    
            <?php
               $sql = "SELECT * FROM alguna_tabla WHERE id IN ? AND estado = ? AND autor = ?";
                $sql = $this->db->query($sql, array(array(3, 6, 7), 'difunto', 'Kafka'));


                foreach ($sql->result() as $fila)
                {
				 echo $fila->id;
				 echo ' , ';
                 echo $fila->estado;
				 echo ' , ';
                 echo $fila->autor;
                 echo "<br>";
                }

			?>
			
			<p></p>
			<p><a class='btn btn-primary' title='Volver al inicio...' href="<?php echo base_url(); ?>">inicio</a></p>
                                
    </main>
	
</body>
</html>





   
      
      
