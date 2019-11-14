<?php

defined('BASEPATH') OR exit("No dirrect script access allowed");

Class Album extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Sec_model');
        $this->load->model('Gallery_model');
        $this->load->model('Inbox_model');
    }

    function index(){
        //There is no index file
        redirect('admin/gallery');
    }


    function add(){
		$this->Sec_model->getSec();
	    $data = array(
		  'title' 					=> "Tambah Album",
		  'messages_new' 			=> $this->Inbox_model->showNewMessages(),
		  'messages_new_counter' 	=> $this->Inbox_model->showNewMessages()->num_rows()
	    );
	    $this->load->view('admin/album-tambah',  $data);
	}

	function store(){
		$this->Sec_model->getSec();
		$string		= preg_replace('/[^a-zA-Z0-9 &%|{.}=,?!*()"-_+$@;<>]/', '',$this->input->post('album_name')); 
		$trim		= trim($string);
		$pre_slug	= strtolower(str_replace(" ", "-", $trim)); 
		$slug		= $pre_slug;
		$data = array (
			'album_name' => $this->input->post('album_name'),
			'link'		 => $slug
		);
        $this->Gallery_model->SaveAlbum($data);
        redirect('admin/gallery');
	}

	function edit($id){
		$this->Sec_model->getSec();
	    $data = array(
		  'title' 					=> "Perbaharui Album",
		  'albumfoto' 				=> $this->Gallery_model->getAlbmumId($id),
		  'messages_new' 			=> $this->Inbox_model->showNewMessages(),
		  'messages_new_counter' 	=> $this->Inbox_model->showNewMessages()->num_rows()
        );
	    $this->load->view('admin/album-edit', $data);
	}

	function update(){
		$this->Sec_model->getSec();
		$id 		= $this->input->post('album_id');
		$string		= preg_replace('/[^a-zA-Z0-9 &%|{.}=,?!*()"-_+$@;<>]/', '',$this->input->post('album_name')); 
		$trim		= trim($string);
		$pre_slug	= strtolower(str_replace(" ", "-", $trim)); 
		$slug		= $pre_slug;
		$data = array (
			'album_name' => $this->input->post('album_name'),
			'link'		 => $slug
		);
        $this->Gallery_model->updateAlbum($id, $data);
        $this->session->set_flashdata('info','Berhasil memperbaharui album');
        redirect('admin/gallery');
	}

	function destroy($id){
		$this->Sec_model->getSec();
		$check_album = $this->Gallery_model->checkAlbum($id);
		if($check_album->num_rows() > 0){
			$this->session->set_flashdata('info', '<i class="fa fa-remove"></i> Gagal menghapus album, kosongkan album terlebih dahulu');
			redirect('admin/gallery');
		}else{
            $this->Gallery_model->deleteAlbum($id);
            $this->session->set_flashdata('info', '<i class="fa fa-trash"></i> Album berhasil dihapus');
            redirect('admin/gallery');
		}
	}
}