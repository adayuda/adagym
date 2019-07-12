<?php 
 
	class M_login extends CI_Model{	
		function auth_admin($username, $password){
			$query = $this->db->query("SELECT * FROM tbl_admin WHERE username='$username' AND password = '$password' LIMIT 1");
			return($query);

		}
		function auth_gym($username, $password){
			$query = $this->db->query("SELECT * FROM tbl_gym WHERE username='$username' AND password = '$password' LIMIT 1");
			return($query);

		}
		// function auth_member($username, $password){
		// 	$query = $this->db->query("SELECT * FROM tbl_member WHERE username='$username' AND password = '$password' LIMIT 1");
		// 	return($query);

		// }
		

		
	}

?>		
