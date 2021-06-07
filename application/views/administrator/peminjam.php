<div class="container-fluid">
	
<div class="alert alert-success" role="alert">
  		<i class="fas fa-edit"></i> Peminjam
  	</div>

  	<?php echo $this->session->flashdata('pesan') ?>
  	<?php 
  		echo anchor('administrator/peminjam/tambah_peminjam','<button class="btn btn-sm btn-primary mb-3"><i class="fa fa-plus fa-sm"></i> TAMBAH</button>')
  	?>

 <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data peminjam</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                   <tr>
                      <th>NO</th>
                      <th>Nama Mahasiswa</th>
                      <th>NPM</th>
                      <th>Alamat</th>
                      <th>Email</th>
                      <th>Telepon</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                      $no = 1;
                      foreach ($peminjam as $pnjm) : ?>
                      <tr>
                          <td width="20px"><?php echo $no++ ?></td>
                          <td><?php echo $pnjm->nama_lengkap ?></td>
                          <td><?php echo $pnjm->npm ?></td>
                          <td><?php echo $pnjm->alamat ?></td>
                          <td><?php echo $pnjm->email ?></td>
                          <td><?php echo $pnjm->telepon ?></td>
                          <td class="text-center" width="160px">
                          <a href=""><?php echo anchor('administrator/peminjam/detail/'.$pnjm->id_peminjam,'<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>'); ?></a>
                          <a href=""><?php echo anchor('administrator/peminjam/update/'.$pnjm->id_peminjam,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'); ?></a>
                          <a href="<?php echo site_url(); ?>/administrator/peminjam/delete/<?php echo $pnjm->id_peminjam; ?>" onclick="return confirm('Anda Yakin?');" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                        <?php  endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>


</div>