<?php

defined('BASEPATH') OR exit("No dirrect script access allowed!");

class Pengaturan extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Sec_model');
        $this->load->model('Admin_model');
        $this->load->model('Inbox_model');
        $this->load->model('Settings_model');
    }

    public function index(){
        $this->Sec_model->getSec();
        $config = array (
            'title'                 => "Pengaturan",
            'messages_new'          => $this->Inbox_model->showNewMessages(),
			'messages_new_counter'  => $this->Inbox_model->showNewMessages()->num_rows()
        );
        $this->load->view('admin/pengaturan', $config);
    }

    public function site_setting(){
        $this->Sec_model->getSec();
          $this->Sec_model->getSec();
        $config = array (
            'title'                 => "Pengaturan",
            'messages_new'          => $this->Inbox_model->showNewMessages(),
            'messages_new_counter'  => $this->Inbox_model->showNewMessages()->num_rows(),
            'config_set'            => $this->Settings_model->getConfig()
        );
        $this->load->view('admin/pengaturan-web', $config);
    }

    public function update_site_setting(){
        $this->Sec_model->getSec();
		$config['upload_path']    = './uploads';  
		$config['allowed_types']  = 'gif|jpg|png';
		$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')){
				$file       = $this->upload->data();
				$gambar     = $file['file_name'];
			
				$data = array(
					'website_name'      => $this->input->post('nama_website'),
                    'meta_description'  => $this->input->post('nama_website'),
                    'address'           => $this->input->post('alamat'),
                    'phone'             => $this->input->post('telepon'),
                    'email'             => $this->input->post('email'),
                    'instagram'         => $this->input->post('instagram'),
                    'facebook'          => $this->input->post('facebook'),
                    'youtube'           => $this->input->post('youtube'),
                    'twitter'           => $this->input->post('twitter'),
				);

				$this->db->where('id', $this->input->post('id'))->update('config', $data);

			}else{

				$file     = $this->upload->data();
				$gambar   = $file['file_name'];
			
				$data = array(
					'website_name'      => $this->input->post('nama_website'),
                    'meta_description'  => $this->input->post('nama_website'),
                    'address'           => $this->input->post('alamat'),
                    'phone'             => $this->input->post('telepon'),
                    'email'             => $this->input->post('email'),
                    'instagram'         => $this->input->post('instagram'),
                    'facebook'          => $this->input->post('facebook'),
                    'youtube'           => $this->input->post('youtube'),
                    'twitter'           => $this->input->post('twitter'),
                    'logo'              => $gambar
				);

				$this->db->where('id', $this->input->post('id'))->update('config', $data);
			}
				
		$this->session->set_flashdata('info','Berhasil memperbaharui identitas website');
		redirect('admin/pengaturan/site_setting');
    }

   
}