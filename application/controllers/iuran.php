 <?php
/**
 *   
 */
class iuran extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_iuran','i');
		$this->akses=$this->session->userdata('akses');
	}
	function index(){
		
		if($this->akses==2){
		

		$data['iuran'] = $this->i->view()->result();
		$this->load->view('iuran/iuran_view',$data);
		}
		else{
			print_r('error');
		}	
	}

	function member(){

		if($this->akses==3){
		
		$data['member'] = $this->i->get_iuran_from_member()->result();
		$this->load->view('iuran/iuran_member',$data);
		}
		else{
			print_r('error');
		}	
	}

	function tgl(){
		
		$format = date('d - m - Y');
		$awal 	= date($this->input->post('tgl'));

		for($i= 0 ; $i<$this->input->post('bulan'); $i++){
		
			$tbulan = date('d - m - Y', strtotime('+'.$i.' month', strtotime($awal)));
			//echo $tbulan;	
			$a = date_parse_from_format('d - m - Y',$tbulan);
			echo $a["month"];
			
		}
	} 
	
	function input(){
		$data['paket'] = $this->i->get_paket();
		$this->load->view('iuran/iuran_input', $data);
	}

	function input_simpan(){
		
		$gym 	= $this->session->userdata('ses_id');
		$tambah_daftar = array(
			'kd_member'		=> $this->input->post('kode'),
			'kd_gym'		=> $gym,
			'tgl_daftar'	=> $this->input->post('tgl_daftar'),
			'harga_daftar'	=> $this->input->post('harga_daftar')
		);
		$a = $this->db->insert('tbl_daftar', $tambah_daftar);

		$tambah = array(
			'kd_iuran'		=> NULL,
			'kd_member'		=> $this->input->post('kode'),
			'kd_gym'		=> $gym,
			'kd_paket'		=> $this->input->post('paket'),
			'harga'			=> $this->input->post('harga_paket'),
			'tgl_bayar'		=> date('Y-m-d'),
			'tgl_akhir'		=> $this->input->post('tgl_akhir')
		);

		$this->db->insert('tbl_iuran',$tambah);
	}
	function update($kd_iuran){
		$kd_iuran=$this->uri->segment(3);
		$data['get_id'] = $this->i->get_id($kd_iuran);
		$data['paket'] = $this->i->get_paket();
		$this->load->view('iuran/iuran_pay', $data);
	}

	function update_simpan(){
		$kd_iuran 	= $this->input->post('kd_iuran');
 		$tgl_akhir 	= $this->input->post('tgl_akhir');
 		$harga 		= $this->input->post('harga');
 		
 		$data = array(
			'tgl_akhir'	=> $tgl_akhir,
 			'harga'		=> $harga
		);
		$this->db->where('kd_iuran',$kd_iuran);
 		$this->db->update('tbl_iuran', $data);
	}
	function get_data(){
		$kd_gym 	= $this->session->userdata('ses_id');
		$kd_paket 	= $this->input->post('kdpkt');
		echo json_encode($this->i->get_paket_id($kd_gym, $kd_paket));
		
	}
}
?>