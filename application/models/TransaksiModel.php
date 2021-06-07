<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class TransaksiModel extends CI_Model {
  public function view_by_date($date){
        $this->db->where('DATE(tanggal_kembali)', $date); // Tambahkan where tanggal nya
        
    return $this->db->get('tb_pinjaman1')->result();// Tampilkan data tb_pinjaman sesuai tanggal yang diinput oleh user pada filter
  }
    
  public function view_by_month($month, $year){

    /*$data = "SELECT tb_pinjaman1.id_pinjaman, tb_pinjaman1.tanggal_kembali, tb_barang.kode_barang, tb_barang.nama_barang, tb_pinjaman1.nama_lengkap, tb_pinjaman1.npm, tb_pinjaman1.jumlah1, tb_pinjaman1.status FROM tb_pinjaman1 LEFT JOIN tb_barang on tb_pinjaman1.id_barang = tb_barang.id_barang WHERE status='Selesai' AND month(tanggal_kembali)='$month' AND year(tanggal_kembali)='$year'";
     return $this->db->query($data);*/

     return $this->db->query("SELECT tb_pinjaman1.id_pinjaman, tb_pinjaman1.tanggal_kembali, tb_barang.kode_barang, tb_barang.nama_barang, tb_pinjaman1.nama_lengkap, tb_pinjaman1.npm, tb_pinjaman1.jumlah1, tb_pinjaman1.status FROM tb_pinjaman1 LEFT JOIN tb_barang on tb_pinjaman1.id_barang = tb_barang.id_barang WHERE status='Selesai' AND month(tanggal_kembali)='$month' AND year(tanggal_kembali)='$year'")->result();


  }
    
  public function view_by_year($year){
        
     return $this->db->query("SELECT tb_pinjaman1.id_pinjaman, tb_pinjaman1.tanggal_kembali, tb_barang.kode_barang, tb_barang.nama_barang, tb_pinjaman1.nama_lengkap, tb_pinjaman1.npm, tb_pinjaman1.jumlah1, tb_pinjaman1.status FROM tb_pinjaman1 LEFT JOIN tb_barang on tb_pinjaman1.id_barang = tb_barang.id_barang WHERE status='Selesai' AND year(tanggal_kembali)='$year'")->result();
  }
    
  public function view_all(){
    return  $this->db->query("SELECT * FROM tb_pinjaman1 LEFT JOIN tb_barang ON tb_pinjaman1.id_barang = tb_barang.id_barang WHERE status='Selesai'")->result(); // Tampilkan semua data tb_pinjaman

     /*$data = ("SELECT tb_pinjaman1.id_pinjaman, tb_barang.kode_barang, tb_barang.nama_barang, tb_pinjaman1.nama_lengkap, tb_pinjaman1.npm, tb_pinjaman1.jumlah1, tb_pinjaman1.status FROM tb_pinjaman1 LEFT JOIN tb_barang on tb_pinjaman1.id_barang = tb_barang.id_barang WHERE status='Selesai'");
     return $this->db->query($data);*/

    
  }
    
    public function option_tahun(){
        $this->db->select('YEAR(tanggal_kembali) AS tahun'); // Ambil Tahun dari field tanggal_pinjam
        $this->db->from('tb_pinjaman1'); // select ke tabel tb_pinjaman
        $this->db->order_by('YEAR(tanggal_kembali)'); // Urutkan berdasarkan tahun secara Ascending (ASC)
        $this->db->group_by('YEAR(tanggal_kembali)'); // Group berdasarkan tahun pada field tanggal_pinjam
        
        return $this->db->get()->result(); // Ambil data pada tabel tb_pinjaman sesuai kondisi diatas
    }
}