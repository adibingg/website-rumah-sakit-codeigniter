<?php 

defined('BASEPATH') OR exit("No dirrect script access allowed!");

class Galeri extends CI_Controller{

	function index(){
		$this->load->model('Home_model');
		$config = $this->Home_model->getConfig();
		foreach($config->result() as $conf){
			$data = array(
				'navigation' => $this->Home_model->getNavbar(),
				'title' => "Galeri " .$conf->company_name,
				'meta_desc' => $conf->company_name,
				'address'=> $conf->address,
				'phone' => $conf->phone,
				'email' => $conf->email,
				'album' => $this->Home_model->getAlbum(),
				'galeri' => $this->Home_model->getGaleri(),
			);
			$this->load->view('home/galeri',$data);
		}
	}
}