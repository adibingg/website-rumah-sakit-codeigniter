<?php

defined('BASEPATH') OR exit("No dirrect script access allowed!");

class Kategori extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('Sec_model');
		$this->load->model('Admin_model');
	}
	
	function index(){
		$this->Sec_model->getSec();
		$data = array(
			'title' => "Tambah Berita", 
		);
		$this->load->view('admin/sidebar',  $data);
		$this->load->view('admin/add-kategori', $data);
	}

	function tambah(){
		$this->Sec_model->getSec();
		$string		= preg_replace('/[^a-zA-Z0-9 &%|{.}=,?!*()"-_+$@;<>]/', '',$this->input->post('nama_kategori')); 
        $trim		= trim($string);
        $pre_slug	= strtolower(str_replace(" ", "-", $trim)); 
        $slug		= $pre_slug;
        $data = array(
        	'category_name' =>$this->input->post('nama_kategori'),
        	'category_link' => $slug);
        $this->db->insert('category',$data);
        redirect('admin/kategori','refresh');
	}

	function edit(){
		$this->Sec_model->getSec();
	}

	function update(){
		$this->Sec_model->getSec();
	}

	function hapus(){
		$this->Sec_model->getSec();
	}
}