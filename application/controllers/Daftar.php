 <?php
/** 
 * 
 */
class Daftar extends Ci_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model('m_daftar');
	}

	function index(){
	
	// 	$judul = "Daftar";
	// 	$data['judul'] = $judul;
	// 	$data['daftar'] = $this->M_daftar->view_daftar()->result();
	// 	$this->load->view('daftar_view',$data);
	 }

	function input(){
		$this->load->view('daftar/daftar_input');
	}
	
	function input_simpan(){
		$this->load->model('m_daftar');
		$harga = $this->m_daftar->get_harga();
		$gym = $this->session->userdata('ses_id');

		$tambah = array(
			'kd_daftar'		=> NULL,
			'kd_member'		=> $this->input->post('kode'),
			'tgl_daftar'	=> $this->input->post('tgl'),
			'harga'			=> $this->input->post('harga'),
			'kd_gym'		=> $gym
			);
		$this->db->insert('tbl_daftar',$tambah);
		redirect('member');
	}

	function test_harga() {
		$data['harga'] = $this->m_daftar->get_harga();
		$this->load->view('daftar/harga', $data);
	}
	
}

?>