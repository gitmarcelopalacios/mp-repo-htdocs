
            <p class="mt-3">db->join()</p>
            <hr>

        <div class="container-fluid">

            <?php 

    ///////////////////////////////////////////////////////////////////////////////////////////////////
                    $this->db->select('*');
                    $this->db->from('products');
                    $this->db->join('order_details', 'order_details.ProductID = products.ProductID');
                    $query = $this->db->get();

                    foreach ($query->result() as $fila)
                    {
                        echo 'Artículo: ';
                        echo $fila->ProductID;
                        echo ', Cantidad Vendida: ';
                        echo $fila->Quantity;
                       echo '<br>';
                    }
    ///////////////////////////////////////////////////////////////////////////////////////////////////
                
            ?>    

 