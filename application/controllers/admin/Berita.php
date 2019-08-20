<?php

class Berita extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('Sec_model');
    $this->load->model('Admin_model');
  }

  public function index(){
    $this->load->model('Sec_model');
    $this->Sec_model->getSec();
    $data = array(
      'title' => "Artikel",
      'berita' => $this->Admin_model->getArticle());
    $this->load->view('admin/berita',  $data);
  }

  public function create(){
    $this->load->model('Sec_model');
    $this->load->model('Admin_model');
		$data = array(
			'title' => "Tambah Berita",
      'kategori' => $this->Admin_model->getKategori(), 
    );
		$this->load->view('admin/berita-tambah',  $data);
	}
  
  public function save(){
    $this->load->model('Sec_model');
    $config['upload_path']         = './uploads/';  
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
                'title' => $this->input->post('judul'),
                'content' => $this->input->post('isi'),
                'category_id' => $this->input->post('category_id'),
                'status' => "published",
                'images' => $gambar,
                'seo' => $slug,
                'created_by' => $this->session->userdata('id_admin'),
              );

			        $this->db->insert('news',$data);
            }
    $this->session->set_flashdata('info','Berita berhasil di publikasikan');
    redirect('admin/berita','refresh');
  }
  
  public function update($id){
    $this->load->model('Sec_model');
    $this->load->model('Admin_model');
    $data = array(
      'title' => "Perbaharui Berita",
      'kategori' => $this->Admin_model->getKategori(), 
      'berita' => $this->Admin_model->getBeritaId($id), 
    );
    $this->load->view('admin/beritaedit',  $data);

  }

  public function save_update(){
    $this->load->model('Sec_model');
    $config['upload_path']         = './uploads/';  
    $config['allowed_types']        = 'gif|jpg|png';
 	  $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')){
              $file = $this->upload->data();
              $gambar = $file['file_name'];
              $string=preg_replace('/[^a-zA-Z0-9 &%|{.}=,?!*()"-_+$@;<>]/', '',$this->input->post('judul')); 
              $trim=trim($string);
              $pre_slug=strtolower(str_replace(" ", "-", $trim)); 
              $slug=$pre_slug;
              $data = array(
                'title' => $this->input->post('judul'),
                'content' => $this->input->post('isi'),
                'category_id' => $this->input->post('category_id'),
                'status' => "published",
                'seo' => $slug,
                'created_by' => $this->session->userdata('id_admin'),
              );
              $this->db->where('news_id', $this->input->post('news_id'))->update('news', $data);
            }else{

            	$file = $this->upload->data();
              $gambar = $file['file_name'];
              
              $string=preg_replace('/[^a-zA-Z0-9 &%|{.}=,?!*()"-_+$@;<>]/', '',$this->input->post('judul')); 
              $trim=trim($string);
              $pre_slug=strtolower(str_replace(" ", "-", $trim)); 
              $slug=$pre_slug;

              $data = array(
                'title' => $this->input->post('judul'),
                'content' => $this->input->post('isi'),
                'category_id' => $this->input->post('category_id'),
                'status' => "published",
                'images' => $gambar,
                'seo' => $slug,
                'created_by' => $this->session->userdata('id_admin'),
              );

			        $this->db->where('news_id', $this->input->post('news_id'))->update('news', $data);
            }
    $this->session->set_flashdata('info','Berita berhasil di perbaharui');
    redirect('admin/berita');
  }

  public function delete($id){
    $this->db->where('news_id', $id)->delete('news');
    $this->session->set_flashdata('info', "Berhasil menghapus berita");
    redirect('admin/berita');
  }
}