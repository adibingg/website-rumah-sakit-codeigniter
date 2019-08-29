<?php

defined('BASEPATH') OR exit("No dirrect script acces allowed");

class Profil extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->model('Sec_model');
	}

	function index(){
		$this->load->model('Sec_model');
		$this->load->model('Admin_model');
		$this->Sec_model->getSec();
	    $config 		= array(
		  'title' 	=> "Profil",
		  'profile' => $this->Admin_model->getProfile()
	  	);
	    $this->load->view('admin/profil',  $config);
	}

	function update_profile(){
		$this->load->model('Sec_model');
		$this->load->model('Admin_model');
		$data = array ();
		$this->Admin_model->UpdateProfile();
		$this->session->set_flashdata('info', 'Profil berhasil diperbaharui');
		redirect('admin/profil');
	}

	function visi_misi(){
		$this->load->model('Sec_model');
		$this->load->model('Admin_model');
	    $config 		= array(
	      'title' 	=> "Profil"
	  	);
	    $this->load->view('admin/profil',  $config);
	}

	function visi_misi_update(){

	}

	function sejarah(){
		$this->load->model('Sec_model');
		$this->load->model('Admin_model');
	    $config 		= array(
	      'title' 	=> "Profil"
	  	);
	    $this->load->view('admin/profil',  $config);
	}

	function add_sejarah(){

	}

	function update_sejarah(){

	}

	function save_update(){

	}

	function hapus_sejarah(){

	}

	function struktural(){
		$this->load->model('Sec_model');
		$this->load->model('Admin_model');
	    $config 		= array(
	      'title' 	=> "Profil"
	  	);
	    $this->load->view('admin/profil',  $config);
	}

	function update_struktural(){
		
	}
}