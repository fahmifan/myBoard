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

	// Get All Card of an id_list
	public function getCard($id_list)
	{
		$query = $this->db->get_where('card', array('id_list' => $id_list));
		return $query->result();
	}

	public function deleteCardById($id)
	{
		$response = $this->db->delete('card', array('id' => $id));
		return $response;
	}

	// Get a card from id (card)
	public function getCardById($id)
	{
		$response = $this->db->get_where('card',array('id' => $id));
		return $response->row();
	}

	public function updateCard($id, $id_list, $cardData){

		$this->db->set('card_name', $cardData['card_name']);
		$this->db->set('card_desc', $cardData['card_desc']);
		$this->db->set('id_list', $id_list);
		$this->db->where(array('id'=> $id));
		$response = $this->db->update('card');
		return $response;
	}
}

/* End of file Card_Model.php */
/* Location: ./application/models/Card_Model.php */