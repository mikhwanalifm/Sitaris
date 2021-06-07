<div class="container-fluid">
  <div class="alert alert-success" role="alert">
  <i class="fas fa-tachometer-alt"></i> Dashboard
  </div>

  <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Selamat Datang!</h4>
    <p>Selamat Datang <strong><?php echo $nama_lengkap; ?></strong> di Sistem Informasi Inventaris Laboratorium Informatika Fakultas Teknik Universitas Bengkulu<br> Anda Login sebagai <strong><?php echo $level; ?></strong> </p>
    <hr>
      <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
      <i class="fas fa-cogs"></i> Control Panel
      </button>
  </div>
<!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Ruangan</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $hitung_ruangan?></div>
                    </div>
                    <div class="col-auto">
                      <i class="far fa-building fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Barang</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $hitung_barang?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-database fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Pinjaman</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $hitung_pinjaman?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Pengguna</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $hitung_user?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-receipt fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->
  <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-cogs"></i> Control Panel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-3 text-info text-center">
            <a href="<?php echo base_url('administrator/user') ?>"><p class="nav-link small text-info">PENGGUNA</p></a>
            <i class="fas fa-3x fa-user-graduate"></i>
          </div>

          <div class="col-md-3 text-info text-center">
            <a href="<?php echo base_url('administrator/ruangan') ?>"><p class="nav-link small text-info">DATA RUANGAN</p></a>
            <i class="far fa-3x fa-building"></i>
          </div>

          <div class="col-md-3 text-info text-center">
            <a href="<?php echo base_url('administrator/barang') ?>"><p class="nav-link small text-info">DATA BARANG</p></a>
            <i class="fas fa-3x fa-edit"></i>
          </div>

          <div class="col-md-3 text-info text-center">
            <a href="<?php echo base_url('administrator/kembali') ?>"><p class="nav-link small text-info">DATA PENGEMBALIAN</p></a>
            <i class="fas fa-3x fa-list-ul"></i>
          </div>
      </div><hr>

      <div class="row">
          <div class="col-md-3 text-info text-center">
            <a href="<?php echo base_url() ?>"><p class="nav-link small text-info">PESAN MASUK</p></a>
            <i class="fas fa-3x fa-calculator"></i>
          </div>

          <!-- <div class="col-md-3 text-info text-center">
            <a href="<?php echo base_url('administrator/peminjam') ?>"><p class="nav-link small text-info">DATA PEMINJAM</p></a>
            <i class="fas fa-3x fa-clipboard-list"></i>
          </div> -->

          <div class="col-md-3 text-info text-center">
            <a href="<?php echo base_url('administrator/pinjaman') ?>"><p class="nav-link small text-info">DATA PINJAMAN</p></a>
            <i class="fas fa-3x fa-ellipsis-v"></i>
          </div>

          <div class="col-md-3 text-info text-center">
            <a href="<?php echo base_url('transaksi') ?>"><p class="nav-link small text-info">LAPORAN</p></a>
            <i class="fas fa-3x fa-print"></i>
          </div>
      </div><hr>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</div>