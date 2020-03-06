<?php

class Posting extends CI_Controller {
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function halo(){
		echo "Selamat datang!";
	}
	public function do_upload(){
			$config['upload_path'] = './asset/file/project/';
			$config['allowed_types'] = 'zip|rar';
			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('project')){
				$this->session->set_flashdata('gagal','Posting gagal!');
				$this->load->model('forum_model');
				$data['nm'] = $this->input->post('nama',true);
				$data['pw'] = $this->input->post('pw',true);
				$data['id'] = $this->input->post('id',true);
				$data['nim'] = $this->input->post('nim',true); 
				$data['ft'] = $this->input->post('foto',true);
				$data['level'] = $this->input->post('level',true);
				$data['content'] = $this->forum_model->getAllContent();
				$data['comment'] = $this->forum_model->getAllComment();
				$data['tanggal'] = $this->input->post('tanggal',true);
				$data['email'] = $this->input->post('email',true);
				$data['judul'] = 'Dashborad User';
				$data['jenkel'] = $this->input->post('jenkel',true);
				$data['joined'] = $this->input->post('joined',true);
				$this->load->view('templates/header+logout',$data);
				$this->load->view('forum/dashboard_user',$data);
				$this->load->view('templates/footer');
			}
			else{
				$this->load->model('forum_model');
				$this->forum_model->addPost();
				$data['nm'] = $this->input->post('nama',true);
				$data['pw'] = $this->input->post('pw',true);
				$data['id'] = $this->input->post('id',true);
				$data['nim'] = $this->input->post('nim',true); 
				$data['ft'] = $this->input->post('foto',true);
				$data['level'] = $this->input->post('level',true);
				$data['content'] = $this->forum_model->getAllContent();
				$data['comment'] = $this->forum_model->getAllComment();
				$data['tanggal'] = $this->input->post('tanggal',true);
				$data['email'] = $this->input->post('email',true);
				$data['judul'] = 'Dashborad User';
				$data['jenkel'] = $this->input->post('jenkel',true);
				$data['joined'] = $this->input->post('joined',true);
				if($data['level'] == 'User'){
					$this->session->set_flashdata('berhasil','Posting Berhasil');
					$this->load->view('templates/header+logout',$data);
					$this->load->view('forum/dashboard_user',$data);
					$this->load->view('templates/footer');
				}
				else{
					$this->session->set_flashdata('berhasil','Posting Berhasil');
					$this->load->view('templates/header+logout+admin',$data);
					$this->load->view('forum/dashboard_admin',$data);
					$this->load->view('templates/footer');
				}
			}
	}

	
}
