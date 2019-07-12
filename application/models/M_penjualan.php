<?php
class M_penjualan extends CI_Model{
    var $newtbl = 'tbl_transaksi';

    public function __construct() {
        parent::__construct();
    }

    public function insert_data() {
        $gym = $this->session->userdata('ses_id');

        $data = array(
            'kd_gym'    => $gym,
            'tanggal'   => date('Y-m-d')
        );
        $this->db->insert('tbl_transaksi', $data);

        $insert_id = $this->db->insert_id();

        foreach($this->cart->contents() as $items) {
            $newdata = array(
                'no_trx' => $insert_id,
                'kd_barang' => $items['id'],
                'jumlah'    => $items['qty'],
                'harga'     => $items['price']
            );
            
            $this->db->insert('tbl_detail_transaksi', $newdata);
            
        }

        return $insert_id;
    }

    public function getdetail() {
        $kd_gym = $this->session->userdata('ses_id');

        $this->db->select('tbl_detail_transaksi.no_trx, tbl_transaksi.tanggal');
        $this->db->from('tbl_detail_transaksi');
        $this->db->join('tbl_transaksi', 'tbl_transaksi.no_trx = tbl_detail_transaksi.no_trx');
        $this->db->where(array('tbl_transaksi.kd_gym' => $kd_gym));
        $this->db->order_by('tanggal', 'DESC');
        $query = $this->db->get();

        return $query->result();
    }

    public function getsubdetail($no_trx) {
        $kd_gym = $this->session->userdata('ses_id');

        $this->db->select(
            '`tbl_detail_transaksi`.`no_trx`, 
             `tbl_barang`.`nama_barang`, 
             `tbl_detail_transaksi`.`jumlah`, 
             `tbl_detail_transaksi`.`harga`, 
             `tbl_detail_transaksi`.`jumlah` * `tbl_detail_transaksi`.`harga` AS `Total`', FALSE);
        $this->db->from('tbl_detail_transaksi');
        $this->db->join('tbl_barang', 'tbl_detail_transaksi.kd_barang = tbl_barang.kd_barang');
        $this->db->join('tbl_transaksi', 'tbl_detail_transaksi.no_trx = tbl_transaksi.no_trx');
        $this->db->where(array('tbl_detail_transaksi.no_trx' => $no_trx, 'tbl_transaksi.kd_gym' => $kd_gym));
        $query = $this->db->get();

        return $query->result();
    }

    public function grandtotalsub($no_trx) {
        $kd_gym = $this->session->userdata('ses_id');

        $this->db->select('SUM(`tbl_detail_transaksi`.`jumlah` * `tbl_detail_transaksi`.`harga`) AS `GrandTotal`', FALSE);
        $this->db->from('tbl_detail_transaksi');
        $this->db->join('tbl_transaksi', 'tbl_detail_transaksi.no_trx = tbl_transaksi.no_trx');
        $this->db->where(array('tbl_detail_transaksi.no_trx' => $no_trx, 'tbl_transaksi.kd_gym' => $kd_gym));
        $query = $this->db->get();

        return $query->result();
    }
}
?>
