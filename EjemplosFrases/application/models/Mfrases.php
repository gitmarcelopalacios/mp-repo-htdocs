<?php
class Mfrases extends CI_Model
{

	public function selectLibCI()
    {
		$this->db->select('id, frase, autor, valoracion');
		$this->db->from('frases');
		$this->db->order_by('id desc');
		$query = $this->db->get();
		return $query->result();
	}
	
	public function selectQuery()
    {
		$query = $this->db->query('
		SELECT
		personas.id,
		personas.nombres
		FROM personas
		ORDER BY personas.id asc
		');
		return $query->result();
	}
	
	public function selectGeneric($str)
    {
		$query = $this->db->query($str);
		return $query->result();
	}
	public function selectVoid($str)
    {
		$query = $this->db->query($str);
		return NULL;
	}

	public function insertInto() {

	    $data = array(
			'frase' => $this->input->post('text1'),
            'autor' => $this->input->post('text2'),
	        'valoracion' => 1);
		$this->db->insert('frases', $data);
		return null;
	}

	public function delete($id) {
  	    $this->db->where('id', $id);
		$this->db->delete('personas');
		return null; 
    }

 	public function edit($id)	{

		// $row = $this->db->query("
		// 	SELECT id, nombres
		// 	FROM personas
		// 	WHERE id = '".$id."'");
		// return $row->result();

		$this->db->select('id, nombres');
		$this->db->from('personas');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result(); 
 	}

	public function update($id, $nombres) {
        $rowUpadated = array('nombres' => $nombres,);
        $this->db->where('id', $id);
        $this->db->update('personas', $rowUpadated);
    }	 
}

