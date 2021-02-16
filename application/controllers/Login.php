<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
	}

	public function index()
	{
		$this->load->view('admin/v_login');
	}

	public function proses()
	{	
		if (!empty($_POST['register'])) {
			// submit button pressed
			redirect('register');
		  }
		  
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if($this->auth->login_user($username,$password))
		{	
			redirect('Admin/a_panel');
			;
		}
		else
		{
			$this->session->set_flashdata('error','Username & Password salah');
			redirect('login');
		}

		
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	 
	}

	

}