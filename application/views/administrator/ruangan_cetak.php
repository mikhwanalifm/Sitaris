<div class="container-fluid">    
	<div class="alert alert-success" role="alert">
  		<i class="far fa-building"></i> Data Inventaris
  	</div>

  	 <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Inventaris</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                   <tr>
                      <th>NO</th>
                      <th>KODE RUANGAN</th>
                      <th>NAMA RUANGAN</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                 <?php 
                        $no = 1;
                        foreach ($ruangan as $rgn) : ?>
                      <tr>
                        <td width="20px"><?php echo $no ?></td>
                        <td><?php echo $rgn->kode_ruangan ?></td>
                        <td><?php echo $rgn->nama_ruangan ?></td>
                        <td class="text-center" width="160px">
                          <a href=""><?php 
          						  		echo anchor('administrator/ruangan_cetak/pdf'.$no,'<button class="btn btn-sm btn-success mb-3"><i class="fas fa-print fa-sm"></i> Cetak</button>')
          						  	?></a>
                          
                        </td>
                        <?php  $no++ ;endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

</div>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>