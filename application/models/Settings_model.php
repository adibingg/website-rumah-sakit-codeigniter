<?php

defined('BASEPATH') OR exit("No dirrect script access allowed");

class Settings_model extends CI_Model{

    function getBanner(){
        $this->db->where('statis_type', 'card');
        $query = $this->db->get('static_pages');
        return $query;
    }

    function getBannerSingle($id){
    	$this->db->where('id_static_pages', $id);
    	$query = $this->db->get('static_pages');
    	return $query;
    }

    function deleteBanner($id){
        $this->db->where('id_static_pages', $id);
        $this->db->delete('static_pages');
    }

}