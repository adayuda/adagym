<?php

class operator extends CI_Controller{
	function index(){
		function view(){
 		$m = $this->db->query('SELECT tbl_member.kd_member,
 									  tbl_member.nama,
 									  tbl_member.umur,
 									  tbl_member.jk,
 									  tbl_member.no_telp,
 									  tbl_member.alamat,
 									  tbl_member.email,
 									  tbl_iuran.kd_member
 								FROM  tbl_member
 								INNER JOIN tbl_iuran 
 								ON tbl_member.kd_member = tbl_iuran.kd_member
 								WHERE tbl_iuran.kd_gym = 2
 										');
 		print_r($m);
 		die();
 	}
	}
	
	function id_master($status){
		$this->aksi_login();


	}
}
?>