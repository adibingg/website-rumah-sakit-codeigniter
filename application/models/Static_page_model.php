<?php

defined('BASEPATH') OR exit("No dirrect script access allowed");

class Static_page_model extends CI_Model{
    //Navigasi dan Halaman Statis Query
	function getNav(){
		$query = $this->db->get('navigation');
		return $query;
	}

	function getNavId($id){
		$this->db->where('id_navigation', $id);
		$query = $this->db->get('navigation');
		return $query;
	}

	function saveNav($data){
		$query = $this->db->insert('navigation', $data);
		return $query;
	}

	function saveUpdate($id, $data){
		$this->db->where('id_navigation', $id);
		$query = $this->db->update('navigation', $data);
		return $query;
	}

	function deleteNav($id){
		$this->db->where('id_navigation', $id);
		$query = $this->db->delete('navigation');
		return $query;
	}

	function getStaticPages(){
		$menu = $this->db->get('navigation');
		return $menu;
	}

	function getStaticPagesId($id){
		$this->db->where('id_static_pages', $id);
		$query = $this->db->get('static_pages');
		return $query;
	}

	function deletePages($id){
		//Hapus Halaman Statis
		//Hapus Foto
		$this->db->where('id_static_pages', $id);
		$showrow = $this->db->get('static_pages');
		$result = $showrow->row();
		unlink("./uploads/$result->thumbnail");
		//Hapus data dari database
		$this->db->where('id_static_pages', $id);
		$query = $this->db->delete('static_pages');
		return $query;
	}
}