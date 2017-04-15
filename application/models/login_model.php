<?php
	class Login_model extends CI_Model {
		function check_user($username, $password){
			$query = $this->db->query("select * from user where username='".$username."' and password='".md5($password)."'");	
			if ($query->num_rows()>0){
				return $query->result();
			}
			else{
				return FALSE;
			}
		}
	}
?>