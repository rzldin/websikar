<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function index()
	{
		$this->load->view('login');
	}

	public function proseslogin(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->load->model('login_model');
		$this->login_model->get_data_login($username, $password);
	}





}	