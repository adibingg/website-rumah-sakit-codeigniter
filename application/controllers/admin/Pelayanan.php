<?php

defined('BASEPATH') OR exit("No dirrect script access allowed");

class Pelayanan extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Sec_model');
        $this->load->model('Inbox_model');
        $this->load->model('Service_model');
        $this->load->library('form_validation');
    }

    function index(){
        $this->Sec_model->getSec();
        $config = array (
            'title'                 => "Pelayanan",
            'messages_new'          => $this->Inbox_model->showNewMessages(),
            'messages_new_counter'  => $this->Inbox_model->showNewMessages()->num_rows()
        );

        $this->load->view('admin/pelayanan', $config);
    }

    function show(){
        $this->Sec_model->getSec();
        $data = $this->Service_model->getAllServices();
        echo json_encode($data);
    }

    function create(){

    }


    public function data() {
        $data = array ('success' => false, 'messages' => array());
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nim', 'Nim', 'trim|required|numeric|min_length[10]|max_length[11]|callback_nimdata_check'); 
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]|callback_namadata_check');    
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[tbmhs.email]');  
        $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');


        if($this->form_validation->run()) {   
            $data = array (
                'nim' => $this->input->post('nim'),
                'nama' => $this->input->post('username'),
                'email' => $this->input->post('email')        
            );
            $this->mdata->insert_all('tbmhs',$data);

            $data['success'] = true;

        } else {
            foreach ($_POST as $key => $value) {
                $data['messages'][$key] = form_error($key);
            }   

        }
        echo json_encode($data);

    }

    function store(){
        $this->Sec_model->getSec();
        $a = $this->form_validation->set_rules('pelayanan','Nama Pelayanan', 'trim|required');
        $b = $this->form_validation->set_rules('deskripsi','Nama Pelayanan', 'trim|required');
        if($this->form_validation->run()==FALSE){
            $data = array(
                'service_name' => $a,
                'service_description' => $b 
            );
        }else{
            $post = array(
                'service_name' => $this->input->post('pelayanan'),
                'service_description' => $this->input->post('deskripsi')
            );
            $data = $this->Service_model->saveService($post);
            
            $data['success'] = true;    
        }
        echo json_encode($data);
    }

    function edit($id){
        $this->Sec_model->getSec();
        $data = $this->Service_model->getById($id);
        echo json_encode($data);
    }

    function update(){
        $this->Sec_model->getSec();
    
            $id = $this->input->post('id');
            $post = array(
                'service_name' => $this->input->post('pelayanan'),
                'service_description' => $this->input->post('deskripsi')
            );
            $data = $this->Service_model->updateService($id,$post);
            
            $data['success'] = true;    

        echo json_encode($data);
    }

    function destroy($id){
        $this->Sec_model->getSec();
        $data = $this->Service_model->deleteSingle($id);
        echo json_encode($data);
    }


}