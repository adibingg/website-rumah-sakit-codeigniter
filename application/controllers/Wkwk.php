<?php

defined('BASEPATH') OR exit("No dirrect script allowed!");

class Wkwk extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Home_model');
	}

	public function index(){
		redirect('home');
	}
}
