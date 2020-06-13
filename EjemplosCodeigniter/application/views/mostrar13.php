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
                <p class="lead">Array de resultados result() pasando string de clase</p>
            </div>
        </header>

        <div class="container">

            <?php

            function imprima($que){
                echo $que;
            }

            function consultar($nombre_objeto, $instruccion_sql){
                $query = $nombre_objeto->db->query($instruccion_sql);
                return $query;
            }

            $datos_obtenidos=consultar($this,"SELECT * FROM alguna_tabla");

            foreach ($datos_obtenidos->result() as $alguna_tabla) {
                imprima($alguna_tabla->estado);
                imprima(' * ');
                imprima($alguna_tabla->autor);
                imprima('<br>');
            }

            ?>

            <p></p>
            <p><a class='btn btn-primary' title='Volver al inicio...' href="<?php echo base_url(); ?>">inicio</a></p>

        </div>


    </body>

    </html>