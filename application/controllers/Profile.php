<?php

defined('BASEPATH') OR exit("No dirrect script access alowed!");

class Profile extends CI_Controller{

	function index(){
		$this->load->model('Home_model');
		$config = $this->Home_model->getConfig();
		foreach($config->result() as $conf){
			$data = array(
				'navigation' 		=> $this->Home_model->getNavbar(),
				'title' 			=> "Profile " .$conf->website_name,
				'sub_1'				=> "Berita",
				'sub_2'				=> "Semua Berita dan Artikel",
				'meta_desc' 		=> $conf->website_name,
				'logo'				=> $conf->logo,
				'address'			=> $conf->address,
				'phone' 			=> $conf->phone,
				'email' 			=> $conf->email,
				'sub_1'				=> "Berita",
				'sub_2'				=> "Semua Berita dan Artikel",
				'category' 			=> $this->Home_model->getCategory(),
				'profile' 			=> $this->Home_model->getProfile(),
				'sidebar'			=> $this->Home_model->getSidebar()
			);
			$this->load->view('home/profile',$data);
		}
	}

	function struktur_organisasi(){
		$this->load->model('Home_model');
		$config = $this->Home_model->getConfig();
		foreach($config->result() as $conf){
			$data = array(
				'navigation' 		=> $this->Home_model->getNavbar(),
				'title' 			=> "Struktur Organisasi ",
				'sub_1'				=> "Berita",
				'sub_2'				=> "Semua Berita dan Artikel",
				'meta_desc' 		=> $conf->website_name,
				'logo'				=> $conf->logo,
				'address'			=> $conf->address,
				'phone' 			=> $conf->phone,
				'email' 			=> $conf->email,
				'sub_1'				=> "Berita",
				'sub_2'				=> "Semua Berita dan Artikel",
				'fasilitas' 		=> $this->Home_model->getFacilities(),
				'latest_activities' => $this->Home_model->getLatestActivities(),
				'latest_news' 		=> $this->Home_model->getLatestNews(),
				'category' 			=> $this->Home_model->getCategory(),
				'profile' 			=> $this->Home_model->getProfile(),
				'sidebar'			=> $this->Home_model->getSidebar()
			);
			$this->load->view('home/struktur-organisasi',$data);
		}
	}

	function sejarah(){
		$this->load->model('Home_model');
		$config = $this->Home_model->getConfig();
		foreach($config->result() as $conf){
			$data = array(
				'navigation' 		=> $this->Home_model->getNavbar(),
				'title' 			=> "Sejarah",
				'sub_1'				=> "Profile",
				'sub_2'				=> "Sejarah",
				'meta_desc' 		=> $conf->website_name,
				'logo'				=> $conf->logo,
				'address'			=> $conf->address,
				'phone' 			=> $conf->phone,
				'email' 			=> $conf->email,
				'fasilitas' 		=> $this->Home_model->getFacilities(),
				'latest_activities' => $this->Home_model->getLatestActivities(),
				'latest_news' 		=> $this->Home_model->getLatestNews(),
				'category' 			=> $this->Home_model->getCategory(),
				'profile' 			=> $this->Home_model->getProfile(),
				'sidebar'			=> $this->Home_model->getSidebar()
			);
			$this->load->view('home/sejarah',$data);
		}
	}

	function fasilitas(){
		$this->load->model('Home_model');
		$config = $this->Home_model->getConfig();
		foreach($config->result() as $conf){
			$data = array(
				'navigation' 		=> $this->Home_model->getNavbar(),
				'title' 			=> "Fasilitas dan Pelayanan",
				'sub_1'				=> "Profile",
				'sub_2'				=> "Fasilitas dan Pelayanan",
				'meta_desc' 		=> $conf->website_name,
				'logo'				=> $conf->logo,
				'address'			=> $conf->address,
				'phone' 			=> $conf->phone,
				'email' 			=> $conf->email,
				'sub_1'				=> "Berita",
				'sub_2'				=> "Semua Berita dan Artikel",
				'fasilitas' 		=> $this->Home_model->getFacilities(),
				'latest_activities' => $this->Home_model->getLatestActivities(),
				'latest_news' 		=> $this->Home_model->getLatestNews(),
				'profile' 			=> $this->Home_model->getProfile(),
				'category'			=> $this->Home_model->getCategory(),
				'services'			=> $this->Home_model->getAllServices(),
				'sidebar'			=> $this->Home_model->getSidebar()
			);
			$this->load->view('home/fasilitas-pelayanan',$data);
		}
	}
}