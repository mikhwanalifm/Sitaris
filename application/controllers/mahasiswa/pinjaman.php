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
			redirect('mahasiswa/auth');
		}
	}

	public function index()
	{
		$sess = $this->user_model->ambil_data($this->session->userdata['username']);
		$user="";
		if(isset($_SESSION['username'])){
			$user=$_SESSION['username'];
		}
		$sess = array(
			'id_user' => $sess->id_user,
		); 
		
		 //$data['pinjaman'] = $this->pinjaman_model->data_pinjaman($user);


		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebaru');
		$this->load->view('mahasiswa/pinjaman');
		$this->load->view('template_administrator/footer');
	}

	public function cari(){
        $npm=$_GET['npm'];
        $cari =$this->pinjaman_model->cari($npm)->result();
        echo json_encode($cari);
    } 

     function get_autocomplete(){
        if (isset($_GET['term'])) {
            $result = $this->pinjaman_model->get_mahasiswa($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
                	'label' => $row->npm,
                	'nama_lengkap' => $row->nama_lengkap,
                );
            
                echo json_encode($arr_result);
            }
        }
    }

    var $title = 'autocomplete';

	public function detail($id)
		{
			$data['detail'] = $this->pinjaman_model->ambil_id_pinjaman($id);
			$this->load->view('template_administrator/header');
			$this->load->view('template_administrator/sidebaru');
			$this->load->view('mahasiswa/pinjaman_detail',$data);
			$this->load->view('template_administrator/footer');
		}

	public function tambah_pinjaman()
 	{
 		//$data['barang'] = $this->pinjaman_model->tampil_data('tb_barang')->result();
 		$data['barang'] = $this->db->query("SELECT * from tb_barang where jumlah > 0 ")->result();
 		$data['peminjam'] = $this->pinjaman_model->tampil_data('tb_peminjam')->result();
 		$data['kode'] = $this->pinjaman_model->get_kode_query();
 		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebaru');
		$this->load->view('mahasiswa/pinjaman_form',$data);
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
 			$no_hp 			= $this->input->post('no_hp');
 			//$nama_barang 	= $this->input->post('nama_barang');
 			//$kode_barang	= $this->input->post('kode_barang');
 			$jumlah 		= $this->input->post('jumlah1');
 			$status 		= $this->input->post('status');
 			$npm 			= $this->input->post('npm');
 			$keperluan 		= $this->input->post('keperluan');
 			$durasi 		= $this->input->post('durasi');
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

 			$sql = $this->db->query("SELECT count(npm) as barang FROM tb_pinjaman1 where npm='$npm' and  status='Diterima'")->result();
 			$cek_npm;
 			foreach($sql as $ss){
 				$cek_npm = $ss->barang;
 			}
 			
			if ($cek_npm > 0) {
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  						Batas Pinjaman Melampaui Batas! 
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  						</button>
						</div>');
 			redirect('mahasiswa/pinjaman');
 			}

 			$sql1 = $this->db->query("SELECT jumlah from tb_barang where id_barang='$id_barang'");
			$cek_npm1 = $sql1->result();
			if ($cek_npm1 == 0) {
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  						Barang Tidak Tersedia! 
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  						</button>
						</div>');
 			redirect('mahasiswa/pinjaman');
 		}


 			else{
 			$data = array(
 				'nama_lengkap' 	=> $nama_lengkap,
 				'npm' 			=> $npm,
 				'nama_prodi' 	=> $nama_prodi, 
 				'id_barang' 	=> $id_barang,
 				 'no_hp' 		=> $no_hp,
 				 'keperluan' 	=> $keperluan,
 				 'durasi' 		=> $durasi,
 				//'nama_barang' 	=> $nama_barang,
 				//'kode_barang'	=> $kode_barang, 
 				'jumlah1' 		=> $jumlah,
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

 			redirect('mahasiswa/pinjaman');
 		}
 		
 	}
 	}

 	public function _rules()
			{
		$this->form_validation->set_rules('nama_lengkap','nama_lengkap','required',['required' => 'Nama Lengkap wajib di isi!']);
		$this->form_validation->set_rules('npm','npm','required',['required' => 'NPM wajib di isi!']);
		$this->form_validation->set_rules('status','status','required',['required' => 'Status wajib di isi!']);
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
		redirect('mahasiswa/pinjaman');
	}


 	public function pdf()
 	{
 		$this->load->library('dompdf_gen');

 		//$data['pinjaman'] = $this->pinjaman_model->tampil_data('tb_pinjaman')->result();
 		$data['pinjaman'] = $this->db->query("SELECT * FROM tb_pinjaman1 LEFT JOIN tb_barang ON tb_pinjaman1.id_barang = tb_barang.id_barang where npm='$_SESSION[username]' AND status='Diterima'")->result();
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