<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function index()
	{
		$this->load->view('login_view');
	}

	public function ceklogin(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
	}
}
