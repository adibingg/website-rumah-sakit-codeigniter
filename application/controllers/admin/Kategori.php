<?php

class Kategori extends CI_Controller{
	public function index(){
		$this->load->model('Sec_model');
		$data = array(
			'title' => "Tambah Berita", );
		$this->load->view('admin/sidebar',  $data);
		$this->load->view('admin/add-kategori', $data);
	}

	public function tambah(){
		$this->load->model('Sec_model');
		$string=preg_replace('/[^a-zA-Z0-9 &%|{.}=,?!*()"-_+$@;<>]/', '',$this->input->post('nama_kategori')); 
                $trim=trim($string);
                $pre_slug=strtolower(str_replace(" ", "-", $trim)); 
                $slug=$pre_slug;
        $data = array(
        	'category_name' =>$this->input->post('nama_kategori'),
        	'category_link' => $slug);
        $this->db->insert('category',$data);
        redirect('admin/kategori','refresh');
	}

	public function edit(){
		$this->load->model('Sec_model');

	}

	public function update(){
		$this->load->model('Sec_model');

	}

	public function hapus(){
		$this->load->model('Sec_model');

	}
}