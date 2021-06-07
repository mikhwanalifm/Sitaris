<div class="container-fluid">
  <div class="alert alert-success" role="alert">
  <i class="fas fa-tachometer-alt"></i> Dashboard
  </div>
  <?php echo $this->session->flashdata('pesan') ?>
  <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Selamat Datang!</h4>
    <p>Selamat Datang <strong><?php echo $nama_lengkap; ?></strong> di Sistem Informasi Inventaris Laboratorium Informatika Fakultas Teknik Universitas Bengkulu<br> Anda Login sebagai <strong><?php echo $level; ?></strong> </p>
    <hr>
  </div>
<!-- Content Row -->

          <!-- Content Row -->
  <!-- Button trigger modal -->

<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalScrollable">
  Panduan Penggunaan
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle"><b>Panduan Penggunaan Sistem</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p style="font-size: 18px; line-height:1.5em;" align="justify";>1. Silahkan Login Terlebih Dahulu<br>2. Silahkan Ke Menu Laboratorium Periksa Daftar Barang<br>3. Kemudian Silahkan Isi Form di Menu Form Pinjaman<br>4. Silahkan Isi Sesuai Kebutuhan dan Upload File Permohonan<br>5. Setelah Berhasil Silahkan Tunggu Maximal 1 x 24 Jam <br>6. Setelah Diterima Silahkan Print Formulir Peminjaman<br>7. Setelah Formulir Telah di Tanda Tangan Ka. Prodi dan Ka.Lab<br>8. Silahkan Menemui Laboran di Laboratorium Untuk Pengambilan Barang<br>9. Untuk Pengembalian Silahkan Langsung Menemui Laboran<br>10. Segala Sesuatu Yang Perlu Ditanyakan Silahkan Menghubungi Laboran Melalui Website atau Secara Langsung ke Laboratorium</p><br>
      <p style="font-size: 18px; line-height:1.5em;" align="justify";><b>Selesai</b></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</div>

