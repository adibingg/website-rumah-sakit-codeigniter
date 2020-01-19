<?php

defined('BASEPATH') OR exit("No dirrect script access alowed!");

class Berita extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Home_model');
		$this->load->helper('Date_negara_berkembang');
	}

	public function filter($id){
		$myconf = $this->Home_model->getConfig();
		$this->load->library('pagination');
		$total = $this->Home_model->getNewsFilter($id);
        $page=$this->uri->segment(2);
        if(!$page):
            $offset = 0;
        else:
            $offset = $page;
        endif;
        $limit=4;
        $config['base_url'] = base_url() . 'post/'.$id;
        $config['total_rows'] = $total->num_rows();
        $config['per_page'] = $limit;
        $config['uri_segment'] = $page;
		$this->pagination->initialize($config);	

		foreach($myconf->result() as $conf){
			$title_news = str_replace('-',' ', $id);
			$title_result = ucfirst($title_news);
			$data = array(
				'navigation' 	=> $this->Home_model->getNavbar(),
				'title' 		=> $title_result,
				'sub_1'			=> "Post",
				'sub_2'			=> $title_result,
				'meta_desc' 	=> $conf->website_name,
				'logo'				=> $conf->logo,
				'address'			=> $conf->address,
				'phone' 			=> $conf->phone,
				'email' 			=> $conf->email,
				'category' 		=> $this->Home_model->getCategory(),
				'news' 			=> $this->Home_model->getNewsFilter($id, $config['per_page'],$page),
				'pages'			=> $this->pagination->create_links(),
				'sidebar'		=> $this->Home_model->getSidebar()
			);
			$this->load->view('home/berita',$data);
		}
	}

	public function read($id){
		$this->load->model('Admin_model');
		$config = $this->Home_model->getConfig();
		$this->load->helper('Date_negara_berkembang');
		$this->Home_model->countView($id);
		foreach($config->result() as $conf){
			$title_news = str_replace('-',' ', $id);
			$title_result = ucfirst($title_news);
			$data = array(
				'navigation' 	=> $this->Home_model->getNavbar(),
				'title' 		=> $title_result,
				'meta_desc' 	=> $conf->website_name,
				'logo'			=> $conf->logo,
				'address'		=> $conf->address,
				'phone' 		=> $conf->phone,
				'email' 		=> $conf->email,
				'instagram'		=> $conf->instagram,
				'facebook'		=> $conf->facebook,
				'youtube'		=> $conf->youtube,
				'twitter'		=> $conf->twitter,
				'category' 		=> $this->Home_model->getCategory(),
				'news_rows' 	=> $this->Home_model->detailBerita($id),
				'sub_1'			=> "Berita",
				'sub_2'			=> "Semua Berita dan Artikel",
				'sidebar'			=> $this->Home_model->getSidebar()		
			);
			$this->load->view('home/beritadetail', $data);
		}
	}

	public function comment($id){

	}
}