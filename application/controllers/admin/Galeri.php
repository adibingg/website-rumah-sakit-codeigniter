<?php 

class Galeri extends CI_Controller{

	public function index(){
		$this->load->model('Sec_model');
		$this->load->model('Admin_model');
	    $config['base_url'] 	= base_url() . 'admin/berita/';
	    $config['total_rows'] 	= $this->Admin_model->getJumlahBerita();
	    $config["per_page"] 	= 6;
	    $config["uri_segment"] 	= 3;

	    $data 		= array(
	      'title' 	=> "Galeri Foto",
	      'gambar' 	=> $this->Admin_model->getFoto(),
	      'album'	=> $this->Admin_model->getAlbum(),
	      'berita' 	=> $this->Admin_model->getBeritaPublish($this->pagination->initialize($config)));
	    $this->load->view('admin/galeri',  $data);
	}

	public function upload(){
		$this->load->model('Sec_model');
		$config['upload_path']    = './uploads/';  
	    $config['allowed_types']  = 'gif|jpg|png';
	 		$this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('gambar')){
	                   echo 'anda gagal upload';
	            }
	            else{
	            	$file 		= $this->upload->data();
	            	$gambar 	= $file['file_name'];
	            	$data 		= array(
								        'album_id' 		=> $this->input->post('id_album'),
					              		'caption' 		=> $this->input->post('caption'),
								        'images' 		=> $gambar
					    			);
				      $this->db->insert('gallery',$data);
	 
	            }
	    	$this->session->set_flashdata('info','Berhasil ditambahkan');
	    	redirect('admin/galeri','refresh');
	}

	function tambah_album(){
		$this->load->model('Sec_model');
	    $data 		= array(
	      'title' 	=> "Tambah Album",
	    );
	    $this->load->view('admin/album-tambah',  $data);
	}

	function tambah_foto(){
		$this->load->model('Sec_model');
		$this->load->model('Admin_model');
	    $data 		= array(
		  'title' 	=> "Tambah Album",
		  'album'	=> $this->Admin_model->getAlbum()
	    );
	    $this->load->view('admin/tambah-foto',  $data);
	}

}