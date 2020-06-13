<?php 
class db_ci_3as_model extends CI_Model {

	// function __construct() {
    //     parent::__Construct();
	// }
	

// 	//---------------------------------------------------------------------------------
//     // SELECCIONO TODAS LAS FILAS DE SHIPPERS
//     // PASAR A TABLESELECTED
	
// 	// DEFINO EL METODO
// 	function shippersCRUD() {

// 		// ENVIO QUERY A VARIABLE DE RESULTADOS
// 		$results = $this->db->query('
// 		SELECT 
// 		shippers.ShipperID Column1, 
// 		shippers.ShipperName Column2, 
// 		shippers.Phone Column3
// 		FROM shippers 
// 		ORDER BY shippers.ShipperName asc
// 		');
// 		// DEVUELVO SHIPPERS DISPONIBLES EN UN ARRAY
// 	    return $results->result();
// 	}   
	
// 	//---------------------------------------------------------------------------------
//     // Busco dentro de Shippers
	
	
// 	 function shippersSearch($patron_busqueda) {
//    	$results = $this->db->query("
// 		SELECT 
// 		shippers.ShipperID Column1, 
// 		shippers.ShipperName Column2, 
// 		shippers.Phone Column3
// 		FROM shippers 
// 		WHERE 
// 		Shippers.shipperName LIKE '%".$patron_busqueda."%' OR
// 		Shippers.shipperID LIKE '%".$patron_busqueda."%' OR
//    	Shippers.Phone LIKE '%".$patron_busqueda."%'
// 		ORDER BY shippers.ShipperName asc
// 		");
// 		if ($results->num_rows()>0) {
// 			return $results->result();
// 		} else {
// 			return false;
// 		}
		 
// 	}   
	
// 	   function buscar_titulos_enlaces($query) {
//   //$this->db->from($this->enlaces);
//   $this->db->like('titulo', $query);
//   $this->db->order_by("titulo", "asc");
//   $query=$this->db->get('bookmarks');

//  if ($query->num_rows()>0)
//  {
//      return $query;
//  }
//  else
//  {
//      return false;
//  }

// }

	
// 	//---------------------------------------------------------------------------------
//    	// INSERTAR SHIPPER EN LA TABLA
    
    
//     // DECLARO EL METODO
//     public function shipperSave() {
    	  
//     	  // ENVIO LOS DATOS OBTENIDOS EN LA VISTA AL ARRAY DE DATOS
// 	      $data = array(
// 	         'ShipperName' => $this->input->post('text_ShipperName'),
// 	         'Phone' => $this->input->post('text_Phone'),
// 	      );

//           // INSERTO ESE ARRAY DE DATOS EN UNA NUEVA FILA EN LA TABLA
// 	      return $this->db->insert('shippers', $data);
// 	}

// 	//---------------------------------------------------------------------------------
// 	// ELIMINAR SHIPPER DE LA TABLA
	
// 	// DECLARO EL METODO Y LE PASO UN PARAMETRO
// 	function shipperDelete($ShipperID) {

// 		// SELECCIONO DE LA TABLA EL REGISTRO DONDE SEA VERDADERO EL PARAMETRO	
// 	     $this->db->where('ShipperID', $ShipperID);
// 	    // ELIMINO ESA FILA DE LA TABLA
// 	    $this->db->delete('shippers');
    
//     }
	
// 	//---------------------------------------------------------------------------------
// 	// EDITAR SHIPPER

// 	// DECLARO EL METODO Y LE PASO UN PARAMETRO
// 	public function shipperEdit($ShipperID)	{ 

// 		// CREO UNA VARIABLE ARRAY CON LOS RESULTADOS DE LA CONSULTA
// 		// EN BASE A LOS PARAMETROS ENVIADOS
// 		$consulta = $this->db->query("
// 			SELECT ShipperID, ShipperName, Phone 
// 			FROM shippers 
// 			WHERE ShipperID = '".$ShipperID."'");

// 		// DEVUELVO EL ARRAY DE DATOS CON LA FILA SELECCIONADA
// 		return $consulta->result();
// 	}

// 	//---------------------------------------------------------------------------------
// 	// ACTUALIZAR SHIPPER

	
// 	// DECLARO EL METODO CON TRES PARAMETROS
// 	public function shipperUpdate($shipperID, $shipperName, $Phone) {

// 		// CREO UN ARRAY PARA ACTUALIZAR LA FILA DE DATOS Y LE
// 		// ASIGNO A LAS VARIABLES SUS VALORES
// 		$arrayUpdate = array(
// 			'shipperName' => $shipperName,
// 			'Phone' => $Phone,
// 			);

// 		// HACIENDO USO DEL SHIPPERID SELECCIONO LA FILA QUE DESEO ACTUALIZAR
// 		$this->db->where('ShipperID', $shipperID);

// 		// LE ENVIO EL ARRAY CON LOS DATOS Y ACTUALIZO ESA FILA
// 		$this->db->update('Shippers', $arrayUpdate);
// 	}
// 	//---------------------------------------------------------------------------------

}