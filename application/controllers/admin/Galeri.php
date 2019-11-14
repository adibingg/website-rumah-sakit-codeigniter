<?php 

class Galeri extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Sec_model');
		$this->load->model('Gallery_model');
		$this->load->model('Inbox_model');
	}

	function index(){
		$this->Sec_model->getSec();
	    $data = array(
	      'title' 					=> "Galeri Foto",
	      'galeri' 					=> $this->Gallery_model->getPhoto(),
		  'album'					=> $this->Gallery_model->getAlbum(),
		  'messages_new' 			=> $this->Inbox_model->showNewMessages(),
		  'messages_new_counter' 	=> $this->Inbox_model->showNewMessages()->num_rows()
		);
	    $this->load->view('admin/galeri',  $data);
	}

	function add(){
		$this->Sec_model->getSec();
	    $data = array(
		  'title' 					=> "Tambah Album",
		  'album'					=> $this->Gallery_model->getAlbum(),
		  'messages_new' 			=> $this->Inbox_model->showNewMessages(),
		  'messages_new_counter' 	=> $this->Inbox_model->showNewMessages()->num_rows()
	    );
	    $this->load->view('admin/galeri-tambah',  $data);
	}

	function store(){
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
	    redirect('admin/gallery','refresh');
	}

	function edit($id){
		$this->Sec_model->getSec();
		$this->Sec_model->getSec();
	    $data = array(
		  'title' 					=> "Tambah Album",
		  'album'					=> $this->Gallery_model->getAlbum(),
		  'photo'					=> $this->Gallery_model->getGalleryId($id),
		  'messages_new' 			=> $this->Inbox_model->showNewMessages(),
		  'messages_new_counter' 	=> $this->Inbox_model->showNewMessages()->num_rows()
	    );
	    $this->load->view('admin/galeri-edit',  $data);
	}

	function update($id){

	}

	function destroy($id){
		$this->Sec_model->getSec();
		$this->Gallery_model->getPhotoId($id);
		$this->session->set_flashdata('info', '<i class="fa fa-trash"></i> Foto berhasil dihapus');
		redirect('admin/galeri');
	}
	
}