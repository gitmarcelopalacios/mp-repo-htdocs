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
            <p class="mt-3">Ejemplos de row() Una sola fila</p>
            <hr>

        <div class="container-fluid">

            <?php

                $query = $this->db->query("SELECT id, titulo, cabecera, cuerpo FROM Blog WHERE blog.id=2");
                $fila = $query->row();
                if (isset($fila))
                {
                 echo $fila->titulo."<br>";
                 echo $fila->cabecera."<br>";
                 echo $fila->cuerpo."<br>";
                }
                



            ?>
            <p></p>
            <p><a class='btn btn-primary' title='Volver al inicio...' href="<?php echo base_url(); ?>">inicio</a></p>

        </div>


    </body>

    </html>