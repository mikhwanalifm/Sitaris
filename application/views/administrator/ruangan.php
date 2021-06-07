<div class="container-fluid">    
	<div class="alert alert-success" role="alert">
  		<i class="far fa-building"></i> Ruangan
  	</div>

  	<?php echo $this->session->flashdata('pesan') ?>
  	<?php 
  		echo anchor('administrator/ruangan/input','<button class="btn btn-sm btn-primary mb-3"><i class="fa fa-plus fa-sm"></i> TAMBAH</button>')
  	?>

  	 <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Ruangan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                   <tr>
                      <th >NO</th>
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
                        <td width="20px"><?php echo $no++ ?></td>
                        <td><?php echo $rgn->kode_ruangan ?></td>
                        <td><?php echo $rgn->nama_ruangan ?></td>
                          <td class="text-center" width="160px">
                          <a href=""><?php echo anchor('administrator/ruangan/update/'.$rgn->id_ruangan,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'); ?></a>
                          <a href="<?php echo site_url(); ?>/administrator/ruangan/delete/<?php echo $rgn->id_ruangan; ?>" onclick="return confirm('Anda Yakin?');" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                           
                          
                        </td>
                        <?php  endforeach; ?>
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

<script type="text/javascript">
  h5.modal-title{
margin: auto;
}
</script>
<!-- ============ MODAL HAPUS BARANG =============== -->
<?php foreach($ruangan as $rgn) : ?>
        <div class="modal fade" id="modal_hapus<?php echo $rgn->id_ruangan;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h5 class="modal-title" id="exampleModalLabel">Hapus Ruangan</h5>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'/administrator/ruangan/delete/<?php echo $rgn->id_ruangan;'?>">
                <div class="modal-body">
                    <p>Anda yakin mau menghapus <b><?php echo $rgn->nama_ruangan;?></b></p>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id_ruangan" value="<?php echo $rgn->id_ruangan;?>">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-danger" type="submit">Hapus</button>
                </div>
            </form>
            </div>
            </div>
        </div>
    <?php endforeach;?>
    <!--END MODAL HAPUS BARANG-->