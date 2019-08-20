<?php 

defined('BASEPATH') OR exit ("No dirrect script access allowed!");

class Komentar extends CI_Controller{
    function __construct(){
        parent::__construct();
    }

    function index(){
        $config = array(
			'title' => "Tinjau Komentar", );
        $this->load->view('admin/komentar', $config);
    }
}