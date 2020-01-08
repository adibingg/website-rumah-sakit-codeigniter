<?php 

class Fasilitas extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Sec_model');
        $this->load->model('Admin_model');
        $this->load->model('Inbox_model');
        $this->load->model('Facilities_model');
    }

    function index(){
        $this->Sec_model->getSec();
        $config = array (
            'title'                 => "Fasilitas Penunjang",
            'messages_new'          => $this->Inbox_model->showNewMessages(),
            'messages_new_counter'  => $this->Inbox_model->showNewMessages()->num_rows(),
            'facilities'            => $this->Facilities_model->getFacilities()
        );
        $this->load->view('admin/fasilitas', $config);

    }

    function create(){
        $this->output->delete_cache('rsuk/admin/facilities/add');
        $this->Sec_model->getSec();
        $config = array (
            'title'                 => "Fasilitas Penunjang",
            'messages_new'          => $this->Inbox_model->showNewMessages(),
			'messages_new_counter'  => $this->Inbox_model->showNewMessages()->num_rows()
        );
        $this->load->view('admin/fasilitas-tambah', $config);
    }

    function store(){
        $this->Sec_model->getSec();
		$config['upload_path']    = './uploads';  
	    $config['allowed_types']  = 'gif|jpg|png';
	 	$this->load->library('upload', $config);
	        if ( ! $this->upload->do_upload('gambar')){
	            $data = array(
					'facilities_name' => $this->input->post('name'),
					'description' 	=> $this->input->post('description')
				);
				$this->db->insert('facilities',$data);
			}else{
	            $file 		= $this->upload->data();
				$gambar 	= $file['file_name'];
					
	            $data = array(
                    'facilities_name' => $this->input->post('name'),
					'description' 	=> $this->input->post('description'),
					'images' 		=> $gambar
				);
				$this->db->insert('facilities',$data);
	        }
		$this->session->set_flashdata('info','<div class="alert alert-success alert-dismissible" role="alert"><strong> <i class="fa fa-info-circle"></i> Berhasil menambahkan data fasilitas</strong><button style="color: red;" type="button" class="close" data-dismiss="alert" aria-label="Close">
                	<span aria-hidden="true">&times;</span>
                </button>
            </div>'
        );

		redirect('admin/facilities','refresh');
    }

    function edit($id){
        $this->Sec_model->getSec();
        $config = array (
            'title'                 => "Fasilitas Penunjang",
            'messages_new'          => $this->Inbox_model->showNewMessages(),
			'messages_new_counter'  => $this->Inbox_model->showNewMessages()->num_rows(),
            'fasilitas'             => $this->Facilities_model->getFacilitiesId($id)
        );
        $this->load->view('admin/fasilitas-edit', $config);
    }

    function update(){
        $this->Sec_model->getSec();
        $config['upload_path']    = './uploads';  
        $config['allowed_types']  = 'gif|jpg|png';
        $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('gambar')){
                $data = array(
                    'facilities_name' => $this->input->post('name'),
                    'description'   => $this->input->post('description')
                );
                $this->db->where('facilities_id', $this->input->post('id'));
                $this->db->update('facilities',$data);
            }else{
                $file       = $this->upload->data();
                $gambar     = $file['file_name'];
                    
                $data = array(
                    'facilities_name' => $this->input->post('name'),
                    'description'   => $this->input->post('description'),
                    'images'        => $gambar
                );
                $this->db->where('facilities_id', $this->input->post('id'));
                $this->db->update('facilities',$data);
            }
        $this->session->set_flashdata('info',
            '<div class="alert alert-success alert-dismissible" role="alert">
                <strong> <i class="fa fa-info-circle"></i> Berhasil memperbaharui data fasilitas</strong>
                <button style="color: red;" type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>'
        );

        redirect('admin/facilities','refresh');
    }

    function destroy($id){
        $this->Sec_model->getSec();
        $this->Facilities_model->deleteFacilities($id);
        $this->session->set_flashdata('info',
			'<div class="alert alert-success alert-dismissible" role="alert">
                <strong> <i class="fa fa-trash"></i> Berhasil menghapus data fasilitas</strong>
                <button style="color: red;" type="button" class="close" data-dismiss="alert" aria-label="Close">
                	<span aria-hidden="true">&times;</span>
                </button>
            </div>'
        );

		redirect('admin/facilities','refresh');
    }
}