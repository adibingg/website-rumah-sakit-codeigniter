<?php

defined('BASEPATH') OR exit("No dirrect script access allowed");

class Facilities_model extends CI_Model{

    function getFacilities(){
        $query = $this->db->get('facilities');
        return $query;
    }

    function getFacilitiesId($id){
        $this->db->where('facilities_id', $id);
        $query = $this->db->get('facilities');
        return $query;
    }

    function deleteFacilities($id){
        $this->db->where('facilities_id', $id);
		$selecttable = $this->db->get('facilities');
		$row = $selecttable->row();
        unlink("./uploads/$row->images");
        
        $this->db->where('facilities_id', $id);
        $this->db->delete('facilities');
    }
}