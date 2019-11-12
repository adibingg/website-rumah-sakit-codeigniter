<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller{
	function index(){
		$this->load->model('Home_model');
		$config = $this->Home_model->getConfig();
		foreach($config->result() as $conf){
			$data = array(
				'navigation' 	=> $this->Home_model->getNavbar(),
				'title' 		=> "Kontak " .$conf->company_name,
				'meta_desc' 	=> $conf->company_name,
				'address'		=> $conf->address,
				'phone' 		=> $conf->phone,
				'email' 		=> $conf->email,
			);
			$this->load->view('home/kontak',$data);
		}
    }
    
    function send_pesan(){
		$this->load->model('Home_model');
		$input = array (
			'name' 				=> $this->input->post('nama'),
			'contact' 			=> $this->input->post('kontak'),
			'subject' 			=> $this->input->post('subjek'),
			'messages_content' 	=> $this->input->post('pesan')
		);
		$data = $this->Home_model->reciveMessage($input);
		echo json_encode($data);
    }
}
