<?php

class MLinks extends CI_Model
{

	public function selectLibCI()
    {
		$this->db->select('id, titulo, categorias, link');
		$this->db->from('links');
		$this->db->order_by('id desc');
		$query = $this->db->get();
		return $query->result();
	}
	
	public function selectQuery()
    {
		$query = $this->db->query('
		SELECT
		links.id,
		links.titulo,
		links.categorias,
		links.link
		FROM links
		ORDER BY links.id asc
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
			'titulo' => $this->input->post('texttitulo'),
            'categorias' => $this->input->post('textcategorias'),
            'link' => $this->input->post('textlink'),
	        );
		$this->db->insert('links', $data);
		return null;
	}

	public function delete($id) {
  	    $this->db->where('id', $id);
		$this->db->delete('links');
		return null; 
    }

 	public function edit($id)	{

		// $row = $this->db->query("
		// 	SELECT id, nombres
		// 	FROM links
		// 	WHERE id = '".$id."'");
		// return $row->result();

		$this->db->select('id, nombres');
		$this->db->from('links');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result(); 
 	}

	public function update($id, $nombres) {
        $rowUpadated = array('nombres' => $nombres,);
        $this->db->where('id', $id);
        $this->db->update('links', $rowUpadated);
    }	 

}

