<?php
	class Newmessage_model extends CI_Model {
		function newmessage($email1, $subject, $message){
		$s=mysql_fetch_array(mysql_query("select * from user where email='$email1'"));
			$query = $this->db->query("INSERT INTO message (sender_id, receiver_id, subject, tanggal, email1, message)
				VALUES('".$_SESSION['id']."','".$s['id']."','".$subject."',CURRENT_TIMESTAMP,'".$email1."','".nl2br($message)."')");
			if($query){
				return TRUE;
			}
			else{
				return FALSE;
		}
	}
}
?>