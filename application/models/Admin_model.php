<?php

class Admin_model extends CI_Model{

	function getBeritaPublish(){
		return $this->db->query("SELECT * FROM news WHERE status='published'");
	}

	function getArticle(){
		$this->db->select('*');
		$this->db->from('news');
		$this->db->join('category', 'category.category_id = news.category_id');
		$this->db->join('admins', 'admins.id_admin = news.created_by');
		$this->db->where('status = "published"');
		$this->db->order_by('date_post', 'desc');
		$get = $this->db->get();
		return $get;
		
	}

	function getAdmins(){
		$data = $this->db->get('admins');
		return $data->result();
	}

	function getBeritaId($id)
	{
		$this->db->select('*');
		$this->db->from('news');
		$this->db->where('news_id', $id);
		$this->db->join('category', 'category.category_id = news.category_id');
		$data = $this->db->get();
		return $data;
	}

	function getJumlahBerita(){
		return $this->db->get('news')->num_rows();
	}

	function getKategori(){
		return $this->db->get('category');
	}

	function getAlbum(){
		return $this->db->get('album');
	}

	function getFoto(){
		return $this->db->get('gallery');
	}

	function getPendidikan(){
		return $this->db->get('pendidikan');
	}

	function getDokter(){
		return $this->db->get('dokter');
	}

	function getNav(){
		$navigation = $this->db->get('navigation');
		return $navigation;
	}


}