<?php 

	class Barang extends CI_Controller{

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
		$data['barang'] = $this->barang_model->tampil_data('tb_barang')->result();
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('administrator/barang',$data);
		$this->load->view('template_administrator/footer');
		}



	public function tambah_barang()
 	{
 		$config['total_rows'] = $this->barang_model->tampil_data('tb_barang')->num_rows();
 		$data['ruangan'] = $this->barang_model->tampil_data('tb_ruangan')->result();
 		$data['id'] = "KB".str_pad($config['total_rows']+1, 4 ,0,STR_PAD_LEFT);

 		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('administrator/barang_form',$data);
		$this->load->view('template_administrator/footer');
 	}

 	public function tambah_barang_aksi()
 	{
 		$this->_rules();
 		if($this->form_validation->run() == FALSE)
 		{
 			$this->tambah_barang();
 		}else{
 			$kode_barang 					= $this->input->post('kode_barang');
 			$nama_barang 					= $this->input->post('nama_barang');
 			$merek 							= $this->input->post('merek');
 			$jumlah 			  			= $this->input->post('jumlah');
 			$satuan 			  			= $this->input->post('satuan');
 			$asal_barang 			  		= $this->input->post('asal_barang');
 			$kondisi 						= $this->input->post('kondisi');
 			$nama_ruangan 					= $this->input->post('nama_ruangan');

 			$data = array(
 				'kode_barang' 			=> $kode_barang,
 				'nama_barang' 			=> $nama_barang,
 				'merek' 				=> $merek,
 				'jumlah' 				=> $jumlah, 
 				'satuan' 				=> $satuan,
 				'asal_barang' 			=> $asal_barang,
 				'kondisi' 				=> $kondisi, 
 				'nama_ruangan' 			=> $nama_ruangan, 
 
 			);

 			$this->barang_model->insert_data($data,'tb_barang');
 			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  						Data Barang Berhasil Ditambahkan! 
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  						</button>
						</div>');
 			redirect('administrator/barang');

 		}
 	}

 		public function _rules()
			{
		$this->form_validation->set_rules('kode_barang','kode_barang','required',['required' => 'Kode Mata Barang wajib di isi!']);
		$this->form_validation->set_rules('nama_barang','nama_barang','required',['required' => 'Nama Mata Barang wajib di isi!']);
		$this->form_validation->set_rules('merek','merek','required',['required' => 'Merek wajib di isi!']);
		$this->form_validation->set_rules('jumlah','jumlah','required',['required' => 'Jumlah wajib di isi!']);
		$this->form_validation->set_rules('satuan','satuan','required',['required' => 'Satuan wajib di isi!']);
		$this->form_validation->set_rules('asal_barang','asal_barang','required',['required' => 'Asal Barang wajib di isi!']);
		$this->form_validation->set_rules('kondisi','kondisi','required',['required' => 'Kondisi wajib di isi!']);
		$this->form_validation->set_rules('nama_ruangan','nama_ruangan','required',['required' => 'Kode Ruangan wajib di isi!']);
		}

		public function detail($kode)
		{
			$data['detail'] = $this->barang_model->ambil_kode_barang($kode);
			$this->load->view('template_administrator/header');
			$this->load->view('template_administrator/sidebar');
			$this->load->view('administrator/barang_detail',$data);
			$this->load->view('template_administrator/footer');
		}

		public function update($id)
		{
			$where = array('id_barang' => $id);
			//$data['barang'] = $this->db->query("select * from tb_barang brg, tb_ruangan rgn where brg.nama_ruangan = rgn.nama_ruangan and brg.id_barang = '$id'")->result();
			$data['barang'] = $this->barang_model->edit_data($where,'tb_barang')->result();
			$data['ruangan'] = $this->barang_model->tampil_data('tb_ruangan')->result();

			$this->load->view('template_administrator/header');
			$this->load->view('template_administrator/sidebar');
			$this->load->view('administrator/barang_update',$data); //load view form update
			$this->load->view('template_administrator/footer');

		}

		public function update_aksi()
		{
			$id_barang 						= $this->input->post('id_barang');
			$kode_barang 					= $this->input->post('kode_barang');
 			$nama_barang 					= $this->input->post('nama_barang');
 			$merek 							= $this->input->post('merek');
 			$jumlah 			  			= $this->input->post('jumlah');
 			$satuan 			  			= $this->input->post('satuan');
 			$asal_barang 			  		= $this->input->post('asal_barang');
 			$kondisi 						= $this->input->post('kondisi');
 			$nama_ruangan 					= $this->input->post('nama_ruangan');


			$data = array(
				'kode_barang' 			=> $kode_barang,
 				'nama_barang' 			=> $nama_barang,
 				'merek' 				=> $merek,
 				'jumlah' 				=> $jumlah, 
 				'satuan' 				=> $satuan,
 				'asal_barang' 			=> $asal_barang,
 				'kondisi' 				=> $kondisi, 
 				'nama_ruangan' 			=> $nama_ruangan, 
 
			);

		$where = array(
			'id_barang' => $id_barang,
		);

		$this->barang_model->update_data($where,$data,'tb_barang');
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  						Data Barang Berhasil Diubah! 
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  						</button>
						</div>');
		redirect('administrator/barang');

		}

		public function delete($id)
	{
		$where = array('id_barang' => $id,);
		$this->barang_model->hapus_data($where,'tb_barang');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  						Data Barang Berhasil Dihapus! 
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  						</button>
						</div>');
		redirect('administrator/barang');
	}


}
 ?>