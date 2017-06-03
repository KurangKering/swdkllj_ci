<?php defined('BASEPATH') OR exit('No direct script access allowed');

class lib_swdkllj 
{	
	/**
	* instance
	* @var [type]
	*/
	protected $CI;
	/**
	* variable penampung dari database
	* berisi data-data mentah
	* @var array
	*/
	private $_swdkllj = array();
	/**
	* variable penampung hasil selisih
	* @var array
	*/
	private $hasil_selisih = array();
	/**
	* load data ketika memanggil library
	* letakkan di global var $_swdkllj
	* @param array $data [description]
	*/
	function __construct($data = array())
	{
		$this->CI =& get_instance();
		$this->_swdkllj = $data;
	}

	public function _generate_data()
	{
		$temp = $this->_swdkllj;
		$hasil = array();
		$temp_array = array();
		foreach ($temp as $v) {
			$temp_array[$v['tahun']][$v['no_bulan']][$v['no_samsat']] = $v;

		}
		return $temp_array;	
	}
	public function _perbandingan_data()
	{
		$hasil = array();
		$arr = $this->_generate_data();
		for ($bulan= 1; $bulan <= 12; $bulan++) {

			for ($samsat= 1; $samsat <= 33; $samsat++) {
				for ($tahun=2016; $tahun > 2015 ; $tahun--) { 
					if (!isset($tmp)) {
						$tmp = 'isset';
						$hasil[$bulan][$samsat]['A']  = $arr[$tahun][$bulan][$samsat]['A'];
						$hasil[$bulan][$samsat]['B']  = $arr[$tahun][$bulan][$samsat]['B'];
						$hasil[$bulan][$samsat]['C1'] = $arr[$tahun][$bulan][$samsat]['C1'];
						$hasil[$bulan][$samsat]['C2'] = $arr[$tahun][$bulan][$samsat]['C2'];
						$hasil[$bulan][$samsat]['DP'] = $arr[$tahun][$bulan][$samsat]['DP'];
						$hasil[$bulan][$samsat]['DU'] = $arr[$tahun][$bulan][$samsat]['DU'];
						$hasil[$bulan][$samsat]['EP'] = $arr[$tahun][$bulan][$samsat]['EP'];
						$hasil[$bulan][$samsat]['EU'] = $arr[$tahun][$bulan][$samsat]['EU'];
						$hasil[$bulan][$samsat]['F']  = $arr[$tahun][$bulan][$samsat]['F'];
						$hasil[$bulan][$samsat]['KD']  = $arr[$tahun][$bulan][$samsat]['KD'];
						$hasil[$bulan][$samsat]['SWDKLLJ']  = $arr[$tahun][$bulan][$samsat]['SWDKLLJ'];
						$hasil[$bulan][$samsat]['SWDKLLJ']  = $arr[$tahun][$bulan][$samsat]['SWDKLLJ'];
						$hasil[$bulan][$samsat]['DENDA']  = $arr[$tahun][$bulan][$samsat]['DENDA'];
					}


					$hasil[$bulan][$samsat]['A']       -= $arr[$tahun - 1][$bulan][$samsat]['A'];
					$hasil[$bulan][$samsat]['B']       -= $arr[$tahun - 1][$bulan][$samsat]['B'];
					$hasil[$bulan][$samsat]['C1']      -= $arr[$tahun - 1][$bulan][$samsat]['C1'];
					$hasil[$bulan][$samsat]['C2']      -= $arr[$tahun - 1][$bulan][$samsat]['C2'];
					$hasil[$bulan][$samsat]['DP']      -= $arr[$tahun - 1][$bulan][$samsat]['DP'];
					$hasil[$bulan][$samsat]['DU']      -= $arr[$tahun - 1][$bulan][$samsat]['DU'];
					$hasil[$bulan][$samsat]['EP']      -= $arr[$tahun - 1][$bulan][$samsat]['EP'];
					$hasil[$bulan][$samsat]['EU']      -= $arr[$tahun - 1][$bulan][$samsat]['EU'];
					$hasil[$bulan][$samsat]['F']       -= $arr[$tahun - 1][$bulan][$samsat]['F'];
					$hasil[$bulan][$samsat]['KD']      -= $arr[$tahun - 1][$bulan][$samsat]['KD'];
					$hasil[$bulan][$samsat]['SWDKLLJ'] -= $arr[$tahun - 1][$bulan][$samsat]['SWDKLLJ'];
					$hasil[$bulan][$samsat]['SWDKLLJ'] -= $arr[$tahun - 1][$bulan][$samsat]['SWDKLLJ'];
					$hasil[$bulan][$samsat]['DENDA']   -= $arr[$tahun - 1][$bulan][$samsat]['DENDA'];
				} 
			} 

		}
		return $hasil[1][1]['A'];
	}

}