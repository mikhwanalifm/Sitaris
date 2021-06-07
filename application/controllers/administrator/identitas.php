<?php


class Identitas extends CI_Controller{
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
		$data['identitas'] = $this->identitas_model->tampil_data('tb_identitas')->result();
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('administrator/identitas',$data);
		$this->load->view('template_administrator/footer');
	}

	public function update($id)
	{
		$where = array('id_identitas' => $id);

		$data['identitas'] = $this->identitas_model->edit_data($where,'tb_identitas')->result();
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('administrator/identitas_update',$data);
		$this->load->view('template_administrator/footer');
	}

	public function update_aksi()
	{
		$id 			= $this->input->post('id_identitas');
		$judul_website 	= $this->input->post('judul_website');
		$alamat 		= $this->input->post('alamat');
		$telepon 		= $this->input->post('telepon');
		$email 			= $this->input->post('email');

		$data = array(
			'judul_website' => $judul_website,
			'alamat' => $alamat,
			'email' => $email,
			'telepon' => $telepon,

		);

		$where = array(

			'id_identitas' => $id,
		);

		$this->identitas_model->update_data($where,$data,'tb_identitas');
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  						Data Website Berhasil Diubah! 
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  						</button>
						</div>');
		redirect('administrator/identitas');
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