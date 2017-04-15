<?php
class Newpost_model extends CI_Model {

	function newpost($judul, $content)
	{
		$s=mysql_fetch_array(mysql_query("select * from user where email='$email1'"));
			$query = $this->db->query("INSERT INTO post (title, tanggal, content, user_id)
				VALUES('".$judul."',CURRENT_TIMESTAMP,'".$content."','".$_SESSION['id']."')");
		
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