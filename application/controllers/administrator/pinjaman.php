 <?php 

class Pinjaman extends CI_Controller{

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
		$data = $this->user_model->ambil_data($this->session->userdata['username']);

		$data = array(
			'nama_lengkap' => $data->nama_lengkap,
			'username' => $data->username,
			'level'=> $data->level,
		);
		//$sess['id_user'];
		//$data['pinjaman'] = $this->pinjaman_model->data_pinjaman($sess);
		//$data['pinjaman'] = $this->pinjaman_model->tampil_data('tb_pinjaman')->result();
		$data['pinjaman'] = $this->db->query("SELECT * FROM tb_pinjaman1 LEFT JOIN tb_barang ON tb_pinjaman1.id_barang = tb_barang.id_barang WHERE status='Diterima' OR status='Ditolak' OR status='Diminta'")->result();
		//$data['pinjaman'] = $this->db->query("SELECT * from tb_pinjaman1 WHERE status='Diterima' OR status='Ditolak' OR status='Ditolak'")->result();
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('administrator/pinjaman',$data);
		$this->load->view('template_administrator/footer');
	}

	public function detail($id)
		{
			$data['detail'] = $this->pinjaman_model->ambil_id_pinjaman($id);
			$this->load->view('template_administrator/header');
			$this->load->view('template_administrator/sidebar');
			$this->load->view('administrator/pinjaman_detail',$data);
			$this->load->view('template_administrator/footer');
		}

	function autocomplete(){
	    $search_data = $this->input->post('search_data');
		$result = $this->model->get_autocomplete('tb_pinjaman','id_pinjaman',$search_data);
        if(!empty($result))
        {
        foreach ($result as $row):
            echo "<h5>".$row->nama."</h5>";
        endforeach;
        }
	    else
	    {
            echo "<li> <em> Not found ... </em> </li>";
	    }
	}

	public function tambah_pinjaman()
 	{
 		$data['barang'] = $this->pinjaman_model->tampil_data('tb_barang')->result();
 		$data['peminjam'] = $this->pinjaman_model->tampil_data('tb_peminjam')->result();
 		$data['kode'] = $this->pinjaman_model->get_kode_query();
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
 			$nama_prodi 	= $this->input->post('nama_prodi');
 			$id_barang 		= $this->input->post('id_barang');
 			//$nama_barang 	= $this->input->post('nama_barang');
 			//$kode_barang	= $this->input->post('kode_barang');
 			$jumlah 		= $this->input->post('jumlah');
 			$status 		= $this->input->post('status');
 			$npm 			= $this->input->post('npm');
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

 			$sql = $this->db->query("SELECT npm FROM tb_pinjaman1 where npm='$npm' and status='Diminta' OR status='Diterima'");
			$cek_npm = $sql->num_rows();
			if ($cek_npm > 0) {
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  						Batas Pinjaman Melampaui Batas! 
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  						</button>
						</div>');
 			redirect('administrator/pinjaman');

 			
 			}
 			else{
 			$data = array(
 				'nama_lengkap' 	=> $nama_lengkap,
 				'npm' 			=> $npm,
 				'nama_prodi' 	=> $nama_prodi, 
 				'id_barang' 	=> $id_barang, 
 				//'nama_barang' 	=> $nama_barang,
 				//'kode_barang'	=> $kode_barang, 
 				'jumlah' 		=> $jumlah,
 				'status' 		=> $status,
 				'file' 			=> $file,

 			);
 			$this->pinjaman_model->insert_data($data,'tb_pinjaman1');
 			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  						Data Peminjam Berhasil Ditambahkan! 
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  						</button>
						</div>');
 			redirect('administrator/pinjaman');
 		}
 		
 	}
 }

 	public function status_acc($id)
 	{
 		$data = array(
			'status'			=> 'Diterima',
			'tanggal_pinjam'	=> date('Y-m-d'),

			 );
		
		$old = $this->db->query("SELECT * from tb_pinjaman1 where id_pinjaman = '$id'")->result();
 			$id_barang;
 			foreach($old as $ol){

 			$id_barang = $ol->id_barang;
 				}

		$old = $this->db->query("SELECT * from tb_barang where id_barang = '$id_barang'")->result();
 			$baru;
 			foreach($old as $ol){

 			$baru = $ol->jumlah;
 			$baru = $baru - 1;
 				}
 			$this->db->query("UPDATE tb_barang SET jumlah='$baru' where id_barang = '$id_barang'");
 		$this->pinjaman_model->update("tb_pinjaman1",'id_pinjaman',$id,$data);

		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  						Permintaan Diterima
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  						</button>
						</div>');
		redirect('administrator/pinjaman');
 	}
 	public function status_dc($id)
 	{
 		$data = array(
			'status'		=> 'Ditolak' );
		$this->pinjaman_model->update("tb_pinjaman1",'id_pinjaman',$id,$data);
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  						Permintaan Diolak
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  						</button>
						</div>');
		redirect('administrator/pinjaman');
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
			//$data['pinjaman'] = $this->db->query("select * from tb_pinjaman pin, tb_prodi prd, tb_barang brg, tb_peminjam pnjm where pin.nama_prodi=prd.nama_prodi, pin.nama_barang=brg.nama_barang, pin.nama_lengkap = pnjm.nama_lengkap and pin.id_pinjaman='$id'")->result();
 			//$data['pinjaman'] = $this->db->query()->result();
 			$data['pinjaman'] = $this->pinjaman_model->tampil_data('tb_pinjaman1');
 			$data['barang'] = $this->pinjaman_model->tampil_data('tb_barang')->result();
 			//$data['peminjam'] = $this->pinjaman_model->tampil_data('tb_peminjam')->result();
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
 			$nama_prodi 	= $this->input->post('nama_prodi');
 			$nama_barang 	= $this->input->post('nama_barang');
 			$kode_barang	= $this->input->post('kode_barang');
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
 				'kode_barang' 	=> $kode_barang, 
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