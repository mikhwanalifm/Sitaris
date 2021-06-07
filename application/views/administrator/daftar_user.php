<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
  		<i class="fas fa-university"></i> Daftar User
  	</div>

  	<?php echo $this->session->flashdata('pesan') ?>
  	<?php 
  		echo anchor('administrator/user/tambah_users','<button class="btn btn-sm btn-primary mb-3"><i class="fa fa-plus fa-sm"></i> TAMBAH</button>')
  	?>

  	<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"> Daftar Pengguna</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                   <tr>
                      <th width="20px">NO</th>
                          <th>USERNAME</th>
                          <th>EMAIL</th>
                          <th>LEVEL</th>
                          <th>BLOKIR</th>
                          <th>AKSI</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $no=1;
                        foreach($users as $user) : ?>

                          <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $user->username ?></td>
                            <td><?php echo $user->email ?></td>
                            <td><?php echo $user->level ?></td>
                            <td><?php echo $user->blokir ?></td>
                            <td class="text-center" width="160px">
                                            <a href=""><?php echo anchor('administrator/user/update/'.$user->id_user,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'); ?></a>
                                            <a href="<?php echo site_url(); ?>/administrator/user/hapus/<?php echo $user->id_user; ?>" onclick="return confirm('Anda Yakin?');" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                          </td>
                          </tr>
                        <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

</div>