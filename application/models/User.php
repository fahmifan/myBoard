<?php
class User extends CI_Model {

	public function __construct() 
	{
		$this->load->database();
	}

	public function login($username, $pass)
	{

		$query  = "SELECT username, pass 
				FROM user 
				WHERE username = ". $this->db->escape($username) .
				" AND  pass = sha1(" . $this->db->escape($pass) . ")" ;

		if( $result = $this->db->query($query) ) return $result;	
		else return false;
	}
}