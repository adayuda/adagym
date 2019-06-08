 <?php
	class login extends CI_Controller
	{
		
		function index(){
			$this->load->view('v_login');
		}

		function aksi_login(){		
				
			$username  = htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
	        $password  = htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
	        $this->load->model('m_login');
	        $cek_admin = $this->m_login->auth_admin($username,$password);
	        $cek_gym=$this->m_login->auth_gym($username,$password);
	       
	        if($cek_admin->num_rows() > 0){ //jika login sebagai 
				$data  = $cek_admin->row_array();
        		$this->session->set_userdata('masuk',TRUE);
		         	
		            $this->session->set_userdata('akses','1');
		            $this->session->set_userdata('ses_id',$data['kd_admin']);
		            $this->session->set_userdata('ses_nama',$data['nama']);
		            redirect('page');	            	
		         

	        }elseif ($cek_gym->num_rows() > 0) {
	        	$data  = $cek_gym->row_array();
        		$this->session->set_userdata('masuk',TRUE);
		         	
		            $this->session->set_userdata('akses','2');
		            $this->session->set_userdata('ses_id',$data['kd_gym']);
		            $this->session->set_userdata('ses_nama',$data['nama']);
		            redirect('page');

	        }else{ 
				$cek_member=$this->m_login->auth_member($username,$password);
				
				if($cek_member->num_rows() > 0){
						$data=$cek_member->row_array();
    					$this->session->set_userdata('masuk',TRUE);
						$this->session->set_userdata('akses','3');
						$this->session->set_userdata('ses_id',$data['kd_member']);
						$this->session->set_userdata('ses_nama',$data['nama']);
						redirect('page');
				}else{  // jika username dan password tidak ditemukan atau salah
						$url=base_url();
						echo $this->session->set_flashdata('msg','Username Atau Password Salah');
						redirect($url);
				}
	        }
		}
		
		
		
		function logout(){
		$this->session->sess_destroy();
		redirect(base_url('home'));
		}
		
}
	

?>