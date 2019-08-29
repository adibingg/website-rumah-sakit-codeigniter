<?php

defined('BASEPATH') OR exit("No script direct access allowed!");

class Statistik extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->model('Sec_model');
    }

    function index(){
        
    }

}