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
                <p class="lead">Array de resultados result_array()</p>
            </div>
        </header>

        <div class="container-fluid">

            <?php

                $query = $this->db->query("SELECT id, titulo, cabecera, cuerpo FROM Blog");
                foreach ($query->result_array() as $fila)
                {
                echo $fila['titulo'];
                echo " -> ";
                echo $fila['cabecera'];
                echo " ->";
                echo $fila['cuerpo'];
                echo "<br>";
                }

            ?>
            <p></p>
            <p><a class='btn btn-primary' title='Volver al inicio...' href="<?php echo base_url(); ?>">inicio</a></p>

        </div>


    </body>

    </html>