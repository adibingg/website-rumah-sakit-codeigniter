<?php 
defined('BASEPATH') OR exit("No script dirrect access allowed!");
class Halaman extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->model('Sec_model');
    }

    function index(){
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
          $config = array(
            'title' => "Halaman Administrator",
            'navigation' => $this->Admin_model->getNav(),
            'messages_new' => $this->Admin_model->showNewMessages(),
            'messages_new_counter' => $this->Admin_model->showNewMessages()->num_rows()      
          );
		  $this->load->view('admin/navigasi-tambah',$config);
    }

    function save_nav(){
        $this->Sec_model->getSec();
        
        $data = array(
            'title' => $this->input->post('navigasi'),
            'active' => $this->input->post('active'),
        );
        
        $this->Admin_model->saveNav($data);
        $this->session->set_flashdata('info', 'Berhasil menambahkan menu navigasi');
        redirect('admin/halaman-statis');
    }

    function update_nav($id){
          $this->Sec_model->getSec();
          $config = array(
            'title' => "Halaman Administrator",
            'navigation' => $this->Admin_model->getNavId($id),
            'messages_new' => $this->Admin_model->showNewMessages(),
            'messages_new_counter' => $this->Admin_model->showNewMessages()->num_rows()      
          );
		  $this->load->view('admin/navigasi-update',$config);
    
    }

    function saveNav(){
        $this->Sec_model->getSec();
        $id = $this->input->post('id');
        $data = array(
            'title' => $this->input->post('navigasi'),
            'active' => $this->input->post('active'),
        );
        $this->Admin_model->saveUpdate($id, $data);
        $this->session->set_flashdata('info', 'Berhasil memperbaharui menu navigasi');
        redirect('admin/halaman-statis');
    }

    function delete_nav($id){
          $this->Sec_model->getSec();
          $this->Admin_model->deleteNav($id);
          $this->session->set_flashdata('info', 'Berhasil menghapus menu navigasi');
          redirect('admin/halaman-statis');
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

    function test(){
        $row = $this->Admin_model->getStaticPages();
    }

    function nav(){
        $sh  =$this->Admin_model->getNav();
        echo json_encode($sh);
    }
}