<?php

defined('BASEPATH') OR exit("No direct script access allowed");

class Poliklinik extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Sec_model');
        $this->load->model('Polyclinic_model');
        $this->load->model('Inbox_model');
        $this->load->library('form_validation');
    }

    function index(){
        $this->Sec_model->getSec();
        $data = array(
            'title'                 => "Pos Berita & Artikel",
            'messages_new'          => $this->Inbox_model->showNewMessages(),
            'messages_new_counter'  => $this->Inbox_model->showNewMessages()->num_rows()
        );
        $this->load->view('admin/poliklinik',  $data);
    }

    function show(){
        $this->Sec_model->getSec();
        $data = $this->Polyclinic_model->getPolyclinic();
        echo json_encode($data);
    }

    function show_by_id($id){
        $this->Sec_model->getSec();
        $data = $this->Polyclinic_model->getPolyById($id);
        echo json_encode($data);
    }

    function create(){
        $this->Sec_model->getSec();
        $data = array(
            'title'                 => "Pos Berita & Artikel",
            'messages_new'          => $this->Inbox_model->showNewMessages(),
            'messages_new_counter'  => $this->Inbox_model->showNewMessages()->num_rows()
        );
        $this->load->view('admin/poliklinik-tambah',  $data);
    }

    function store(){
        $this->form_validation->set_rules('poly','Poli','required');
        $this->form_validation->set_rules('description','Deskrpsi','required');
        if($this->form_validation->run() == FALSE){
            $data = array(
                'polyclinic_name' => "Nama Poliklinik Belum Di Isi",
                'description' => "Tambahkan deskripsi"
            );
            echo json_encode($data);
        }else{
            
            $post = array(
                'polyclinic_name' => $this->input->post('poly'),
                'description' => $this->input->post('description')
            );
            $data = $this->Polyclinic_model->savePolyclinic($post);
            echo json_encode($data);
        }
        
    }

    function edit(){

    }

    function update(){
        $this->form_validation->set_rules('poly','Poli','required');
        $this->form_validation->set_rules('description','Deskrpsi','required');
        
        if($this->form_validation->run() == FALSE){
            $data = array(
                'polyclinic_name' => "Nama Poliklinik Belum Di Isi",
                'description' => "Tambahkan deskripsi"
            );
            echo json_encode($data);
        }else{
            $id = $this->input->post('id');
            $post = array(
                'polyclinic_name' => $this->input->post('poly'),
                'description' => $this->input->post('description')
            );
            $data = $this->Polyclinic_model->updatePolyclinic($post, $id);
            echo json_encode($data);
        }
    }   

    function destroy(){
        $id = $this->input->post('id');
        $data = $this->Polyclinic_model->getPolyclinicId($id);
        echo json_encode($data);
    }
}