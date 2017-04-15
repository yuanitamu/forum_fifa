<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Score_model extends CI_Model {

	function get_score(){
		$q=$this->db->get('livescore');
		$data=$q->result();
		return $data;
	}
	function get_scores($data){
		$this->db->where($data);
		$q=$this->db->get('livescore');
		
		$data=$q->first_row();
		return $data;
	}
	function add($data){
		$q=$this->db->insert('livescore',$data);
		return $q;
	}
	function edit($data){
		$this->db->where('s_id',$data['s_id']);
		$q=$this->db->update('livescore',$data);
		return $q;
	}
	function delete($data)
	{
		$q=$this->db->delete('livescore',$data);
		return $q;
	}
}