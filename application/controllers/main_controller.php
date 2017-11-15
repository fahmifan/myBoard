<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_controller extends CI_Controller {

	protected $data = array();

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user');
		session_start();
	}
	
	public function login()
	{
		if( !isset($_POST['login']) ) {
			redirect('main_controller');
			return;
		}
			
		if( empty( trim($_POST['username']) ) && empty( trim($_POST['password']) ) ) {
			$this->data['error'] = "*Username dan Password harus diisi!";
			$this->load->view('header');
			$this->load->view('home', $this->data);
			$this->load->view('footer');		
			return;
		}

		$user = $this->input->post('username');
		$pass = $this->input->post('password');

		$response = $this->user->login($user, $pass);
		if( $response == false ) {
			$this->index();
			$this->data['error'] = "*Maaf ada kesalahan";
			$this->load->view('header');
			$this->load->view('home', $this->data);
			$this->load->view('footer');		
			return;
		}

		if( $response->num_rows() != 1 ) {
			
			$this->data['error'] =  "*Username atau password tidak ditemukan";
			$this->load->view('header');
			$this->load->view('home', $this->data);
			$this->load->view('footer');		
			return;
		}

		$_SESSION['user'] = $user;
		redirect(base_url('index.php/main_controller/board'));
	}

	public function index() 
	{
		if( !isset( $_SESSION['user']) ) {

			$this->data['error'] = '';

			$this->load->view('header');
			$this->load->view('home', $this->data);
			$this->load->view('footer');
			return;
		}
		redirect(base_url('index.php/main_controller/board'));
	}

	public function board() {

		// echo $_SESSION['user'];
		if( !isset( $_SESSION['user']) ) {
			redirect(base_url('index.php/main_controller/'));		
		}

		$this->load->view('header');
		$this->load->view('board');
		$this->load->view('footer');

	}

	public function list() 
	{
		if( !isset( $_SESSION['user']) ) {
			redirect('main_controller');
		}
		
		$this->load->view('templates/header_list');
		$this->load->view('list');
	}

	public function signup()
	{
		$this->load->view('templates/header_home_signup');
		$this->load->view('signup');	
	}
}