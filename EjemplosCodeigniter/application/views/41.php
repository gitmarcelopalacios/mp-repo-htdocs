<h3 class="mt-3 text-primary">41. db->where() con string personalizado.</h3>
<hr>
<div class="container-fluid">
<?php 

    ///////////////////////////////////////////////////////////////////////////////////////////////////

    $id=6;
    $country='Germany';

    $string_personalizado = "CustomerID=$id AND country='$country'";
    
    $this->db->select('*');
    $this->db->from('customers');
    $this->db->where($string_personalizado);
    $query = $this->db->get();

    foreach ($query->result() as $fila)
    {
        echo $fila->CustomerID;
        echo '-';
        echo $fila->CustomerName;
        echo '-';
        echo $fila->City;
        echo '<br>';
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////
                
?>    

