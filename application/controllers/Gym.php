<?php
	/**
	 * 
	 */
	class Gym extends CI_Controller
	{
		
		function __construct()
		{ 
			parent::__construct();
			$this->akses=$this->session->userdata('akses');
		}
		function index(){
			if($this->akses==1){
			$this->load->model('m_gym');
			$judul = 'Daftar Gym';
			$data['judul']  = $judul;
			$data['gym'] = $this->m_gym->view_gym()->result();
 			$this->load->view('gym/gym_view',$data);
 			}
				else{
			print_r('error');
		}
	 	}

	 	function input(){
	 		$this->load->view('gym/gym_input');
	 	}
	 	 function input_simpan(){
	 	 	$admin = $this->session->userdata('ses_id');
 			$pass = 'pullsport123';
 			$tambah_gym = array(
 			'nama' 		=> $this->input->post('nama'),
 			'no_telp'	=> $this->input->post('tlp'),
 			'alamat'	=> $this->input->post('alamat'),
 			'email'		=> $this->input->post('email'),
 			'kd_admin'	=> $admin,
 			'username' 	=> $this->input->post('nama'),
			'password'	=> $pass);
 		$this->db->insert('tbl_gym',$tambah_gym);
 		//$this->kirim_email();
 		redirect('gym');
	 	 }
	 	
	 	function edit(){
	 		$this->load->model('m_gym');
	 		$kd_gym = $this->session->userdata('ses_id');
	 		$data['get_data'] =  $this->m_gym->get_data($kd_gym);
	 		$this->load->view('gym/gym_edit',$data);
	 	}


	 	function edit_simpan(){
	 	$id 	= $this->input->post('id');
 		$nama 	= $this->input->post('nama');
 		$alamat = $this->input->post('alamat');
 		$email	= $this->input->post('email');
 		$tlp 	= $this->input->post('tlp');
 		
 		$data 	= array(
 				'nama'			=> $nama,
 				'alamat'		=> $alamat,
 				'email'			=> $email,
 				'no_telp'		=> $tlp
 				);
 		$this->db->where('kd_gym',$id);
 		$this->db->update('tbl_gym', $data);
		redirect('page');
	 	}

	 	function delete(){
 		$kd_gym=$this->uri->segment(3);
 		$this->db->where('kd_gym',$kd_gym);
 		$this->db->delete('tbl_gym');
 		redirect('gym');
 	}
 }

?>