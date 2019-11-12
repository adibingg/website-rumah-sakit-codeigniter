<?php

class Sec_model extends CI_Model
{
    function getSec()
    {
        if(!$this->session->userdata('id_admin')){
           redirect('admin/login');
        }
    }

    function checkcred(){
        
     
    }
}
