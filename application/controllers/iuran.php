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

		$iuran = $this->i->view()->result();
		$mapping = array();
		foreach($iuran as $val){
			if(!isset($mapping[$val->kd_member])){
				$mapping[$val->kd_member] = array(
					
					"nama" => $val->nama,
					"data" => array()
				);
			}
			$mapping[$val->kd_member]['tgl_akhir'] = $val->akhir;
			$mapping[$val->kd_member]['data'] = array_merge($mapping[$val->kd_member]['data'], array(array(
				"tgl_bayar" => date("Ym", strtotime($val->awal)),
				"tgl_akhir" => date("Ym", strtotime($val->akhir)),
				"kd_iuran"  => $val->kd_iuran,
				"status"	=> $val->status,
				"kd_member" => $val->kd_member,
				"email"		=> $val->email,
				"kd_iuran"  => $val->kd_iuran
			)));
		}

		$data["iuran"] = $mapping;
		
		// header('Content-type:text/plain');
		// echo str_replace("[", "[\n", json_encode($data));
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
	function pay(){
		$data['paket'] = $this->i->get_paket();
		$this->load->view('iuran/iuran_pay', $data);
	}

	function input_simpan(){
		
		$gym 	= $this->session->userdata('ses_id');
		$tambah_daftar = array(
			'kd_member'		=> $this->input->post('kode'),
			'kd_gym'		=> $gym,
			'tgl_daftar'	=> $this->input->post('tgl_daftar'),
			'harga_daftar'	=> $this->input->post('harga_daftar'),
			'status'		=> "aktif"
		);
		$a = $this->db->insert('tbl_daftar', $tambah_daftar);

		$tambah = array(
			'kd_iuran'		=> NULL,
			'kd_member'		=> $this->input->post('kode'),
			'kd_gym'		=> $gym,
			'kd_paket'		=> $this->input->post('paket'),
			'harga'			=> $this->input->post('harga_paket'),
			'tgl_bayar'		=> date('Y-m-d'),
			'tgl_akhir'		=> $this->input->post('tgl_akhir'),
			'status'		=> "aktif"
		);

		$this->db->insert('tbl_iuran',$tambah);
	}
	function input_pay(){
		
		$gym 	= $this->session->userdata('ses_id');
		
		$tambah = array(
			'kd_iuran'		=> NULL,
			'kd_member'		=> $this->input->post('kode'),
			'kd_gym'		=> $gym,
			'kd_paket'		=> $this->input->post('paket'),
			'harga'			=> $this->input->post('harga_paket'),
			'tgl_bayar'		=> date('Y-m-d'),
			'tgl_akhir'		=> $this->input->post('tgl_akhir'),
			'status'		=> "aktif"
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

	function laporan(){
		$data['iuran'] = $this->i->view()->result();
		$this->load->view('laporan/lap_iuran',$data);
	}

	function sentEmail(){
		$kadir = $this->input->post('kadir');
		$nama = $this->input->post('nama');
		$akhir = $this->input->post('akhir');
		$email = $this->input->post('email');

		$config = [
			'useragent' => 'CodeIgniter',
			'protocol'  => 'smtp',
			'mailpath'  => '/usr/sbin/sendmail',
			'smtp_host' => 'ssl://smtp.gmail.com',
			'smtp_user' => 'adagym66@gmail.com',   // Ganti dengan email gmail Anda.
			'smtp_pass' => 'yuda1998',             // Password gmail Anda.
			'smtp_port' => 465,
			'smtp_keepalive' => TRUE,
			'smtp_crypto' => 'SSL',
			'wordwrap'  => TRUE,
			'wrapchars' => 80,
			'mailtype'  => 'html',
			'charset'   => 'utf-8',
			'validate'  => TRUE,
			'crlf'      => "\r\n",
			'newline'   => "\r\n",
		];

	 // Load library email dan konfigurasinya.
	 $this->load->library('email', $config);

	 // Pengirim dan penerima email.
	 $this->email->from('AdaGym.com');    // Email dan nama pegirim.
	 $this->email->to($email);                       // Penerima email.

	 // Lampiran email. Isi dengan url/path file.
	 $this->email->attach('');

	 // Subject email.
	 $this->email->subject('Pemberitahuan paket sudah kadaluarsa AdaGym.com');
	 $message = '
	  silahkan Upload bukti transfer <strong><a href="localhost/adagym.com/home/bukbar" target="_blank" rel="noopener">disini</a></strong> untuk mengupload bukti bayar
	 ';
	 // Isi email. Bisa dengan format html.
	 $this->email->message($message);
	 if ($this->email->send())
	 {
		 echo 'Sukses! email berhasil dikirim.';
		 $this->i->uSKadaluarsa($kadir);
	 }
	 else
	 {
		 echo 'Error! email tidak dapat dikirim.';
	 }
	}
}
?>