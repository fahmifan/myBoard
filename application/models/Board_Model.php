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

	public function getBoardById($id) {
		$query = $this->db->get_where('board', array('id' => $id, 'id_user' => $this->session->userdata('id') ));
		return $query->row();
	}

	public function updateBoard($id, $boardName) {
		$this->db->set('board_name', $boardName);
		$this->db->where(array('id'=> $id, 'id_user' => $this->session->userdata('id') ));
		$query = $this->db->update('board');
	}
}

/* End of file Board_Model.php */
/* Location: ./application/models/Board_Model.php */