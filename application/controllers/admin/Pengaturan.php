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
        $config = array (
            'title'                 => "Pelayanan",
            'messages_new'          => $this->Admin_model->showNewMessages(),
			'messages_new_counter'  => $this->Admin_model->showNewMessages()->num_rows()
        );
        $this->load->view('admin/pengaturan', $config);
    }

    function update_identitas_website(){
        $this->Sec_model->getSec();
    }
}