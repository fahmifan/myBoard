<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_controller extends CI_Controller {

	protected $data = array();

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user');
		$this->load->library('session');
		$this->data['error'] = '';
	}
	
	public function login()
	{
		if( !isset($_POST['login']) ) {
			redirect('main_controller');
			return;
		}
		
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() === FALSE ) {
			$this->data['error'] = "";			
			$this->load->view('header');
			$this->load->view('home', $this->data);
			$this->load->view('footer');

		} else {
			$user = $this->input->post('username');
			$pass = $this->input->post('password');
		
			$response = $this->user->login($user, $pass);
			if( $response == false ) {
	
				$this->index();
				$this->data['error'] = "*Sorry there is problem encounterd";
				$this->load->view('header');
				$this->load->view('home', $this->data);
				$this->load->view('footer');		
				return;
			}
	
			if( $response->num_rows() != 1 ) {
				
				$this->data['error'] =  "*Username or Password not found";
				$this->load->view('header');
				$this->load->view('home', $this->data);
				$this->load->view('footer');		
				return;
			}
	
			$user_data = $response->row();
			$sess_user = array (
				'id' => $user_data->id,
				'name' => $user_data->name,
				'username' => $user,
			);

			$this->session->set_userdata($sess_user);
			redirect(base_url('index.php/main_controller/board'));		
		}
	}

	public function index() 
	{
		if( empty( $this->session->userdata('id') ) ) {

			$this->data['error'] = '';

			$this->load->view('header');
			$this->load->view('home', $this->data);
			$this->load->view('footer');
			return;
		}
		redirect(base_url('index.php/main_controller/board'));
	}

	public function board() {

		if( empty( $this->session->userdata('id') ) ) {
			redirect(base_url('index.php/main_controller/'));		
		}

		$this->load->view('header');
		$this->load->view('board');
		$this->load->view('footer');

	}

	public function list() 
	{
		if( empty( $this->session->userdata('id') ) ) {
			redirect('main_controller');
		}
		
		$this->load->view('templates/header_list');
		$this->load->view('list');
	}

	public function signup()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Name', 
			'required|min_length[3]|max_length[80]', 
			array( 
				'required' => 'Required Name',
				'min_length' => 'Min 3 characters',
				'max_length' => 'Max 80 characters'
			)
		);
		$this->form_validation->set_rules(
			'username', 'Username', 
			'required|min_length[5]|max_length[12]|is_unique[user.username]',
			array(
				'required' => 'Required Username',
				'min_length' => 'Min 5 characters',
				'max_length' => 'Max 12 characters',
				'is_unique' => 'Uername has been used' 
			)
		);
		$this->form_validation->set_rules('password', 'Password',
			'required|min_length[6]|max_length[12]',
			array(
				'required' => 'You must provide a %s.',
				'min_length' => 'Min 6 characters',
				'max_length' => 'Max 12 characters'
			)
		);
		$this->form_validation->set_rules('passconf', 'Password Confirmation','required|matches[password]',
			array(
				'required' => 'Confirm your password',
				'matches' => 'Password not match'
			)
		);

		if ($this->form_validation->run() === FALSE) {

	        $this->load->view('templates/header_home_signup');
	        $this->load->view('signup');
	        $this->load->view('footer');
	    
	    } else {

	        $this->user->register();
   			$this->data['error'] = "*You can login now";
			$this->load->view('header');
			$this->load->view('home', $this->data);
			$this->load->view('footer');
			return;
		}
	}
}