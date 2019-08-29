<?php

defined('BASEPATH') OR exit("No script dirrect access allowed!");

class Pengguna extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Sec_model');
    }

    function index(){
        $config = array(
            'title' => "Pengaturan Pengguna",

        );

        $this->load->view('admin/pengguna', $config);
    }
}