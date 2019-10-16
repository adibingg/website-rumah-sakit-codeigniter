<?php

//Start Home Controller
// Author : Adi Hidayat 

defined('BASEPATH') OR exit("No dirrect script access alowed!");
class Dokter extends CI_Controller{
	function index(){
		$this->load->model('Home_model');
		$config = $this->Home_model->getConfig();
		foreach($config->result() as $conf){
			$data = array(
				'navigation' 	=> $this->Home_model->getNavbar(),
				'title' 		=> "Dokter " .$conf->company_name,
				'meta_desc' 	=> $conf->company_name,
				'address'		=> $conf->address,
				'phone' 		=> $conf->phone,
				'email' 		=> $conf->email,
				'dokter' 		=> $this->Home_model->getDoctor()
			);
			$this->load->view('home/dokter',$data);
		}
	}

	function jadwal(){
		$this->load->model('Home_model');
		$config = $this->Home_model->getConfig();
		foreach($config->result() as $conf){
			$data = array(
				'navigation' 		=> $this->Home_model->getNavbar(),
				'title' 			=> "Jadwal Dokter " .$conf->company_name,
				'meta_desc' 		=> $conf->company_name,
				'address'			=> $conf->address,
				'phone' 			=> $conf->phone,
				'email' 			=> $conf->email,
				'jadwal_dokter' 	=> $this->Home_model->getJadwalDokter()
			);
			$this->load->view('home/jadwal-dokter',$data);
			
		}
	}

	function jadwal_poli(){
		$this->load->model('Home_model');
		$config = $this->Home_model->getConfig();
		foreach($config->result() as $conf){
			$data = array(
				'navigation' 		=> $this->Home_model->getNavbar(),
				'title' 			=> "Jadwal Poli " .$conf->company_name,
				'meta_desc' 		=> $conf->company_name,
				'address'			=> $conf->address,
				'phone' 			=> $conf->phone,
				'email' 			=> $conf->email,
				'jadwal_poli' 		=> $this->Home_model->getJadwalPoli()
			);
			$this->load->view('home/jadwal-poli',$data);
			
		}
	}
}
