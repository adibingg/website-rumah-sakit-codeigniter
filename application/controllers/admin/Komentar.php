<?php 

defined('BASEPATH') OR exit ("No dirrect script access allowed!");

class Komentar extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Sec_model');
        $this->load->model('Admin_model');
    }

    function index(){
		$this->Sec_model->getSec();
        $config = array(
            'title'                 => "Tinjau Komentar",
            'messages_new'          => $this->Admin_model->showNewMessages(),
			'messages_new_counter'  => $this->Admin_model->showNewMessages()->num_rows()
        );
        $this->load->view('admin/komentar', $config);
    }
}