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
        $data = $this->db->get();
        return $data;
    }

    public function getNewsId($id){
        $this->db->where('id_news', $id);
        $data = $this->db->get('news');
        return $data;
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
}