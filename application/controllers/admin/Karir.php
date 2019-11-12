<?php

defined('BASEPATH') OR exit("No dirrect script access allowed!");

class Karir extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Sec_model');
        $this->load->model('Admin_model');
    }

    function index(){
        $this->Sec_model->getSec();
        $config = array (
            'title'                 => "Info Karir",
            'career_category'       => $this->Admin_model->getCareerCategory(),
            'career'                => $this->Admin_model->getCareer(),
            'messages_new'          => $this->Admin_model->showNewMessages(),
			'messages_new_counter'  => $this->Admin_model->showNewMessages()->num_rows()
        );
        $this->load->view('admin/info-karir', $config);
    }

    function tambah_informasi_karir(){
        $this->Sec_model->getSec();
        $config = array (
            'title'                 => "Info Karir",
            'career_category'       => $this->Admin_model->getCareerCategory(),
            'career'                => $this->Admin_model->getCareer(),
            'messages_new'          => $this->Admin_model->showNewMessages(),
			'messages_new_counter'  => $this->Admin_model->showNewMessages()->num_rows()
        );
        $this->load->view('admin/info-karir-tambah', $config);
    }

    function simpan_info_karir(){
        $this->Sec_model->getSec();
        
        $data = array(
            'id_career_category'    => $this->input->post('career_category'),
            'position'              => $this->input->post('position'),
            'requirements'          => $this->input->post('requirements'),
            'qualification'         => $this->input->post('qualification'),
            'valid_until'           => $this->input->post('valid_until')
        );

        $this->Admin_model->saveCareer($data);
        $this->session->set_flashdata('info', 'Berhasil menambahkan informasi lowongan kerja');
        redirect('admin/info-karir');
    }

    function update_info_karir($id){
        $this->Sec_model->getSec();
        $config = array(
            'title'                 => "Perbaharui informasi lowongan kerja",
            'career'                => $this->Admin_model->getCareerId($id),
            'career_category'       => $this->Admin_model->getCareerCategory(),
            'messages_new'          => $this->Admin_model->showNewMessages(),
			'messages_new_counter'  => $this->Admin_model->showNewMessages()->num_rows()
        );
        $this->load->view('admin/info-karir-update', $config);
    }

    function update_karir(){
        $this->Sec_model->getSec();
        $id = $this->input->post('id');
        $data = array(
            'id_career_category'    => $this->input->post('career_category'),
            'position'              => $this->input->post('position'),
            'requirements'          => $this->input->post('requirements'),
            'qualification'         => $this->input->post('qualification'),
            'valid_until'           => $this->input->post('valid_until')
        );

        $this->Admin_model->updateCareer($id,$data);
        $this->session->set_flashdata('info', 'Berhasil memperbaharui informasi lowongan kerja');
        redirect('admin/info-karir');
    }

    function hapus_karir($id){
        $this->Sec_model->getSec();
        $this->Admin_model->deleteCareer($id);
        $this->session->set_flashdata('info', 'Informasi lowongan kerja berhasil di hapus');
        redirect('admin/info-karir');
    }

    function tambah_kategori_karir(){
        $this->Sec_model->getSec();
        $config = array (
            'title'                 => "Info Karir",
            'career_category'       => $this->Admin_model->getCareerCategory(),
            'career'                => $this->Admin_model->getCareer(),
            'messages_new'          => $this->Admin_model->showNewMessages(),
			'messages_new_counter'  => $this->Admin_model->showNewMessages()->num_rows()
        );
        $this->load->view('admin/tambah-kategori-karir', $config);
    }

    function save_kategori(){
        $this->Sec_model->getSec();
        $string     = preg_replace('/[^a-zA-Z0-9 &%|{.}=,?!*()"-_+$@;<>]/', '',$this->input->post('nama_kategoi_karir')); 
        $trim       = trim($string);
        $pre_slug   = strtolower(str_replace(" ", "-", $trim)); 
        $slug       = $pre_slug;
        $data  = array (
            'career_category_name'  => $this->input->post('nama_kategoi_karir'),
            'slug'                  => $slug
        );

        $this->Admin_model->SimpanKategoriKarir($data);
        $this->session->set_flashdata('info', 'Kategori Informasi Karir berhasil di tambahkan');
        redirect('admin/info-karir');
    }

    function update_kategori($id){
        $this->Sec_model->getSec();
        $config = array (
            'title'                 => "Info Karir",
            'career_category'       => $this->Admin_model->getCareerCategoryId($id),
            'messages_new'          => $this->Admin_model->showNewMessages(),
			'messages_new_counter'  => $this->Admin_model->showNewMessages()->num_rows()
        );

        $this->load->view('admin/kategori-karir-update', $config);
    }

    function update_kategori_karir(){
        $this->Sec_model->getSec();
        $string     = preg_replace('/[^a-zA-Z0-9 &%|{.}=,?!*()"-_+$@;<>]/', '',$this->input->post('nama_kategori_karir')); 
        $trim       = trim($string);
        $pre_slug   = strtolower(str_replace(" ", "-", $trim)); 
        $slug       = $pre_slug;
        $id         = $this->input->post('id');
        $data = array (
            'career_category_name' => $this->input->post('nama_kategori_karir'),
            'slug' => $slug
        );

        $this->Admin_model->updateCategoryCareer($id,$data);
        $this->session->set_flashdata('info', 'Kategori Informasi Karir berhasil diperbaharui');
        redirect('admin/info-karir');
    }

    function hapus_kategori_karir($id){
        $this->Sec_model->getSec();
        $check = $this->Admin_model->checkCategoryCareer($id);
        if($check->num_rows() < 1){
            $this->Admin_model->deleteCareerCategory($id);
            $this->session->set_flashdata('info', 'Berhasil menghapus kategori karir');
            redirect('admin/info-karir');
        }else{
            $this->session->set_flashdata('info', 'Gagal menghapus kategori karir, kategori ini masih dipakai di info karir');
            redirect('admin/info-karir');
        }
    }
}