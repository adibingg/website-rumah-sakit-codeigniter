<?php

class Admin_model extends CI_Model{

	//Berita Query
	function TampilBerita(){
		//Ambil data Berita
		$this->db->select('*');
		$this->db->from('news');
		$this->db->join('category', 'category.category_id = news.category_id');
		$this->db->join('admins', 'admins.id_admin = news.created_by');
		$this->db->where('status = "published"');
		$this->db->order_by('date_post', 'desc');
		$query = $this->db->get();
		return $query;
	}

	function TampilDraft(){

	}

	function TampilBeritaId(){

	}

	function HapusBerita($id){
		//Hapus Gambar
		$this->db->where('news_id', $id);
		$showrow = $this->db->get('news');
		$result = $showrow->row();
		unlink("./uploads/$result->images");

		//Hapus Data Artikel dari Database
		$this->db->where('news_id', $id);
		$query = $this->db->delete('news');
		return $query;
	}

	//Album dan Galeri Query
	function getAlbum(){
		//Ambil data Album
		$query = $this->db->get('album');
		return $query;
	}

	function SimpanAlbum($data){
		//Simpan data Album
		$this->db->insert('album', $data);
		$this->session->set_flashdata('info', 'Album berhasil di tambahkan');
		redirect('admin/galeri','refresh');
	}

	function AlbumId($id){
		//Ambil data baris album dengan id
		$this->db->where('album_id', $id);
		$query = $this->db->get('album');
		return $query;
	}

	function PerbaharuiAlbum($id, $data){
		//Perbaharui album
		$query = $this->db->where('album_id', $id)->update('album', $data);
		$this->session->set_flashdata('info', 'Album berhasil diperbaharui');
		redirect('admin/galeri', 'refresh');
	}

	function checkAlbum($id){
		//Sebelum menghapus foto, check apakah album berisi foto atau kosong
		$this->db->where('album_id', $id);
		$query = $this->db->get('gallery');
		return $query;
	}

	function HapusAlbum($id){
		//Hapus data album
		$this->db->where('album_id', $id)->delete('album');
		redirect('admin/galeri', 'refresh');
	}

	function getFoto(){
		//Ambil data foto
		$this->db->select('*');
		$this->db->from('gallery');
		$this->db->join('album', 'album.album_id = gallery.album_id');
		$query = $this->db->get();
		return $query;
	}

	function getFotoByAlbum($id){
		//Filter foto berdasarkan album
		$this->db->where('album_id', $id);
		$query = $this->db->get('gallery');
		return $query;
		
	}

	function getFotoId($id){
		//Hapus foto dari direktori
		$this->db->where('gallery_id', $id);
		$selecttable = $this->db->get('gallery');
		$row = $selecttable->row();
		unlink("./uploads/$row->images");

		//Hapus data dari database
		$this->db->where('gallery_id', $id);
		$query = $this->db->delete('gallery');
		return $query;
	}

	function getAdmins(){
		//Ambil data Admin
		$data = $this->db->get('admins');
		return $data->result();
	}

	function getBeritaId($id){
		//Ambil data berita berdasarkan id
		$this->db->select('*');
		$this->db->from('news');
		$this->db->where('news_id', $id);
		$this->db->join('category', 'category.category_id = news.category_id');
		$data = $this->db->get();
		return $data;
	}

	//Dokter
	function getDoctor(){
		$this->db->select('*');
        $this->db->from('doctor');
        $this->db->join('specialist', 'doctor.specialist_id = specialist.specialist_id');
        $query = $this->db->get();
        return $query;
	}
	
	function getSpecialist(){
		$this->db->order_by('specialist_name', 'asc');
		$query = $this->db->get('specialist');
		return $query;
	}

	function saveDokter(){

	}

	function getJadwal(){
		$this->db->select('*');
		$this->db->from('doctor_schedule');
		$this->db->join('doctor', 'doctor_schedule.doctor_id = doctor.doctor_id');
		$query = $this->db->get();
		return $query;
	}

	function checkJadwal($check){
		$this->db->where('doctor_id', $check);
		$query = $this->db->get('doctor_schedule');
		return $query;
	}

	function saveJadwal($data){
		$query = $this->db->insert('doctor_schedule', $data);
		return $query;
	}

	





	function getJumlahBerita(){
		//Ambil jumlah total berita di database
		return $this->db->get('news')->num_rows();
	}

	function getKategori(){
		//Ambil data kategori
		return $this->db->get('category');
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