<?php 


defined('BASEPATH') OR exit("No dirrect script allowed!");


class Login extends CI_Controller
{
    public function index()
    {
        $config = array (
            'title' => "Login Administrator"
        );

        $this->load->view('admin/login',$config);
    }

    public function auth(){
        $this->load->model('Auth_model');
        $this->Auth_model->getLogin();
    }

    public function logout(){
        $this->session->sess_destroy();
    }
}