<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perhitungan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('md_perhitungan');
	}

	public function index()
	{
		$this->template->build('perhitungan/vw_alas');	
	}

	public function perbandingan()
	{
		$start = '2015';
		$end = '2017';
		$swdkllj = $this->md_perhitungan->get_swdkllj($start, $end);
		$this->load->library('lib_swdkllj', $swdkllj);
		echo $this->lib_swdkllj->_perbandingan_data();

	}
	public function rank_anggaran()
	{

	}
	public function rang_aktivitas()
	{

	}
	public function tampil_data()
	{

	}

}

/* End of file perhitungan.php */
/* Location: ./application/controllers/perhitungan.php */