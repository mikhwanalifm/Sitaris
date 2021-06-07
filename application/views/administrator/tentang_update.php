<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
  		<i class="fas fa-university"></i> Form Ubah Tentang
  	</div>

  	<?php foreach($tentang as $ttg) : ?>
  	<form method="post" action ="<?php echo base_url('administrator/tentang_lab/update_aksi')?>">
		<div class="form-group">
			<label>Sejarah</label>
			<input type="hidden" class="form-control" name="id" value="<?php echo $ttg->id?>">
			<input type="text" class="form-control" name="sejarah" value="<?php echo $ttg->sejarah?>">
		</div>
		<div class="form-group">
			<label>Visi</label>
			<input type="text" class="form-control" name="visi" value="<?php echo $ttg->visi?>">
		</div>
		<div class="form-group">
			<label>Misi</label>
			<input type="text" class="form-control" name="misi" value="<?php echo $ttg->misi?>">
		</div>
		

		<button type="submit" class="btn btn-primary">SIMPAN</button>
	</form>
	<?php endforeach; ?>
</div>