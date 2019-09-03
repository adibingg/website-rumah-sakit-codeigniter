<?php 

defined('BASEPATH') OR exit("No dirrect script allowed!");

class Home_model extends CI_Model{
    function getNavbar(){
        return $this->db->get('navigation');
    }

    function getConfig(){
        return $this->db->get('config');
    }

    public function getberita(){
        $this->db->select('*');
        $this->db->from('news');
        $this->db->join('category','category.category_id=news.category_id');
        $this->db->order_by('news.date_post','desc');
        $data = $this->db->get();
        return $data;
    }

    function detailBerita($id)
	{
		$this->db->select('*');
		$this->db->from('news');
		$this->db->where('seo', $id);
		$this->db->join('category', 'category.category_id = news.category_id');
		$data = $this->db->get();
		return $data;
    }

    function getDoctor(){
        $this->db->select('*');
        $this->db->from('doctor');
        $this->db->join('specialist', 'doctor.specialist_id = specialist.specialist_id');
        $query = $this->db->get();
        return $query;
    }

    public function reciveMessage(){
        $data = array(
			'name' 				=> $this->input->post('nama_pengirim','true'),
			'contact' 			=> $this->input->post('kontak','true'),
			'subject' 			=> $this->input->post('subjek','true'),
			'messages_content' 	=> $this->input->post('messages','true'),
        );
        $result = $this->db->insert('messages', $data);
    	return $result;
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
        $data = $this->db->get('facilities');
        return $data;
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

    public function getLatestNews(){
        $this->db->select('*');
        $this->db->from('news');
        $this->db->join('category','category.category_id=news.category_id');
        $this->db->order_by('date_post','ASC');
        $this->db->limit('6');
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

    
}