<?php 

defined('BASEPATH') OR exit("No dirrect script allowed!");

class Home_model extends CI_Model{
    function getNavbar(){
        return $this->db->get('navigation');
    }

    function getConfig(){
        return $this->db->get('config');
    }

    function getLatestNews(){
        $this->db->select('*');
        $this->db->from('news');
        $this->db->join('category', 'news.category_id=category.category_id');
        $this->db->limit('8');
        $query = $this->db->get();
        return $query;
    }

    public function getberita($id){
        $this->db->select('*');
        $this->db->from('news');
        $this->db->join('category','category.category_id=news.category_id');
        $this->db->order_by('news.date_post','desc');
        $this->db->where('category.category_link', $id);
        $data = $this->db->get();
        return $data;
    }

    function detailBerita($id)
	{
		$this->db->select('*');
		$this->db->from('news');
        $this->db->where('seo', $id);
        $this->db->limit('1');
		$this->db->join('category', 'category.category_id = news.category_id');
		$data = $this->db->get();
		return $data;
    }

    function getRooms(){
        $this->db->limit('7');
        $this->db->order_by('room_name', 'ASC');
        $this->db->order_by('class', 'ASC');
        $query = $this->db->get('room');
        return $query;
    }

    function getCategory(){
        $query = $this->db->get('category');
        return $query;
    }

    function getDoctor(){
        $this->db->select('*');
        $this->db->from('doctor');
        $this->db->join('specialist', 'doctor.specialist_id = specialist.specialist_id');
        $query = $this->db->get();
        return $query;
    }

    function reciveMessage($input){
        $result = $this->db->insert('inbox', $input);
    	return $result;
    }

    function getAllServices(){
        $query = $this->db->get('services');
        return $query;
    }

    public function getGaleri(){
        $this->db->select('*');
        $this->db->from('gallery');
        $this->db->join('album', 'album.album_id=gallery.album_id');
        $hasil = $this->db->get();
        return $hasil;

    }

    public function getAlbum(){
        $data = $this->db->get('album');
        return $data;
    }

    public function getProduk(){
        $data = $this->db->get('product');
        return $data;
    }

    public function getFacilities(){
        $this->db->limit('3');
        $data = $this->db->get('facilities');
        return $data;
    }

    function getServiceHome(){
        $this->db->limit('5');
        $query = $this->db->get('services');
        return $query;
    }

    public function getLatestActivities(){
        $this->db->select('*');
        $this->db->from('gallery');
        $this->db->join('album', 'album.album_id=gallery.album_id');
        $this->db->order_by('date', 'ASC');
        $this->db->limit('5');
        $data = $this->db->get();
        return $data;
    }

    function getProfile(){
        $query = $this->db->get('profile');
        return $query;
    }

    function getJadwalDokter(){
        $this->db->select('*');
        $this->db->from('doctor_schedule');
        $this->db->join('doctor', 'doctor.doctor_id=doctor_schedule.doctor_id');
        $this->db->join('specialist', 'specialist.specialist_id=doctor.specialist_id');
        $query = $this->db->get();
        return $query;
    }

    function getJadwalPoli(){
        $query = $this->db->get('poli_schedule');
        return $query;
    }
    
    function getPolyClinic(){
        $query = $this->db->get('polyclinic');
        return $query;
    }

    function getCategoryCareer(){
        $this->db->order_by('id_career_category','asc');
        $query = $this->db->get('career_category');
        return $query;
    }

    function getCareer(){
        $this->db->select('*');
        $this->db->from('career');
        $this->db->join('career_category', 'career.id_career_category=career_category.id_career_category');
        $query = $this->db->get();
        return $query;
    }

    function getPagesRow($id){
        $this->db->select('*');
        $this->db->where('url', $id);
        $this->db->from('static_pages');
        $this->db->join('navigation', 'static_pages.id_navigation=navigation.id_navigation');
        $this->db->limit('1');
        $query = $this->db->get();
        return $query;
    }

    function countView($id){

    }

    function getCard(){
        $this->db->where('statis_type', 'card');
        $query = $this->db->get('static_pages');
        return $query;
    }

    function getSidebar(){
        $this->db->where('statis_type', 'sidebar');
        $query = $this->db->get('static_pages');
        return $query;
    }

    
}