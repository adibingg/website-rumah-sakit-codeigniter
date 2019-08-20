<?php

defined('BASEPATH') OR exit("No dirrect script allowed!");


class Security_model extends CI_Model{

    public function get_session()
    {
        if( !$this->session->userdata('id_admins')){
            redirect('error');
        }else{
            return true;
        }
        
    }
}