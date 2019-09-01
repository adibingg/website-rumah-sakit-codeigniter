<?php

defined('BASEPATH') OR exit("No dirrect script access allowed!");

class Identitas extends CI_Controller{

    function __construct(){
        $this->load->model('Sec_model');
        $this->load->model('Admin_model');
    }

    function index(){
		$this->Sec_model->getSec();
    }

    function update(){
		$this->Sec_model->getSec();
    }

}