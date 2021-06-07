<?php
	class Laporan extends CI_Controller
	{
		public function index()
		{
			$this->load->library('mypdf');
			$this->mypdf->generate('Laporan/dompdf');
		}
	}
?>