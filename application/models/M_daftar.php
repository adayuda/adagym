<?php

/**
 * 
 */
class M_daftar extends Ci_Model
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->database();
	}

	function view_daftar()
 	{
 		# code...
 		//ambil data dari table paket
 		$gym  = $this->session->userdata('ses_id');
 		$daftar = $this->db->query('SELECT 	tbl_daftar.kd_member,
 											tbl_daftar.harga,
 											tbl_daftar.tgl_daftar
 									FROM tbl_daftar
 									WHERE tbl_daftar.kd_gym = '.$gym
 								);
 		return $daftar;
 	}

 	function get_harga(){
 		$gym  = $this->session->userdata('ses_id');
 		$newharga = $this->db->query('SELECT harga_daftar FROM tbl_gym WHERE kd_gym = 2')->result();
 		return $newharga;
 	}

 }
?>