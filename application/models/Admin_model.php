<?php

class Admin_model extends CI_Model{
	
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

	//Admin
	function getAdmins(){
		//Ambil data Admin
		$data = $this->db->get('admins');
		return $data->result();
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

	function getDoctorDetail($id){
		$this->db->where('doctor_id', $id);
		$this->db->join('specialist', 'doctor.specialist_id = specialist.specialist_id');
		$query = $this->db->get('doctor');
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

	function checkJadwal($id){
		//Cek apakah ada jadwal dokter sebelum data dokter di hapus
		$this->db->where('doctor_id', $id);
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

	function deleteJadwalDokter($id){
		$this->db->where('doctor_schedule_id', $id);
		$query = $this->db->delete('doctor_schedule');
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

	//Profile
	function getProfile(){
		//Ambil data Profil
		$this->db->limit(1);
		$query = $this->db->get('profile');
		return $query;
	}

	function updateProfile($id, $data){
		//Simpan pembaharuan data profile
		$this->db->where('id', $id);
		$query = $this->db->update('profile', $data);
		return $query;
	}
	function UpdateVisiMisi($id, $data){
		//simpan pembaharuan visi misi
		$this->db->where('id', $id);
		$query = $this->db->update('profile', $data);
		return $query;
	}

	function UpdateSejarah($id, $data){
		//simpan pembaharuan sejarah rumah sakit
		$this->db->where('id', $id);
		$query = $this->db->update('profile', $data);
		return $query;
	}

	//Informasi Karir
	function getCareerCategory(){
		//Tampilkan Kategori Kari
		$query = $this->db->get('career_category');
		return $query;
	}

	function getCareerCategoryId($id){
		$this->db->where('id_career_category', $id);
		$query = $this->db->get('career_category');
		return $query;
	}

	function updateCategoryCareer($id, $data){
		$this->db->where('id_career_category', $id);
		$query = $this->db->update('career_category', $data);
		return $query;
	}

	function checkCategoryCareer($id){
		$this->db->where('id_career_category', $id);
		$query = $this->db->get('career');
		return $query;
	}

	function deleteCareerCategory($id){
		$this->db->where('id_career_category', $id);
		$query = $this->db->delete('career_category');
		return $query;
	}

	function getCareer(){
		//Tampilkan Informasi Karir
		$this->db->select('*');
		$this->db->from('career');
		$this->db->join('career_category', 'career.id_career_category = career_category.id_career_category');
		$query = $this->db->get();
		return $query;
	}

	function getCareerId($id){
		//Ambil row karir
		$this->db->select('*');
		$this->db->from('career');
		$this->db->where('career_id', $id);
		$this->db->join('career_category', 'career.id_career_category = career_category.id_career_category');
		$query = $this->db->get();
		return $query;
	}

	function filterCareer(){

	}

	function SimpanKategoriKarir($data){
		//Simpan kategori karir
		$query = $this->db->insert('career_category', $data);
		return $query;
	}

	function saveCareer($data){
		//Simpan data lowongan kerja
		$query = $this->db->insert('career', $data);
		return $query;
	}

	function updateCareer($id, $data){
		$this->db->where('career_id', $id);
		$query = $this->db->update('career', $data);
		return $query;
	}

	function deleteCareer($id){
		//Hapus informasi karir
		$this->db->where('career_id', $id);
		$query = $this->db->delete('career');
		return $query;
	}

	//Pengguna
	function getPengguna(){
		$query = $this->db->get('admins');
		return $query;
	}

	function addPengguna($data){
		$query = $this->db->insert('admins', $data);
	}

	

	

}