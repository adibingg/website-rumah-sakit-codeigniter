<?php

class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->model('Sec_model');
		$this->load->model('Inbox_model');
		$this->load->model('News_model');
	}

	function index(){
		$this->Sec_model->getSec();
		$this->Sec_model->checkcred();
		$config = array(
			'title' 				=> "Dashboard",
			'messages_new' 			=> $this->Inbox_model->showNewMessages(),
			'messages_new_counter' 	=> $this->Inbox_model->showNewMessages()->num_rows(),
			'latest_news'			=> $this->News_model->getLatestNews()
		);
		$this->load->view('admin/home',$config);
	}
}