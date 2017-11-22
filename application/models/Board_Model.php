<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Board_Model extends CI_Model {
	public function insertBoard($id_user)
	{
		$data = array(
			'id_user' => $this->session->userdata('id'),
	        'board_name' => $this->input->post('boardName')
    	);
    	return $this->db->insert('board', $data);
	}

	public function getBoard()
	{
		$query = $this->db->get_where('board', array('id_user' => $this->session->userdata('id')));
		return $query->result();
	}
}

/* End of file Board_Model.php */
/* Location: ./application/models/Board_Model.php */