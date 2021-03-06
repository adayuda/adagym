
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
	 function get_paket_id($gym, $paket) {
		$query = $this->db->get_where('tbl_paket', array('kd_gym' => $gym, 'kd_paket' => $paket));
		return $query->result();
	}
	public function addTblGym($nama, $alamat, $no_telp, $email) {
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

		$this->db->insert('tbl_gym', $data);
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
										  tbl_gym.email,
										  tbl_gym.harga_daftar
									FROM tbl_gym
									WHERE tbl_gym.kd_gym = '.$kd);
		return $query->result();
	}
	function showGambar(){
		$kd_gym = $this->session->userdata('ses_id');
		$gambar = $this->db->query('SELECT tbl_gym.gambar,
										  tbl_gym.deskripsi
									FROM tbl_gym
									WHERE tbl_gym.kd_gym = '.$kd_gym);
		
		return $gambar->result();
	}

	function updateGym($kd){
		$id = $this->session->userdata('ses_id');
		$field = array(
			// 'kd_gym'		=>$this->input->post('kd'),
			'nama'			=>$this->input->post('nama'),
			'alamat'		=>$this->input->post('alamat'),
			'no_telp'		=>$this->input->post('no_telp'),
			'email'		 	=>$this->input->post('email'),
			'harga_daftar'	=>$this->input->post('haDaf')
		);
		$this->db->where('kd_gym', $id);
		$this->db->update('tbl_gym', $field);
		if($this->db->affected_rows() > 0){
			return array('error' => false, 'message' => 'success', 'data' => $this->input->post());
		}else{ 
			return array('error' => true, 'message' => "id:".$id.", error:".json_encode($field), 'data' => $this->input->post());
		}
	}  

	function Getuser($where) {
        $this->db->select('*');
        $this->db->from('tbl_gym');
        $this->db->where($where);
        $data=$this->db->get();
        return $data;
    }
	
	function dataPaket($gym){
 		$paket = $this->db->query('SELECT tbl_paket.kd_paket,
 										  tbl_paket.nama_paket,
 										  tbl_paket.harga
 									FROM tbl_paket
 									WHERE tbl_paket.kd_gym = '.$gym
 											);
 		return $paket;
	 }
	 function dataGym($kd){
		$gym = $this->db->query('SELECT * 
									FROM tbl_gym
									WHERE tbl_gym.kd_gym = '.$kd
											);
		return $gym;
	}
	function desGambar($dt){
		$kd_gym = $this->input->post('txtid');
		
		$this->db->where('kd_gym', $kd_gym);
		$this->db->update('tbl_gym', $dt);
		if($this->db->affected_rows() > 0){
			return array('error' => false, 'message' => 'success', 'data' => $this->input->post());
		}else{ 
			return array('error' => true, 'message' => "id:".$id.", error:".json_encode($field), 'data' => $this->input->post());
		}
	}
 }
?>