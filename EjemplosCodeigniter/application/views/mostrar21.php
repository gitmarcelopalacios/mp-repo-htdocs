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

    <body class="ml-3">
            <p class="mt-3">affected_rows()</p>
            <hr>

        <div class="container-fluid">

            <?php 
///////////////////////////////////////////////////////////////////////////////////////////////////
            $query = $this->db->query("INSERT INTO mi_tabla (nombre, apellidos, email, fecha) values ('Nicolás','Garcia','nicolasgarcia@iresm.edu.ar', '2020-05-05')");
            //$query = $this->db->query("update mi_tabla set email='ninguno' where id>22");
            echo $this->db->affected_rows();
///////////////////////////////////////////////////////////////////////////////////////////////////
                
            ?>    

            <p></p>
            <p><a class='btn btn-primary' title='Volver al inicio...' href="<?php echo base_url(); ?>">inicio</a></p>

        </div>


    </body>

    </html>