<?php

class Ruangan_cetak extends CI_Controller{
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
		$this->load->view('administrator/ruangan_cetak',$data);
		$this->load->view('template_administrator/footer');
	}
	public function pdf1()
 	{
 		$this->load->library('dompdf_gen');

 		$data['labpro'] = $this->db->query("SELECT * FROM `tb_barang` WHERE nama_ruangan = 'Lab. Pemograman'")->result();
 		$this->load->view('administrator/laporan_labpro',$data);

 		$paper_size = 'A4';
 		$orientation = 'portrait';
 		$html = $this->output->get_output();
 		$this->dompdf->set_paper($paper_size, $orientation);

 		$this->dompdf->load_html($html);
 		$this->dompdf->render();
 		$this->dompdf->stream("Laporan Inventaris Laboratorium Pemograman.pdf", array('Attachement ' => 0));
 	}

 	public function pdf2()
 	{
 		$this->load->library('dompdf_gen');

 		$data['labcer'] = $this->db->query("SELECT * FROM `tb_barang` WHERE nama_ruangan = 'Lab. Cerdas'")->result();
 		$this->load->view('administrator/laporan_labcer',$data);

 		$paper_size = 'A4';
 		$orientation = 'portrait';
 		$html = $this->output->get_output();
 		$this->dompdf->set_paper($paper_size, $orientation);

 		$this->dompdf->load_html($html);
 		$this->dompdf->render();
 		$this->dompdf->stream("Laporan Inventaris Laboratorium Cerdas.pdf", array('Attachement ' => 0));
 	}

 	public function pdf3()
 	{
 		$this->load->library('dompdf_gen');

 		$data['labcit'] = $this->db->query("SELECT * FROM `tb_barang` WHERE nama_ruangan = 'Lab. Citra'")->result();
 		$this->load->view('administrator/laporan_labcit',$data);

 		$paper_size = 'A4';
 		$orientation = 'portrait';
 		$html = $this->output->get_output();
 		$this->dompdf->set_paper($paper_size, $orientation);

 		$this->dompdf->load_html($html);
 		$this->dompdf->render();
 		$this->dompdf->stream("Laporan Inventaris Laboratorium Citra.pdf", array('Attachement ' => 0));
 	}

 	public function pdf5()
 	{
 		$this->load->library('dompdf_gen');

 		$data['labjar'] = $this->db->query("SELECT * FROM `tb_barang` WHERE nama_ruangan = 'Lab. Jaringan'")->result();
 		$this->load->view('administrator/laporan_labjar',$data);

 		$paper_size = 'A4';
 		$orientation = 'portrait';
 		$html = $this->output->get_output();
 		$this->dompdf->set_paper($paper_size, $orientation);

 		$this->dompdf->load_html($html);
 		$this->dompdf->render();
 		$this->dompdf->stream("Laporan Inventaris Laboratorium Jaringan.pdf", array('Attachement ' => 0));
 	}

 	public function pdf4()
 	{
 		$this->load->library('dompdf_gen');

 		$data['labmul'] = $this->db->query("SELECT * FROM `tb_barang` WHERE nama_ruangan = 'Lab. Multimedia'")->result();
 		$this->load->view('administrator/laporan_labmul',$data);

 		$paper_size = 'A4';
 		$orientation = 'portrait';
 		$html = $this->output->get_output();
 		$this->dompdf->set_paper($paper_size, $orientation);

 		$this->dompdf->load_html($html);
 		$this->dompdf->render();
 		$this->dompdf->stream("Laporan Inventaris Laboratorium Multimedia.pdf", array('Attachement ' => 0));
 	}

 	public function pdf6()
 	{
 		$this->load->library('dompdf_gen');

 		$data['gudang'] = $this->db->query("SELECT * FROM `tb_barang` WHERE nama_ruangan = 'Gudang'")->result();
 		$this->load->view('administrator/laporan_gudang',$data);

 		$paper_size = 'A4';
 		$orientation = 'portrait';
 		$html = $this->output->get_output();
 		$this->dompdf->set_paper($paper_size, $orientation);

 		$this->dompdf->load_html($html);
 		$this->dompdf->render();
 		$this->dompdf->stream("Laporan Inventaris Gudang.pdf", array('Attachement ' => 0));
 	}

	
}

?>