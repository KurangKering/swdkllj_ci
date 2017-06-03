<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Md_perhitungan extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}	

	public function get_data_by_years($years)
	{
		$sql = 'SELECT * FROM swdkllj where tahun IN ? ';
		$query = $this->db->query($sql, $years);
		$result = $this->db->get();
	}

	public function get_swdkllj($start, $end) 
	{
		
		$this->db->where("tahun BETWEEN $start AND $end");
		$result = $this->db->get('view_swdkllj');
		$result = $result->result_array();

		return $result;

	}

}

/* End of file md_perhitungan.php */
/* Location: ./application/models/md_perhitungan.php */