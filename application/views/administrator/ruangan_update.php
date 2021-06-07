<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
  		<i class="far fa-building"></i> Form Update Ruangan
  	</div>

  	<?php foreach ($ruangan as $rgn) : ?>
  		<form method="post" action="<?php echo base_url('administrator/ruangan/update_aksi') ?>">

  			<div class="form-group">
  				<label>Kode Ruangan</label>
  				<input type="hidden" name="id_ruangan" value="<?php echo $rgn->id_ruangan ?>">
  				<input type="text" name="kode_ruangan" class="form-control" value="<?php echo $rgn->kode_ruangan ?>" maxlength="5" readonly>
  			</div>

  			<div class="form-group">
  				<label>Nama Ruangan</label>
  				<input type="text" name="nama_ruangan" class="form-control" value="<?php echo $rgn->nama_ruangan ?>" maxlength="25">
  			</div>
  			
  			<button type="submit" class="btn btn-primary">SIMPAN</button>
  		</form>
  	<?php endforeach; ?>

</div>