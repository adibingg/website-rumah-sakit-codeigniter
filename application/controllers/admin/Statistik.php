<?php

defined('BASEPATH') OR exit("No script direct access allowed!");

class Statistik extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->model('Sec_model');
        $this->load->model('Inbox_model');
    }

    function index(){
        $this->Sec_model->getSec();
        $data = array (
            'title' => "Statistik",
            'messages_new' => $this->Inbox_model->showNewMessages(),
            'messages_new_counter' => $this->Inbox_model->showNewMessages()->num_rows(),
            'most_view_post'        => '',
            'hit_today' => '',
            'this_week' => '',
            'this_month'    => '',
            'this_year' => ''
        );
        $this->load->view('admin/statistik', $data);
    }



}