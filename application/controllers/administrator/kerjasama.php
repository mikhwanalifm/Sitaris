<?php
class Kerjasama extends CI_Controller{

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
		$data['kerjasama'] = $this->kerjasama_model->tampil_data('tb_kerjasama')->result();
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('administrator/kerjasama',$data);
		$this->load->view('template_administrator/footer');
	}
	public function tambah_kerjasama()
 	{
 		$data['kerjasama'] = $this->kerjasama_model->tampil_data('tb_kerjasama')->result();
 		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('administrator/kerjasama_form',$data);
		$this->load->view('template_administrator/footer');
 	}

 	public function tambah_kerjasama_aksi()
 	{
 		$this->_rules();
 		if($this->form_validation->run() == FALSE){
 			$this->tambah_kerjasama();
 		}else{
 			$nama 			= $this->input->post('nama');
 			$photo 			= $_FILES['photo'];

 			if($photo=''){} else{
 				$config['upload_path'] = './assets1/img/clients';
 				$config['allowed_types'] = 'jpg|png|gif|tiff';

 				$this->load->library('upload',$config);
 				if(!$this->upload->do_upload('photo')){
 					echo "Gagal upload"; die();
 				}else{
 					$photo=$this->upload->data('file_name');
 				}
 			}

 			$data = array(
 				'nama' 			=> $nama,
 				'photo' 		=> $photo,

 			);

 			$this->kerjasama_model->insert_data($data,'tb_kerjasama');
 			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  						Data Kerjasama Berhasil Ditambahkan! 
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  						</button>
						</div>');
 			redirect('administrator/kerjasama');
 		}
 	}
 	
 	public function detail($id)
		{
			$data['detail'] = $this->kerjasama_model->ambil_id_kerjasama($id);
			$this->load->view('template_administrator/header');
			$this->load->view('template_administrator/sidebar');
			$this->load->view('administrator/kerjasama_detail',$data);
			$this->load->view('template_administrator/footer');
		}

 	public function update($id)
 	{
 		$where = array('id_kerjasama' => $id);
			$data['kerjasama'] = $this->kerjasama_model->edit_data($where,'tb_kerjasama')->result();
			$data['detail'] = $this->kerjasama_model->ambil_id_kerjasama($id);

			$this->load->view('template_administrator/header');
			$this->load->view('template_administrator/sidebar');
			$this->load->view('administrator/kerjasama_update',$data);
			$this->load->view('template_administrator/footer');
 	}

 	public function update_kerjasama_aksi()
 	{
 		$this->_rules();
 		if($this->form_validation->run() == FALSE)
 		{
 			$this->update();
 		}else{
 			$id 			= $this->input->post('id_kerjasama');
 			$nama 			= $this->input->post('nama');
 			$photo 			= $_FILES['userfile']['name'];

 			if($photo){
 				$config['upload_path'] = './assets1/img/clients';
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
 				'nama' 			=> $nama,

 			);

 			$where = array(

 				'id_kerjasama' => $id
 			);

 			$this->kerjasama_model->update_data($where,$data,'tb_kerjasama');
 			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  						Data Kerjasama Berhasil Diubah! 
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  						</button>
						</div>');
 			redirect('administrator/kerjasama');

 		}
 	}

 	public function _rules()
			{
		$this->form_validation->set_rules('nama','nama','required',['required' => 'Nama wajib di isi!']);
		}


		public function delete($id)
	{
		$where = array('id_kerjasama' => $id,);
		$this->kerjasama_model->hapus_data($where,'tb_kerjasama');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  						Data Kerjasama Berhasil Dihapus! 
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  						</button>
						</div>');
		redirect('administrator/kerjasama');
	}
}
?>