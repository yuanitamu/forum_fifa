<?php 
	class Profil_model extends CI_Model{ 
		function __construct(){
        }
 		function tampil_profil(){
  			$query = $this->db->query("select * from user where id='".$_SESSION['id']."'");
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
		function get_profil($data){
			$this->db->where($data);
			$q=$this->db->get('user');
			
			$data=$q->first_row();
			return $data;
		}
		function edit($data){
			$this->db->where('id',$data['id']);
			$q=$this->db->update('user',$data);
			return $q;
		}
		
		function show($table){
			$data = $this->db->query("SELECT * from user,image where user.id=image.id and user.id='".$_SESSION['id']."'");
			if($data->num_rows() > 0){
				return $data->result_array();
			}
			else{
				return false;
			}
		}
		function insert($data,$table){
			$this->db->insert($table, $data);
		}	
	}
?>