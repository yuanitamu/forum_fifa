<?php 
	class Message_model extends CI_Model{ 
		function __construct(){
        }
 		function list_outbox(){
  			$query = $this->db->query("select * from message where message.sender_id='".$_SESSION['id']."' order by date(tanggal) desc");
       		 //lihat apakah ada data dalam tabel
        	$num = $query->num_rows();
        	if($num>0){
          	  //Mengirimkan data array hasil query
            	return $query->result();
            //Function result() hampir sama dengan function mysql_fetch_array()
       		 }
       		 else{
          	  return 0;
            //Kirimkan 0 jika tidak ada datanya
	 		}
		 }
		 function list_inbox(){
  			$query = $this->db->query("select * from message, user where message.receiver_id='".$_SESSION['id']."' and message.sender_id=user.id order by date(tanggal) desc");
       		 //lihat apakah ada data dalam tabel
        	$num = $query->num_rows();
        	if($num>0){
          	  //Mengirimkan data array hasil query
            	return $query->result();
            //Function result() hampir sama dengan function mysql_fetch_array()
       		 }
       		 else{
          	  return 0;
            //Kirimkan 0 jika tidak ada datanya
	 		}
		 }
	}
?>