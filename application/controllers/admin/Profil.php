<?php

defined('BASEPATH') OR exit("No dirrect script acces allowed");

class Profil extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->model('Sec_model');
	}

	function index(){
		$this->Sec_model->getSec();
	    $config 		= array(
		  'title' 	=> "Profil Rumah Sakit",
		  'profile' => $this->Admin_model->getProfile()
	  	);
	    $this->load->view('admin/profil',  $config);
	}

	function update_profile(){
		$this->Sec_model->getSec();
		$id = $this->input->post('id');
		$data = array (
			'name' => $this->input->post('name'),
			'adress' => $this->input->post('adress'),
			'kabupaten' => $this->input->post('kabupaten'),
			'propinsi' => $this->input->post('propinsi'),
			'phone' => $this->input->post('phone'),
			'fax' => $this->input->post('fax'),
			'no_izin' => $this->input->post('no_izin'),
			'date' => $this->input->post('date'),
			'status_kepemilikan' => $this->input->post('status_kepemilikan'),
			'tipe_rumah_sakit' => $this->input->post('tipe_rumah_sakit'),
			'mulai_berdiri' => $this->input->post('mulai_berdiri'),
			'jumlah_tt' => $this->input->post('jumlah_tt'),
			'jumlah_sdm' => $this->input->post('jumlah_sdm'),
			'akreditasi_kars' => $this->input->post('akreditasi_kars')

		);
		$this->Admin_model->UpdateProfile($id, $data);
		$this->session->set_flashdata('info', 'Profil berhasil diperbaharui');
		redirect('admin/profil');
	}

	function visi_misi(){
		$this->Sec_model->getSec();
	    $config 		= array(
		  'title' 	=> "Visi & Misi Rumah Sakit",
		  'profile' => $this->Admin_model->getProfile()
	  	);
	    $this->load->view('admin/visi-misi',  $config);
	}

	function update_visi_misi(){
		$this->Sec_model->getSec();
		$id = $this->input->post('id');
		$data = array (
			'visi' => $this->input->post('visi'),
			'misi' => $this->input->post('misi'),
			'sejarah' => $this->input->post('sejarah')
		);
		$this->Admin_model->UpdateVisiMisi($id, $data);
		$this->session->set_flashdata('info', 'Visi & Misi berhasil diperbaharui');
		redirect('admin/profil/visi_misi');
	}

	function sejarah(){
		$this->Sec_model->getSec();
	    $config 		= array(
		  'title' 	=> "Sejarah Rumah Sakit",
		  'profile' => $this->Admin_model->getProfile()
	  	);
	    $this->load->view('admin/sejarah',  $config);
	}

	function update_sejarah(){
		$this->Sec_model->getSec();
		$id = $this->input->post('id');
		$data = array (
			'sejarah' => $this->input->post('sejarah')
		);
		$this->Admin_model->UpdateSejarah($id, $data);
		$this->session->set_flashdata('info', 'Sejarah berhasil diperbaharui');
		redirect('admin/profil/sejarah');
	}

	function struktural(){
		$this->Sec_model->getSec();
	    $config 		= array(
		  'title' 	=> "Struktur Organisasi",
		  'profile' => $this->Admin_model->getProfile()
	  	);
	    $this->load->view('admin/struktur-organisasi',  $config);
	}

	function update_struktural(){
		$this->Sec_model->getSec();
		$config['upload_path']         = './uploads';  
		$config['allowed_types']        = 'gif|jpg|png';
		   $this->load->library('upload', $config);
				if (!$this->upload->do_upload('gambar')){
				  echo "Gagal memperbaharui struktur organisasi";
				}else{
	
					$file = $this->upload->data();
				  	$gambar = $file['file_name'];
				  
				  	$data = array(
						'struktur' => $gambar
				  	);
	
					$this->db->where('id', $this->input->post('id'))->update('profile', $data);
				}
		$this->session->set_flashdata('info','Berita berhasil di perbaharui');
		redirect('admin/struktur-organisasi');
	  
	}
}