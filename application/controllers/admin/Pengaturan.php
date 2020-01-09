<?php

defined('BASEPATH') OR exit("No dirrect script access allowed!");

class Pengaturan extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Sec_model');
        $this->load->model('Admin_model');
        $this->load->model('Inbox_model');
        $this->load->model('Settings_model');
    }

    public function index(){
        $this->Sec_model->getSec();
        $config = array (
            'title'                 => "Pengaturan",
            'messages_new'          => $this->Inbox_model->showNewMessages(),
			'messages_new_counter'  => $this->Inbox_model->showNewMessages()->num_rows()
        );
        $this->load->view('admin/pengaturan', $config);
    }

    public function update_identitas_website(){
        $this->Sec_model->getSec();
    }

    public function banner_home(){
        $this->Sec_model->getSec();
        $config = array (
            'title'                 => "Banner Promosi Home",
            'messages_new'          => $this->Inbox_model->showNewMessages(),
            'messages_new_counter'  => $this->Inbox_model->showNewMessages()->num_rows(),
            'banner_home'           => $this->Settings_model->getBanner()
        );
        $this->load->view('admin/banner-home', $config);
    }

    
}