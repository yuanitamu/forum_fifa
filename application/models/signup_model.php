<?php
class Signup_model extends CI_Model {

	var $table = 'user';
	
	function signup($username, $password, $email)
	{
		$query = $this->db->insert($this->table, array('username' => $username, 'password' => md5($password), 'email' => $email,
		'userakses' => 'Member'));
		if($query)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
}
?>