<?php
//Start Home Controller

// Author : Adi Hidayat 

defined('BASEPATH') OR exit("No dirrect script access alowed!");


class Pelayanan extends CI_Controller{

	function index(){
		$this->load->model('Home_model');
		$config = $this->Home_model->getConfig();
		foreach($config->result() as $conf){
			$data = array(
				'navigation' => $this->Home_model->getNavbar(),
				'title' => $conf->company_name,
				'meta_desc' => $conf->company_name,
				'address'=> $conf->address,
				'telepon' => $conf->phone,
				'email' => $conf->email,
			);
			$this->load->view('home/header',$data);
			$this->load->view('home/pelayanan',$data);
			$this->load->view('home/footer',$data);
			
		}
	}
	
}
