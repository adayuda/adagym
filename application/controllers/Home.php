<?php
/**
 * 
 */
// include_once (dirname(__FILE__) . "/mail.php");
class Home extends Ci_Controller
{
	
	function __construct(){		
		parent::__construct();
		$this->load->model('m_gym','g');
		$this->load->library('upload');
	}
	function index(){
		// $this->load->view('gym/gym_daftar');
		$data['gym'] = $this->g->view_gym()->result();
 		$this->load->view('home/ol_daftar',$data);
	}
	function detail($angka){
		//print_r ($angka);
		$data['gym'] = $this->g->dataGym($angka)->row();
		//print_r ($data['gym']);
		$data['paket'] = $this->g->dataPaket($angka)->result();
		//print_r ($data['paket']);
 		$this->load->view('home/detail_daftar',$data);
	}

	function addData(){
		$this->load->model('M_member','m');			
		$this->load->model('M_daftar','d');
		$this->load->model('M_iuran','i');
		
		try{
			$nama 	= $this->input->post('nama');
			$umur 	= $this->input->post('umur');
			$jk 	= $this->input->post('jk'); 
			$alamat	= $this->input->post('ads');
			$telp	= $this->input->post('telp');
			$email 	= $this->input->post('mail');
			$status = 'belum bayar';
			$gym 	= $this->input->post('gym');
			$paket	= $this->input->post('paket');
			$hpak	= $this->input->post('hpak');
			$hdaf 	= $this->input->post('hdaf');
			$total  = $this->input->post('total');

			// $this->m->addtblmemberDaf($nama, $umur, $jk, $alamat, $email, $status, $telp );
			//if($cekDataMember == true){
			//$newkode = $this->m->getlastid();
			// $this->d->addTblDaftarDaf( $gym, $hdaf ,$status);
			// $this->i->addtblIuranDaf( $gym, $paket, $hpak,$status);
			//}
			//redirect(site_url('barang'));
			$this->kirim_email($email,$hdaf,$hpak, $total);
			
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
	function bukBar(){
		$this->load->view('home/buktiBayar');
	}

	function kirim_email($email, $hdaf, $hpak, $total){
			
		// Konfigurasi email.
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
		$this->email->subject('Pembayaran Pendaftaran Pada AdaGym.com');
		$message = '
		<style>
		table {
		  font-family: arial, sans-serif;
		  border-collapse: collapse;
		  width: 100%;
		}
		
		td, th {
		  border: 1px solid #dddddd;
		  text-align: left;
		  padding: 8px;
		}
		
		tr:nth-child(even) {
		  background-color: #dddddd;
		}
		</style>
		<h3 align="left">Total Biaya Pendaftaran</h3>
		   
		 <table border="1px" width="50%" cellpadding="5">
   
		  <tr>
   
		   <td width="20%">Biaya Daftar</td>
   
		   <td width="30%">'.$hdaf.'</td>
   
		  </tr>
   
		  <tr>
   
		   <td width="20%">Biaya Paket</td>
   
		   <td width="30%">'.$hpak.'</td>
   
		  </tr>
   
		  <tr>
   
		   <td width="20%">Total Biaya</td>
   
		   <td width="30%">'.$total.'</td>
   
		  </tr>
   
		 
   
		 </table>
		 <br><br>
		 silahkan Upload bukti transfer <strong><a href="localhost/adagym.com/home/bukbar" target="_blank" rel="noopener">disini</a></strong> untuk mengupload bukti bayar
		';
		// Isi email. Bisa dengan format html.
		$this->email->message($message);
		if ($this->email->send())
		{
			echo 'Sukses! email berhasil dikirim.';
		}
		else
		{
			echo 'Error! email tidak dapat dikirim.';
		}
	}
	
}
?>