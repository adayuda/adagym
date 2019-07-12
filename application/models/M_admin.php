<?php
class M_admin extends Ci_Model{
    function showData($kd){
		
		$query = $this->db->query('SELECT tbl_admin.nama,
										  tbl_admin.username,
										  
									FROM tbl_admin
									WHERE tbl_admin.kd_admin = '.$kd);
		// foreach($query->result() as $data){
		// 	$hasil = array(
		// 		nama 	=> $data->nama,
		// 		alamat 	=> $data->alamat,
		// 		no_telp => $data->no_telp,
		// 		email 	=> $data->email
		// 	);
		// 	return $hasil;
		// }
		return $query->result();
	}
	function updateAdmin($kd){
		$id = $this->session->userdata('ses_id');
		$field = array(
			// 'kd_gym'		=>$this->input->post('kd'),
			'nama'			=>$this->input->post('nama'),
			'alamat'		=>$this->input->post('alamat'),
			'no_telp'		=>$this->input->post('no_telp'),
			'email'		 	=>$this->input->post('email')
		);
		$this->db->where('kd_gym', $id);
		$this->db->update('tbl_gym', $field);
		if($this->db->affected_rows() > 0){
			return array('error' => false, 'message' => 'success', 'data' => $this->input->post());
		}else{ 
			return array('error' => true, 'message' => "id:".$id.", error:".json_encode($field), 'data' => $this->input->post());
		}
	}
}
?>