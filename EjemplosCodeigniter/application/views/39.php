
            <h3 class="mt-3 text-primary">39. db->where() con array asociativo.</h3>
            <hr>

        <div class="container-fluid">

            <?php 

    ///////////////////////////////////////////////////////////////////////////////////////////////////

                    $id=9;
                    $country='France';

                    $array = array('customerId' => $id, 'Country' => $country);
                    
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
                     echo '-';
                     echo $fila->Country;
                     echo '<br>';
                    }
    ///////////////////////////////////////////////////////////////////////////////////////////////////
                
            ?>    

