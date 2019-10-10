<?php

class Dokter extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('Sec_model');
		$this->load->model('Admin_model');
	}
	
	function index(){
		$this->Sec_model->getSec();
	    $config = array(
		  	'title' 				=> "Data Dokter",
			'dokter'				=> $this->Admin_model->getDoctor(),
			'messages_new' 			=> $this->Admin_model->showNewMessages(),
			'messages_new_counter' 	=> $this->Admin_model->showNewMessages()->num_rows()
		);
		$this->load->view('admin/dokter', $config);
	}

	function tambah_dokter(){
		$this->Sec_model->getSec(); 
	    $config = array(
		  	'title' 				=> "Data Dokter",
			'specialist'			=> $this->Admin_model->getSpecialist(),
			'messages_new' 			=> $this->Admin_model->showNewMessages(),
			'messages_new_counter' 	=> $this->Admin_model->showNewMessages()->num_rows()
		);
		$this->load->view('admin/dokter-tambah', $config);
	}

	 function tambah(){
		$this->Sec_model->getSec();
		$config['upload_path']    = './uploads';  
	    $config['allowed_types']  = 'gif|jpg|png';
	 	$this->load->library('upload', $config);
	        if ( ! $this->upload->do_upload('gambar')){
	            redirect('admin/dokter/tambah_dokter');
			}else{
	            $file 		= $this->upload->data();
				$gambar 	= $file['file_name'];
					
	            $data = array(
					'specialist_id' => $this->input->post('specialist_id'),
					'doctor_name' 	=> $this->input->post('nama'),
					'address' 		=> $this->input->post('alamat'),
					'images' 		=> $gambar
				);
				$this->db->insert('doctor',$data);
	        }
		$this->session->set_flashdata('info','Berhasil ditambahkan');
		redirect('admin/dokter','refresh');
	}

	function edit(){
		$this->Sec_model->getSec();
	}

	function delete($id){
		$this->Sec_model->getSec();
		$result = $this->Admin_model->checkJadwal($check);
		if($result->num_rows() < 1){
			$this->session->set_flashdata('info', 'Mohon untuk menghapus data jadwal dokter dari data dokter yang ingin dihapus');
			redirect('admin/dokter');
		}else{
			$this->Admin_model->getDeleteDoctor($id);
			$this->session->set_flashdata('info', 'Berhasil menghapus data dokter');
			redirect('admin/dokter');
		}
	}

	 function jadwal(){
		$this->load->model('Admin_model');
		$config = array(
			'title' 				=> 'Jadwal Dokter',
			'jadwal' 				=> $this->Admin_model->getJadwal(),
			'messages_new' 			=> $this->Admin_model->showNewMessages(),
			'messages_new_counter' 	=> $this->Admin_model->showNewMessages()->num_rows()
		);
		$this->load->view('admin/jadwal-dokter', $config);
	}

	function tambah_jadwal(){
		$this->Sec_model->getSec();
		$config = array(
			'title' 				=> 'Jadwal Dokter',
			'doctor' 				=> $this->Admin_model->getDoctor(),
			'messages_new' 			=> $this->Admin_model->showNewMessages(),
			'messages_new_counter' 	=> $this->Admin_model->showNewMessages()->num_rows()
		);
		$this->load->view('admin/jadwal-tambah', $config);
	}

	function save_jadwal(){
		$this->Sec_model->getSec();
		$check  = $this->input->post('doctor_id');
		$result = $this->Admin_model->checkJadwal($check);
		if($result->num_rows() < 1){
			$data = array(
				'doctor_id' => $this->input->post('doctor_id'),
				'senin'		=> $this->input->post('senin'),
				'selasa'	=> $this->input->post('selasa'),
				'rabu'		=> $this->input->post('rabu'),
				'kamis'		=> $this->input->post('kamis'),
				'jumat'		=> $this->input->post('jumat'),
				'sabtu'		=> $this->input->post('sabtu'),
				'minggu'	=> $this->input->post('minggu'),
			);

			$this->Admin_model->saveJadwal($data);
			$this->session->set_flashdata('info', 'Jadwal berhasil di tambahkan');
			redirect('admin/dokter/jadwal_dokter');
		
		}else{

			$this->session->set_flashdata('info', "Jadwal dokter sudah ada");
			redirect('admin/dokter/tambah_jadwal');
		}
	}

	function hapus_jadwal($id){
		$this->Sec_model->getSec();
		$this->Admin_model->deleteJadwalDokter($id);
		$this->session->set_flashdata('info', 'Berhasil menghapus jadwal dokter');
		redirect('admin/dokter/jadwal');
	}

	
}