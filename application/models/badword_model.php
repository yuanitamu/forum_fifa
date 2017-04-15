<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class badword_model extends CI_Model {

	function get_badword(){
		$q=$this->db->get('badword');
		$data=$q->result();
		return $data;
	}
	function getbadword($data){
		$this->db->where($data);
		$q=$this->db->get('badword');
		
		$data=$q->first_row();
		return $data;
	}
	function add($data){
		$q=$this->db->insert('badword',$data);
		return $q;
	}
	function edit($data){
		$this->db->where('wordid',$data['wordid']);
		$q=$this->db->update('badword',$data);
		return $q;
	}
	function delete($data)
	{
		$q=$this->db->delete('badword',$data);
		return $q;
	}
}