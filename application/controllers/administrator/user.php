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
			redirect('administrator/auth');
		}
	}

	public function index()
	{
		$data['users'] = $this->user_model->tampil_data('tb_user')->result();
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('administrator/daftar_user',$data);
		$this->load->view('template_administrator/footer');
	}
	public function tambah_users()
	{
		 $data = array(
		 	'nama_lengkap' 	=> set_value('nama_lengkap'),
		 	'username' 		=> set_value('username'),
		 	'password' 		=> set_value('password'),
		 	'email' 		=> set_value('email'),
		 	'no_hp' 		=> set_value('no_hp'),
		 	'level' 		=> set_value('level'),
		 	'blokir' 		=> set_value('blokir'),
		 );
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('administrator/user_form',$data);
		$this->load->view('template_administrator/footer');
	}

	public function tambah_users_aksi()
	{
		$this->_rules();

		if($this->form_validation->run()==FALSE){
			$this->tambah_users();
		}else{

			$nama_lengkap 				= $this->input->post('nama_lengkap');
 			$username 					= $this->input->post('username');
 			$sql1 = $this->db->query("SELECT username from tb_user where username='$username'");
			$cek_npm1 = $sql1->result();
			if ($cek_npm1 > 0) {
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  						Username Telah Ada! 
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  						</button>
						</div>');
 			redirect('administrator/user');
 		}

 			$password 					= md5($this->input->post('password'));
 			$email 			  			= $this->input->post('email');
 			$no_hp 			  			= $this->input->post('no_hp');
 			$level 			  			= $this->input->post('level');
 			$blokir 					= $this->input->post('blokir');
 			$id_sessions 				= md5($this->input->post('id_sessions'));

 			$data = array(
 				'nama_lengkap' 		=> $nama_lengkap,
 				'username' 			=> $username,
 				'password' 			=> $password,
 				'email' 			=> $email, 
 				'no_hp' 			=> $no_hp,
 				'level' 			=> $level,
 				'blokir' 			=> $blokir, 
 				'id_sessions' 		=> $id_sessions, 
 
 			);
			$this->user_model->insert_data($data,'tb_user');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  						Data User Berhasil Ditambahkan! 
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  						</button>
						</div>');
			redirect('administrator/user');
		}

			
	}

	public function _rules()
	{
		$this->form_validation->set_rules('nama_lengkap','nama_lengkap','required',['required' => 'Nama wajib di isi!']);
		$this->form_validation->set_rules('username','username','required',['required' => 'Username wajib di isi!']);
		$this->form_validation->set_rules('password','password','required',['required' => 'Password wajib di isi!']);
		$this->form_validation->set_rules('email','email','required',['required' => 'Email wajib di isi!']);
		$this->form_validation->set_rules('no_hp','no_hp','required',['required' => 'Nomor Handphone wajib di isi!']);
		$this->form_validation->set_rules('level','level','required',['required' => 'Level wajib di isi!']);
		$this->form_validation->set_rules('blokir','blokir','required',['required' => 'Blokir wajib di isi!']);
	}

	public function update($id)
	{
		$where = array('id_user' => $id);

		$data['users'] = $this->user_model->edit_data($where,'tb_user')->result();
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('administrator/user_update',$data);
		$this->load->view('template_administrator/footer');
	}

	public function update_aksi()
	{
		$id 			= $this->input->post('id_user');
		$nama_lengkap 		= $this->input->post('nama_lengkap');
		$username 		= $this->input->post('username');
		$password 		= md5($this->input->post('password'));
		$email 			= $this->input->post('email');
		$no_hp 			= $this->input->post('no_hp');
		$level 			= $this->input->post('level');
		$blokir 		= $this->input->post('blokir');
		$id_sessions 	= md5($this->input->post('id_sessions'));

		$data = array(
			'nama_lengkap' => $nama_lengkap,
			'username' => $username,
			'password' => $password,
			'email' => $email,
			'no_hp' => $no_hp,
			'level' => $level,
			'blokir' => $blokir,

		);

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
		redirect('administrator/user');
	}

	public function hapus($id)
	{
		$where = array('id_user' => $id,);
		$this->user_model->hapus_data($where,'tb_user');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  						Data User Berhasil Dihapus! 
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  						</button>
						</div>');
		redirect('administrator/user');
	}
}
?>