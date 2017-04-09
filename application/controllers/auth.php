<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->view('auth/login');

	}


	public function login()
	{

		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[10]');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('auth/login');
		} else {
			
		}
	}
	public function logout()
	{

	}

}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */