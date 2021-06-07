<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
  		<i class="fas fa-edit"></i> Hubungi Kami
  	</div>

  	<?php echo $this->session->flashdata('pesan') ?>

 <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"> Hubungi Kami</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                   <tr>
                      <th width="20px">NO</th>
                      <th>NAMA</th>
                      <th>EMAIL</th>
                      <th>PESAN</th>
                      <th>AKSI</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                      $no = 1;
                      foreach ($hubungi as $hub) : ?>
                      <tr>
                          <td width="20px"><?php echo $no++ ?></td>
                          <td><?php echo $hub->nama ?></td>
                          <td><?php echo $hub->email ?></td>
                          <td><?php echo $hub->pesan ?></td>
                          <td class="text-center" width="160px"> 
                          <a href=""><?php echo anchor('administrator/hubungi_kami/kirim_email/'.$hub->id_hubungi,'<div class="btn btn-sm btn-primary"><i class="fas fa-comment-dots"></i></div>'); ?></a>
                          <a href="<?php echo site_url(); ?>/administrator/hubungi_kami/delete/<?php echo $hub->id_hubungi; ?>" onclick="return confirm('Anda Yakin?');" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                        <?php  endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

</div>