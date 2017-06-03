<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {

	public function index()
	{
		$this->load->view('authentication/vw_login');
	}


	public function do_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		redirect('dashboard');
	}


	public function do_logout()
	{

	}
}

/* End of file authentication.php */
/* Location: ./application/controllers/authentication.php */