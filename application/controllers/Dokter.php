<?php

defined('BASEPATH') OR exit("No dirrect script access alowed!");

class Dokter extends CI_Controller{

	function index(){
		$this->load->model('Home_model');
		$config = $this->Home_model->getConfig();
		foreach($config->result() as $conf){
			$data = array(
				'navigation' 	=> $this->Home_model->getNavbar(),
				'title' 		=> "Profile Dokter",
				'sub_1'			=> "Dokter & Jadwal",
				'sub_2'			=> "Profile Dokter",
				'meta_desc' 	=> $conf->company_name,
				'address'		=> $conf->address,
				'phone' 		=> $conf->phone,
				'email' 		=> $conf->email,
				'category' 		=> $this->Home_model->getCategory(),
				'dokter' 		=> $this->Home_model->getDoctor(),
				'sidebar'			=> $this->Home_model->getSidebar()
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
				'sub_1'			=> "Berita",
				'sub_2'			=> "Semua Berita dan Artikel",
				'meta_desc' 		=> $conf->company_name,
				'address'			=> $conf->address,
				'phone' 			=> $conf->phone,
				'email' 			=> $conf->email,
				'category' 		=> $this->Home_model->getCategory(),
				'jadwal_dokter' 	=> $this->Home_model->getJadwalDokter(),
				'sidebar'			=> $this->Home_model->getSidebar()
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
				'sub_1'				=> "Berita",
				'sub_2'				=> "Semua Berita dan Artikel",
				'meta_desc' 		=> $conf->company_name,
				'address'			=> $conf->address,
				'phone' 			=> $conf->phone,
				'email' 			=> $conf->email,
				'category' 			=> $this->Home_model->getCategory(),
				'jadwal_poli' 		=> $this->Home_model->getJadwalPoli(),
				'sidebar'			=> $this->Home_model->getSidebar()
			);
			$this->load->view('home/jadwal-poli',$data);
			
		}
	}
}
