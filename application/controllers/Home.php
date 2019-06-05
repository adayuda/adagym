<?php
/**
 * 
 */
class Home extends Ci_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model('m_gym','g');
	}
	function index(){
		// $this->load->view('gym/gym_daftar');
		$data['gym'] = $this->g->view_gym()->result();
 		$this->load->view('home/ol_daftar',$data);
	}
	function detail(){
		$data['gym'] = $this->g->view_gym()->result();
 		$this->load->view('home/detail_daftar',$data);
	}
}
?>