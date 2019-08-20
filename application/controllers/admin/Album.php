<?php 


class Album extends CI_Controller{
	public function index(){
		$this->load->model('Sec_model');
	 	$this->load->model('Admin_model');
	    $config['base_url'] 	= base_url() . 'admin/berita/';
	    $config['total_rows'] 	= $this->Admin_model->getJumlahBerita();
	    $config["per_page"] 	= 6;
	    $config["uri_segment"] 	= 3;

	    $data 		= array(
	      'title' 	=> "Album Foto",
	      'album' 	=> $this->Admin_model->getAlbum());
	    $this->load->view('admin/sidebar',  $data);
	    $this->load->view('admin/album', $data);
	}

	public function simpan_album(){
		$this->load->model('Sec_model');
		$config['upload_path']    = './cover-album/';  
	    $config['allowed_types']  = 'gif|jpg|png';
	 		$this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('gambar')){
	                   echo 'anda gagal upload';
	            }
	            else{
	            	$file 		= $this->upload->data();
	            	$gambar 	= $file['file_name'];
	              	$string		=preg_replace('/[^a-zA-Z0-9 &%|{.}=,?!*()"-_+$@;<>]/', '',$this->input->post('nama_album')); 
	                $trim		=trim($string);
	                $pre_slug	=strtolower(str_replace(" ", "-", $trim)); 
	                $slug 		=$pre_slug;
	            	$data 		= array(
					        	'album_name' 	=> $this->input->post('nama_album'),
					        	'cover' 		=> $gambar,
		              			'link' 			=> $slug
					    		);
				      $this->db->insert('album',$data);
	 
	            }
	    	$this->session->set_flashdata('info','Berhasil ditambahkan');
	    	redirect('admin/dashboard','refresh');
	}


	public function edit_album(){
		$this->load->model('Sec_model');

	}

	public function update_album(){
		$this->load->model('Sec_model');

	}

	public function hapus_album(){
		$this->load->model('Sec_model');

	}
}