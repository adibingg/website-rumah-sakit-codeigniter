<?php

defined('BASEPATH') OR exit("No dirrect script access allowed");

class Service_model extends CI_Model{

	private $table = 'services';
	private $primaryKey = 'service_id';

	function getAllServices(){
		$query = $this->db->get('services');
		return $query->result();
	}

	function getById($id){
		$this->db->where('service_id', $id);
		$query = $this->db->get('services');
		return $query->result();
	}

	function saveService($post){
		$this->db->insert('services', $post);
	}

	function deleteSingle($id){
		$this->db->where('service_id', $id);
		$this->db->delete('services');
	}

	function updateService($id, $post){
		$this->db->where('service_id', $id);
		$this->db->update('services', $post);
	}


}