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
		if( !isset($_POST['login']) ) {
			header('Location: index');
			return;
		}
			
		if( empty( trim($_POST['username']) ) && empty( trim($_POST['password']) ) ) {
			echo "Username dan Password harus diisi!";
			return;
		}

		$user = $_POST['username'];
		$pass = $_POST['password'];

		$response = $this->user->login($user, $pass);
		if( $response == false ) {
			$this->index();
			echo "Maaf ada kesalahan";			
			return;
		}

		if( $response->num_rows() != 1 ) {
			
			$data['error'] =  "Username atau password tidak ditemukan";
			
			$this->load->view('header');
			$this->load->view('home', $data);
			$this->load->view('footer');

			return;
		}

		$_SESSION['user'] = $user;
		$this->board();
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