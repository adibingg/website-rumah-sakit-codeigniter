<?php

defined('BASEPATH') OR exit("No script dirrect access allowed!");

class Pengguna extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Sec_model');
        $this->load->model('Users_model');
        $this->load->model('Inbox_model');
    }

    function index(){
        $this->Sec_model->getSec();
        $config = array(
            'title'                 => "Pengaturan Pengguna",
            'pengguna'              => $this->Users_model->getAllUsers(),
            'messages_new'          => $this->Inbox_model->showNewMessages(),
			'messages_new_counter'  => $this->Inbox_model->showNewMessages()->num_rows()
        );
        $this->load->view('admin/pengguna', $config);
    }

    function create(){
        $this->Sec_model->getSec();
        $config = array(
            'title'                 => "Pengaturan Pengguna",
            'messages_new'          => $this->Inbox_model->showNewMessages(),
			'messages_new_counter'  => $this->Inbox_model->showNewMessages()->num_rows()
        );
        $this->load->view('admin/pengguna-tambah', $config);
    }

    function store(){
        $this->Sec_model->getSec();
        $post = array(
            'admin_name' => $this->input->post('name'),
            'email'      => $this->input->post('email'),
            'username'   => $this->input->post('email'),
            'password'   => md5($this->input->post('password')),
        );
        $this->Users_model->addUsers($post);
        $this->session->set_flashdata('info', 'Berhasil menambahkan pengguna');
        redirect('admin/users');
    }

    function edit($id){
        $this->Sec_model->getSec();
        $config = array(
            'title'                 => "Pengaturan Pengguna",
            'messages_new'          => $this->Admin_model->showNewMessages(),
            'messages_new_counter'  => $this->Admin_model->showNewMessages()->num_rows(),
            'user_detail'           => $this->Users_model->GetUserId($id)
        );
        $this->load->view('admin/pengguna-edit');
    }

    function update(){
        $this->Sec_model->getSec();
        $post = array(
            'admin_name'    => $this->input->post('name'),
            'email'         => $this->input->post('email'),
            'username'      => $this->input->post('email'),
            'password'      => md5($this->input->post('password'))
        );
        $id = $this->input->post('id');
        $this->Users_model->updateAdmin($post, $id);
    }

    function delete($id){
        $this->Sec_model->getSec();
        $this->Users_model->deleteUser($id);
        $this->session->set_flashdata('info','User berhasil dihapus');
        redirect('admin/pengguna','refresh');
    }

}