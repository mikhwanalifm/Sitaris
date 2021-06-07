<title>Ini Barang</title>
<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
  		<i class="fas fa-edit"></i> Barang
  	</div>

  	<?php echo $this->session->flashdata('pesan') ?>
  	<?php 
  		echo anchor('administrator/barang/tambah_barang','<button class="btn btn-sm btn-primary mb-3"><i class="fa fa-plus fa-sm"></i> TAMBAH</button>')
  	?>
 <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                   <tr>
                      <th>NO</th>
                      <th>Kode Barang</th>
                      <th>Nama Barang</th>
                      <th>Merek</th>
                      <th>Jumlah Satuan</th>
                      <th>Asal Barang</th>
                      <th>Kondisi</th>
                      <th>Nama Ruangan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                      $no = 1;
                      foreach ($barang as $brg) : ?>
                      <tr>
                          <td width="20px"><?php echo $no++ ?></td>
                          <td><?php echo $brg->kode_barang ?></td>
                          <td><?php echo $brg->nama_barang ?></td>
                          <td><?php echo $brg->merek ?></td>
                          <td><?php echo $brg->jumlah."(".$brg->satuan.")" ?></td>
                          <td><?php echo $brg->asal_barang ?></td>
                          <td><?php echo $brg->kondisi ?></td>
                          <td><?php echo $brg->nama_ruangan ?></td>
                          <td class="text-center" width="160px">
                          <a href=""><?php echo anchor('administrator/barang/detail/'.$brg->id_barang,'<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>'); ?></a>
                          <a href=""><?php echo anchor('administrator/barang/update/'.$brg->id_barang,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'); ?></a>
                          <a href="<?php echo site_url(); ?>/administrator/barang/delete/<?php echo $brg->id_barang; ?>" onclick="return confirm('Anda Yakin?');" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                        <?php  endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

</div>