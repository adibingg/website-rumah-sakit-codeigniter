<?php 

defined('BASEPATH') OR exit("No dirrect script access allowed");

class News_model extends CI_Model{
    function getKategori(){
        $query = $this->db->get('category');
        return $query;
    }

    function getCategory(){
        $query = $this->db->get('category');
        return $query->result();
    }

    function saveCategory($post){
        $query =$this->db->insert('category', $post);
        return $query;
    }

    function saveTag($post){
        $query = $this->db->insert('tags', $post);
        return $query;
    }

    function getTag(){
        $query = $this->db->get('tags');
        return $query->result();
    }

    function TampilBerita(){
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
        $this->db->where('news_id', $id);
        $showrow = $this->db->get('news');
        $result = $showrow->row();
        unlink("./uploads/$result->images");

        $this->db->where('news_id', $id);
        $query = $this->db->delete('news');
        return $query;
    }
}
    