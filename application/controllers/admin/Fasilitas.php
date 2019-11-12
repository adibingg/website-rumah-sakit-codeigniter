<?php 

class Fasilitas extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Sec_model');
        $this->load->model('Admin_model');
    }

    function index(){
        $this->Sec_model->getSec();
        $config = array (
            'title'                 => "Fasilitas Penunjang",
            'messages_new'          => $this->Admin_model->showNewMessages(),
			'messages_new_counter'  => $this->Admin_model->showNewMessages()->num_rows()
        );
        $this->load->view('admin/fasilitas', $config);

    }

    function add_facilities(){
        $this->Sec_model->getSec();
        $config = array (
            'title'                 => "Fasilitas Penunjang",
            'messages_new'          => $this->Admin_model->showNewMessages(),
			'messages_new_counter'  => $this->Admin_model->showNewMessages()->num_rows()
        );
        $this->load->view('admin/fasilitas-tambah', $config);
    }

    function edit_pelayanan(){
        $this->Sec_model->getSec();
    }


    function hapus_pelayanan(){
        $this->Sec_model->getSec();   
    }
}