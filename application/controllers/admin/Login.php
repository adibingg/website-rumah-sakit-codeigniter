<?php 


defined('BASEPATH') OR exit("No dirrect script allowed!");


class Login extends CI_Controller
{
    
    function index()
    {
        if($this->session->userdata('id_admin')){
            $this->session->set_flashdata("You are already loged in");
            redirect('admin/dashboard');
        }else{
            $config = array (
                'title' => "Login Administrator"
            );
            $this->load->view('admin/login',$config);   
        }
    }

    function auth(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        if($this->form_validation->run()== FALSE){
            $config = array (
                'title' => "Login Administrator"
            );
            $this->load->view('admin/login',$config);  
        }else{
            $this->load->model('Auth_model');
            $this->Auth_model->getLogin();
        }
        
    }

    function logout(){
        $this->session->sess_destroy();
    }
}