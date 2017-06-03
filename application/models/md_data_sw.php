<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Md_data_sw extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}	

	public function get_sw($tahun = '', $bulan = '')
	{

		$query = 'SELECT samsat.nama_samsat, bulan.nama_bulan, swdkllj.* from samsat  left join swdkllj on samsat.no_samsat = swdkllj.no_samsat and swdkllj.no_bulan = 1 and swdkllj.tahun = 0000 left join bulan on swdkllj.no_bulan = bulan.no_bulan order by samsat.no_samsat';

		$tahun = $this->db->escape($tahun);
		$bulan = $this->db->escape($bulan);
		$this->db->select('samsat.nama_samsat, bulan.nama_bulan, swdkllj.*');
		$this->db->from('samsat');
		$this->db->join('swdkllj', 'samsat.no_samsat = swdkllj.no_samsat AND swdkllj.no_bulan = '. $bulan.' AND swdkllj.tahun = ' .$tahun, 'LEFT');
		$this->db->join('bulan', 'swdkllj.no_bulan = bulan.no_bulan', 'LEFT');
		$this->db->order_by('samsat.no_samsat');
		$result = $this->db->get()->result_array();
		return $result ;
	}


	public function checkExist($tahun, $no_bulan, $no_samsat)
	{
		$this->db->where('tahun', $tahun);
		$this->db->where('no_bulan', $no_bulan);
		$this->db->where('no_samsat', $no_samsat);
		$this->db->select('*');
		$result = $this->db->get('swdkllj')->result();
		return (bool) $result;
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
	public function insert_data()
	{
		
	}

}

/* End of file md_data_sw.php */
/* Location: ./application/models/md_data_sw.php */