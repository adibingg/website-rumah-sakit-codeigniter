<?php 

defined('BASEPATH') OR exit("No script dirrect access allowed!");

class Halaman extends CI_Controller{
    function __construct(){
      parent::__construct();
      $this->load->model('Sec_model');
      $this->load->model('Inbox_model');
      $this->load->model('Static_page_model');
      $this->load->model('Admin_model');
    }

    function index(){
		  $this->Sec_model->getSec();
		  $config = array(
        'title'                 => "Halaman Administrator",
        'navigation'            => $this->Static_page_model->getNav(),
        'messages_new'          => $this->Inbox_model->showNewMessages(),
        'messages_new_counter'  => $this->Inbox_model->showNewMessages()->num_rows()      
      );
		  $this->load->view('admin/halaman',$config);
	  }

    function add_nav(){
		  $this->Sec_model->getSec();
      $config = array(
        'title'                 => "Halaman Administrator",
        'navigation'            => $this->Static_page_model->getNav(),
        'messages_new'          => $this->Inbox_model->showNewMessages(),
        'messages_new_counter'  => $this->Inbox_model->showNewMessages()->num_rows()      
      );
		  $this->load->view('admin/navigasi-tambah',$config);
    }

    function save_nav(){
      $this->Sec_model->getSec();
      $data = array(
        'title'   => $this->input->post('navigasi'),
        'active'  => $this->input->post('active'),
      );
      $this->Static_page_model->saveNav($data);
      $this->session->set_flashdata('info', 'Berhasil menambahkan menu navigasi');
      redirect('admin/halaman-statis');
    }

    function update_nav($id){
      $this->Sec_model->getSec();
      $config = array(
        'title'                 => "Halaman Administrator",
        'navigation'            => $this->Static_page_model->getNavId($id),
        'messages_new'          => $this->Inbox_model->showNewMessages(),
        'messages_new_counter'  => $this->Inbox_model->showNewMessages()->num_rows()      
      );
		  $this->load->view('admin/navigasi-update',$config);
    
    }

    function saveNav(){
      $this->Sec_model->getSec();
      $id   = $this->input->post('id');
      $data = array(
        'title'   => $this->input->post('navigasi'),
        'active'  => $this->input->post('active'),
      );
      $this->Static_page_model->saveUpdate($id, $data);
      $this->session->set_flashdata('info', 'Berhasil memperbaharui menu navigasi');
      redirect('admin/halaman-statis');
    }

    function delete_nav($id){
      $this->Sec_model->getSec();
      $this->Static_page_model->deleteNav($id);
      $this->session->set_flashdata('info', 'Berhasil menghapus menu navigasi');
      redirect('admin/halaman-statis');
    }

    function add_pages($id){
      $this->Sec_model->getSec();
      $config = array(
        'title'                 => "Halaman Statis Baru",
        'navigation'            => $this->Static_page_model->getNavId($id),
        'messages_new'          => $this->Inbox_model->showNewMessages(),
        'messages_new_counter'  => $this->Inbox_model->showNewMessages()->num_rows()      
      );
      $this->load->view('admin/halamantambah',$config);
    }

    function save_pages(){
      $this->Sec_model->getSec();
      $config['upload_path']         = './uploads';  
      $config['allowed_types']        = 'gif|jpg|png';
      $this->load->library('upload', $config);
        if (!$this->upload->do_upload('gambar')){
          $this->session->set_flashdata('info', 'Maaf, Foto anda gagal di unggah, kemungkinan file terlalu besar. Silahkan Coba Kembali');
          redirect('admin/berita/create');
        }
        else{
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
          );
          $this->db->insert('static_pages',$data);
        }
        $this->session->set_flashdata('info','Berhasil menambahkan halaman statis');
      redirect('admin/halaman-statis','refresh');
    }

    function edit_page(){
      $this->Sec_model->getSec();
      $config = array(
        'title' => "Halaman Statis Baru",
        'messages_new' => $this->Inbox_model->showNewMessages(),
        'messages_new_counter' => $this->Inbox_model->showNewMessages()->num_rows()      
    	);
      $this->load->view('admin/halamanedit',$config);
    }

    function update_pages(){
		  $this->Sec_model->getSec();
    }

    function delete_page($id){
      $this->Sec_model->getSec();
      $this->Static_page_model->deletePages($id);
      $this->session->set_flashdata('info', 'Halaman berhasil dihapus');
      redirect('admin/halaman-statis');
    }
}