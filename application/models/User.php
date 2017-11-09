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
					WHERE username = '$username' 
					AND pass = sha1('$pass') ";

		$result = $this->db->query($query);

		return $result;		
	}


}