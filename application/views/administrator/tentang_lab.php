<div class="container-fluid">
<div class="alert alert-success" role="alert">
      <i class="fas fa-edit"></i> Hubungi Kami
    </div>

<div class="card shadow mb-4">

            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"> Tentang Laboratorium</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                   <tr>
                      <th width="20px">NO</th>
                      <th>SEJARAH</th>
                      <th>VISI</th>
                      <th>MISI</th>
                      <th>AKSI</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $no=1;
                      foreach($tentang as $ttg) : ?>

                        <tr>
                          <td><?php echo $no++ ?></td>
                          <td><?php echo $ttg->sejarah ?></td>
                          <td><?php echo $ttg->visi ?></td>
                          <td><?php echo $ttg->misi ?></td>
                          <td class="text-center" width="80px">
                                          <a href=""><?php echo anchor('administrator/tentang_lab/update/'.$ttg->id,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'); ?></a>
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