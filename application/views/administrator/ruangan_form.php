<div class="container-fluid">

	<div class="alert alert-success" role="alert">
  		<i class="far fa-building"></i> Form Input Ruangan
  	</div>

	<form method="post" action ="<?php echo base_url('administrator/ruangan/input_aksi')?>">
		<div class="form-group">
			<label>Kode Ruangan</label>
			<input type="text" class="form-control" name="kode_ruangan" placeholder="Masukan Kode Ruangan" maxlength="5" onkeyup="this.value = this.value.toUpperCase()" readonly value="<?php echo $id_ruangan?>">
			<?php echo form_error('kode_ruangan','<div class="text-danger small ml-3">')?>
		</div>
		<div class="form-group">
			<label>Nama Ruangan</label>
			<input type="text" class="form-control" name="nama_ruangan" placeholder="Masukan Nama Ruangan" maxlength="25">
			<?php echo form_error('nama_ruangan','<div class="text-danger small ml-3">')?>
		</div>

		<button type="submit" class="btn btn-primary">SIMPAN</button>
	</form>
</div>