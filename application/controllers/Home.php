<?php

//Start Home Controller
// Author : Adi Hidayat 

defined('BASEPATH') OR exit("No dirrect script access alowed!");

class Home extends CI_Controller{

	function index(){
		$this->load->model('Home_model');
		$this->load->helper('Date_negara_berkembang');
		$config = $this->Home_model->getConfig();
		foreach($config->result() as $conf){
			$data = array(
				'navigation' 		=> $this->Home_model->getNavbar(),
				'title' 			=> $conf->company_name,
				'meta_desc'			=> $conf->company_name,
				'address'			=> $conf->address,
				'phone' 			=> $conf->phone,
				'email' 			=> $conf->email,
				'visi'				=> $conf->visi,
				'fasilitas' 		=> $this->Home_model->getFacilities(),
				'room'				=> $this->Home_model->getRooms(),
				'latest_activities' => $this->Home_model->getLatestActivities(),
				'recent_news' 		=> $this->Home_model->getLatestNews(),
			);
			$this->load->view('home/home',$data);
		}
	}
}
