<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_laporan extends CI_Model {

  public function view_by_date($date){
        $this->db->where('DATE(tgl_upload)', $date);   // Tambahkan where tanggal nya
        
    return $this->db->get('tb_pinjaman')->result();     // Tampilkan data tb_skripsi2 sesuai tanggal yang diinput oleh user pada filter
  }
    
  public function view_by_month($month, $year){
          
    $data = " SELECT tb_skripsi2.id, tb_member.npm_member, tb_member.nama_member, tb_skripsi2.judul,tb_skripsi2.tgl_upload,tb_skripsi2.tgl_sidang,tb_skripsi2.abstrak,tb_skripsi2.jurnal,tb_skripsi2.laporan,tb_skripsi2.status, 

    (select nama_dosen from tb_dosen where tb_dosen.NIP=tb_skripsi2.pembi1) as pembi1, 
    (select nama_dosen from tb_dosen where tb_dosen.NIP=tb_skripsi2.pembi2) as pembi2, 
    (select nama_dosen from tb_dosen where tb_dosen.NIP=tb_skripsi2.pengu1) as pengu1, 
    (select nama_dosen from tb_dosen where tb_dosen.NIP=tb_skripsi2.pengu2) as pengu2 

    FROM tb_member JOIN tb_skripsi2 on tb_member.npm_member = tb_skripsi2.npm_member 

    WHERE month(tgl_upload)='$month' and year(tgl_upload)='$year' ";

    return $this->db->query($data); 

  }

    
  public function view_by_year($year){
    
      $data = " SELECT tb_skripsi2.id, tb_member.npm_member, tb_member.nama_member, tb_skripsi2.judul,tb_skripsi2.tgl_upload,tb_skripsi2.tgl_sidang,tb_skripsi2.abstrak,tb_skripsi2.jurnal,tb_skripsi2.laporan,tb_skripsi2.status, 

    (select nama_dosen from tb_dosen where tb_dosen.NIP=tb_skripsi2.pembi1) as pembi1, 
    (select nama_dosen from tb_dosen where tb_dosen.NIP=tb_skripsi2.pembi2) as pembi2, 
    (select nama_dosen from tb_dosen where tb_dosen.NIP=tb_skripsi2.pengu1) as pengu1, 
    (select nama_dosen from tb_dosen where tb_dosen.NIP=tb_skripsi2.pengu2) as pengu2 

    FROM tb_member JOIN tb_skripsi2 on tb_member.npm_member = tb_skripsi2.npm_member 

    WHERE year(tgl_upload)='$year' ";

    return $this->db->query($data);

  }

    
  public function view_all(){

    $data = "SELECT tb_skripsi2.id, tb_member.npm_member, tb_member.nama_member, tb_skripsi2.judul,tb_skripsi2.tgl_upload,tb_skripsi2.tgl_sidang,tb_skripsi2.abstrak,tb_skripsi2.jurnal,tb_skripsi2.laporan,tb_skripsi2.status, 
    (select nama_dosen from tb_dosen where tb_dosen.NIP=tb_skripsi2.pembi1) as pembi1, 
    (select nama_dosen from tb_dosen where tb_dosen.NIP=tb_skripsi2.pembi2) as pembi2, 
    (select nama_dosen from tb_dosen where tb_dosen.NIP=tb_skripsi2.pengu1) as pengu1, 
    (select nama_dosen from tb_dosen where tb_dosen.NIP=tb_skripsi2.pengu2) as pengu2 

    FROM tb_member JOIN tb_skripsi2 on tb_member.npm_member = tb_skripsi2.npm_member";

    return $this->db->query($data);                   // Tampilkan semua data tb_skripsi2
  }
    
    public function option_tahun(){
        $this->db->select('YEAR(tgl_upload) AS tahun');     // Ambil Tahun dari field tgl_upload
        $this->db->from('tb_skripsi2');                     // select ke tabel tb_skripsi2
        $this->db->order_by('YEAR(tgl_upload)');            // Urutkan berdasarkan tahun secara Ascending (ASC)
        $this->db->group_by('YEAR(tgl_upload)');            // Group berdasarkan tahun pada field tgl_upload
        
        return $this->db->get()->result();                  // Ambil data pada tabel tb_skripsi2 sesuai kondisi diatas
    }
}