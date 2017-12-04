<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_Model extends CI_Model {
	public function insertList($id_board)
	{
		$data = array(
			'id_board' => $id_board,
	        'list_name' => $this->input->post('listName')
    	);
    	return $this->db->insert('list', $data);
	}

	public function getList($id_board)
	{
		$query = $this->db->get_where('list', array('id_board' => $id_board));
		return $query->result();
	}

	public function deleteListById($id)
	{
		$response = $this->db->delete('list', array('id' => $id));
		return $response;
	}
}

/* End of file List_Model.php */
/* Location: ./application/models/List_Model.php */