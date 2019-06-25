<?php
	/** 
	 * 
	 */ 
	class Paket extends Ci_Controller
	{
		
		function __construct(){		
			parent::__construct();
			$this->load->model('m_paket','p');
			$this->akses=$this->session->userdata('akses');
		}

		function index(){
			
			if($this->akses==2){
			$data['paket'] = $this->p->view_paket()->result();
			$this->load->view('paket/paket_view',$data);
			}else{ 
			print_r('error');
			}	
		}
		function showAllPaket(){
			$gym = $this->session->userdata('ses_id');
			echo json_encode($this->p->showAllPaket($gym));
		}

		function input(){
			$this->load->view('paket/paket_input');
		}

		function addPaket(){
		try{	
			$gym = $this->session->userdata('ses_id');
			
			$kd_paket 	= NULL;				
			$gym 		= $this->session->userdata('ses_id');
			$nama		= $this->input->post('nama');
			$harga		= $this->input->post('harga');
			$lama		= $this->input->post('lama');
		
			$this->p->addTblPaket($kd_paket, $gym, $nama, $harga, $lama);				
			//$this->db->insert('tbl_paket',$tambah_paket);
			echo json_encode(array(
				"error" => false,
				"message" => "Package berhasil ditambahkan!"
			)); 
		}catch(Exception $e){
			echo json_encode(array(
				"error" => true,
				"message" => "Package gagal ditambahkan!"
			));
		}
		}
		function editPaket(){
			$gym 	= $this->session->userdata('ses_id');
			$kd 	=$this->input->post('kd_paket');
			//$data['get_data'] =  $this->p->get_data($kd_paket);
			echo json_encode($this->p->get_data($kd));
		}
		

 		function edit_simpan(){
 			$kd_paket 	= $this->input->post('kd_paket');
	 		$nama 	= $this->input->post('nama_paket');
	 		$harga = $this->input->post('harga');
	 		$lama	= $this->input->post('lama');
	 		
	 		$data 	= array(
	 				'nama_paket'	=> $nama,
	 				'harga'		=> $harga,
	 				'lama'			=> $lama
	 				
	 				);
	 		$this->db->where('kd_paket',$kd_paket);
	 		$this->db->update('tbl_paket', $data);
			redirect('paket');
		 }
		function updatePaket(){
			echo json_encode($this->p->updatePaket());
		}
 		function deletePaket(){
			echo json_encode($this->p->deletePaket());
 		}

 	
	}
?>