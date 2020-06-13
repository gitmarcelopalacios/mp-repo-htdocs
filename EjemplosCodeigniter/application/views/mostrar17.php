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
            <p class="mt-3">Ejemplos de unbuffered_row() Una sola fila</p>
            <hr>

        <div class="container-fluid">

            <?php 
///////////////////////////////////////////////////////////////////////////////////////////////////

                $query = $this->db->query("SELECT EmployeeID, LastName, FirstName FROM Employees WHERE employees.EmployeeID=7");
                while($fila = $query->unbuffered_row())
                {
                    echo $fila->EmployeeID."<br>";
                    echo $fila->LastName."<br>";
                    echo $fila->FirstName."<br>";
                    }
///////////////////////////////////////////////////////////////////////////////////////////////////
                
            ?>    

            <p></p>
            <p><a class='btn btn-primary' title='Volver al inicio...' href="<?php echo base_url(); ?>">inicio</a></p>

        </div>


    </body>

    </html>