<?php

defined('BASEPATH') OR exit("No dirrect script access allowed");

class Tracker_model extends CI_Model{
	function getHistoryLogin(){
		$this->db->order_by('due_date','ASC');
		$query = $this->db->get('login_tracker');
		return $query;
	}
}