<?php

defined('BASEPATH') OR exit("No dirrect script access allowed!");

class Tracker extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Sec_model');
		$this->load->model('Tracker_model');
		$this->load->model('Admin_model');
		$this->load->model('Inbox_model');
	}

	function index(){
		$this->Sec_model->getSec();
		$config = array(
			'title'                 => "Tracker Login",
			'messages_new'          => $this->Inbox_model->showNewMessages(),
			'messages_new_counter'  => $this->Inbox_model->showNewMessages()->num_rows(),
			'tracker'				=> $this->Tracker_model->getHistoryLogin()
		);
		$this->load->view('admin/tracker', $config);
	}
}