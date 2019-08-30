<?php

class Karir extends CI_Controller{

    function index(){
        $this->load->model('Sec_model');
        $this->Sec_model->getSec();
        $this->load->model('Admin_model');
        $config = array (
            'title' => "Info Karir",
            'career_category' => $this->Admin_model->getCareerCategory(),
            'career' => $this->Admin_model->getCareer()
        );

        $this->load->view('admin/info-karir', $config);

    }

    function tambah_informasi_karir(){
        $this->load->model('Sec_model');
        $this->Sec_model->getSec();
        $this->load->model('Admin_model');
        $config = array (
            'title' => "Info Karir",
            'career_category' => $this->Admin_model->getCareerCategory(),
            'career' => $this->Admin_model->getCareer()
        );

        $this->load->view('admin/info-karir-tambah', $config);
    }

    function edit_karir(){
        $this->load->model('Sec_model');

    }

    function delete(){
        $this->load->model('Sec_model');
        
    }

    function tambah_kategori_karir(){
        $this->load->model('Sec_model');
        $this->Sec_model->getSec();
        $this->load->model('Admin_model');
        $config = array (
            'title' => "Info Karir",
            'career_category' => $this->Admin_model->getCareerCategory(),
            'career' => $this->Admin_model->getCareer()
        );

        $this->load->view('admin/tambah-kategori-karir', $config);
    }

    function save_kategori(){
        $this->load->model('Sec_model');
        $this->Sec_model->getSec();
        $this->load->model('Admin_model');
        $string=preg_replace('/[^a-zA-Z0-9 &%|{.}=,?!*()"-_+$@;<>]/', '',$this->input->post('nama_kategoi_karir')); 
        $trim=trim($string);
        $pre_slug=strtolower(str_replace(" ", "-", $trim)); 
        $slug=$pre_slug;
        $data  = array (
            'career_category_name' => $this->input->post('nama_kategoi_karir'),
            'slug' => $slug
        );

        $this->Admin_model->SimpanKategoriKarir($data);
        $this->session->set_flashdata('info', 'Kategori Informasi Karir berhasil di tambahkan');
        redirect('admin/info-karir');
    }

    
}