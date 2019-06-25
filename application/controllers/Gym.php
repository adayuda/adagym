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

	 	function input(){
	 		$this->load->view('gym/gym_input');
		 }
		
	 	 function addGym(){
	 	 	try{	
			 $nama 		= $this->input->post('nama');
			 $alamat		= $this->input->post('alamat');
 			 $no_telp	= $this->input->post('no_telp');
 			 $email		= $this->input->post('email');
 			
				$this->g->addTblGym($nama, $no_telp, $alamat, $email);
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
		 
		function image(){
			$config['upload_path'] 		= 'images/';
			$config['allowed_types']	= 'jpg|png';
			$config['max_size']			= 3000;
			$config['max_width']		= 1200;
			$config['max_height']		= 760;

			$this->load->library('upload',config);
			if ( ! $this->upload->do_upload('gambar')) //sesuai dengan name pada form 
            {
                   echo 'anda gagal upload';
            }
            else
            {
            	//tampung data dari form
            	$nama = $this->input->post('nama');
            	$harga = $this->input->post('harga');
            	$file = $this->upload->data();
            	$gambar = $file['file_name'];
 
                $this->product_m->insert(array(
			        'nama' => $nama,
			        'harga' => $harga,
			        'gambar' => $gambar
				));
				$this->session->set_flashdata('msg','data berhasil di upload');
				redirect('gym');
 
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
 }

?>