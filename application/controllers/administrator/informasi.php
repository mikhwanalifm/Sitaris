<?php 

	class Informasi extends CI_Controller{

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
		$data['informasi'] = $this->informasi_model->tampil_data('tb_informasi')->result();
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('administrator/informasi',$data);
		$this->load->view('template_administrator/footer');
		}


	public function tambah_informasi()
 	{
 		$data['informasi'] = $this->informasi_model->tampil_data('tb_informasi')->result();
 		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('administrator/informasi_form',$data);
		$this->load->view('template_administrator/footer');
 	}

 	public function tambah_informasi_aksi()
 	{
 		$this->_rules();
 		if($this->form_validation->run() == FALSE)
 		{
 			$this->tambah_informasi();
 		}else{
 			$id					= $this->input->post('id_informasi');
 			$icon 				= $this->input->post('icon');
 			$judul_informasi 	= $this->input->post('judul_informasi');
 			$isi_informasi 		= $this->input->post('isi_informasi');

 			$data = array(
 				'icon' 					=> $icon,
 				'judul_informasi' 		=> $judul_informasi,
 				'isi_informasi' 		=> $isi_informasi, 
 			);

 			$this->informasi_model->insert_data($data,'tb_informasi');
 			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  						Informasi Berhasil Ditambahkan! 
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  						</button>
						</div>');
 			redirect('administrator/informasi');

 		}
 	}

 		public function _rules()
			{
		$this->form_validation->set_rules('icon','icon','required',['required' => 'Ikon wajib di isi!']);
		$this->form_validation->set_rules('judul_informasi','judul_informasi','required',['required' => 'Judul Informasi wajib di isi!']);
		$this->form_validation->set_rules('isi_informasi','isi_informasi','required',['required' => 'Judul Informasi wajib di isi!']);
		}

		public function update($id)
		{
			$where = array('id_informasi' => $id);
			//$data['informasi'] = $this->informasi_model->tampil_data('tb_informasi')->result();
			$data['informasi'] = $this->informasi_model->edit_data($where,'tb_informasi')->result();

			$this->load->view('template_administrator/header');
			$this->load->view('template_administrator/sidebar');
			$this->load->view('administrator/informasi_update',$data); 
			$this->load->view('template_administrator/footer');

		}

		public function update_informasi_aksi()
	{
		$id 					= $this->input->post('id_informasi');
		$icon 					= $this->input->post('icon');
		$judul_informasi 		= $this->input->post('judul_informasi');
		$isi_informasi 			= $this->input->post('isi_informasi');

		$data = array(
			'icon' 				=> $icon,
			'judul_informasi' 	=> $judul_informasi,
			'isi_informasi' 	=> $isi_informasi,

		);

		$where = array(

			'id_informasi' => $id,
		);

		$this->informasi_model->update_data($where,$data,'tb_informasi');
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  						Data Informasi Berhasil Diubah! 
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  						</button>
						</div>');
		redirect('administrator/informasi');
	}

		public function delete($id)
	{
		$where = array('id_informasi' => $id,);
		$this->informasi_model->hapus_data($where,'tb_informasi');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  						Data Informasi Berhasil Dihapus! 
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  						</button>
						</div>');
		redirect('administrator/informasi');
	}


}
 ?>