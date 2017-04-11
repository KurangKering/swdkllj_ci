<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->view('auth/login');

	}


	public function login()
	{

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$arr = array('username' => $username, 'password' => $password);
		$res = $this->global_model->get_data_where('auth', $arr);

		$response = count($res) == 0 ? 'NO' : 'YES';
		if ($res) {
			$array = array(
				'is_logged' => true,
				'username' => $username
				);
			
			$this->session->set_userdata( $array );
		}
		else
		{
			$this->session->sess_destroy();
		}
		echo $response;
		exit;
	}
	public function logout()
	{

	}

}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */