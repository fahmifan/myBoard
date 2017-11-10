<?php
class User extends CI_Model {

	public function __construct() 
	{
		$this->load->database();
	}

	public function login($username, $pass)
	{

		$query  = "SELECT username, password 
					FROM user 
					WHERE username = '$username' 
					AND password = sha1('$password') ";
		$result = $this->db->query($query);
		return $result;		
	}


}