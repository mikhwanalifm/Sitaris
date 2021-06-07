<?php

class Dashboard extends CI_Controller{
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
		$data = $this->user_model->ambil_data($this->session->userdata['username']);

		$data = array(
			'nama_lengkap' => $data->nama_lengkap,
			'username' => $data->username,
			'level'=> $data->level,
		);
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebaru');
		$this->load->view('mahasiswa/dashboard',$data);
		$this->load->view('template_administrator/footer');

		
		
	}

		
}