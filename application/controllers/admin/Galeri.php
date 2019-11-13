<?php 

class Galeri extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Sec_model');
<<<<<<< HEAD
		$this->load->model('Admin_model');
=======
		$this->load->model('Galeri_model');
>>>>>>> 94f3f167d22ede59dba3da2012cbdc94630ff047
		$this->load->model('Inbox_model');
	}

	function index(){
		$this->Sec_model->getSec();
	    $data = array(
	      'title' 					=> "Galeri Foto",
<<<<<<< HEAD
	      'galeri' 					=> $this->Admin_model->getFoto(),
		  'album'					=> $this->Admin_model->getAlbum(),
=======
	      'galeri' 					=> $this->Galeri_model->getFoto(),
		  'album'					=> $this->Galeri_model->getAlbum(),
>>>>>>> 94f3f167d22ede59dba3da2012cbdc94630ff047
		  'messages_new' 			=> $this->Inbox_model->showNewMessages(),
		  'messages_new_counter' 	=> $this->Inbox_model->showNewMessages()->num_rows()
		);
	    $this->load->view('admin/galeri',  $data);
	}

	function tambah_foto(){
		$this->Sec_model->getSec();
	    $data = array(
		  'title' 					=> "Tambah Album",
<<<<<<< HEAD
		  'album'					=> $this->Admin_model->getAlbum(),
=======
		  'album'					=> $this->Galeri_model->getAlbum(),
>>>>>>> 94f3f167d22ede59dba3da2012cbdc94630ff047
		  'messages_new' 			=> $this->Inbox_model->showNewMessages(),
		  'messages_new_counter' 	=> $this->Inbox_model->showNewMessages()->num_rows()
	    );
	    $this->load->view('admin/tambah-foto',  $data);
	}

	function upload(){
		$this->Sec_model->getSec();
		$config['upload_path']    = './uploads/';  
	    $config['allowed_types']  = 'gif|jpg|png';
	 		$this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('gambar')){
					$this->session->set_flashdata('info', 'Maaf, Foto anda gagal di unggah, kemungkinan file terlalu besar. Silahkan Coba Kembali');
					redirect('admin/galeri/tambah_foto');
	            }else{
	            	$file 	= $this->upload->data();
	            	$gambar = $file['file_name'];
	            	$data 	= array(
						'album_id' 	=> $this->input->post('id_album'),
					    'caption' 	=> $this->input->post('caption'),
						'images' 	=> $gambar
					);
				    $this->db->insert('gallery',$data);
				}
	    $this->session->set_flashdata('info','Berhasil ditambahkan');
	    redirect('admin/galeri','refresh');
	}

	function hapus_foto($id){
		$this->Sec_model->getSec();
		$this->Galeri_model->getFotoId($id);
		$this->session->set_flashdata('info', '<i class="fa fa-check"></i> Foto berhasil dihapus');
		redirect('admin/galeri');
	}

	function tambah_album(){
		$this->Sec_model->getSec();
	    $data = array(
		  'title' 					=> "Tambah Album",
		  'messages_new' 			=> $this->Inbox_model->showNewMessages(),
		  'messages_new_counter' 	=> $this->Inbox_model->showNewMessages()->num_rows()
	    );
	    $this->load->view('admin/album-tambah',  $data);
	}

	function simpan_album(){
		$this->Sec_model->getSec();
		$string		= preg_replace('/[^a-zA-Z0-9 &%|{.}=,?!*()"-_+$@;<>]/', '',$this->input->post('album_name')); 
		$trim		= trim($string);
		$pre_slug	= strtolower(str_replace(" ", "-", $trim)); 
		$slug		= $pre_slug;
		$data = array (
			'album_name' => $this->input->post('album_name'),
			'link'		 => $slug
		);
		$this->Galeri_model->SimpanAlbum($data);
	}

	function perbaharui_album($id){
		$this->Sec_model->getSec();
	    $data = array(
		  'title' 					=> "Perbaharui Album",
<<<<<<< HEAD
		  'albumfoto' 				=> $this->Admin_model->AlbumId($id),
=======
		  'albumfoto' 				=> $this->Galeri_model->AlbumId($id),
>>>>>>> 94f3f167d22ede59dba3da2012cbdc94630ff047
		  'messages_new' 			=> $this->Inbox_model->showNewMessages(),
		  'messages_new_counter' 	=> $this->Inbox_model->showNewMessages()->num_rows()
	    );
	    $this->load->view('admin/album-edit', $data);
	}

	function simpan_pembaharuan_album(){
		$this->Sec_model->getSec();
		$id 		= $this->input->post('album_id');
		$string		= preg_replace('/[^a-zA-Z0-9 &%|{.}=,?!*()"-_+$@;<>]/', '',$this->input->post('album_name')); 
		$trim		= trim($string);
		$pre_slug	= strtolower(str_replace(" ", "-", $trim)); 
		$slug		= $pre_slug;
		$data = array (
			'album_name' => $this->input->post('album_name'),
			'link'		 => $slug
		);
		$this->Galeri_model->PerbaharuiAlbum($id, $data);
	}

	function hapus_album($id){
		$this->Sec_model->getSec();
		$check_album = $this->Galeri_model->checkAlbum($id);
		if($check_album->num_rows() > 0){
			$this->session->set_flashdata('info', '<i class="fa fa-remove"></i> Gagal menghapus album, kosongkan album terlebih dahulu');
			redirect('admin/galeri');
		}else{
			$this->session->set_flashdata('info', '<i class="fa fa-check"></i> Album berhasil dihapus');
			$this->Galeri_model->HapusAlbum($id);
		}
	}
}