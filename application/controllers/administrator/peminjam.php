<?php

class Peminjam extends CI_Controller{

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
		$data['peminjam'] = $this->peminjam_model->tampil_data('tb_peminjam')->result();
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('administrator/peminjam',$data);
		$this->load->view('template_administrator/footer');
	}

	public function detail($id)
		{
			$data['detail'] = $this->peminjam_model->ambil_id_peminjam($id);
			$this->load->view('template_administrator/header');
			$this->load->view('template_administrator/sidebar');
			$this->load->view('administrator/peminjam_detail',$data);
			$this->load->view('template_administrator/footer');
		}

	public function tambah_peminjam()
 	{
 		
 		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('administrator/peminjam_form');
		$this->load->view('template_administrator/footer');
 	}

 	public function tambah_peminjam_aksi()
 	{
 		$this->_rules();
 		if($this->form_validation->run() == FALSE){
 			$this->tambah_peminjam();
 		}else{
 			$npm 			= $this->input->post('npm');
 			$nama_lengkap 	= $this->input->post('nama_lengkap');
 			$alamat 		= $this->input->post('alamat');
 			$email 			= $this->input->post('email');
 			$telepon 		= $this->input->post('telepon');
 			$tempat_lahir 	= $this->input->post('tempat_lahir');
 			$tanggal_lahir 	= $this->input->post('tanggal_lahir');
 			$jenis_kelamin 	= $this->input->post('jenis_kelamin');
 			$nama_prodi 	= $this->input->post('nama_prodi');
 			$photo 			= $_FILES['photo'];

 			if($photo=''){} else{
 				$config['upload_path'] = './assets/uploads';
 				$config['allowed_types'] = 'jpg|png|gif|tiff';

 				$this->load->library('upload',$config);
 				if(!$this->upload->do_upload('photo')){
 					echo "Gagal upload"; die();
 				}else{
 					$photo=$this->upload->data('file_name');
 				}
 			}

 			$data = array(
 				'npm' 			=> $npm,
 				'nama_lengkap' 	=> $nama_lengkap,
 				'alamat' 		=> $alamat, 
 				'email' 		=> $email, 
 				'telepon' 		=> $telepon,
 				'tempat_lahir' 	=> $tempat_lahir,
 				'tanggal_lahir' => $tanggal_lahir,
 				'jenis_kelamin' => $jenis_kelamin, 
 				'nama_prodi' 	=> $nama_prodi, 
 				'photo' 		=> $photo,

 			);

 			$this->peminjam_model->insert_data($data,'tb_peminjam');
 			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  						Data Peminjam Berhasil Ditambahkan! 
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  						</button>
						</div>');
 			redirect('administrator/peminjam');
 		}
 	}

 	public function _rules()
			{
		$this->form_validation->set_rules('npm','npm','required',['required' => 'NPM wajib di isi!']);
		$this->form_validation->set_rules('nama_lengkap','nama_lengkap','required',['required' => 'Nama Lengkap wajib di isi!']);
		$this->form_validation->set_rules('alamat','alamat','required',['required' => 'Alamat wajib di isi!']);
		$this->form_validation->set_rules('email','email','required',['required' => 'Email wajib di isi!']);
		$this->form_validation->set_rules('telepon','telepon','required',['required' => 'Telepon wajib di isi!']);
		$this->form_validation->set_rules('tempat_lahir','tempat_lahir','required',['required' => 'Tempat Lahir wajib di isi!']);
		$this->form_validation->set_rules('tanggal_lahir','tanggal_lahir','required',['required' => 'Tanggal Lahir wajib di isi!']);
		$this->form_validation->set_rules('jenis_kelamin','jenis_kelamin','required',['required' => 'Jenis Kelamin wajib di isi!']);
		$this->form_validation->set_rules('nama_prodi','nama_prodi','required',['required' => 'Nama Program Studi wajib di isi!']);
		}

		public function delete($id)
	{
		$where = array('id_peminjam' => $id,);
		$this->peminjam_model->hapus_data($where,'tb_peminjam');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  						Data Peminjam Berhasil Dihapus! 
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  						</button>
						</div>');
		redirect('administrator/peminjam');
	}

	public function update($id)
 	{

			$data['peminjam'] = $this->peminjam_model->tampil_data('tb_peminjam')->result();
			
			$data['detail'] = $this->peminjam_model->ambil_id_peminjam($id);
			$where = array('id_peminjam' => $id);
			$data['peminjam'] = $this->peminjam_model->edit_data($where,'tb_peminjam')->result();
			$this->load->view('template_administrator/header');
			$this->load->view('template_administrator/sidebar');
			$this->load->view('administrator/peminjam_update',$data);
			$this->load->view('template_administrator/footer');
 	}

 	public function update_peminjam_aksi()
 	{
 		$this->_rules();
 		if($this->form_validation->run() == FALSE)
 		{
 			$this->update();
 		}else{
 			$id_peminjam 	= $this->input->post('id_peminjam');
 			$npm 			= $this->input->post('npm');
 			$nama_lengkap 	= $this->input->post('nama_lengkap');
 			$alamat 		= $this->input->post('alamat');
 			$email 			= $this->input->post('email');
 			$telepon 		= $this->input->post('telepon');
 			$tempat_lahir 	= $this->input->post('tempat_lahir');
 			$tanggal_lahir 	= $this->input->post('tanggal_lahir');
 			$jenis_kelamin 	= $this->input->post('jenis_kelamin');
 			$nama_prodi 	= $this->input->post('nama_prodi');
 			$photo 			= $_FILES['userfile']['name'];

 			if($photo){
 				$config['upload_path'] = './assets/uploads';
 				$config['allowed_types'] = 'jpg|png|gif|tiff';

 				$this->load->library('upload',$config);

 				if($this->upload->do_upload('userfile')){
 					$userfile = $this->upload->data('file_name');
 					$this->db->set('photo',$userfile);
 				}else{
 					echo "Gagal upload";
 				}
 			}

 			$data = array(
 				'npm' 			=> $npm,
 				'nama_lengkap' 	=> $nama_lengkap,
 				'alamat' 		=> $alamat, 
 				'email' 		=> $email, 
 				'telepon' 		=> $telepon,
 				'tempat_lahir' 	=> $tempat_lahir,
 				'tanggal_lahir' => $tanggal_lahir,
 				'jenis_kelamin' => $jenis_kelamin, 
 				'nama_prodi' 	=> $nama_prodi, 

 			);

 			$where = array(

 				'id_peminjam' => $id_peminjam
 			);

 			$this->peminjam_model->update_data($where,$data,'tb_peminjam');
 			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  						Data Peminjam Berhasil Diubah! 
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  						</button>
						</div>');
 			redirect('administrator/peminjam');

 		}
 	}

 	

}

?>