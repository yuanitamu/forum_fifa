<?php 
	class Forum_model extends CI_Model{ 
		function __construct(){
        }
 		function list_posting(){
  			$query = $this->db->query("select post_id, title, content, tanggal, username from post, user where post.user_id=user.id order by tanggal desc");
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
		 function tampil_post(){
  			$query = $this->db->query("select * post user where postid='".$_GET['postid']."'");
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
		function get_post($data){
			$this->db->where($data);
			$q=$this->db->get('post');
			
			$data=$q->first_row();
			return $data;
		}
	}
?>