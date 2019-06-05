<?php
	/**
	 * 
	 */
	class m_iuran extends CI_Model 
	{
		
		// function __construct(argument)
		// {
		// 	# code...
		// }
 
		function view(){
			$kd_gym = $this->session->userdata('ses_id');
			$iuran 	= $this->db->query('SELECT tbl_member.nama, MONTH(tgl_bayar) AS awal, MONTH(tgl_akhir) AS ~akhir, tbl_iuran.tgl_akhir , tbl_iuran.kd_iuran
										FROM tbl_iuran
										JOIN tbl_member
										ON tbl_iuran.kd_member = tbl_member.kd_member 
										INNER JOIN tbl_gym
										ON tbl_gym.kd_gym = tbl_iuran.kd_gym
										WHERE tbl_iuran.kd_gym = '. $kd_gym
										);
			return $iuran;
		}

		function view_member(){
			$query = $this->db->query('SELECT * FROM tbl_iuran WHERE kd_member = $kd_member');
		}

		function get_paket(){
			$kd_gym = $this->session->userdata('ses_id');
			$paket = $this->db->query('SELECT 	tbl_paket.kd_paket,
												tbl_paket.nama,
												tbl_paket.harga
									   FROM tbl_paket
									   WHERE tbl_paket.kd_gym = '.$kd_gym
										);
			return $paket->result_array();
		}

		function get_paket_id($gym, $paket) {
			$query = $this->db->get_where('tbl_paket', array('kd_gym' => $gym, 'kd_paket' => $paket));
			return $query->result();
		}

		function get_member($kd_iuran, $gym){
			$query = $this->db->get_where('tbl_member', array('kd_gym' => $gym , 'kd_iuran' => $kd_iuran));
			return $query->result();
		}
		function get_id($kd_iuran){
			//$query = $this->db->get_where('tbl_iuran', array('kd_iuran' => $kd_iuran));
			$query = $this->db->query(" SELECT tbl_iuran.kd_member, tbl_member.nama 
										FROM tbl_iuran 
										INNER JOIN tbl_member
										ON tbl_iuran.kd_member = tbl_member.kd_member
										WHERE kd_iuran =".$kd_iuran);
    		return $query->row_array();
		}

		function get_iuran_from_member(){
			$mem = $this->session->userdata('ses_id');
			$member = $this->db->query('SELECT tbl_member.nama, MONTH(tgl_bayar) AS awal, MONTH(tgl_akhir) AS akhir, tbl_iuran.tgl_bayar , tbl_iuran.kd_iuran
										FROM tbl_iuran
										JOIN tbl_member
										ON tbl_iuran.kd_member = tbl_member.kd_member 
										WHERE tbl_iuran.kd_member = '. $mem
										);
			return $member;
		}
		
	}
?>