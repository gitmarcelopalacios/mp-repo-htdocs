
            <h3 class="mt-3 text-primary">40. db->where() con array asociativo con operadores propios.</h3>
            <hr>

        <div class="container-fluid">

            <?php 

    ///////////////////////////////////////////////////////////////////////////////////////////////////

                    $id=6;
                    $country='Germany';

                    $array = array('Country =' => $country, 'CustomerID >=' => $id);
                    
                    $this->db->select('*');
                    $this->db->from('customers');
                    $this->db->where($array);
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

