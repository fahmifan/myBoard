<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Card_Model extends CI_Model {
	public function insertCard($id_list)
	{
		$data = array(
			'id_list' => $id_list,
	        'card_name' => $this->input->post('card_name'),
	        'card_desc' => $this->input->post('card_desc')
    	);
    	return $this->db->insert('card', $data);
	}

	public function getCard($id_list)
	{
		$query = $this->db->get_where('card', array('id_list' => $id_list));
		return $query->result();
	}
}

/* End of file Card_Model.php */
/* Location: ./application/models/Card_Model.php */