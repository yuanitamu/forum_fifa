<?php 
	class Member_model extends CI_Model{ 
		function __construct(){
        }
 		function list_member(){
  			$query = $this->db->query("select * from user where userakses='Member' order by id asc");
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
		function delete_member($id){
			$query = $this->db->query("delete from user where id='$id'");
       		 //lihat apakah ada data dalam tabel

		}
	}
?>