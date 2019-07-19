<?php
	/**
	 * 
	 */
	class Barang extends Ci_Controller{
		
		function __construct(){		
			parent::__construct();
			$this->load->model('M_barang','p');
			$this->akses=$this->session->userdata('akses'); 
		}

		function index(){
			$gym = $this->session->userdata('ses_id');
			if($this->akses==2){
				$data['barang'] = $this->p->getperbarang($gym, NULL);
				$this->load->view('barang/barang_view', $data);
			}else{
				print_r('error');
			}	
		}

		function input(){
			$this->load->view('barang/barang_input');
		}

		public function showAllBarang() {
			$gym = $this->session->userdata('ses_id');
			echo json_encode($this->p->showAllBarang($gym));
		}
 
		public function editBarang() { 
			$gym 	= $this->session->userdata('ses_id');
			$kd 	= $this->input->post('kd_barang');
			echo json_encode($this->p->getperbarang($gym, $kd));
		}  

		public function qupdateBarang() { 
			echo json_encode($this->p->updateBarang());
		}

		public function addbarang() {
			try{
				$gym 	= $this->session->userdata('ses_id');

				$kd 	= $this->input->post('kode'); 
				$nama	= $this->input->post('nama_barang');
				$harga 	= $this->input->post('harga');
				$stok 	= $this->input->post('stok');
 
				$cek_barang = $this->p->cekdatabarang($kd);

				if ($cek_barang == 0) {
					$this->p->addTblBarang($kd, $nama); 
				}
			
				$this->p->addTblBarangGym($kd, $gym, $harga, $stok);

				//redirect(site_url('barang'));
				echo json_encode(array(
					"error" => false,
					"message" => "Barang berhasil ditambahkan!"
				));
			}catch(Exception $e){
				echo json_encode(array(
					"error" => true,
					"message" => "Barang gagal ditambahkan!"
				));
			}
		}

		public function deleteBarang() {
			// $id=$this->uri->segment(3);
 			// $this->db->where('kd_barang',$kd_barang);
 			// $this->db->delete('tbl_barang_gym');
			 // redirect('');
			echo json_encode($this->p->deleteBarang());
		}
		
 	}
?>