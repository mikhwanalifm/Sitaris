<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
  		<i class="fas fa-university"></i> Form Input Kerjasama
  	</div>

  	<?php echo form_open_multipart('administrator/kerjasama/tambah_kerjasama_aksi') ?>

  	<div class="form-group">
  		<label>NAMA PERUSAHAAN</label>
  		<input type="text" name="nama" class="form-control" maxlength="100"><?php echo form_error('nama','
  		<div class="text-danger small ml-3">','</div>') ?>
  	</div>

  	<div class="form-group">
  		<label>FOTO</label><br>
  		<input type="file" name="photo">
  	</div>

  	<button type="submit" class="btn btn-primary mb-5 mt-3" value="upload">SIMPAN</button>

  	<?php form_close(); ?>
</div>