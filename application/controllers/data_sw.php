<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Data_sw extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
//Do your magic here
		$this->load->model('md_data_sw', 'sw');
//import js files 
	}
	public function index()
	{
		$currMonth = date('n', strtotime('-1 months'));
		$currYear = date('Y');
		redirect('data_sw/lihat?tahun='.$currYear.'&bulan='.$currMonth,'refresh');
	}
	public function insert_satu_tahun()
	{
		$tahun = '2017';
		$bulan = range(1,12);
		$samsat = range(1,33);
		for ($i=0; $i < count($bulan) ; $i++) { 
			for ($j=0; $j < count($samsat); $j++) { 
				$this->db->insert('swdkllj', array('tahun' => $tahun, 'no_bulan' => $bulan[$i], 'no_samsat' => $samsat[$j]));
			}
		}
	}
	/*public function lihat_baru() {
	$tahun = $this->input->get('tahun'); //  value of tahun from GET Request 
	$bulan = $this->input->get('bulan'); // value of bulan from GET Request
	// check if $tahun or $bulan is not integer, show 404 not found;
	if (!ctype_digit($tahun) || !ctype_digit($bulan)) {
		show_404();
	}
	$data['tahun'] = $tahun;
	$data['bulan'] = $bulan; // a function in swdkllj helper class
	$data['contents'] = $this->sw->get_sw($tahun, $bulan);
	$this->template->build('data_sw/vw_data_sw', $data);  }*/
	public function lihat() 
	{
		if (!$this->input->get()) {
			$currMonth = date('n', strtotime('-1 months'));
			$currYear = date('Y');
			redirect('data_sw/lihat_lama?tahun='.$currYear.'&bulan='.$currMonth,'refresh');
		}
		$tahun = $this->input->get('tahun'); /*  value of tahun from GET Request */
		$bulan = $this->input->get('bulan'); /*value of bulan from GET Request*/
		/* check if $tahun or $bulan is not integer, show 404 not found;*/
		if (!ctype_digit($tahun) || !ctype_digit($bulan)) {
			show_404();
		}
		$data['tahun'] = $tahun;
		$data['bulan'] = $bulan; // a function in swdkllj helper class
		$data['data']  = $this->sw->get_sw($tahun, $bulan);
		$this->template->build('data_sw/vw_data_sw', $data); 
	}
	/*public function update_delete($bulan, $tahun)
	{
		$table = 'swdkllj';
		$post = $this->input->post();
		if ($this->input->post() && $post['action'] == 'edit') {
			$container = array(
				'tahun'     => $tahun, 
				'no_bulan'  => $bulan,
				'no_samsat' => $post['no_samsat'],
				'A'         => filter_input_angka($post['A']),
				'B'         => filter_input_angka($post['B']),
				'C1'        => filter_input_angka($post['C1']),
				'C2'        => filter_input_angka($post['C2']),
				'DP'        => filter_input_angka($post['DP']),
				'DU'        => filter_input_angka($post['DU']),
				'EP'        => filter_input_angka($post['EP']),
				'EU'        => filter_input_angka($post['EU']),
				'F'         => filter_input_angka($post['F']),
				'KD'        => filter_input_angka($post['KD']),
				'SWDKLLJ'   => filter_input_angka($post['SWDKLLJ']),
				'DENDA'     => filter_input_angka($post['DENDA'])
				);
			if ($this->sw->checkExist($tahun, $bulan, $post['no_samsat'])) {
				$where = array(
					'tahun' => $tahun, 
					'no_bulan' => $bulan,
					'no_samsat' => $post['no_samsat']
					);
				$this->global_model->update_data($table, $container, $where);
			}
			else {
				$this->global_model->insert_data($table, $container);
			}
		}
		else
		{
		}
	}*/
	public function update_data()
	{
		$column = $this->input->get('column');
		$value = $this->input->get('value');
		$d = $this->input->get('id');
		$par = explode(',' , $d);
		$this->sw->update_data($column, filter_input_angka($value), $par);
		echo 'cicak';
	}
}
/* End of file data_sw.php */
/* Location: ./application/controllers/data_sw.php */