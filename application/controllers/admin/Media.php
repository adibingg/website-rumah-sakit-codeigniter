<?php

defined('BASEPATH') OR exit("No dirrect script access allowed!");

class Media extends CI_Controller{
    function index(){
        $config = array(
			'title' => "Halaman Administrator", );
        $this->load->view('admin/galeri', $config);
    }

    function upload_media(){

    }

    function hapus_media(){

    }

}