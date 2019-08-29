<?php

class Admin_model extends CI_Model{

	//Berita Query
	function getKategori(){
		$query = $this->db->get('category');
		return $query;
	}

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
		//Ambil data Draft
		$this->db->select('*');
		$this->db->from('news');
		$this->db->join('category', 'category.category_id = news.category_id');
		$this->db->join('admins', 'admins.id_admin = news.created_by');
		$this->db->where('status = "draft"');
		$this->db->order_by('date_post', 'desc');
		$query = $this->db->get();
		return $query;
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

	//Navigasi dan Halaman Statis Query
	function getNav(){
		$query = $this->db->get('navigation');
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
		//Tampilkan Data Dokter di halaman admin
		$this->db->select('*');
        $this->db->from('doctor');
        $this->db->join('specialist', 'doctor.specialist_id = specialist.specialist_id');
        $query = $this->db->get();
        return $query;
	}
	
	function getSpecialist(){
		//Tampilkan data spesialis
		$this->db->order_by('specialist_name', 'asc');
		$query = $this->db->get('specialist');
		return $query;
	}

	function saveDokter(){
		//Simpan data dokter

	}

	function checkJadwal($check){
		//Cek apakah ada jadwal dokter sebelum data dokter di hapus
		$this->db->where('doctor_id', $check);
		$query = $this->db->get('doctor_schedule');
		return $query;
	}

	function getDeleteDoctor($id){
		//Hapus Data Dokter
		$this->db->where('doctor_id', $id);
		$selecttable = $this->db->get('doctor');
		$row = $selecttable->row();
		unlink("./uploads/$row->images");

		//Hapus data dari database
		$this->db->where('doctor_id', $id);
		$query = $this->db->delete('doctor');
		return $query;
	}

	function getJadwal(){
		//Tampilkan Jadwal Dokter
		$this->db->select('*');
		$this->db->from('doctor_schedule');
		$this->db->join('doctor', 'doctor_schedule.doctor_id = doctor.doctor_id');
		$query = $this->db->get();
		return $query;
	}



	function saveJadwal($data){
		$query = $this->db->insert('doctor_schedule', $data);
		return $query;
	}

	//Jadwal Poli
	function getJadwalPoli(){
		//Ambil data jadwal poli
		$query = $this->db->get('poli_schedule');
		return $query;
	}

	function getPoliId($id){
		$this->db->where('id_poli_schedule', $id);
		$query = $this->db->delete('poli_schedule');
		return $query;
	}

	function savePoli($data){
		//Simpan Jadwal Poli
		$query = $this->db->insert('poli_schedule', $data);
		return $query;

	}

	function deleteJadwalPoli($id){
		//Jadwal Poli
		$this->db->where('id_poli_schedule');
		$query = $this->db->get('poli_schedule');
		return $query;
	}

	//

}