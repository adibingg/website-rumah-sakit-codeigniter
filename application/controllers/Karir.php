<?php

//Start Career Controller
// Author : Adi Hidayat 

defined('BASEPATH') OR exit("No dirrect script access alowed!");

class Karir extends CI_Controller{

	function index(){
		$this->load->model('Home_model');
		$config = $this->Home_model->getConfig();
		foreach($config->result() as $conf){
			$data = array(
				'navigation' => $this->Home_model->getNavbar(),
				'title' => "Lowongan Kerja " .$conf->company_name,
				'meta_desc' => $conf->company_name,
				'address'=> $conf->address,
				'phone' => $conf->phone,
				'email' => $conf->email,
				'category' => $this->Home_model->getCategoryCareer(),
				'career' => $this->Home_model->getCareer()
			);

			$this->load->view('home/karir',$data);
			
		}
	}
}
