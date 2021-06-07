<div class="container-fluid">
  
  <div class="alert alert-success" role="alert">
      <i class="fas fa-edit"></i> Pengembalian
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Pengembalian</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                   <tr>
                      <th>NO</th>
                      <th>Nama Mahasiswa</th>
                      <th>Barang</th>
                      <th>Jumlah</th>
                      <th>Tanggal Pengembalian</th>
                      <th>Lama Pinjam (Hari)</th>
                      <th>Denda</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                      $no = 1;
                      foreach ($kembali as $pin) : ?>
                        <?php 
                          if ($pin->tanggal_kembali=="0000-00-00") {  
                            $date1     = date_create($pin->tanggal_pinjam);
                            $date2   = date_create(date('Y-m-d'));
                            $cek_telat = date_diff($date1,$date2); 
                            $telat   = $cek_telat->format("%a");
                          }else{
                            $date1     = date_create($pin->tanggal_pinjam);
                            $date2   = date_create($pin->tanggal_kembali);
                            $cek_telat = date_diff($date1,$date2); 
                            $telat   = $cek_telat->format("%a");

                          }?>
                      <tr>
                          <td width="20px"><?php echo $no++ ?></td>
                          <td><?php echo $pin->nama_lengkap ?></td>
                          <td><?php echo $pin->nama_barang ?></td>
                          <td><?php echo $pin->jumlah1 ?></td>
                          <td><?php echo $pin->tanggal_kembali ?></td>
                          <td><?php if($telat>7){echo $telat." Hari (".($telat-7)." Hari)";}else{echo $telat." Hari(0)";}?></td>
                          <td><?php if($telat>7){echo "RP.".($telat-7)*500;}else{echo "-";} ?></td>
                          <td>
                            <h5 class="card-title badge <?php if($pin->status=="Selesai"){ ?> badge-success 
                            <?php } elseif($pin->status=="Diterima") { ?>
                            badge-info ?> <?php }else {  ?> badge-secondary <?php }?>"><?php echo $pin->status ?></h5>
                          </td>
                          <td class="text-center" width="160px">
                          <a href="" ><?php echo anchor('administrator/kembali/detail/'.$pin->id_pinjaman,'<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>'); ?></a>
                          <!--<a href=""><?php echo anchor('administrator/kembali/status_done/'.$pin->id_pinjaman,'<div class="btn btn-sm btn-success"><i class="fas fa-infinity"></i></div>'); ?></a> -->
                        </td>
                        <?php  endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

</div>