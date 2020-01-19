<?php

defined('BASEPATH') OR exit("No dirrect script access allowed");

class Inbox_model extends CI_Model{
	
	function showNewMessages(){
		$query = $this->db->get('inbox');
		return $query;
	}

	function getById($id){
		$this->db->where('inbox_id', $id);
		$query = $this->db->get('inbox');
		return $query->result();
	}

	function delete($id){
		$this->db->where('inbox_id',$id);
		$this->db->delete('inbox');
	}

}