<?php
/**
 * 
 */
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

			$this->m->addtblmemberDaf($nama, $umur, $jk, $alamat, $email, $status, $telp );
			//if($cekDataMember == true){
			//$newkode = $this->m->getlastid();
			$this->d->addTblDaftarDaf( $gym, $hdaf ,$status);
			$this->i->addtblIuranDaf( $gym, $paket, $hpak,$status);
			//}
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
	function bukBar(){
		$this->load->view('home/buktiBayar');
	}

	
}
?>