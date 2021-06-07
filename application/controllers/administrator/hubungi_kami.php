<?php 

class Hubungi_kami extends CI_Controller{

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
		$data['hubungi'] = $this->hubungi_model->tampil_data('tb_hubungi')->result();
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('administrator/hubungi_kami',$data);
		$this->load->view('template_administrator/footer');
	}

	public function kirim_email($id)
	{
		$where = array('id_hubungi' => $id);
		$data['hubungi'] = $this->hubungi_model->kirim_data($where,'tb_hubungi')->result();
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('administrator/form_kirim_email',$data);
		$this->load->view('template_administrator/footer');
	}

	public function kirim_email_aksi()
	{
		$to_email = $this->input->post('email');
		$subject = $this->input->post('subject');
		$message = $this->input->post('pesan');


		$config = [
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'protocol' => 'smtp',
			'smtp_host' =>'ssl://smtp.gmail.com',
			'smtp_user' => 'infolabti0@gmail.com',
			'smtp_pass' => 'Ikhwan14',
			'smtp_port' => 465,
			'crlf' => "\r\n",
			'newline' => "\r\n",
		];

		$this->load->library('email' ,$config);

		$this->email->from('Laboratorium Informatika Universitas Bengkulu');

		$this->email->to($to_email);

		$this->email->subject($subject);

		$this->email->message($message);

		if($this->email->send())
		{
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  						Pesan Terkirim! 
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  						</button>
						</div>');
 			redirect('administrator/hubungi_kami');
		}else{
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  						Pesan Gagal Terkirim! 
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  						</button>
						</div>');
 			redirect('administrator/hubungi_kami');
			
		}
	}

	public function delete($id)
	{
		$where = array('id_hubungi' => $id,);
		$this->hubungi_model->hapus_data($where,'tb_hubungi');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  						Pesan Berhasil Dihapus! 
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  						</button>
						</div>');
		redirect('administrator/hubungi_kami');
	}
}

?>