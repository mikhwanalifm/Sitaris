<?php

class Ruangan extends CI_Controller{
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
		$data['ruangan'] = $this->ruangan_model->tampil_data('tb_ruangan')->result();
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('administrator/ruangan',$data);
		$this->load->view('template_administrator/footer');
	}

	public function input()
	{
		$data = array(
			'id_ruangan' => set_value('id_ruangan'),
			'kode_ruangan' => set_value('kode_ruangan'),
			'nama_ruangan' => set_value('nama_ruangan'),
		);
		$config['total_rows'] = $this->ruangan_model->tampil_data('tb_ruangan')->num_rows();
		$data['id_ruangan'] = "KR".str_pad($config['total_rows']+1, 3 ,0,STR_PAD_LEFT);
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('administrator/ruangan_form',$data);
		$this->load->view('template_administrator/footer');
	}

	public function input_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->input();
		}else{
			$data = array(
				'kode_ruangan' => $this->input->post('kode_ruangan',TRUE),
				'nama_ruangan' => $this->input->post('nama_ruangan',TRUE),
			);

			$this->ruangan_model->input_data($data);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  						Data ruangan Berhasil Ditambahkan! 
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  						</button>
						</div>');
			redirect('administrator/ruangan');
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('kode_ruangan','kode_ruangan','required',['required | max_length[5] | min_length[1]' => 'Kode Ruangan wajib di isi!']);
		$this->form_validation->set_rules('nama_ruangan','nama_ruangan','required',['required' => 'Nama Ruangan wajib di isi!']);
	}

	public function update($id)
	{	
		$where = array('id_ruangan' => $id);
		$data['ruangan'] = $this->ruangan_model->edit_data($where,'tb_ruangan')->result();
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('administrator/ruangan_update',$data);
		$this->load->view('template_administrator/footer');
	}

	public function update_aksi()
	{
		$id = $this->input->post('id_ruangan');
		$kode_ruangan = $this->input->post('kode_ruangan');
		$nama_ruangan = $this->input->post('nama_ruangan');

		$data = array(
			'kode_ruangan' => $kode_ruangan,
			'nama_ruangan' => $nama_ruangan,
		);

		$where = array(
			'id_ruangan' => $id,
		);

		$this->ruangan_model->update_data($where,$data,'tb_ruangan');
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  						Data ruangan Berhasil Diubah! 
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  						</button>
						</div>');
		redirect('administrator/ruangan');

	}

	public function delete($id)
	{
		$where = array('id_ruangan' => $id,);
		$this->ruangan_model->hapus_data($where,'tb_ruangan');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  						Data ruangan Berhasil Dihapus! 
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  						</button>
						</div>');
		redirect('administrator/ruangan');
	}
}