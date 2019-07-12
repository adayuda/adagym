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
 		$newharga = $this->db->query('SELECT harga_daftar FROM tbl_gym WHERE kd_gym = '.$gym)->result();
 		return $newharga;
	 }
	 
	 function addTblDaftarDaf($gym, $hdaf, $status){
		$newkode = $this->db->query(" SELECT tbl_member.kd_member 
		FROM tbl_member
		ORDER BY tbl_member.kd_member 
		DESC LIMIT 1 ")->result();
			// print_r ($newkode);
			// return ;

		 $data = array(
			 'kd_daftar' 	=> NULL,
			 'kd_gym'	 	=> $gym,
			 'kd_member' 	=> $newkode[0]->kd_member,
			 'tgl_daftar'	=> NULL,
			 'harga_daftar'	=> $hdaf,
			 'status'		=> $status		
		 );
		 $this->db->insert('tbl_daftar',$data); 
	 }

	 function dataBayar(){
		 $stts = 'sudah bayar';
		 $gym = $this->session->userdata('ses_id');
		 $bayar = $this->db->query("SELECT tbl_daftar.kd_daftar,
		 						  tbl_member.nama,
								  tbl_daftar.nama_rek,
								  tbl_daftar.nama_bank,
								  tbl_daftar.total_bayar,
								  tbl_daftar.bukti_bayar
							FROM tbl_daftar
							JOIN tbl_member
							ON tbl_daftar.kd_member = tbl_member.kd_member
							WHERE tbl_daftar.kd_gym ='".$gym."'
							 AND tbl_daftar.status = '".$stts."'");
		return $bayar;
	 }
	

	 function accSave($kddaf){
		$kd = $this->db->query("SELECT tbl_daftar.kd_member
								FROM tbl_daftar
								WHERE tbl_daftar.kd_daftar =".$kddaf)->result();
		$kdm = $kd[0]->kd_member;
		$lama = $this->db->query("SELECT tbl_paket.lama
								FROM tbl_paket
								JOIN tbl_iuran
								ON tbl_iuran.kd_paket = tbl_paket.kd_paket
								WHERE tbl_iuran.kd_member =".$kdm)->result();
		$lm = $lama[0]->lama;
		$kdiu = $this->db->query("SELECT tbl_iuran.kd_iuran
								FROM tbl_iuran
								WHERE tbl_iuran.kd_member =".$kdm)->result();
		$kdi = $kdiu[0]->kd_iuran;

		$today = date("Y-m-d");
		$tak = date("Y-m-d", strtotime('+'.$lm.'month',strtotime($today)));
		$today = date("Y-m-d");
		$status = "aktif";
		
		$dataDaf = array(
			'tgl_daftar' => $today,
			'status'	 => $status
		);
		$this->db->where(array('kd_daftar'=> $kddaf));
		$this->db->update('tbl_daftar',$dataDaf);

		$dataIur = array(
			'tgl_bayar'  => $today,
			'tgl_akhir'	 => $tak,
			'status'	 => $status
		); 
		$this->db->where(array('kd_iuran'=> $kdi));
		$this->db->update('tbl_iuran',$dataIur);

	 }

 }
?>