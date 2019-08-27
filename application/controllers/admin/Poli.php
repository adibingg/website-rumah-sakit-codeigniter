<?php 

defined('BASEPATH') OR exit("No script dirrect access allowed");

class Poli extends CI_Controller{
    function index(){
        $config = array (
            'title' => "Jadwal Poli"
        );

        $this->load->view('admin/jadwal-poli', $config);
    }

    function add_poli(){
        $config = array (
            'title' => "Jadwal Poli"
        );

        $this->load->view('admin/jadwal-poli', $config);
    }


}