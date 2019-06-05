<?php
/**
 * 
 */
class Transaksi extends Ci_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		$this->akses=$this->session->userdata('akses');
	}

	function index(){
		$this->load->model('M_transaksi');
	}
}
?>