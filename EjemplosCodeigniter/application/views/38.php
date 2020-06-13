            <h3 class="mt-3 text-primary">30. db->where() personalizado con and e igual automático.</h3>
            <hr>

        <div class="container-fluid">

            <?php 

    ///////////////////////////////////////////////////////////////////////////////////////////////////
                    $idPosterior=44;
                    $country='UK';
                    $this->db->select('*');
                    $this->db->from('customers');
                    // al personalizado se le agregan los comparadores, el igual se asigna automáticamente y el and tambien si hay
                    // mas de un where.
                    $this->db->where('customers.customerID >', $idPosterior);
                    $this->db->where('customers.Country', $country);
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
