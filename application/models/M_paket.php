<?php

/**
 * 
 */ 
class M_paket extends Ci_Model
{
	var $newtabel = "tbl_paket";
	function __construct()
	{
		# code...
		parent::__construct();
	} 

	function view_paket()
 	{
 		 
 		$gym  = $this->session->userdata('ses_id');
 		$paket = $this->db->query('SELECT tbl_paket.kd_paket,
 										  tbl_paket.nama,
 										  tbl_paket.harga
 									FROM tbl_paket
 									WHERE tbl_paket.kd_gym = '.$gym
 											);
 		return $paket;
 	}
 		function get_data($kd_paket){
 		$query = $this->db->get_where($this->newtabel,array('kd_paket'=>$kd_paket));
 		return $query->row_array();
 	}
 }
?>