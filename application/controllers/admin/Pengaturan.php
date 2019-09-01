<?php

defined('BASEPATH') OR exit("No dirrect script access allowed!");

class Pengaturan extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Sec_model');
        $this->load->model('Admin_model');
    }

    function index(){
        $this->Sec_model->getSec();

    }

    function update_identitas_website(){
        $this->Sec_model->getSec();
    }
}