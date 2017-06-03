<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if ( ! function_exists('display_month_name'))
{
	function display_month_name ($x) {
		$bulan = array ('','Januari','Februari','Maret','April',
			'Mei','Juni','Juli','Agustus',
			'September','Oktober','November','Desember');
		return isset($bulan[$x])  ? $bulan[$x] : show_404();
	}
}

if ( ! function_exists('filter_input_angka'))
{
	function filter_input_angka ($string) {
		$str =  preg_replace('/[^0-9]+/', '', $string);
		return $str;

	}
}