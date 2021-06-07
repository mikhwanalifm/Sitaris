<?php


class Tentang_lab extends CI_Controller{
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
		$data['tentang'] = $this->tentang_model->tampil_data('tb_tentanglab')->result();
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('administrator/tentang_lab',$data);
		$this->load->view('template_administrator/footer');
	}

	public function update($id)
	{
		$where = array('id' => $id);

		$data['tentang'] = $this->tentang_model->edit_data($where,'tb_tentanglab')->result();
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('administrator/tentang_update',$data);
		$this->load->view('template_administrator/footer');
	}

	public function update_aksi()
	{
		$id 			= $this->input->post('id');
		$sejarah 		= $this->input->post('sejarah');
		$visi 			= $this->input->post('visi');
		$misi 			= $this->input->post('misi');

		$data = array(
			'sejarah' 	=> $sejarah,
			'visi' 		=> $visi,
			'misi' 		=> $misi,
		);

		$where = array(

			'id' => $id,
		);

		$this->tentang_model->update_data($where,$data,'tb_tentanglab');
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  						Data Tentang Laboratorium Berhasil Diubah! 
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  						</button>
						</div>');
		redirect('administrator/tentang_lab');
	}

	public function hapus($id)
	{
		$where = array('id' => $id,);
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