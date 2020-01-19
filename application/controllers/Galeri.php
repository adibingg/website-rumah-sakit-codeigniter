<?php 

defined('BASEPATH') OR exit("No dirrect script access allowed!");

class Galeri extends CI_Controller{

	function index(){
		$this->load->model('Home_model');
		$config = $this->Home_model->getConfig();
		foreach($config->result() as $conf){
			$data = array(
				'navigation' 	=> $this->Home_model->getNavbar(),
				'title' 		=> "Galeri",
				'sub_1'			=> "Berita",
				'sub_2'			=> "Semua Berita dan Artikel",
				'meta_desc' 	=> $conf->website_name,
				'logo'				=> $conf->logo,
				'address'			=> $conf->address,
				'phone' 			=> $conf->phone,
				'email' 			=> $conf->email,
				'album' 		=> $this->Home_model->getAlbum(),
				'galeri' 		=> $this->Home_model->getGaleri(),
				'category' 		=> $this->Home_model->getCategory(),
				'sidebar'			=> $this->Home_model->getSidebar()
			);
			$this->load->view('home/galeri',$data);
		}
	}
}