<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function __construct()
	{
		parent::__construct();

	}
	public function index()
	{
		$this->template->build('dashboard/vw_dashboard');
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */