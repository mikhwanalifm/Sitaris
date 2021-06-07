<div class="container-fluid">
<div class="alert alert-success" role="alert">
      <i class="fas fa-edit"></i> Identitas Website
    </div>

 <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"> Identitas Website</h6>
            </div>
            <?php echo $this->session->flashdata('pesan') ?>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                   <tr>
                      <th width="20px">NO</th>
                      <th>JUDUL WEBSITE</th>
                      <th>ALAMAT</th>
                      <th>EMAIL</th>
                      <th>TELEPON</th>
                      <th>AKSI</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $no=1;
                        foreach($identitas as $idn) : ?>

                          <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $idn->judul_website ?></td>
                            <td><?php echo $idn->alamat ?></td>
                            <td><?php echo $idn->email ?></td>
                            <td><?php echo $idn->telepon ?></td>
                            <td class="text-center" width="80px">
                                            <a href=""><?php echo anchor('administrator/identitas/update/'.$idn->id_identitas,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'); ?></a>
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