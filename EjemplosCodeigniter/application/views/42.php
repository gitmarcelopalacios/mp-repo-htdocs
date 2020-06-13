<h3 class="mt-3 text-primary">42. db->or_where() where unido por un or.</h3>
<hr>
<div class="container-fluid">
<?php 

    ///////////////////////////////////////////////////////////////////////////////////////////////////

    
    $this->db->select('*');
    $this->db->from('customers');
    $this->db->where('Country', 'Argentina');
    $this->db->or_where('City', 'Berlin');
    $this->db->or_where('City', 'Marseille');
    $this->db->or_where('City', 'Madrid');

    $query = $this->db->get();


    foreach ($query->result() as $fila)
    {
        echo $fila->CustomerID;
        echo ' - ';
        echo $fila->CustomerName;
        echo ' - ';
        echo $fila->City;
        echo ' - ';
        echo $fila->Country;
        echo '<br>';
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////
                
?>    

