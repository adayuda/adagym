<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {
  public function __construct() {
    parent::__construct();

    $this->load->model('M_barang', 'brg');
    $this->load->model('M_penjualan', 'penj');
  }

  public function index() {
    $this->load->view('penjualan/index');
  }

  public function getBarang() {
    $kd_barang	= $this->input->post('kd_barang');
    $gym 	 			= $this->session->userdata('ses_id');

    $qry = $this->brg->getperbarang($gym, $kd_barang);

    $nama = "";
    $harga = 0;
    $qty = $this->input->post('qty_barang');

    foreach ($qry as $x) {
      $nama   = $x['nama_barang'];
      $harga  = $x['harga'];
    }

    $data = array (
      'id'    => $kd_barang,
      'name'  => $nama,
      'price' => $harga,
      'qty'   => $qty,
      'sub'   => $qty*$harga
    );
      
      $this->cart->insert($data);
    // }
    echo json_encode($this->total_cart());
    // echo $this->show_cart();
  }

  public function addCart() {
    $kd_barang  = $this->input->post('kd_barang');
    $nama       = $this->input->post('nama_barang');
    $harga      = $this->input->post('harga_barang');
    $qty        = $this->input->post('qty_barang');
    $sub        = $this->input->post('sub');

    $gym        = $this->session->userdata('ses_id');

    $data = array(
        'id'    => $kd_barang,
        'name'  => $nama,
        'price' => $harga,
        'qty'   => 1,
        'sub'   => $qty * $harga
    );

    $this->cart->insert($data);
    echo json_encode($this->total_cart());
  }

  public function update_cart() {
    $kd_barang  = $this->input->post('rowid');
    $qty        = $this->input->post('qty_barang');
    $harga      = $this->input->post('harga');

    $sub        = $qty*$harga;

    $data = array(
      'rowid'  => $kd_barang-1,
      'qty'    => $qty,
      'sub'    => $sub
    );

    echo json_encode($this->cart->update($data));
  }

  public function show_cart() {
    $output = '';
    $no     = 0;

    foreach ($this->cart->contents() as $items) {
      $no++;
      $output .='
        <tr>
            <td><input type="text" name="" value="'. $no .'"/></td>
            <td><input type="text" name="" value="'. $items['id'] .'" class="form-control input-bg" required readonly></td>
            <td><input type="text" name="" value="'. $items['name'] .'" class="form-control input-bg id-JL" required readonly></td>
            <td><input type="number" name="" value="'. $items['price'] .'" class="form-control input-bg" readonly required></td>
            <td><input type="number" name="" value="'. $items['qty'] .'" class="form-control input-bg" required></td>
            <td><input type="number" name="" value="'. $items['sub'] .'" class="form-control input-bg" readonly required></td>
        </tr>
      ';
    }

    return $output;
  }

  public function load_cart() {
    echo $this->show_cart();
  }

  public function des_cart() {
    return $this->cart->destroy();
  }

  public function list() {
    $this->load->view('penjualan/list');
  }

  public function total_cart() {
    return $this->cart->total();
  }

  public function insert_tbl() {
    $this->penj->insert_data();
    $this->des_cart();
  }

  public function detail_transaksi() {
    $data['transaksi'] = $this->penj->getdetail();

    $this->load->view('penjualan/detail', $data);
  }

  public function sub_detail_transaksi() {
    $no_trx = $this->input->post('post_no_trx');

    $data['subtransaksi']   = $this->penj->getsubdetail($no_trx);
    $data['sendgrandtotal'] = $this->penj->grandtotalsub($no_trx);

    $this->load->view('penjualan/sub_detail', $data);
  }
}

?>
