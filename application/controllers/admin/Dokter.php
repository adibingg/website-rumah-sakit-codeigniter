<?php

class Dokter extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('Sec_model');
		$this->load->model('Admin_model');
		$this->load->model('Inbox_model');
	}
	
	function index(){
		$this->Sec_model->getSec();
	    $config = array(
		  	'title' 				=> "Data Dokter",
			'dokter'				=> $this->Admin_model->getDoctor(),
			'messages_new' 			=> $this->Inbox_model->showNewMessages(),
			'messages_new_counter' 	=> $this->Inbox_model->showNewMessages()->num_rows()
		);
		$this->load->view('admin/dokter', $config);
	}

	function create(){
		$this->Sec_model->getSec(); 
	    $config = array(
		  	'title' 				=> "Data Dokter",
			'specialist'			=> $this->Admin_model->getSpecialist(),
			'messages_new' 			=> $this->Inbox_model->showNewMessages(),
			'messages_new_counter' 	=> $this->Inbox_model->showNewMessages()->num_rows()
		);
		$this->load->view('admin/dokter-tambah', $config);
	}

	 function store(){
		$this->Sec_model->getSec();
		$config['upload_path']    = './uploads';  
	    $config['allowed_types']  = 'gif|jpg|png';
	 	$this->load->library('upload', $config);
	        if ( ! $this->upload->do_upload('gambar')){
	            $data = array(
					'specialist_id' => $this->input->post('spesialis_id'),
					'doctor_name' 	=> $this->input->post('nama'),
					'bio'			=> $this->input->post('bio'),
					'address' 		=> $this->input->post('alamat')
				);
				$this->db->insert('doctor',$data);
			}else{
	            $file 		= $this->upload->data();
				$gambar 	= $file['file_name'];
					
	            $data = array(
					'specialist_id' => $this->input->post('spesialis_id'),
					'doctor_name' 	=> $this->input->post('nama'),
					'address' 		=> $this->input->post('alamat'),
					'bio'			=> $this->input->post('bio'),
					'images' 		=> $gambar
				);
				$this->db->insert('doctor',$data);
	        }
		$this->session->set_flashdata('info',
			'<div class="alert alert-success alert-dismissible" role="alert">
                <strong> <i class="fa fa-info-circle"></i> Berhasil menambahkan data dokter</strong>
                <button style="color: red;" type="button" class="close" data-dismiss="alert" aria-label="Close">
                	<span aria-hidden="true">&times;</span>
                </button>
            </div>'
        );

		redirect('admin/dokter','refresh');
	}

	function edit($id){
		$this->Sec_model->getSec(); 
	    $config = array(
		  	'title' 				=> "Perbaharui Data Dokter",
			'specialist'			=> $this->Admin_model->getSpecialist(),
			'messages_new' 			=> $this->Inbox_model->showNewMessages(),
			'messages_new_counter' 	=> $this->Inbox_model->showNewMessages()->num_rows(),
			'doctor_detail'			=> $this->Admin_model->getDoctorDetail($id)
		);
		$this->load->view('admin/dokter-update', $config);
	}

	function update(){
		$this->Sec_model->getSec();
		$config['upload_path']    = './uploads';  
	    $config['allowed_types']  = 'gif|jpg|png';
	 	$this->load->library('upload', $config);
	        if ( ! $this->upload->do_upload('gambar')){
	            $data = array(
					'specialist_id' => $this->input->post('spesialis_id'),
					'doctor_name' 	=> $this->input->post('nama'),
					'bio'			=> $this->input->post('bio'),
					'address' 		=> $this->input->post('alamat')
				);
				$this->db->where('doctor_id', $this->input->post('id'))->update('doctor',$data);
			}else{
	            $file 		= $this->upload->data();
				$gambar 	= $file['file_name'];
	            $data = array(
					'specialist_id' => $this->input->post('spesialis_id'),
					'doctor_name' 	=> $this->input->post('nama'),
					'bio'			=> $this->input->post('bio'),
					'address' 		=> $this->input->post('alamat'),
					'images' 		=> $gambar
				);
				$this->db->where('doctor_id', $this->input->post('id'))->update('doctor',$data);
	        }
			$this->session->set_flashdata('info',
			'<div class="alert alert-success alert-dismissible" role="alert">
                <strong> <i class="fa fa-check"></i>Berhasil memperbaharui data dokter</strong>
                <button style="color: red;" type="button" class="close" data-dismiss="alert" aria-label="Close">
                	<span aria-hidden="true">&times;</span>
                </button>
            </div>'
        );

		redirect('admin/dokter','refresh');
	}

	function delete($id){
		$this->Sec_model->getSec();
		$result = $this->Admin_model->checkJadwal($id);
		if($result->num_rows() == 1){
			$this->session->set_flashdata('info',
			'<div class="alert alert-danger alert-dismissible" role="alert">
                <strong> <i class="fa fa-exclamation-triangle "></i> Gagal menghapus, kemungkinan data dokter masih tersimpan di jadwal dokter silahkan hapus terlebih dahulu</strong>
                <button style="color: red;" type="button" class="close" data-dismiss="alert" aria-label="Close">
                	<span aria-hidden="true">&times;</span>
                </button>
            </div>'
        );
			redirect('admin/dokter');
		}else{
			$this->Admin_model->getDeleteDoctor($id);
			$this->session->set_flashdata('info',
			'<div class="alert alert-success alert-dismissible" role="alert">
                <strong> <i class="fa fa-trash"></i> Berhasil menghapus data dokter</strong>
                <button style="color: red;" type="button" class="close" data-dismiss="alert" aria-label="Close">
                	<span aria-hidden="true">&times;</span>
                </button>
            </div>'
        );
			redirect('admin/dokter');
		}
	}

	 function jadwal(){
		$this->load->model('Admin_model');
		$config = array(
			'title' 				=> 'Jadwal Dokter',
			'jadwal' 				=> $this->Admin_model->getJadwal(),
			'messages_new' 			=> $this->Inbox_model->showNewMessages(),
			'messages_new_counter' 	=> $this->Inbox_model->showNewMessages()->num_rows()
		);
		$this->load->view('admin/jadwal-dokter', $config);
	}

	function jadwal_create(){
		$this->Sec_model->getSec();
		$config = array(
			'title' 				=> 'Jadwal Dokter',
			'doctor' 				=> $this->Admin_model->getDoctor(),
			'messages_new' 			=> $this->Inbox_model->showNewMessages(),
			'messages_new_counter' 	=> $this->Inbox_model->showNewMessages()->num_rows()
		);
		$this->load->view('admin/jadwal-tambah', $config);
	}

	function jadwal_store(){
		$this->Sec_model->getSec();
		$check  = $this->input->post('doctor_id');
		$result = $this->Admin_model->checkJadwal($check);
		if($result->num_rows() < 1){
			$data = array(
				'doctor_id' => $this->input->post('doctor_id'),
				'senin'		=> $this->input->post('senin_mulai')." - ".$this->input->post('senin_selesai'),
				'selasa'	=> $this->input->post('selasa_mulai')." - ".$this->input->post('selasa_selesai'),
				'rabu'		=> $this->input->post('rabu_mulai')." - ".$this->input->post('rabu_selesai'),
				'kamis'		=> $this->input->post('kamis_mulai')." - ".$this->input->post('kamis_selesai'),
				'jumat'		=> $this->input->post('jumat_mulai')." - ".$this->input->post('jumat_selesai'),
				'sabtu'		=> $this->input->post('sabtu_mulai')." - ".$this->input->post('sabtu_selesai'),
				'minggu'	=> $this->input->post('minggu_mulai')." - ".$this->input->post('minggu_selesai'),
			);
			$this->Admin_model->saveJadwal($data);
			$this->session->set_flashdata('info', 'Jadwal berhasil di tambahkan');
			redirect('admin/dokter/jadwal');
		}else{
			$this->session->set_flashdata('info', "Jadwal dokter sudah ada");
			redirect('admin/dokter/jadwal');
		}
	}

	function jadwal_edit(){

	}

	function jadwal_update(){

	}

	function jadwal_destroy($id){
		$this->Sec_model->getSec();
		$this->Admin_model->deleteJadwalDokter($id);
		$this->session->set_flashdata('info', 'Berhasil menghapus jadwal dokter');
		redirect('admin/dokter/jadwal');
	}

	
}