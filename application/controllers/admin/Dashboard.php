<?php

class Dashboard extends CI_Controller{
	public function index(){
		$this->load->model('Sec_model');
		$this->Sec_model->getSec();
		$this->Sec_model->checkcred();
		$config = array(
			'title' => "Halaman Administrator", );
		$this->load->view('admin/home',$config);
	}
}