<?php 

class Galeri extends CI_Controller{

	public function index(){
		$this->load->model('Sec_model');
		$this->Sec_model->getSec();
		$this->load->model('Admin_model');
	    $data 		= array(
	      'title' 	=> "Galeri Foto",
	      'galeri' 	=> $this->Admin_model->getFoto(),
		  'album'	=> $this->Admin_model->getAlbum()
		);
	    $this->load->view('admin/galeri',  $data);
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

	public function upload(){
		$this->load->model('Sec_model');
		$config['upload_path']    = './uploads/';  
	    $config['allowed_types']  = 'gif|jpg|png';
	 		$this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('gambar')){
					$this->session->set_flashdata('info', 'Maaf, Foto anda gagal di unggah, kemungkinan file terlalu besar. Silahkan Coba Kembali');
					redirect('admin/galeri/tambah_foto');
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

	function hapus_foto($id){
		$this->load->model('Sec_model');
		$this->Sec_model->getSec();
		$this->load->model('Admin_model');
		$this->Admin_model->getFotoId($id);
		$this->session->set_flashdata('info', '<i class="fa fa-check"></i> Foto berhasil dihapus');
		redirect('admin/galeri');
	}

	function tambah_album(){
		$this->load->model('Sec_model');
	    $data 		= array(
	      'title' 	=> "Tambah Album",
	    );
	    $this->load->view('admin/album-tambah',  $data);
	}

	function simpan_album(){
		$this->load->model('Sec_model');
		$this->Sec_model->getSec();
		$this->load->model('Admin_model');
		$string=preg_replace('/[^a-zA-Z0-9 &%|{.}=,?!*()"-_+$@;<>]/', '',$this->input->post('album_name')); 
		$trim=trim($string);
		$pre_slug=strtolower(str_replace(" ", "-", $trim)); 
		$slug=$pre_slug;
		$data = array (
			'album_name' => $this->input->post('album_name'),
			'link'		 => $slug
		);
		$this->Admin_model->SimpanAlbum($data);
	}

	function perbaharui_album($id){
		$this->load->model('Sec_model');
		$this->Sec_model->getSec();
		$this->load->model('Admin_model');
	    $data 		= array(
		  'title' 	=> "Perbaharui Album",
		  'albumfoto' => $this->Admin_model->AlbumId($id)
	    );
	    $this->load->view('admin/album-edit', $data);
	}

	function simpan_pembaharuan_album(){
		$this->load->model('Sec_model');
		$this->Sec_model->getSec();
		$this->load->model('Admin_model');
		$id = $this->input->post('album_id');
		$string=preg_replace('/[^a-zA-Z0-9 &%|{.}=,?!*()"-_+$@;<>]/', '',$this->input->post('album_name')); 
		$trim=trim($string);
		$pre_slug=strtolower(str_replace(" ", "-", $trim)); 
		$slug=$pre_slug;
		$data = array (
			'album_name' => $this->input->post('album_name'),
			'link'		 => $slug
		);
		$this->Admin_model->PerbaharuiAlbum($id, $data);
	}

	function hapus_album($id){
		$this->load->model('Sec_model');
		$this->load->model('Admin_model');
		$this->Sec_model->getSec();
		$check_album = $this->Admin_model->checkAlbum($id);
		if($check_album->num_rows() > 0){
			$this->session->set_flashdata('info', '<i class="fa fa-remove"></i> Gagal menghapus album, kosongkan album terlebih dahulu');
			redirect('admin/galeri');
		}else{
			$this->session->set_flashdata('info', '<i class="fa fa-check"></i> Album berhasil dihapus');
			$this->Admin_model->HapusAlbum($id);
		}
		
	}

}