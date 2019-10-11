<?php

defined('BASEPATH') OR exit("No script dirrect access allowed!");

class Pengguna extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Sec_model');
        $this->load->model('Admin_model');
    }

    function index(){
        $this->Sec_model->getSec();
        $config = array(
            'title'                 => "Pengaturan Pengguna",
            'pengguna'              => $this->Admin_model->getPengguna(),
            'messages_new'          => $this->Admin_model->showNewMessages(),
			'messages_new_counter'  => $this->Admin_model->showNewMessages()->num_rows()
        );

        $this->load->view('admin/pengguna', $config);
    }

    function tambah_pengguna(){
        $this->Sec_model->getSec();
        $config = array(
            'title'                 => "Pengaturan Pengguna",
            'messages_new'          => $this->Admin_model->showNewMessages(),
			'messages_new_counter'  => $this->Admin_model->showNewMessages()->num_rows()
        );

        $this->load->view('admin/pengguna-tambah', $config);
    }

    function simpan_pengguna(){
        $this->Sec_model->getSec();
        $data = array(
            'admin_name' => $this->input->post('name'),
            'email'      => $this->input->post('email'),
            'username'   => $this->input->post('username'),
            'password'   => md5($this->input->post('password')),
        );
        $this->Admin_model->addPengguna($data);
        $this->session->set_flashdata('info', 'Berhasil menambahkan pengguna');
        redirect('admin/pengguna');
    }
}