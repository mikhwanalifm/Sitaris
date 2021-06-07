<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
  		<i class="fas fa-university"></i> Form Ubah Identitas
  	</div>

  	<?php foreach($identitas as $idn) : ?>
  	<form method="post" action ="<?php echo base_url('administrator/identitas/update_aksi')?>">
		<div class="form-group">
			<label>Judul Website</label>
			<input type="hidden" class="form-control" name="id_identitas" value="<?php echo $idn->id_identitas?>">
			<input type="text" class="form-control" name="judul_website" value="<?php echo $idn->judul_website?>">
		</div>
		<div class="form-group">
			<label>Alamat</label>
			<input type="text" class="form-control" name="alamat" value="<?php echo $idn->alamat?>">
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="text" class="form-control" name="email" value="<?php echo $idn->email?>">
		</div>
		<div class="form-group">
			<label>Telepon</label>
			<input type="text" class="form-control" name="telepon" value="<?php echo $idn->telepon?>">
		</div>
		

		<button type="submit" class="btn btn-primary">SIMPAN</button>
	</form>
	<?php endforeach; ?>
</div>