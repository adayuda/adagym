
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
 		return $query->result_array();
	 }
	public function addTblGym() {
			$kd_admin	= $this->session->userdata('ses_id');
 			//$username 	= $this->input->post('email');
			$password	= 'adagym123';
		$data = array(
			'kd_gym' 		=> null,
			'nama'			=> $nama,
			'alamat' 		=> $alamat,
			'no_telp'		=> $no_telp,
			'email'			=> $email,
			'kd_admin'		=> $kd_admin,
			'username'		=> $email,
			'password'		=> $password
		);

		$query = $this->db->insert('tbl_paket', $data);
	}

 	function satu_gym(){
 		$a = $this->db->get_where('tbl_gym',array('kd_gym' => $this->session->userdata('ses_id')));
 		return $a;
	 }
	 
	function showData($kd){
		//$kd_gym = $this->session->userdata('ses_id');
		$query = $this->db->query('SELECT tbl_gym.nama,
										  tbl_gym.alamat,
										  tbl_gym.no_telp,
										  tbl_gym.email
									FROM tbl_gym
									WHERE tbl_gym.kd_gym = '.$kd);
		// foreach($query->result() as $data){
		// 	$hasil = array(
		// 		nama 	=> $data->nama,
		// 		alamat 	=> $data->alamat,
		// 		no_telp => $data->no_telp,
		// 		email 	=> $data->email
		// 	);
		// 	return $hasil;
		// }
		return $query->result();
	}
	function updateGym($kd){
		$id = $this->session->userdata('ses_id');
		$field = array(
			// 'kd_gym'		=>$this->input->post('kd'),
			'nama'			=>$this->input->post('nama'),
			'alamat'		=>$this->input->post('alamat'),
			'no_telp'		=>$this->input->post('no_telp'),
			'email'		 	=>$this->input->post('email')
		);
		$this->db->where('kd_gym', $id);
		$this->db->update('tbl_gym', $field);
		if($this->db->affected_rows() > 0){
			return array('error' => false, 'message' => 'success', 'data' => $this->input->post());
		}else{ 
			return array('error' => true, 'message' => "id:".$id.", error:".json_encode($field), 'data' => $this->input->post());
		}
	}
 }
?>