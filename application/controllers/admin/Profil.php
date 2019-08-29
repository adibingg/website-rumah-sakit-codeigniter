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
		$id = $this->input->post('id');
		$data = array (
			'name' => $this->input->post('name'),
			'adress' => $this->input->post('adress'),
			'kabupaten' => $this->input->post('kabupaten'),
			'propinsi' => $this->input->post('propinsi'),
			'phone' => $this->input->post('phone'),
			'fax' => $this->input->post('fax'),
			'no_izin' => $this->input->post('no_izin'),
			'date' => $this->input->post('date'),
			'status_kepemilikan' => $this->input->post('status_kepemilikan'),
			'tipe_rumah_sakit' => $this->input->post('tipe_rumah_sakit'),
			'mulai_berdiri' => $this->input->post('mulai_berdiri'),
			'jumlah_tt' => $this->input->post('jumlah_tt'),
			'jumlah_sdm' => $this->input->post('jumlah_sdm'),
			'akreditasi_kars' => $this->input->post('akreditasi_kars')

		);
		$this->Admin_model->UpdateProfile($id, $data);
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