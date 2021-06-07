<?php

class User extends CI_Controller{
	function __construct(){
		parent:: __construct();

		if(!isset($this->session->userdata['username'])){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  						Anda Belum Login! 
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  						</button>
						</div>');
			redirect('mahasiswa/auth');
		}
	}
	
	public function index()
	{
		$data['user']=$this->db->query("SELECT * FROM tb_user where username='$_SESSION[username]'  ");
		$this->load->view('template_administrator/header');
		$this->load->view('mahasiswa/user_update',$data);
		$this->load->view('template_administrator/footer');
	}

	public function update($id)
	{
		$where = array('id_user' => $id);

		$data['users'] = $this->user_model->edit_data($where,'tb_user')->result();
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebaru');
		$this->load->view('mahasiswa/user_update',$data);
		$this->load->view('template_administrator/footer');
	}

	public function update_aksi()
	{
		$id 			= $this->input->post('id_user');
		$nama_lengkap 	= $this->input->post('nama_lengkap');
		$username 		= $this->input->post('username');
		$password 		= md5($this->input->post('password'));
		$email 			= $this->input->post('email');
		$no_hp 			= $this->input->post('no_hp');
		$level 			= $this->input->post('level');
		$blokir 		= $this->input->post('blokir');
		$id_sessions 	= md5($this->input->post('id_sessions'));

		if(!empty($password)){
		$data = array(
			'nama_lengkap' => $nama_lengkap,
			'username' => $username,
			//'password' => $password,
			'email' => $email,
			'no_hp' => $no_hp,
			'level' => $level,
			'blokir' => $blokir,

		);}
		
		else{

		$data = array(
			'nama_lengkap' => $nama_lengkap,
			'username' => $username,
			'password' => $password,
			'email' => $email,
			'no_hp' => $no_hp,
			'level' => $level,
			'blokir' => $blokir,

		);}


		$where = array(

			'id_user' => $id,
		);

		$this->user_model->update_data($where,$data,'tb_user');
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  						Data User Berhasil Diubah! 
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  						</button>
						</div>');
		redirect('mahasiswa/dashboard');
	}
}
?>