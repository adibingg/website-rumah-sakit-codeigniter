<?php

defined('BASEPATH') OR exit("No dirrect script access allowed");

class Comments_model extends CI_Model{

	function getAllComments(){
		$this->db->select('*');
		$this->db->from('comments');
		$this->db->join('news','news.news_id = comments.news_id');
		$query = $this->db->get();
		return $query;
	}

}