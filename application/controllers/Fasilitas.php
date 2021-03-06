<?php
//Start Home Controller

defined('BASEPATH') OR exit("No dirrect script access alowed!");

class Fasilitas extends CI_Controller{

	function index(){
		$this->load->model('Home_model');
		$config = $this->Home_model->getConfig();
		foreach($config->result() as $conf){
			$data = array(
				'navigation' 	=> $this->Home_model->getNavbar(),
				'title' 		=> "Fasilitas " .$conf->website_name,
				'sub_1'			=> "Berita",
				'sub_2'			=> "Semua Berita dan Artikel",
				'logo'				=> $conf->logo,
				'address'			=> $conf->address,
				'phone' 			=> $conf->phone,
				'email' 			=> $conf->email,
				'category' 		=> $this->Home_model->getCategory(),
				'sidebar'			=> $this->Home_model->getSidebar()
			);
			$this->load->view('home/header',$data);
		}
	}
	
}