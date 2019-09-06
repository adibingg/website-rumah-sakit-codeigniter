<?php 
defined('BASEPATH') OR exit("No script dirrect access allowed!");
class Halaman extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->model('Sec_model');
    }

    public function index(){
		$this->Sec_model->getSec();
		$config = array(
            'title' => "Halaman Administrator",
            'navigation' => $this->Admin_model->getNav(),
            'messages_new' => $this->Admin_model->showNewMessages(),
            'messages_new_counter' => $this->Admin_model->showNewMessages()->num_rows()      
        );
		$this->load->view('admin/halaman',$config);
	}

    function add_nav(){
		$this->Sec_model->getSec();
    }

    function update_nav(){
		$this->Sec_model->getSec();
    }

    function delete_nav(){
		$this->Sec_model->getSec();
    }

    function add_pages(){
		$this->Sec_model->getSec();
		$config = array(
            'title' => "Halaman Statis Baru",
            'navigation' => $this->Admin_model->getNav(),
            'messages_new' => $this->Admin_model->showNewMessages(),
            'messages_new_counter' => $this->Admin_model->showNewMessages()->num_rows()      
        );
		$this->load->view('admin/halamantambah',$config);
    }

    function update_pages(){
		$this->Sec_model->getSec();
    }

    function delete_pages(){
		$this->Sec_model->getSec();
    }
}