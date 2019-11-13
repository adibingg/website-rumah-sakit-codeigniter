<?php

class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->model('Sec_model');
		$this->load->model('Inbox_model');
	}

	function index(){
		$this->Sec_model->getSec();
		$this->Sec_model->checkcred();
		$config = array(
			'title' 				=> "Halaman Administrator",
			'messages_new' 			=> $this->Inbox_model->showNewMessages(),
			'messages_new_counter' 	=> $this->Inbox_model->showNewMessages()->num_rows(),
		);
		$this->load->view('admin/home',$config);
	}
}