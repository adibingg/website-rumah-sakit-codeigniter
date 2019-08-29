<?php 
defined('BASEPATH') OR exit("No script dirrect access allowed!");
class Halaman extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->model('Sec_model');
    }

    public function index(){
		$this->load->model('Sec_model');
		$this->Sec_model->getSec();
		$config = array(
            'title' => "Halaman Administrator",
            'navigation' => $this->Admin_model->getNav()
        );
		$this->load->view('admin/halaman',$config);
	}

    function add_nav(){

    }

    function update_nav(){

    }

    function delete_nav(){

    }

    function add_pages(){
        $this->load->model('Sec_model');
		$this->Sec_model->getSec();
		$config = array(
            'title' => "Halaman Statis Baru",
            'navigation' => $this->Admin_model->getNav()
        );
		$this->load->view('admin/halamantambah',$config);
    }

    function update_pages(){

    }

    function delete_pages(){

    }
}