<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dummy extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	//Do your magic here
	}
	public function index()
	{
		$sql = 'SELECT samsat.nama_samsat, bulan.nama_bulan, swdkllj.* from samsat  left join swdkllj on samsat.no_samsat = swdkllj.no_samsat and swdkllj.no_bulan = 1 and swdkllj.tahun = 0000 left join bulan on swdkllj.no_bulan = bulan.no_bulan';
		$v = $this->db->query($sql)->result_array();
		var_dump($v);
	}

}

/* End of file dummy.php */
/* Location: ./application/controllers/dummy.php */