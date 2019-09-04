<?php
//Start Home Controller

// Author : Adi Hidayat

defined('BASEPATH') OR exit("No dirrect script access alowed!");

class Profile extends CI_Controller{

	function index(){
		$this->load->model('Home_model');
		$config = $this->Home_model->getConfig();
		foreach($config->result() as $conf){
			$data = array(
				
				'navigation' => $this->Home_model->getNavbar(),
				'title' => "Profile " .$conf->company_name,
				'meta_desc' => $conf->company_name,
				'address'=> $conf->address,
				'phone' => $conf->phone,
				'email' => $conf->email,
				'berita' => $this->Home_model->getberita(),
				'produk' => $this->Home_model->getProduk(),
				'fasilitas' => $this->Home_model->getFacilities(),
				'latest_activities' => $this->Home_model->getLatestActivities(),
				'latest_news' => $this->Home_model->getLatestNews(),
				'profile' => $this->Home_model->getProfile()
			);
			$this->load->view('home/profile',$data);
		}
	}
}