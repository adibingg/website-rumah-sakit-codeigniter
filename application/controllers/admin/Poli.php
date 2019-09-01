<?php 

defined('BASEPATH') OR exit("No script dirrect access allowed");

class Poli extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Sec_model');
        $this->load->model('Admin_model');
    }
    function index(){
        $this->Sec_model->getSec();
        $config = array (
            'title' => "Jadwal Poli",
            'poli_schedule' => $this->Admin_model->getJadwalPoli()
        );

        $this->load->view('admin/jadwal-poli', $config);
    }

    function add_poli(){
        $config = array (
            'title' => "Jadwal Poli"
        );

        $this->load->view('admin/jadwal-poli-tambah', $config);
    }

    function save_jadwal_poli(){
        $this->Sec_model->getSec();
        $data = array(
            'poli_name' => $this->input->post('nama_poli'),
            'senin'     => $this->input->post('senin'),
            'selasa'    => $this->input->post('selasa'),
            'rabu'      => $this->input->post('rabu'),
            'kamis'     => $this->input->post('kamis'),
            'jumat'     => $this->input->post('jumat'),
            'sabtu'     => $this->input->post('sabtu'),
            'minggu'    => $this->input->post('minggu'),
        );
        $this->Admin_model->savePoli($data);
        $this->session->set_flashdata('info', 'Jadwal Poli Berhasil di Tambahkan');
        redirect('admin/jadwal-poli');
    }

    function delete($id){
        $this->Sec_model->getSec();
        $this->Admin_model->getPoliId($id);
        $this->session->set_flashdata('info', 'Jadwal poli berhasil dihapus');
        redirect('admin/jadwal-poli');
    }


}