<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class Indek_model extends CI_Model
{
	public function get_data()
	{
		$cars = array(
			array(191240000912, 'Adrian Cahyo Husodo','laki-laki','2019','Jepara')
			,array(171240000988, 'Ahmad Syarif', 'laki-laki','2017', 'Kudus')
			,array(171240000989, 'Ummiqulsum', 'perempuan', '2017', 'Jepara')
			,array(181240000987, 'Abduh Somat', 'laki-laki', '2018', 'Pati')
			,array(181240000989, 'Soleh Mukarom', 'laki-laki', '2018', 'Kudus')
			,array(181240000976, 'Siti Qorimah', 'perempuan', '2018', 'Jepara')
		);
		return $cars;
	}
}