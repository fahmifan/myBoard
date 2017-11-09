<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user');
	}
	
	public function login()
	{
		session_start();
		if( isset($_POST['login']) ) {
			if( !empty( trim($_POST['username']) ) && !empty( trim($_POST['password']) ) ) {
			
				$user = $_POST['username'];
				$pass = $_POST['password'];

				if( $this->user->login($user, $pass) ) {
					
					$_SESSION['user'] = $user;
					// echo $_SESSION['user'];
					// print_r($result->fetch_assoc());
					$this->board();
				
				}

			} else {
				echo "username dan password harus diisi";
			}
		}
	}

	public function index() 
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}

	public function board() {

		// echo $_SESSION['user'];
		if( isset( $_SESSION['user']) ) {

			$this->load->view('header');
			$this->load->view('board');
			$this->load->view('footer');
			
		}
		else {
			$this->index();
		}
	}

	public function list() 
	{
		$this->load->view('templates/header_list');
		$this->load->view('list');
	}

	public function signup()
	{
		$this->load->view('templates/header_home_signup');
		$this->load->view('signup');	
	}
}