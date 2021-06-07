<?php
Class Laporanpdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'SISTEM INFORMASI INVENTARIS PERUMAHAN',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'DAFTAR PENJUALAN PERUMAHAN',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(15,6,'No',1,0);
        $pdf->Cell(30,6,'NAMA PEMBELI',1,0);
        $pdf->Cell(15,6,'ID ',1,0);
        $pdf->SetFont('Arial','',10);
        $query_penjualan = $this->db->get('tb_ruangan')->result();
        foreach ($query_penjualan as $row){
            $pdf->Cell(15,6,$row->id,1,0);
            $pdf->Cell(30,6,$row->kode_ruangan,1,0);
            $pdf->Cell(15,6,$row->nama_ruangan,1,0);
        }
        $pdf->Output();
    }
}