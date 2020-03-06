<?php 

	class Home extends CI_Controller{
		public function index(){
			$data['judul'] = 'Halaman Home';
			$this->load->model('forum_model');
			$data['kritik'] = $this->forum_model->getAllKritik();
			$this->load->database();
			$this->load->view('templates/header',$data);
			$this->load->view('home/index',$data);
			$this->load->view('templates/footer');
		}
		public function tambahkritik(){
			$this->load->model('forum_model');
			$this->forum_model->addkritik();
			redirect('home');
		}
		public function registerUser(){
			$this->load->model('forum_model');
			if($this->forum_model->cekUsername()>0){
				$this->session->set_flashdata('gagal_username', 'Username Telah Digunakan!');
				redirect('home/index');
			}
			else if($this->forum_model->cekNIM()>0){
				$this->session->set_flashdata('gagal_nim', 'Nim Telah Digunakan!');
				redirect('home/index');
			}
			else if($this->forum_model->cekEmail()>0){
				$this->session->set_flashdata('gagal_email', 'E-mail telah digunakan!');
				redirect('home/index');
			}
			else{
				$this->forum_model->addUser();
				$this->session->set_flashdata('sukses', 'Registrasi Berhasil');
				redirect('home/index');
			}
		}
		public function login(){
			$data['judul'] = 'Halaman Login';
			$this->load->view('templates/header',$data);
			$this->load->view('forum/form_login');
			$this->load->view('templates/footer');
		}
		public function cekLogin(){
			$this->load->model('forum_model');
			$user = $this->input->post('username');
			$pass =$this->input->post('password');
			$cek = $this->forum_model->prosesLogin();
			$data['content'] = $this->forum_model->getAllContent();
			$data['comment'] = $this->forum_model->getAllComment();
			if(isset($_POST['submit'])){
				if($cek > 0){
					$human = $this->db->get_where('tb_user',array('username' => $user, 'password' => $pass))->row();
					if($human->level == 'Admin'){
						$data['judul'] = 'Dashboard Admin';
						$data['nm'] = $human->username;
						$data['pw'] = $human->password;
						$data['ft'] = $human->foto;
						$data['nim'] = $human->nim;
						$data['id'] = $human->id;
						$data['level'] = $human->level;
						$data['joined'] = $human->tanggal;
						$data['email'] = $human->email;
						$data['jenkel'] = $human->jenis_kelamin;
						$this->load->view('templates/header+logout+admin',$data);
						$this->load->view('forum/dashboard_admin',$data);
						$this->load->view('templates/footer');
					}
					else{
						$data['judul'] = 'Dashboard User';
						$data['nm'] = $human->username;
						$data['pw'] = $human->password;
						$data['ft'] = $human->foto;
						$data['nim'] = $human->nim;
						$data['id'] = $human->id;
						$data['level'] = $human->level;
						$data['joined'] = $human->tanggal;
						$data['email'] = $human->email;
						$data['jenkel'] = $human->jenis_kelamin;
						$this->load->view('templates/header+logout',$data);
						$this->load->view('forum/dashboard_user',$data);
						$this->load->view('templates/footer');
					}
				}
				else{
					$this->session->set_flashdata('gagal_login','Login gagal! Username atau Password tidak valid.');
					redirect('home/login');
				}
			}
			
		}
		// public function tambahPost(){
		// 	$this->load->model('forum_model');
		// 	$this->forum_model->addPost();
		// }
		public function pdp(){
			$this->load->model('forum_model');
			$data['content'] = $this->forum_model->showpdp();
			$data['comment'] = $this->forum_model->getAllComment();
			$data['judul'] = 'PDP - Dasar Pemrograman';
			$this->load->view('templates/header',$data);
			$this->load->view('forum/pdp',$data);
			$this->load->view('templates/footer');
		}
		public function pap(){
			$data['judul'] = 'PAP - Algoritma Pemrograman';
			$this->load->model('forum_model');
			$data['content'] = $this->forum_model->showpap();
			$data['comment'] = $this->forum_model->getAllComment();
			$this->load->view('templates/header',$data);
			$this->load->view('forum/pap',$data);
			$this->load->view('templates/footer');
		}
		public function psda(){
			$this->load->model('forum_model');
			$data['content'] = $this->forum_model->showpsda();
			$data['comment'] = $this->forum_model->getAllComment();
			$data['judul'] = 'PSDA - Struktur Data';
			$this->load->view('templates/header',$data);
			$this->load->view('forum/psda');
			$this->load->view('templates/footer');
		}
		public function do_upload(){
			$config['upload_path'] = './asset/img/user';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 100;
			$config['max_width'] = 1024;
			$config['max_height'] = 768;

			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('foto')){
				$this->session->set_flashdata('gagal','Registrasi Gagal');
				redirect('home/index');
			}
			else{
				$this->registerUser();
				$this->session->set_flashdata('sukses','Registrasi Berhasil!');
				redirect('home/index');

			}
		}
		public function uploadPost(){
			$config['upload_path'] = './asset/file/project/';
			$config['allowed_types'] = 'zip|rar';
			$this->load->library('upload',$config);

			if(!$this->upload->uploadPost()){
				$this->session->set_flashdata('gagal','File Gagal diposting!');
				redirect('home/cekLogin');
			}
			else{
				$this->load->model('forum_model');
				$this->forum_model->addPost();
				$this->session->set_flashdata('sukses','File Berhasil diposting!');
				redirect('home/cekLogin');
			}
		}

		public function addArtikel(){
			$this->load->model('forum_model');
			$this->forum_model->addArtikel();
			$this->session->set_flashdata('berhasilPosting','Artikel Berhasil diposting');
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
			$this->load->view('templates/header+logout',$data);
			$this->load->view('forum/dashboard_user',$data);
			$this->load->view('templates/footer');
			}
			else{
			$this->load->view('templates/header+logout+admin',$data);
			$this->load->view('forum/dashboard_admin',$data);
			$this->load->view('templates/footer');	
			}
		}

		public function updateUser(){
			$this->load->model('forum_model');
			$config['upload_path'] = './asset/img/user';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 1000;
			$config['max_width'] = 1024;
			$config['max_height'] = 768;
			$this->load->library('upload',$config);

			

			if(!$this->upload->do_upload('foto')){
				$file = $this->upload->data();
				$project = $file['file_name'];
				if($file['file_size']>1000){
					$this->session->set_flashdata('gagal_login','Data gagal di update, Foto terlalu besar!');
				}
			}
			else{
			$file = $this->upload->data();
			$project = $file['file_name'];
			$id = $this->input->post('nomer',true);
			$email = $this->input->post('email',true);
			$username = $this->input->post('username',true);
			$password = $this->input->post('password',true);
			$foto = $project;
			$this->forum_model->updateUser($id,$email,$username,$password,$foto);
			$this->forum_model->updatePost($id,$username,$foto);
			$this->session->set_flashdata('sukses','Data Berhasil di update, silahkan login!');
			redirect('home/login');

			}
		}
		public function mypost(){
			$userid = $this->input->get('id',true);
			$human = $this->db->get_where('tb_user',array('id'=> $userid))->row();
			$this->load->model('forum_model');
			$data['mypost'] = $this->forum_model->getAllMyPost();
			$data['judul'] = 'Posting Saya';
			$data['nm'] = $human->username;
			$data['pw'] = $human->password;
			$data['ft'] = $human->foto;
			$data['nim'] = $human->nim;
			$data['id'] = $human->id;
			$data['level'] = $human->level;
			$data['joined'] = $human->tanggal;
			$data['email'] = $human->email;
			$data['jenkel'] = $human->jenis_kelamin;
			if($data['level'] == 'User'){
			$this->load->view('templates/header+logout',$data);
			$this->load->view('forum/mypost',$data);
			$this->load->view('templates/footer');
			}
			else{
			$this->load->view('templates/header+logout+admin',$data);
			$this->load->view('forum/mypost',$data);
			$this->load->view('templates/footer');	
			}
		}
		public function komentari(){
			$this->load->model('forum_model');
			$this->forum_model->addComment();
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
				$this->session->set_flashdata('berhasil','Berhasil Dikomentari.');
				if($data['level'] == "User"){
					$this->load->view('templates/header+logout',$data);
					$this->load->view('forum/dashboard_user',$data);
					$this->load->view('templates/footer');
				}
				else{
					$this->load->view('templates/header+logout+admin',$data);
					$this->load->view('forum/dashboard_admin',$data);
					$this->load->view('templates/footer');	
				}
		}
		public function showComment(){
			$data['comment'] = $this->forum_model->getAllComment();
			return $data;
		}
		public function delPost(){
				$this->load->model('forum_model');
				$this->forum_model->deletePost();
				$this->session->set_flashdata('delete','Posting Berhasil Dihapus!');
				$this->backtoExplore();

		}
		public function backtoExplore(){
			$id = $this->input->get('id');
			$human = $this->db->get_where('tb_user',array('id' => $id))->row();
			$this->load->model('forum_model');
			if($human->level == 'User'){
				$data['nm'] = $human->username;
				$data['pw'] = $human->password;
				$data['id'] = $human->id;
				$data['nim'] = $human->nim;
				$data['ft'] = $human->foto;
				$data['level'] = $human->level;
				$data['content'] = $this->forum_model->getAllContent();
				$data['comment'] = $this->forum_model->getAllComment();
				$data['email'] = $human->email;
				$data['judul'] = 'Dashborad User';
				$data['jenkel'] = $human->jenis_kelamin;
				$data['joined'] = $human->tanggal;
				$this->load->view('templates/header+logout',$data);
				$this->load->view('forum/dashboard_user',$data);
				$this->load->view('templates/footer');
			}
			else{
				$data['nm'] = $human->username;
				$data['pw'] = $human->password;
				$data['id'] = $human->id;
				$data['nim'] = $human->nim;
				$data['ft'] = $human->foto;
				$data['level'] = $human->level;
				$data['content'] = $this->forum_model->getAllContent();
				$data['comment'] = $this->forum_model->getAllComment();
				$data['email'] = $human->email;
				$data['judul'] = 'Dashborad Admin';
				$data['jenkel'] = $human->jenis_kelamin;
				$data['joined'] = $human->tanggal;
				$this->load->view('templates/header+logout+admin',$data);
				$this->load->view('forum/dashboard_admin',$data);
				$this->load->view('templates/footer');
			}
		}
		public function delComment(){
			$id = $this->input->get('id');
			$this->load->model('forum_model');
			$this->forum_model->deleteComment();
			$this->session->set_flashdata('deleteComment','Komentar Berhasil Dihapus!');
			$this->backtoExplore();
		}
		
		public function userList(){
			// $data['id'] = $this->input->get('id');
			$data['judul'] = 'List User';
			$this->load->model('forum_model');
			$userid = $this->input->get('userid');
			$id = $this->input->get('id');
			$human = $this->db->get_where('tb_user',array('id' => $userid))->row();
			$this->load->model('forum_model');
			$data['nm'] = $human->username;
			$data['pw'] = $human->password;
			$data['id'] = $human->id;
			$data['nim'] = $human->nim;
			$data['ft'] = $human->foto;
			$data['level'] = $human->level;
			$data['content'] = $this->forum_model->getAllContent();
			$data['comment'] = $this->forum_model->getAllComment();
			$data['user'] = $this->forum_model->getAllUser();		
			$data['email'] = $human->email;
			$data['judul'] = 'Dashborad User';
			$data['jenkel'] = $human->jenis_kelamin;
			$data['joined'] = $human->tanggal;
			$this->load->view('templates/header+logout+admin',$data);
			$this->load->view('forum/userlist',$data);
			$this->load->view('templates/footer');
		}
		public function fileList(){
			$data['id'] = $this->input->get('id');
			$data['judul'] = 'List File';
			$userid = $this->input->get('userid');
			$this->load->model('forum_model');
			$human = $this->db->get_where('tb_user',array('id' => $userid))->row();
			$this->load->model('forum_model');
			$data['nm'] = $human->username;
			$data['pw'] = $human->password;
			$data['id'] = $human->id;
			$data['nim'] = $human->nim;
			$data['ft'] = $human->foto;
			$data['level'] = $human->level;
			$data['content'] = $this->forum_model->getAllContent();
			$data['comment'] = $this->forum_model->getAllComment();
			$data['user'] = $this->forum_model->getAllUser();		
			$data['email'] = $human->email;
			$data['judul'] = 'Dashborad User';
			$data['jenkel'] = $human->jenis_kelamin;
			$data['joined'] = $human->tanggal;

			$data['project'] = $this->forum_model->getAllProject();
			$this->load->view('templates/header+logout+admin',$data);
			$this->load->view('forum/filelist',$data);
			$this->load->view('templates/footer');
		}
		public function delUser(){
			$id = $this->input->get('id');
			$userid = $this->input->get('userid');
			$this->load->model('forum_model');
			$this->forum_model->deleteUser();
			$this->session->set_flashdata('deleteUser', 'User Berhasil Dihapus!');
			$human = $this->db->get_where('tb_user',array('id' => $userid))->row();
			$this->load->model('forum_model');
			$data['nm'] = $human->username;
			$data['pw'] = $human->password;
			$data['id'] = $human->id;
			$data['nim'] = $human->nim;
			$data['ft'] = $human->foto;
			$data['level'] = $human->level;
			$data['user'] = $this->forum_model->getAllUser();		
			$data['email'] = $human->email;
			$data['judul'] = 'List User';
			$data['jenkel'] = $human->jenis_kelamin;
			$data['joined'] = $human->tanggal;
			$this->userlist();
		}
		public function delFile(){
			$id = $this->input->get('id');
			$userid = $this->input->get('userid');
			$this->load->model('forum_model');
			$this->forum_model->deleteFile();
			$this->session->set_flashdata('deleteFile','File Berhasil Dihapus!');
			$human = $this->db->get_where('tb_user',array('id' => $userid))->row();
			$this->load->model('forum_model');
			$data['nm'] = $human->username;
			$data['pw'] = $human->password;
			$data['id'] = $human->id;
			$data['nim'] = $human->nim;
			$data['ft'] = $human->foto;
			$data['level'] = $human->level;
			$data['email'] = $human->email;
			$data['judul'] = 'List File';
			$data['jenkel'] = $human->jenis_kelamin;
			$data['joined'] = $human->tanggal;
			$this->fileList();
		}
		public function addAdmin(){
			$data['judul'] = 'Form Tambah Admin';
			$id = $this->input->get('id');
			$userid = $this->input->get('userid');
			$this->load->model('forum_model');
			$this->session->set_flashdata('tambahAdmin','Admin Berhasil Ditambahkan');
			$human = $this->db->get_where('tb_user',array('id' => $userid))->row();
			$data['nm'] = $human->username;
			$data['pw'] = $human->password;
			$data['id'] = $human->id;
			$data['nim'] = $human->nim;
			$data['ft'] = $human->foto;
			$data['level'] = $human->level;
			$data['email'] = $human->email;
			$data['jenkel'] = $human->jenis_kelamin;
			$data['joined'] = $human->tanggal;
			$this->load->view('templates/header+logout+admin',$data);
			$this->load->view('forum/addAdmin',$data);
			$this->load->view('templates/footer');
		}
	}
 ?>