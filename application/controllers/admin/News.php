	<?php

	class News extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('Sec_model');
		$this->load->model('News_model');
		$this->load->model('Inbox_model');
		$this->load->helper('date_negara_berkembang');
	}

	function index(){
		$this->Sec_model->getSec();
		$data = array(
		'title'                 => "Postingan",
		'berita'                => $this->News_model->TampilBerita(),
		'messages_new'          => $this->Inbox_model->showNewMessages(),
				'messages_new_counter'  => $this->Inbox_model->showNewMessages()->num_rows()
		);
		$this->load->view('admin/news',  $data);
	}

	function create(){
		$this->Sec_model->getSec();
			$data = array(
				'title'                 => "Entri Baru",
		'kategori'              => $this->News_model->getKategori(),
		'messages_new'          => $this->Inbox_model->showNewMessages(),
				'messages_new_counter'  => $this->Inbox_model->showNewMessages()->num_rows() 
		);
			$this->load->view('admin/news-add',  $data);
		}
	
	function store(){
		$this->Sec_model->getSec();
		$config['upload_path']    = './uploads';  
		$config['allowed_types']  = 'gif|jpg|png';
		$this->load->library('upload', $config);
				if (!$this->upload->do_upload('gambar')){
					$this->session->set_flashdata('info', 'Maaf, Foto anda gagal di unggah, kemungkinan file terlalu besar. Silahkan Coba Kembali');
					redirect('admin/news/create');
				}else{
					$file     = $this->upload->data();
					$gambar   = $file['file_name'];
				$string   = preg_replace('/[^a-zA-Z0-9 &%|{.}=,?!*()"-_+$@;<>]/', '',$this->input->post('judul')); 
				$trim     = trim($string);
				$pre_slug = strtolower(str_replace(" ", "-", $trim)); 
				$slug     = $pre_slug;

				$data = array(
					'title'       => $this->input->post('judul'),
					'content'     => $this->input->post('isi'),
					'category_id' => $this->input->post('category_id'),
					'status'      => "published",
					'images'      => $gambar,
					'seo'         => $slug,
					'created_by'  => $this->session->userdata('id_admin'),
				);
						$this->db->insert('news',$data);
				}
		$this->session->set_flashdata('info','Berita berhasil di publikasikan');
		redirect('admin/news','refresh');
	}
	
	function edit($id){
		$this->Sec_model->getSec();
		$data = array(
		'title'                 => "Perbaharui Berita",
		'kategori'              => $this->News_model->getKategori(), 
		'berita'                => $this->News_model->getNewsId($id),
		'messages_new'          => $this->Inbox_model->showNewMessages(),
				'messages_new_counter'  => $this->Inbox_model->showNewMessages()->num_rows() 
		);
		$this->load->view('admin/news-edit',  $data);
	}

	function update(){
		$this->Sec_model->getSec();
		$config['upload_path']    = './uploads';  
		$config['allowed_types']  = 'gif|jpg|png';
		$this->load->library('upload', $config);
				if (!$this->upload->do_upload('gambar')){
				$file       = $this->upload->data();
				$gambar     = $file['file_name'];
				$string     = preg_replace('/[^a-zA-Z0-9 &%|{.}=,?!*()"-_+$@;<>]/', '',$this->input->post('judul')); 
				$trim       = trim($string);
				$pre_slug   = strtolower(str_replace(" ", "-", $trim)); 
				$slug       = $pre_slug;
				$data = array(
					'title'       => $this->input->post('judul'),
					'content'     => $this->input->post('isi'),
					'category_id' => $this->input->post('category_id'),
					'status'      => "published",
					'seo'         => $slug,
					'created_by'  => $this->session->userdata('id_admin'),
				);
				$this->db->where('news_id', $this->input->post('news_id'))->update('news', $data);

				}else{

					$file     = $this->upload->data();
				$gambar   = $file['file_name'];
				$string   = preg_replace('/[^a-zA-Z0-9 &%|{.}=,?!*()"-_+$@;<>]/', '',$this->input->post('judul')); 
				$trim     = trim($string);
				$pre_slug = strtolower(str_replace(" ", "-", $trim)); 
				$slug     = $pre_slug;

				$data = array(
					'title'       => $this->input->post('judul'),
					'content'     => $this->input->post('isi'),
					'category_id' => $this->input->post('category_id'),
					'status'      => "published",
					'images'      => $gambar,
					'seo'         => $slug,
					'created_by'  => $this->session->userdata('id_admin')
				);

						$this->db->where('news_id', $this->input->post('news_id'))->update('news', $data);
				}
				
		$this->session->set_flashdata('info','Berita berhasil di perbaharui');
		redirect('admin/news');
	}

	function destroy($id){
		$this->Sec_model->getSec();
		$this->News_model->deleteNews($id);
		$this->session->set_flashdata('info', "Berhasil menghapus berita");
		redirect('admin/news');
	}

	function show_category(){
		$data = $this->News_model->getCategory();
		echo json_encode($data);
	}

	function category_delete($id){
		$this->db->where('category_id', $id)->delete('category');
		$this->session->set_flashdata('info', 'Kategori berhasil dihapus');
		redirect('admin/buat-pos');
	}

	function save_category(){
		$post = array(
		'category_name' => $this->input->post('nama_kategori')
		);

		$data = $this->News_model->saveCategory($post);
		echo json_encode($data);
	}

	function create_tags(){
		$string   = preg_replace('/[^a-zA-Z0-9 &%|{.}=,?!*()"-_+$@;<>]/', '',$this->input->post('tag')); 
		$trim     = trim($string);
		$pre_slug = strtolower(str_replace(" ", "-", $trim)); 
		$slug     = $pre_slug;
		$post = array(
		'tag' => $this->input->post('tag'),
		'tag_url' => $slug
		);
		$data = $this->News_model->saveTag($post);
		echo json_decode($data);
	}

	function tag_show(){
		$data = $this->News_model->getTag();
		echo json_encode($data);
	}
	}