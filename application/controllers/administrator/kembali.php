 <?php 

class Kembali extends CI_Controller{

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
		
		$data['kembali'] = $this->db->query("SELECT * FROM tb_pinjaman1 LEFT JOIN tb_barang ON tb_pinjaman1.id_barang = tb_barang.id_barang WHERE status='Selesai'")->result();
		//$data['kembali'] = $this->db->query("SELECT * FROM `tb_pinjaman` WHERE status='Diterima' OR status='Selesai'")->result();
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('administrator/kembali',$data);
		$this->load->view('template_administrator/footer');
	}

	public function detail($id)
		{
			$data['detail'] = $this->pinjaman_model->ambil_id_pinjaman($id);
			$this->load->view('template_administrator/header');
			$this->load->view('template_administrator/sidebar');
			$this->load->view('administrator/kembali_detail',$data);
			$this->load->view('template_administrator/footer');
		}
	public function detail_kode($id)
	{
		$id = 'kode_barang';
		$data['detail_kode'] = $this->pinjaman_model->ambil_kode_pinjaman($id);
			
	}

	public function tambah_pinjaman()
 	{
 		$data['prodi'] = $this->pinjaman_model->tampil_data('tb_prodi')->result();
 		$data['barang'] = $this->pinjaman_model->tampil_data('tb_barang')->result();
 		$data['peminjam'] = $this->pinjaman_model->tampil_data('tb_peminjam')->result();
 		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('administrator/pinjaman_form',$data);
		$this->load->view('template_administrator/footer');
 	}

 	public function tambah_pinjaman_aksi()
 	{
 		$this->_rules();
 		if($this->form_validation->run() == FALSE){
 			$this->tambah_pinjaman();
 		}else{
 			$nama_lengkap 	= $this->input->post('nama_lengkap');
 			$npm 			= $this->input->post('npm');
 			$nama_prodi 	= $this->input->post('nama_prodi');
 			$nama_barang 	= $this->input->post('nama_barang');
 			$jumlah 		= $this->input->post('jumlah');
 			$status 		= $this->input->post('status');
 			$file 			= $_FILES['file'];

 			if($file=''){} else{
 				$config['upload_path'] = './assets/uploads/file';
 				$config['allowed_types'] = 'jpg|png|gif|tiff';

 				$this->load->library('upload',$config);
 				if(!$this->upload->do_upload('file')){
 					echo "Gagal upload"; die();
 				}else{
 					$file=$this->upload->data('file_name');
 				}
 			}

 			$data = array(
 				'nama_lengkap' 	=> $nama_lengkap,
 				'npm' 			=> $npm,
 				'nama_prodi' 	=> $nama_prodi, 
 				'nama_barang' 	=> $nama_barang, 
 				'jumlah' 		=> $jumlah,
 				'status' 		=> $status,
 				'file' 			=> $file,

 			);
 			$this->pinjaman_model->insert_data($data,'tb_pinjaman');
 			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  						Data Peminjam Berhasil Ditambahkan! 
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  						</button>
						</div>');
 			redirect('administrator/pinjaman');
 		}
 	}

 	public function status_done($id)
 	{
 		$data = array(
			'status'			=> 'Selesai',
			'tanggal_kembali'	=> date('Y-m-d'),
			'denda'				=> $this->input->post('denda'),
			 );
		$this->kembali_model->update("tb_pinjaman1",'id_pinjaman',$id,$data);

		//$where = array('kode_barang' => $barang);
		//$data_barang = $this->kembali_model->get_where("tb_barang",$where)->result();
		//foreach($data_barang as $key) {
			//$jumlah_old = $key->jumlah;
		//}
		//$data = array('jumlah' => $jumlah_old+1,);
		//$this->pinjaman_model->update("tb_barang",'kode_barang',$barang,$data);


		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  						Peminjaman Selesai
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  						</button>
						</div>');
		$old = $this->db->query("SELECT * from tb_pinjaman1 where id_pinjaman = '$id'")->result();
 			$id_barang;
 			foreach($old as $ol){

 			$id_barang = $ol->id_barang;
 				}

		$old = $this->db->query("SELECT * from tb_barang where id_barang = '$id_barang'")->result();
 			$baru;
 			foreach($old as $ol){

 			$baru = $ol->jumlah;
 			$baru = $baru + 1;
 				}
 			$this->db->query("UPDATE tb_barang SET jumlah='$baru' where id_barang = '$id_barang'");
		redirect('administrator/kembali');
 	}
 	
 

 	public function _rules()
			{
		$this->form_validation->set_rules('nama_lengkap','nama_lengkap','required',['required' => 'Nama Lengkap wajib di isi!']);
		$this->form_validation->set_rules('npm','npm','required',['required' => 'NPM wajib di isi!']);
		$this->form_validation->set_rules('nama_prodi','nama_prodi','required',['required' => 'Program Studi di isi!']);
		$this->form_validation->set_rules('nama_barang','nama_barang','required',['required' => 'Barang wajib di isi!']);
		$this->form_validation->set_rules('jumlah','jumlah','required',['required' => 'Jumlah wajib di isi!']);
		$this->form_validation->set_rules('status','status','required',['required' => 'Status wajib di isi!']);
		//$this->form_validation->set_rules('file','file','required',['required' => 'File wajib di upload!']);
		}

		public function delete($id)
	{
		$where = array('id_pinjaman' => $id,);
		$this->pinjaman_model->hapus_data($where,'tb_pinjaman');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  						Data Pinjaman Berhasil Dihapus! 
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  						</button>
						</div>');
		redirect('administrator/pinjaman');
	}

	public function update($id)
 	{
 		$where = array('id_pinjaman' => $id);
			$data['pinjaman'] = $this->db->query("select * from tb_pinjaman pin, tb_prodi prd, tb_barang brg, tb_peminjam pnjm where pin.nama_prodi=prd.nama_prodi, pin.nama_barang=brg.nama_barang, pin.nama_lengkap = pnjm.nama_lengkap and pin.id_pinjaman='$id'")->result();
			$data['prodi'] = $this->pinjaman_model->tampil_data('tb_prodi')->result();
 			$data['barang'] = $this->pinjaman_model->tampil_data('tb_barang')->result();
 			$data['peminjam'] = $this->pinjaman_model->tampil_data('tb_peminjam')->result();
			$data['detail'] = $this->pinjaman_model->ambil_id_peminjam($id);

			$this->load->view('template_administrator/header');
			$this->load->view('template_administrator/sidebar');
			$this->load->view('administrator/pinjaman_update',$data);
			$this->load->view('template_administrator/footer');
 	}

 	public function update_pinjaman_aksi()
 	{
 		$this->_rules();
 		if($this->form_validation->run() == FALSE)
 		{
 			$this->update();
 		}else{
 			$id_pinjaman 	= $this->input->post('id_pinjaman');
 			$nama_lengkap 	= $this->input->post('nama_lengkap');
 			$npm 			= $this->input->post('npm');
 			$nama_prodi 		= $this->input->post('nama_prodi');
 			$nama_barang 			= $this->input->post('nama_barang');
 			$jumlah 		= $this->input->post('jumlah');
 			$file 			= $_FILES['userfile']['name'];

 			if($photo){
 				$config['upload_path'] = './assets/uploads/file';
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
 				'nama_lengkap' 	=> $nama_lengkap,
 				'npm' 			=> $npm,
 				'nama_prodi' 		=> $nama_prodi, 
 				'nama_barang' 		=> $nama_barang, 
 				'jumlah' 		=> $jumlah,

 			);

 			$where = array(

 				'id_pinjaman' => $id_pinjaman
 			);

 			$this->pinjaman_model->update_data($where,$data,'tb_pinjaman');
 			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  						Data Peminjam Berhasil Diubah! 
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  						</button>
						</div>');
 			redirect('administrator/pinjaman');

 		}
 	}

 	public function pdf()
 	{
 		$this->load->library('dompdf_gen');

 		$data['pinjaman'] = $this->pinjaman_model->tampil_data('tb_pinjaman')->result();

 		$this->load->view('laporan_pdf',$data);

 		$paper_size = 'A4';
 		$orientation = 'portrait';
 		$html = $this->output->get_output();
 		$this->dompdf->set_paper($paper_size, $orientation);

 		$this->dompdf->load_html($html);
 		$this->dompdf->render();
 		$this->dompdf->stream("Laporan_pinjaman.pdf", array('Attachement ' => 0));
 	}

}


?>