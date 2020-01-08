<?php

defined('BASEPATH') OR exit("No dirrect script access allowed");

class Tracker_model extends CI_Model{
	function getHistoryLogin(){
		$query = $this->db->get('login_tracker');
		return $query;
	}
}