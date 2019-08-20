<?php

defined('BASEPATH') OR exit("No dirrect script acces allowed");

class Profil extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->model('Sec_model');
	}

	public function index(){
		$this->load->model('Sec_model');
		$this->load->model('Admin_model');
	    $config 		= array(
	      'title' 	=> "Profil"
	  	);
	    $this->load->view('admin/profil',  $config);
	}

	public function update_profile(){

	}


}