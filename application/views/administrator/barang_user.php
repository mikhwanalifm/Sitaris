<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
  		<i class="fas fa-edit"></i> Daftar Barang
  	</div>
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
                      <th>Nama Barang</th>
                      <th>Jumlah Barang</th>
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
                          <td><?php echo $brg->nama_barang ?></td>
                          <td><?php echo $brg->jumlah ?></td>
                          <td><?php echo $brg->kondisi ?></td>
                          <td><?php echo $brg->nama_ruangan ?></td>
                          <td class="text-center" width="160px">
                          <a href=""><?php echo anchor('administrator/barang/detail/'.$brg->id_barang,'<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>'); ?></a>
                        </td>
                        <?php  endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

</div>