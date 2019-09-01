<?php

defined('BASEPATH') OR exit("No script dirrect access allowed!");

class Pengguna extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Sec_model');
        $this->load->model('Admin_model');
    }

    function index(){
        $this->Sec_model->getSec();
        $config = array(
            'title' => "Pengaturan Pengguna",

        );

        $this->load->view('admin/pengguna', $config);
    }
}