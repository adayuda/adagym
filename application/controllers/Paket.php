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

		function input(){
			$this->load->view('paket/paket_input');
		}

		function input_simpan(){
			$gym = $this->session->userdata('ses_id');
			$tambah_paket = array(
							'kd_paket' 	=>NULL,
							'kd_gym	' 	=> $gym,
							'nama' 		=> $this->input->post('nama'),
							'harga'		=> $this->input->post('harga'),
							'lama'		=> $this->input->post('lama')
							);
			$this->db->insert('tbl_paket',$tambah_paket);
			redirect('paket');
		}
		function edit(){
		$kd_paket=$this->uri->segment(3);
 		$data['get_data'] =  $this->p->get_data($kd_paket);
 		$this->load->view('paket/paket_edit',$data);
 		}

 		function edit_simpan(){
 			$kd_paket 	= $this->input->post('kd_paket');
	 		$nama 	= $this->input->post('nama');
	 		$harga = $this->input->post('harga');
	 		$lama	= $this->input->post('lama');
	 		
	 		$data 	= array(
	 				'nama'			=> $nama,
	 				'harga'		=> $harga,
	 				'lama'			=> $lama
	 				
	 				);
	 		$this->db->where('kd_paket',$kd_paket);
	 		$this->db->update('tbl_paket', $data);
			redirect('paket');
 		}

 		function delete(){
 		$kd_paket=$this->uri->segment(3);
 		$this->db->where('kd_paket',$kd_paket);
 		$this->db->delete('tbl_paket');
 		redirect('paket');
 	}

 	
	}
?>