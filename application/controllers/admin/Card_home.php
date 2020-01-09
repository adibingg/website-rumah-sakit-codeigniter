<?php 

defined('BASEPATH') OR exit("No dirrect script access allowed");

class Card_home extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Sec_model');
        $this->load->model('Inbox_model');
        $this->load->model('Static_page_model');
        $this->load->model('Admin_model');
    }

    public function index(){
        $this->Sec_model->getSec();
        $config = array(
          'title'                 => "Pengaturan Card",
          'messages_new'          => $this->Inbox_model->showNewMessages(),
          'messages_new_counter'  => $this->Inbox_model->showNewMessages()->num_rows()      
        );
        $this->load->view('admin/card',$config);
    }

    public function add_pages(){
        $this->Sec_model->getSec();
        $config = array(
          'title'                 => "Halaman Statis Baru",
          'messages_new'          => $this->Inbox_model->showNewMessages(),
          'messages_new_counter'  => $this->Inbox_model->showNewMessages()->num_rows()      
        );
        $this->load->view('admin/halamantambah',$config);
    }
  
    public function save_pages(){
        $this->Sec_model->getSec();
        $config['upload_path']         = './uploads';  
        $config['allowed_types']        = 'gif|jpg|png';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('gambar')){
            $this->session->set_flashdata('info', 'Maaf, Foto anda gagal di unggah, kemungkinan file terlalu besar. Silahkan Coba Kembali');
            redirect('admin/berita/create');
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
              'thumbnail'    => $gambar,
              'statis_type' => 'card',
              'icon'        => $this->input->post('icon')
            );
            $this->db->insert('static_pages',$data);
        }
        $this->session->set_flashdata('info','Berhasil menambahkan halaman statis');
        redirect('admin/pengaturan','refresh');
    }
  
    public function edit_page(){
        $this->Sec_model->getSec();
        $config = array(
          'title' => "Halaman Statis Baru",
          'messages_new' => $this->Inbox_model->showNewMessages(),
          'messages_new_counter' => $this->Inbox_model->showNewMessages()->num_rows()      
          );
        $this->load->view('admin/halamanedit',$config);
    }
  
    public function update_pages(){
            $this->Sec_model->getSec();
    }
  
    public function delete_page($id){
        $this->Sec_model->getSec();
        $this->Static_page_model->deletePages($id);
        $this->session->set_flashdata('info', 'Halaman berhasil dihapus');
        redirect('admin/halaman-statis');
    }
}