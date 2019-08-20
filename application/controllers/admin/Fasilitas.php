<?php 

class Fasilitas extends CI_Controller{

    public function index(){
        $this->load->model('Sec_model');
        $config = array (
            'title' => "Fasilitas Penunjang"
        );

        $this->load->view('admin/fasilitas', $config);

    }

    public function tambah_pelayanan(){
        $this->load->model('Sec_model');

    }

    public function edit_pelayanan(){
        $this->load->model('Sec_model');

    }


    public function hapus_pelayanan(){
        $this->load->model('Sec_model');
        
    }
}