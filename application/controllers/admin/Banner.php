<?php 

defined('BASEPATH') OR exit("No dirrect script access allowed");

class Banner extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Sec_model');
        $this->load->model('Inbox_model');
        $this->load->model('Settings_model');
        $this->load->model('Admin_model');
    }

    public function index(){
        $this->Sec_model->getSec();
        $config = array(
            'title'                 => "Banner Home",
            'messages_new'          => $this->Inbox_model->showNewMessages(),
            'messages_new_counter'  => $this->Inbox_model->showNewMessages()->num_rows(),
            'banner_home'           => $this->Settings_model->getBanner()      
        );
        $this->load->view('admin/banner-home',$config);
    }

    public function create(){
        $this->Sec_model->getSec();
        $config = array (
            'title'                 => "Banner Promosi Home",
            'messages_new'          => $this->Inbox_model->showNewMessages(),
            'messages_new_counter'  => $this->Inbox_model->showNewMessages()->num_rows(),
        );
       $this->load->view('admin/banner-home-tambah', $config);
    }

    public function store(){
        $this->Sec_model->getSec();
        $config['upload_path']         = './uploads';  
        $config['allowed_types']        = 'gif|jpg|png';
        $config['quality'] = '50%'; 
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('gambar')){
            $this->session->set_flashdata('info', 'Maaf, Foto anda gagal di unggah, kemungkinan file terlalu besar. Silahkan Coba Kembali');
            redirect('admin/banner/create');
        }else{
            $file = $this->upload->data();
            $gambar = $file['file_name'];
            $string=preg_replace('/[^a-zA-Z0-9 &%|{.}=,?!*()"-_+$@;<>]/', '',$this->input->post('judul')); 
            $trim=trim($string);
            $pre_slug=strtolower(str_replace(" ", "-", $trim)); 
            $slug=$pre_slug;
         
            $data = array(
                'id_navigation' => $this->input->post('id'),
                'url'           => $slug,
                'title_pages'   => $this->input->post('judul'),
                'content'       => $this->input->post('isi'),
                'thumbnail'     => $gambar,
                'statis_type'   => 'card',
                'icon'          => $this->input->post('icon')
            );
            $this->db->insert('static_pages',$data);
        }
        $this->session->set_flashdata('info','Berhasil menambahkan halaman statis');
        redirect('admin/banner','refresh');
   }

    public function edit($id){
        $this->Sec_model->getSec();
        $config = array(
            'title' => "Perbaharui Banner Halaman Utama",
            'messages_new' => $this->Inbox_model->showNewMessages(),
            'messages_new_counter' => $this->Inbox_model->showNewMessages()->num_rows(),
            'banner_home'   => $this->Settings_model->getBannerSingle($id)      
        );
        $this->load->view('admin/banner-home-edit',$config);
    }

    public function update(){
        $this->Sec_model->getSec();
        $this->Sec_model->getSec();
        $config['upload_path']         = './uploads';  
        $config['allowed_types']        = 'gif|jpg|png';
        $config['quality'] = '50%'; 
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('gambar')){
            $file = $this->upload->data();
            $gambar = $file['file_name'];
            $string=preg_replace('/[^a-zA-Z0-9 &%|{.}=,?!*()"-_+$@;<>]/', '',$this->input->post('judul')); 
            $trim=trim($string);
            $pre_slug=strtolower(str_replace(" ", "-", $trim)); 
            $slug=$pre_slug;
            $data = array(
                'id_navigation' => $this->input->post('id'),
                'url'           => $slug,
                'title_pages'   => $this->input->post('judul'),
                'content'       => $this->input->post('isi'),
                'statis_type'   => 'card',
                'icon'          => $this->input->post('icon')
            );
            $this->db->where('id_static_pages', $this->input->post('id_update'))->update('static_pages',$data);
        }else{
            $file = $this->upload->data();
            $gambar = $file['file_name'];
            $string=preg_replace('/[^a-zA-Z0-9 &%|{.}=,?!*()"-_+$@;<>]/','',$this->input->post('judul')); 
            $trim=trim($string);
            $pre_slug=strtolower(str_replace(" ", "-", $trim)); 
            $slug=$pre_slug;
            $data = array(
                'id_navigation' => $this->input->post('id'),
                'url'           => $slug,
                'title_pages'   => $this->input->post('judul'),
                'content'       => $this->input->post('isi'),
                'thumbnail'     => $gambar,
                'statis_type'   => 'card',
                'icon'          => $this->input->post('icon')
            );
            $this->db->where('id_static_pages', $this->input->post('id_update'))->update('static_pages',$data);
        }
        $this->session->set_flashdata('info','Berhasil menambahkan halaman statis');
        redirect('admin/banner','refresh');
    }

    public function delete($id){
        $this->Sec_model->getSec();
        $this->Settings_model->deleteBanner($id);
        $this->session->set_flashdata('info', 'Halaman berhasil dihapus');
        redirect('admin/banner');
    }

}