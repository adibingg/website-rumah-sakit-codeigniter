<?php

defined('BASEPATH') OR exit("No dirrect script access allowed");

class Polyclinic_model extends CI_Model{
    
    function getPolyclinic(){
        $query = $this->db->get('polyclinic');
        return $query->result();
    }

    function getPolyById($id){
        $this->db->where('polyclinic_id', $id);
        $query = $this->db->get('polyclinic');
        return $query->result();
    }

    function getPolyclinicId($id){
        $this->db->where('polyclinic_id', $id)->delete('polyclinic');
    }

    function savePolyclinic($post){
        $this->db->insert('polyclinic', $post);
    }

    function updatePolyclinic($post, $id){
        $this->db->where('polyclinic_id', $id);
        $this->db->update('polyclinic', $post);
    }

    function deletePolyclinic($id){
        
    }
}