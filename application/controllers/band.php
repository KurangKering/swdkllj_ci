<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Band extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_band');
	}

	
	public function index()
	{

	}
	public function lihat_data($tahun = null, $bulan = null)
	{

		$tahun = $this->uri->segment(3);
		$bulan = $this->uri->segment(4);


		$data['data'] = $this->m_band->lihat_data($tahun, $bulan);

		$this->template->content->view('band/v_lihat_data', $data);
		$this->template->publish();

	}

	public function dummy()
	{
		$x = $this->m_band->cek_exists('2016', '1', '');

		var_dump($x);
	}


	public function update_data()
	{
		$column = $this->input->get('column');
		$value = $this->input->get('value');
		$d = $this->input->get('id');
		$par = explode(',' , $d);

		$this->m_band->update_data($column, $value, $par);
		echo 'cicak';
	}
	public function input_data($tahun, $bulan, $samsat)
	{

	}



}

/* End of file lunas.php */
/* Location: ./application/controllers/lunas.php */