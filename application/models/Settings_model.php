<?php

defined('BASEPATH') OR exit("No dirrect script access allowed");

class Settings_model extends CI_Model{

    function getBanner(){
        $this->db->where('statis_type', 'card');
        $query = $this->db->get('static_pages');
        return $query;
    }
}