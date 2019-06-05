
<?php
 /** 
  * 
  */ 
 class m_gym extends CI_Model{
 	private $newtabel = 'tbl_gym';

 	function view_gym()
 	{
 		# code...
 		//ambil data dari table gym
 		$gym = $this->db->get('tbl_gym  ');
 		return $gym;
 	}

 	function get_data($kd_gym){
 		$query = $this->db->get_where($this->newtabel,array('kd_gym'=>$kd_gym));
 		return $query->row_array();
 	}

 	function satu_gym(){
 		$a = $this->db->get_where('tbl_gym',array('kd_gym' => $this->session->userdata('ses_id')));
 		return $a;
 	}
 }
?>