<?php 

defined('BASEPATH') OR exit ("No dirrect script access allowed!");

class Komentar extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Sec_model');
        $this->load->model('Admin_model');
        $this->load->model('Inbox_model');
        $this->load->model('Comments_model');
    }

    function index(){
		$this->Sec_model->getSec();
        $config = array(
            'title'                 => "Tinjau Komentar",
            'messages_new'          => $this->Inbox_model->showNewMessages(),
			'messages_new_counter'  => $this->Inbox_model->showNewMessages()->num_rows(),
            'comments'               => $this->Comments_model->getAllComments()
        );
        $this->load->view('admin/komentar', $config);
    }
}