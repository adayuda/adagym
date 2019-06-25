 <?php
 include_once(dirname(__FILE__) . "/mail.php"); 
 class Member extends mail{
 	public $akses; 
 	 function __construct()
 	{
 		parent::__construct();
 		$this->akses=$this->session->userdata('akses');
 		$this->load->helper('form', 'url');
    	$this->load->model('m_member');
    	$this->load->model('m_daftar');
 	}
 	function index(){
 		
 		
 		//panggil view member
 		$judul = 'daftar member';
 		$data['judul'] = $judul; 
 		
 		
		if($this->akses==2){
 	// 	//member=view untuk tbl member
 	// 	$data['member'] = $this->m_member->view_member()->result();
 	// 	$jumlah_data  = $this->m_member->jumlah_data();
 	// 	$this->load->view('member/member_view',$data)
 	// 	}
 	// 	else{ 
 	// 		print_r('error');
 	// 	}

 		// $this->load->database();
 		// $data['member']  = $this->m_member->view_member()->result();
		// $jumlah_data = $this->m_member->jumlah_data();
 	// 	$this->load->library('pagination');
 	// 	$config['base_url']   = base_url(). 'Member/index';
	 //    $config['total_rows'] = $jumlah_data;
	 //    $config['per_page']   = 5;

	 //    $config['query_string_segment'] = 'start';

	 //    $config['full_tag_open']  = '<nav><ul class="pagination" style="margin-top:0px">';
	 //    $config['full_tag_close'] = '</ul></nav>';

	 //    $config['first_link']     = 'First';
	 //    $config['first_tag_open'] = '<li>';
	 //    $cinfig['first_tag_close']= '</li>';

	 //    $config['last_link']      = 'Last';
	 //    $config['last_tag_open']  = '<li>';
	 //    $config['last_tag_close'] = '</li>';

	 //    $config['next_link']      = 'Next';
	 //    $config['next_tag_open']  = '<li>';
	 //    $config['next_tag_close'] = '</li>';

	 //    $config['prev_link']      = 'Prev';
	 //    $config['prev_tag_open']  = '<li>';
	 //    $config['prev_tag_close'] = '</li>';

	 //    $config['cur_tag_open']  = '<li class="active"><a>';
	 //    $config['cur_tag_close'] = '</a></li>';

	 //    $config['num_tag_open']  = '<li>';
	 //    $config['num_tag_close'] = '</li>';

	    // $from = $this->uri->segment(3);
	    // $this->pagination->initialize($config);
	    $data['member']        = $this->m_member->view_member();
 		
	    $this->load->view('member/member_view', $data);
		}
		else{
			print_r('error');
		}
 	}

 	function input(){
 		$this->load->view('member/member_input');
 	}



 	function input_simpan(){
 		
 		$pass = 'pullsport123';
 		$data = array(
 			'kd_member' => NULL,
 			'nama' 		=> $this->input->post('nama'),
 			'umur'		=> $this->input->post('umur'),
 			'jk'		=> $this->input->post('jk'),
 			'no_telp'	=> $this->input->post('tlp'),
 			'alamat'	=> $this->input->post('alamat'),
 			'email'		=> $this->input->post('email'),	
 			'username'	=> $this->input->post('nama'),	
			'password'	=> $pass);
 		$this->m_member->add($data);
 		//$this->kirim_email();
 		$newid 		= $this->m_member->getlastid(); 
 		$newharga	= $this->m_daftar->get_harga();

 		$this->session->set_flashdata('newid', $newid);
 		$this->session->set_flashdata('newharga', $newharga);
 		redirect('iuran/input');
 	}

 	function edit(){
 		$kd_member = $this->session->userdata('ses_id');
 		$data['get_data'] =  $this->m_member->get_data($kd_member)->row_array();
 		$this->load->view('member/member_edit',$data);
 	}
 	function edit_simpan(){
 		$id 		= $this->input->post('id');
 		$nama 		= $this->input->post('nama');
 		$umur 		= $this->input->post('umur');
 		$jk			= $this->input->post('jk');
 		$alamat 	= $this->input->post('alamat');
 		$email		= $this->input->post('email');
 		$tlp 		= $this->input->post('tlp');
 		$username  	= $this->input->post('username');


 		$data 	= array(
 				'nama'			=> $nama,
 				'umur'			=> $umur,
 				'jk'			=> $jk,
 				'alamat'		=> $alamat,
 				'email'			=> $email,
 				'no_telp'		=> $tlp,
 				'username'		=> $username
 				);
 		$this->db->where('kd_member	',$id);
 		$this->db->update('tbl_member', $data);
 		// $this->m_member->update($kd_member,$data);
		redirect ('page');
 	}
 		
 	function delete(){
 		$kd_member=$this->uri->segment(3);
 		$this->db->where('kd_member',$kd_member);
 		$this->db->delete('tbl_member');
 		redirect('member');
 	}

 	// function register(){
 	// 	$this->load->view('register_view');
 	// }
 	// function tambah_register(){
 	// 	$regis = array(
 	// 		'nama' 		=> $this->input->post('nama'),
 	// 		'email'		=> $this->input->post('email'),
	// 		'password'	=> $this->input->post('password')
	// 		);
 	// 	$this->db->insert('tbl_member',$regis);
 	// 	redirect('login/aksi_login');
 	// }

 	
}	 

?>