  <?php
 /**
  *  
  */
 class M_member extends CI_Model{
 	
 	// function view_member()
 	// {
 	// 	# code...
 	// 	//ambil data dari table member
 	// 	$member = $this->db->get_where('tbl_member',array('kd_gym' => $this->session->userdata('ses_id')));
 	// 	return $member;
 	// }

 	var $newtabel = 'tbl_member';

 	function __construct() {
    $this->load->database();
  	}

 	function add($data){
 		$this->db->insert($this->newtabel, $data);
 	}
 	
 	function get_data($kd_member){
 		$kd_member = $this->session->userdata('ses_id');
 		$query = $this->db->query('SELECT  
 										   tbl_member.nama,
	 									   tbl_member.umur,
	 									   tbl_member.jk,
	 									   tbl_member.no_telp,
	 									   tbl_member.alamat,
	 									   tbl_member.email,
	 									   tbl_member.username 
	 							   FROM tbl_member
	 							   WHERE kd_member = '.$kd_member);
	 									   
 		return $query->row_array();
 	}

 	function update($kd_member,$data){
 		$this->db->where('kd_member	',$id); 
 		$this->db->update('tbl_member', $data);
 	}

 	function view_member(){
 		$kd_gym = $this->session->userdata('ses_id');
 		$member = $this->db->query('SELECT tbl_member.kd_member,
 										   tbl_member.nama,
	 									   tbl_member.umur,
	 									   tbl_member.jk,
	 									   tbl_member.no_telp,
	 									   tbl_member.alamat,
	 									   tbl_member.email
	 								FROM  tbl_member
	 								INNER JOIN tbl_daftar 
	 								ON tbl_member.kd_member = tbl_daftar.kd_member
	 								WHERE tbl_daftar.kd_gym ='. $kd_gym)->result();
 		return $member;
 	}
 	function pgym(){
 		$kd_member = $this->session->userdata('ses_id');
 		$p = $this->db->query('SELECT   tbl_gym.nama,
 										tbl_gym.alamat
 								FROM tbl_gym
 								INNER JOIN tbl_iuran
 								ON tbl_gym.kd_gym = tbl_iuran.kd_gym
 								WHERE tbl_iuran.kd_member ='.$kd_member
								);
 	}
 	function jumlah_data() {
    return $this->db->get($this->newtabel)->num_rows();
	}
  	function view_a($number, $offset) {
    return $this->db->get($this->newtabel, $number, $offset)->result();
  	}

  	function getlastid(){
  		return $this->db->insert_id();
  	}
}
?>