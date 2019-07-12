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
			$this->load->model('m_gym', 'g');
		}
		function index(){
			if($this->akses==1){
			$this->load->model('m_gym', 'g');
			$judul = 'Daftar Gym';
			$data['judul']  = $judul;
			$data['gym'] = $this->g->view_gym()->result();
 			$this->load->view('gym/gym_view',$data);
 			}
				else{
			print_r('error');
			}
		 }
		 function getData(){
			$kd_gym 	= $this->input->post('id');
			$kd_paket 	= $this->input->post('kdpkt');
			echo json_encode($this->g->get_paket_id($kd_gym, $kd_paket));
		 }

		
	 	 function addGym(){
	 	 	try{	
			 $nama 		= $this->input->post('nama');
			 $alamat	= $this->input->post('alamat');
 			 $no_telp	= $this->input->post('no_telp');
 			 $email		= $this->input->post('email');
 			
				$this->g->addTblGym($nama, $alamat, $no_telp, $email);
				echo json_encode(array(
					"error" => false,
					"message" => "Gym berhasil ditambahkan!"
				)); 
			}catch(Exception $e){
				echo json_encode(array(
					"error" => true,
					"message" => "Gym gagal ditambahkan!"
				));
			}
		}
	 	 
		
		function showData(){
			$kd = $this->input->get('kd_gym');
			echo json_encode($this->g->showData($kd));	
		}

		function updateGym(){
			$kd = $this->input->get('kd_gym');
			echo json_encode($this->g->updateGym($kd));
		}

		function check_account(){

			$old_password=md5($this->input->post('opassword'));
			$kd_gym= $this->session->userdata('id');
			$cek=$this->g->Getuser(array('password' => $old_password,'kd_gym'=>$kd_gym));
			if($cek->num_rows()>=1){
				echo json_encode(false);
				// jika cek user bernilai lebih dari sama dengan 1 (ada data) maka kirimkan nilai false
			} else{
				echo json_encode(true);
			}
		}
		function showGambar(){
			$kd = $this->session->userdata('ses_id');
			echo json_encode($this->g->showGambar($kd));	
		}
 } 

?>