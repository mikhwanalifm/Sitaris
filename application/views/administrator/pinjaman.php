<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
  		<i class="fas fa-edit"></i> Pinjaman
  	</div>

  	<?php echo $this->session->flashdata('pesan') ?>
  	<!-- <?php 
  		echo anchor('administrator/pinjaman/tambah_pinjaman','<button class="btn btn-sm btn-primary mb-3"><i class="fa fa-plus fa-sm"></i> TAMBAH</button>')
  	?> -->
    
    <?php //foreach($pinjaman as $pnjm)
      //if($pnjm->status == "ditolak"){
        //echo anchor('administrator/pinjaman/pdf','<button class="btn btn-sm btn-success mb-3" ><i class="fa fa-file fa-sm"></i> EXPORT PDF</button>');
      //}else{
        //echo anchor('administrator/pinjaman/pdf','<button class="btn btn-sm btn-success mb-3" ><i class="fa fa-file fa-sm"></i> EXPORT PDF</button>');
      //}
    ?>



  	<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Pinjaman</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                   <tr>
                      <th>NO</th>
                      <th>Nama Mahasiswa</th>
                      <th>NPM</th>
                      <th>Barang</th>
                      <th>Jumlah</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                      $no = 1;
                      foreach ($pinjaman as $pin) : ?>
                      <tr>
                          <td width="20px"><?php echo $no++ ?></td>
                          <td><?php echo $pin->nama_lengkap ?></td>
                          <td><?php echo $pin->npm ?></td>
                          <td><?php echo $pin->nama_barang?></td>
                          <td><?php echo $pin->jumlah1 ?></td>
                          <td>
                            <h5 class="card-title badge <?php if($pin->status=="Diterima"){ ?> badge-success 
                            <?php } elseif($pin->status=="Ditolak") { ?>
                            badge-danger ?> <?php }else {  ?> badge-secondary <?php }?>"><?php echo $pin->status ?></h5>
                          </td>
                          <td class="text-center" width="160px">
                          <a href="" ><?php echo anchor('administrator/pinjaman/detail/'.$pin->id_pinjaman,'<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>'); ?></a>
                          <a href=""><?php echo anchor('administrator/pinjaman/status_acc/'.$pin->id_pinjaman,'<div class="btn btn-sm btn-success"><i class="far fa-check-circle"></i></div>'); ?></a>
                          <a href="<?php echo site_url(); ?>/administrator/pinjaman/status_dc/<?php echo $pin->id_pinjaman; ?>" onclick="return confirm('Anda Yakin?');" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></a>
                           <a href=""><?php echo anchor('administrator/kembali/status_done/'.$pin->id_pinjaman,'<div class="btn btn-sm btn-success"><i class="fas fa-infinity"></i></div>'); ?></a>
                        </td>
                        <?php  endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

</div>