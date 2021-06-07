<div class="container-fluid">
  
  <div class="alert alert-success" role="alert">
      <i class="fas fa-edit"></i> Kerjasama
    </div>

    <?php echo $this->session->flashdata('pesan') ?>
    <?php 
      echo anchor('administrator/kerjasama/tambah_kerjasama','<button class="btn btn-sm btn-primary mb-3"><i class="fa fa-plus fa-sm"></i> TAMBAH</button>')
    ?>

 <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"> Kerjasama</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                   <tr>
                      <th width="20px">NO</th>
                      <th>NAMA PERUSAHAAN</th>
                      <th>AKSI</th>
                    </tr>
                  </thead>
                  <tbody>
                 <?php $no=1;
                    foreach($kerjasama as $kjs) : ?>

                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $kjs->nama ?></td>
                        <td class="text-center" width="160px">
                          <a href=""><?php echo anchor('administrator/kerjasama/detail/'.$kjs->id_kerjasama,'<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>'); ?></a>
                          <a href=""><?php echo anchor('administrator/kerjasama/update/'.$kjs->id_kerjasama,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'); ?></a>
                          <a href="<?php echo site_url(); ?>/administrator/kerjasama/delete/<?php echo $kjs->id_kerjasama; ?>" onclick="return confirm('Anda Yakin?');" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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