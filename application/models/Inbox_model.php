<?php

defined('BASEPATH') OR exit("No dirrect script access allowed");

class Inbox_model extends CI_Model{
    function showNewMessages(){
		$query = $this->db->get('inbox');
		return $query;
	}
}