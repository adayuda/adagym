<?php 
/**
 * 
 */ 
class M_barang extends Ci_Model
{
	var $tabel = 'tbl_barang_gym'; 
	
	public function showAllBarang($gym){
		// // $this->db->order_by('created_at', 'desc');

		// $this->db->where('kd_gym', $gym);
		// $query = $this->db->get($this->tabel); 
		// if($query->num_rows() > 0){
		// 	return $query->result();
		// }else{
		// 	return false;
		// } 

		$query = $this->db->query('
				SELECT
					tbl_barang_gym.kd_barang,
					tbl_barang_gym.harga,
					tbl_barang.nama_barang,
					tbl_barang_gym.kd_gym,
					tbl_barang_gym.stok
				FROM tbl_barang_gym
				INNER JOIN tbl_barang ON tbl_barang_gym.kd_barang = tbl_barang.kd_barang
				INNER JOIN tbl_gym ON tbl_barang_gym.kd_gym = tbl_gym.kd_gym
				WHERE
				tbl_barang_gym.kd_gym = '. $gym
			);

			return $query->result();
	}

	public function addBarang(){
		$gym  = $this->session->userdata('ses_id'); 
		$field = array(
			'nama_barang'	=>$this->input->post('txtNama'),
			'harga'			=>$this->input->post('txtHarga'),
			'stok'			=>$this->input->post('txtStok'),
			'kd_gym'		=>$gym
			);
		$this->db->insert($this->tabel, $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function editBarang(){
		$id = $this->input->get('kd_barang');
		$this->db->where('kd_barang', $id);
		$query = $this->db->get($this->tabel);
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}
 
	public function updateBarang(){
		$id = $this->input->post('id');
		$field = array(
			'harga'			=>$this->input->post('harga'),
			'stok'			=>$this->input->post('stok')
		);
		$this->db->where('kd_barang', $id);
		$this->db->update('tbl_barang_gym', $field);
		if($this->db->affected_rows() > 0){
			return array('error' => false, 'message' => 'success', 'data' => $this->input->post());
		}else{ 
			return array('error' => true, 'message' => "id:".$id.", error:".json_encode($field), 'data' => $this->input->post());
		}
	}

	function deleteBarang(){
		$id = $this->input->get('kd_barang');
		$this->db->where('kd_barang', $id); 
		$this->db->delete($this->tabel);
		if($this->db->affected_rows() > 0){
			return array('error' => false, 'message' => 'Success');
		}else{
			return array('error' => true, 'message' => $this->db->error()['message']);
		}
	}

	public function getperbarang($gym, $kd) {
		
		if ($kd) {
			$query = $this->db->query('
				SELECT
					tbl_barang_gym.kd_barang,
					tbl_barang_gym.harga,
					tbl_barang.nama_barang,
					tbl_barang_gym.stok,
					tbl_barang_gym.kd_gym
				FROM tbl_barang_gym
				INNER JOIN tbl_barang ON tbl_barang_gym.kd_barang = tbl_barang.kd_barang
				INNER JOIN tbl_gym ON tbl_barang_gym.kd_gym = tbl_gym.kd_gym
				WHERE
				tbl_barang_gym.kd_barang = '. $kd .' AND tbl_barang_gym.kd_gym = '. $gym
			);

			return $query->result_array();
		}
		else {
			$query = $this->db->query('
				SELECT
					tbl_barang_gym.kd_barang,
					tbl_barang_gym.harga,
					tbl_barang.nama_barang,
					tbl_barang_gym.stok,
					tbl_barang_gym.kd_gym
				FROM tbl_barang_gym
				INNER JOIN tbl_barang ON tbl_barang_gym.kd_barang = tbl_barang.kd_barang
				INNER JOIN tbl_gym ON tbl_barang_gym.kd_gym = tbl_gym.kd_gym
				WHERE
				tbl_barang_gym.kd_gym = '. $gym
			);

			return $query->result_array();
		}
	}

	public function cekdatabarang($kd) {
		$query = $this->db->get_where('tbl_barang', array('kd_barang' => $kd));

		return $query->num_rows();
	}

	public function addTblBarang($kd, $nama) { 
		$data = array(
			'kd_barang' 	=> $kd,
			'nama_barang'	=> $nama
		); 
		$query = $this->db->insert('tbl_barang', $data);
	}

	public function addTblBarangGym($kd, $gym, $harga, $stok) {
		$data = array(
			'kd_barang' 	=> $kd,
			'kd_gym'		=> $gym,
			'harga' 		=> $harga,
			'stok'			=> $stok
		);

		$query = $this->db->insert('tbl_barang_gym', $data);
	}
}
?>