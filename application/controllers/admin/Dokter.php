<?php

class Dokter extends CI_Controller{

	 function index(){
		$this->load->model('Sec_model');
	 	$this->load->model('Admin_model');
	    
	    $config = array(
		  'title' 		=> "Data Dokter");
		$this->load->view('admin/dokter', $config);
	}

	function tambah_dokter(){
		$this->load->model('Sec_model');
	 	$this->load->model('Admin_model');
	    
	    $config = array(
		  'title' 		=> "Data Dokter");
		$this->load->view('admin/dokter-tambah', $config);
	}

	 function tambah(){
		$this->load->model('Sec_model');
		$config['upload_path']    = './uploads/dokter';  
	    $config['allowed_types']  = 'gif|jpg|png';
	 		$this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('gambar')){
	                   echo 'anda gagal upload';
	            }
	            else{
	            	$file 		= $this->upload->data();
	            	$gambar 	= $file['file_name'];
	            	$data 		= array(
								        'pendidikan_id' => $this->input->post('spesialis'),
										'nama' 			=> $this->input->post('nama'),
										'alamat' 		=> $this->input->post('alamat'),
										'agama' 		=> $this->input->post('agama'),
										'jk' 			=> $this->input->post('jk'),
								        'images' 		=> $gambar
					    			);
				      $this->db->insert('dokter',$data);
	 
	            }
	    	$this->session->set_flashdata('info','Berhasil ditambahkan');
	    	redirect('admin/dokter','refresh');
	}

	 function edit(){
		$this->load->model('Sec_model');
	}

	 function hapus(){
		$this->load->model('Sec_model');
	}

	 function jadwal(){
		$config = array(
			'title' => 'Jadwal Dokter'
		);
		$this->load->view('admin/jadwal-dokter', $config);
	}

	function tambah_jadwal(){
		$config = array(
			'title' => 'Jadwal Dokter'
		);
		$this->load->view('admin/jadwal-tambah', $config);
	}

	
}