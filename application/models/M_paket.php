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
		$tabel = "tbl_paket";
	} 

	function view_paket()
 	{
 		 
 		$gym  = $this->session->userdata('ses_id');
 		$paket = $this->db->query('SELECT tbl_paket.kd_paket,
 										  tbl_paket.nama_paket,
 										  tbl_paket.harga
 									FROM tbl_paket
 									WHERE tbl_paket.kd_gym = '.$gym
 											);
 		return $paket;
	 }
	 function showAllPaket(){
		$gym  = $this->session->userdata('ses_id');
		$paket = $this->db->query('SELECT tbl_paket.kd_paket,
										  tbl_paket.nama_paket,
										  tbl_paket.harga,
										  tbl_paket.lama
									FROM tbl_paket
									WHERE tbl_paket.kd_gym = '.$gym
											);
		return $paket->result();
	 }
	 
 		function get_data($kd){
 		$query = $this->db->get_where($this->newtabel,array('kd_paket'=>$kd));
 		return $query->result_array();
	 }
	 public function addTblPaket($kd_paket, $gym, $nama, $harga, $lama) {
		$data = array(
			'kd_paket' 		=> $kd_paket,
			'kd_gym'		=> $gym,
			'nama_paket'	=> $nama,
			'harga' 		=> $harga,
			'lama'			=> $lama
		);

		$query = $this->db->insert('tbl_paket', $data);
	}
	function deletePaket(){
		$id = $this->input->get('kd_paket');
		$this->db->where('kd_paket', $id); 
		$this->db->delete($this->newtabel);
		if($this->db->affected_rows() > 0){
			return array('error' => false, 'message' => 'Success');
		}else{
			return array('error' => true, 'message' => $this->db->error()['message']);
		}
	}

	function updatePaket(){
		$id = $this->input->post('id');
		$field = array(
			'nama_paket'	=>$this->input->post('nama_paket'),
			'harga'			=>$this->input->post('harga'),
			'lama'			=>$this->input->post('lama')
		);
		$this->db->where('kd_paket', $id);
		$this->db->update('tbl_paket', $field);
		if($this->db->affected_rows() > 0){
			return array('error' => false, 'message' => 'success', 'data' => $this->input->post());
		}else{ 
			return array('error' => true, 'message' => "id:".$id.", error:".json_encode($field), 'data' => $this->input->post());
		}
	}
	
 }
?>