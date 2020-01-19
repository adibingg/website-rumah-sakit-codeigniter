<?php
defined('BASEPATH') OR exit("No script dirrect access allowed!");

class Pages extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('Home_model');
    }

    function statis($id){
        $config = $this->Home_model->getConfig();
		foreach($config->result() as $conf){
			$data = array(
				'navigation' 	=> $this->Home_model->getNavbar(),
				'title' 		=> 'Halaman Statis',
				'sub_1'			=> "Berita",
				'sub_2'			=> "Semua Berita dan Artikel",
				'meta_desc' 	=> $conf->website_name,
				'logo'				=> $conf->logo,
				'address'			=> $conf->address,
				'phone' 			=> $conf->phone,
				'email' 			=> $conf->email,
				'pages_row' 	=> $this->Home_model->getPagesRow($id),
				'category' 		=> $this->Home_model->getCategory()
			);
			$this->load->view('home/statis',$data);
		}
    }

}