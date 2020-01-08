<?php 

defined('BASEPATH') OR exit("No dirrect script access allowed");

class Log extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('Sec_model');
		$this->load->model('News_model');
		$this->load->model('Inbox_model');
	}

	function index(){
		$this->Sec_model->getSec();
		$data = array(
			'title'                 => "Log Aktivitas",
			'berita'                => $this->News_model->TampilBerita(),
			'messages_new'          => $this->Inbox_model->showNewMessages(),
			'messages_new_counter'  => $this->Inbox_model->showNewMessages()->num_rows()
		);
		$this->load->view('admin/news',  $data);
	}
}