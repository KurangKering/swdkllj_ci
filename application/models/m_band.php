<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_band extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function lihat_data($tahun, $bulan)
	{
		// $sql = 'SELECT * from samsat LEFT JOIN swdkllj ON samsat.no_samsat = swdkllj.no_samsat AND tahun = ? AND no_bulan = ?';
		$sql = 'SELECT samsat.no_samsat nomor_samsat, samsat.*, IFNULL(swdkllj.tahun, ?) data_tahun,  IFNULL(swdkllj.no_bulan, ?) data_bulan, swdkllj.* from samsat LEFT JOIN swdkllj ON samsat.no_samsat = swdkllj.no_samsat AND tahun = ? AND no_bulan = ?';
		$que = $this->db->query($sql, array($tahun, $bulan, $tahun, $bulan));

		return $que->result_array();
	}


	public function cek_exists($tahun, $bulan, $samsat)
	{

		$this->db->where('tahun', $tahun);
		$this->db->where('no_bulan', $bulan);
		$this->db->where('no_samsat', $samsat);
		$res = $this->db->get('swdkllj')->result();
		return $res;
	}


	public function update_data($column, $value , $kriteria)
	{

		$sql = '';
		if ($this->cek_exists($kriteria[0], $kriteria[1], $kriteria[2])) {
			$sql = 'UPDATE swdkllj SET '.$column.' = ? WHERE tahun = ? AND no_bulan = ? AND no_samsat = ?';
		}
		else
		{
			$sql = 'INSERT INTO swdkllj ('.$column.', tahun, no_bulan, no_samsat) VALUES(?, ?, ?, ?)';
		}

		
		$res = $this->db->query($sql, array($value, $kriteria[0], $kriteria[1], $kriteria[2]));

		echo 'OK';

	}

}

/* End of file m_band.php */
/* Location: ./application/models/m_band.php */