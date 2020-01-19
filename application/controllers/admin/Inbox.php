<?php 

defined('BASEPATH') OR exit("No dirrect script access allowed");

class Inbox extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Sec_model');
        $this->load->model('Inbox_model');

    }

    public function index(){
        $this->Sec_model->getSec();
		$config = array(
			'title'                 => "Halaman Administrator",
			'messages_new'          => $this->Inbox_model->showNewMessages(),
			'messages_new_counter'  => $this->Inbox_model->showNewMessages()->num_rows()      
		);
		$this->load->view('admin/inbox',$config);
    }

    public function view($id){
        $this->Sec_model->getSec();
        $data = $this->Inbox->model->getById($id);
        echo json_encode($data);
    }

    public function delete(){

    }

}