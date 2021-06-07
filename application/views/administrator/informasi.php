<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
  		<i class="fas fa-edit"></i> Informasi
  	</div>

  	<?php echo $this->session->flashdata('pesan') ?>
  	<?php 
  		echo anchor('administrator/informasi/tambah_informasi','<button class="btn btn-sm btn-primary mb-3"><i class="fa fa-plus fa-sm"></i> TAMBAH</button>')
  	?>
 <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Informasi</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                   <tr>
                      <th>NO</th>
                      <th>IKON</th>
                      <th>JUDUL INFORMASI</th>
                      <th>ISI INFORMASI</th>
                      <th>AKSI</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                      $no = 1;
                      foreach ($informasi as $info) : ?>
                      <tr>
                          <td width="20px"><?php echo $no++ ?></td>
                          <td><?php echo $info->icon ?></td>
                          <td><?php echo $info->judul_informasi ?></td>
                          <td><?php echo $info->isi_informasi ?></td>
                          <td class="text-center" width="160px"> 
                          <a href=""><?php echo anchor('administrator/informasi/update/'.$info->id_informasi,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'); ?></a>
                          <a href="<?php echo site_url(); ?>/administrator/informasi/delete/<?php echo $info->id_informasi; ?>" onclick="return confirm('Anda Yakin?');" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                        <?php  endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

</div>