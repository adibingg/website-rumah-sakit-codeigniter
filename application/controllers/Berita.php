<?php

//Start Career Controller
// Author : Adi Hidayat 

defined('BASEPATH') OR exit("No dirrect script access alowed!");

class Berita extends CI_Controller{
	
	function __construct(){
		parrent::__construct();
		$this->load->model('Home_model');
		$this->load->helper('Date_negara_berkembang');
	}

	function index(){
		$config = $this->Home_model->getConfig();
		foreach($config->result() as $conf){
			$data = array(
				'navigation' 	=> $this->Home_model->getNavbar(),
				'title' 		=> $conf->company_name,
				'meta_desc' 	=> $conf->company_name,
				'address'		=> $conf->address,
				'phone' 		=> $conf->phone,
				'email' 		=> $conf->email,
				'recent_news' 	=> $this->Home_model->getberita(),
			);
			$this->load->view('home/berita',$data);
		}
	}

	public function read($id){
		$this->load->model('Admin_model');
		$config = $this->Home_model->getConfig();
		$this->load->helper('Date_negara_berkembang');
		foreach($config->result() as $conf){
			$data = array(
				'navigation' 	=> $this->Home_model->getNavbar(),
				'title' 		=> "Berita",
				'meta_desc' 	=> $conf->company_name,
				'address'		=> $conf->address,
				'phone' 		=> $conf->phone,
				'email' 		=> $conf->email,
				'category' 		=> $this->Home_model->getCategory(),
				'news_rows' 	=> $this->Home_model->detailBerita($id),
			);
			$this->load->view('home/beritadetail', $data);
		}
	}


	function comment($id){

	}
}