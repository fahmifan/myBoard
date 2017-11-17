<?php
class User extends CI_Model {

	public function __construct() 
	{
		$this->load->database();
	}

	public function login($username, $pass)
	{

		$query  = "SELECT * 
				FROM user 
				WHERE username = ". $this->db->escape($username) .
				" AND  pass = sha1(" . $this->db->escape($pass) . ")" ;

		if( $result = $this->db->query($query) ) {
			return $result;	
		}
		else return false;
	}

	public function register()
	{
		$this->load->helper('url');

		$data = array(
	        'name' => $this->input->post('name'),
	        'username' => $this->input->post('username'),
	        'pass' => sha1( $this->input->post('password') )
    	);
	
		return $this->db->insert('user', $data);
	}

}