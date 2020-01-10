<?php

defined('BASEPATH') OR exit("No dirrect script access alowed!");

class Home extends CI_Controller{

	function index(){
		$this->load->model('Home_model');
		$this->load->helper('date_negara_berkembang');
		$config = $this->Home_model->getConfig();
		foreach($config->result() as $conf){
			$data = array(
				'navigation' 		=> $this->Home_model->getNavbar(),
				'title' 			=> $conf->company_name,
				'sub_1'				=> "Berita",
				'sub_2'				=> "Semua Berita dan Artikel",
				'meta_desc'			=> $conf->company_name,
				'address'			=> $conf->address,
				'phone' 			=> $conf->phone,
				'email' 			=> $conf->email,
				'visi'				=> $conf->visi,
				'latest_activities' => $this->Home_model->getLatestActivities(),
				'news' 				=> $this->Home_model->getLatestNews(),
				'facilities'		=> $this->Home_model->getFacilities(),
				'poly'				=> $this->Home_model->getPolyclinic(),
				'category' 			=> $this->Home_model->getCategory(),
				'services'			=> $this->Home_model->getServiceHome(),
				'card_home'			=> $this->Home_model->getCard(),
				'sidebar'			=> $this->Home_model->getSidebar()
			);
			$this->load->view('home/home',$data);
		}
	}
}
