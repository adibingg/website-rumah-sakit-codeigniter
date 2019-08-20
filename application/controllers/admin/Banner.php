<?php

defined('BASEPATH') OR exit("No dirrect script allowed");

class Banner extends CI_Controller{
    function index(){
        $config = array(
			'title' => "Halaman Administrator", );
        $this->load->view('admin/banner', $config);
    }

    function upload(){

    }

    function update(){

    }

    function hapus(){

    }

    
}