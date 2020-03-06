<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum_model extends CI_Model {
	public function getAllKritik(){
		$this->db->order_by('tanggal','DESC');
		$query = $this->db->get('tb_kritik');
		return $query->result_array();
		// return $this->db->get('tb_kritik')->result_array();
	}
	public function addkritik(){
		$tanggal = date("Y-m-d H:i:s");
		$data = [
			"nama" => $this->input->post('nama', true),
			"email" => $this->input->post('email',true),
			"telp" => $this->input->post('telp',true),
			"jenis" => $this->input->post('kritik',true),
			"pesan" => $this->input->post('pesan',true),
			"tanggal" => $tanggal
		];
		$this->db->insert('tb_kritik',$data);
	}
	public function cekUsername(){
		$this->db->from('tb_user');
		$this->db->where('username',$this->input->post('username'));
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function cekNIM(){
		$this->db->from('tb_user');
		$this->db->where('nim', $this->input->post('nim'));
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function cekEmail(){
		$this->db->from('tb_user');
		$this->db->where('email', $this->input->post('email'));
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function addUser(){
		$img = $this->upload->data();
		$gambar = $img['file_name'];
		$tanggal = date('Y-m-d H:i:s');
		$data = [
			"username" => $this->input->post('username',true),
			"email" => $this->input->post('email',true),
			"password" => $this->input->post('password',true),
			"nim" => $this->input->post('nim'),
			"jenis_kelamin" => $this->input->post('kelamin',true),
			"level" => $this->input->post('level',true),
			"foto" => $gambar,
			"tanggal" => $tanggal
		];
		$this->db->insert('tb_user',$data);
	}
	public function prosesLogin(){
		$this->db->from('tb_user');
		$this->db->where('username',$this->input->post('username',true));
		$this->db->where('password',$this->input->post('password',true));
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function getAllContent(){
		$this->db->order_by('tanggal','DESC');
		$query = $this->db->get('tb_konten');
		return $query->result_array();
		// return $this->db->get('tb_konten')->result_array();
	}
	public function addPost(){
		$file = $this->upload->data();
		$project = $file['file_name'];
		$tanggal = date('Y-m-d H:i:s');
		$data = [
			"id" => $this->input->post('id',true),
			"nim" => $this->input->post('nim',true),
			"author" => $this->input->post('nama',true),
			"level" =>$this->input->post('level',true),
			"gambar" => $this->input->post('foto',true),
			"deskripsi" => $this->input->post('deskripsi',true),
			"file" => $project,
			"tanggal" => $tanggal,
			"rating" => $this->input->post('rating',true),
			"kategori" =>$this->input->post('kategori',true),
			"joined" => $this->input->post('joined',true),
			"code" => $this->input->post('code',true)
		];
		$this->db->insert('tb_konten',$data);
	}
	public function updateUser($id,$email,$username,$password,$foto){
		$query = $this->db->query("UPDATE tb_user SET email = '$email', username = '$username', password = '$password', foto = '$foto' where id = '$id'");
		return $query;
	}
	public function updatePost($id,$username,$foto){
		$query = $this->db->query("UPDATE tb_konten SET author = '$username',gambar = '$foto' where id = '$id'");
		return $query;
	}
	public function showpdp(){
			$this->db->where('kategori <=','PSDA');
			$this->db->where('kategori >=','PDP-1');
			$this->db->order_by('tanggal','DESC');
			$query = $this->db->get('tb_konten');
			return $query->result_array();
	}
	public function showpap(){
			$this->db->where('kategori <=','PDP');
			// $this->db->where('kategori <=','PAP-6');
			$this->db->order_by('tanggal','DESC');
			$query = $this->db->get('tb_konten');
			return $query->result_array();
	}
	public function showpsda(){
		$this->db->where('kategori >=','PSDA-1');
		$this->db->order_by('tanggal','DESC');
		$query = $this->db->get('tb_konten');
		return $query->result_array();
	}
	public function addComment(){
		$tanggal = date('Y-m-d H:i:s');
		$data = [
			"from" => $this->input->post('nama',true),
			"to" => $this->input->post('to',true),
			"komentar" => $this->input->post('komentar',true),
			"foto" => $this->input->post('foto',true),
			"tanggal" => $tanggal,
			"nim" => $this->input->post('nim',true),
			"userid" => $this->input->post('id',true),
			"joined" => $this->input->post('joined',true),
			"level" =>$this->input->post('level',true)
		];
		$this->db->insert('tb_komentar',$data);
	}
	public function getAllComment(){
		$this->db->order_by('tanggal','DESC');
		$query = $this->db->get('tb_komentar');
		return $query->result_array();
	}
	public function getAllMyPost(){
		$this->db->order_by('tanggal','DESC');
		//$query = $this->db->get('tb_konten');
		//$id = $this->input->get('id');
		//$this->db->where('id', $id);
		$query = $this->db->get('tb_konten');
		return $query->result_array();
	}
	public function deletePost(){
		$contentid = $this->input->get('contentId');
		$this->db->where('id_konten',$contentid);
		$this->db->delete('tb_konten');
		return;
	}
	public function deleteComment(){
		$idComment = $this->input->get('idComment');
		$this->db->where('id',$idComment);
		$this->db->delete('tb_komentar');
		return;
	}
	public function getAllUser(){
		$this->db->order_by('id');
		$query = $this->db->get('tb_user');
		return $query->result_array();
	}
	public function getAllProject(){
		$this->db->order_by('id');
		$query = $this->db->get('tb_konten');
		return $query->result_array();
	}
	public function deleteUser(){
		$id = $this->input->get('id');
		$this->db->where('id',$id);
		$this->db->delete('tb_user');
		return;
	}
	public function deleteFile(){
		$id = $this->input->get('id');
		$file = 'NULL';
		$query = $this->db->query("UPDATE tb_konten SET file = '$file' where id_konten = '$id'");
		return $query;
	}
	public function addAdmin(){

	}
	public function addArtikel(){
		$project = 'NULL';
		$tanggal = date('Y-m-d H:i:s');
		$data = [
			"id" => $this->input->post('id',true),
			"nim" => $this->input->post('nim',true),
			"author" => $this->input->post('nama',true),
			"level" =>$this->input->post('level',true),
			"gambar" => $this->input->post('foto',true),
			"deskripsi" => $this->input->post('deskripsi',true),
			"file" => $project,
			"tanggal" => $tanggal,
			"rating" => $this->input->post('rating',true),
			"kategori" =>$this->input->post('kategori',true),
			"joined" => $this->input->post('joined',true),
			"code" => $this->input->post('code',true)
		];
		$this->db->insert('tb_konten',$data);
	}
}

/* End of file Forum_model.php */
/* Location: ./application/models/Forum_model.php */