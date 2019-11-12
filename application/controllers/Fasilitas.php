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
				'title' 		=> "Fasilitas " .$conf->company_name,
				'address'		=> $conf->address,
				'telepon' 		=> $conf->phone,
				'email' 		=> $conf->email,
			);
			$this->load->view('home/header',$data);
		}
	}
	
}