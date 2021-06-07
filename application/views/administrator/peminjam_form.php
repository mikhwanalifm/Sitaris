<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
  		<i class="fas fa-university"></i> Form Input Peminjam
  	</div>

  	<?php echo form_open_multipart('administrator/peminjam/tambah_peminjam_aksi') ?>

  	<div class="form-group">
  		<label>NPM</label>
  		<input type="text" name="npm" class="form-control" onkeyup="this.value = this.value.toUpperCase()" maxlength="9"><?php echo form_error('npm','
  		<div class="text-danger small ml-3">','</div>') ?>
  	</div>

  	<div class="form-group">
  		<label>Nama Lengkap</label>
  		<input type="text" name="nama_lengkap" class="form-control" maxlength="120"><?php echo form_error('nama_lengkap','
  		<div class="text-danger small ml-3">','</div>') ?>
  	</div>

  	<div class="form-group">
  		<label>Alamat</label>
  		<input type="text" name="alamat" class="form-control" maxlength="255"><?php echo form_error('alamat','
  		<div class="text-danger small ml-3">','</div>') ?>
  	</div>

  	<div class="form-group">
  		<label>Email </label>
  		<input type="email" name="email" class="form-control" maxlength="50"><?php echo form_error('email','
  		<div class="text-danger small ml-3">','</div>') ?>
  	</div>

  	<div class="form-group">
  		<label>Telepon </label>
  		<input type="text" name="telepon" class="form-control" maxlength="20"><?php echo form_error('telepon','
  		<div class="text-danger small ml-3">','</div>') ?>
  	</div>

  	<div class="form-group">
  		<label>Tempat Lahir</label>
  		<input type="text" name="tempat_lahir" class="form-control" maxlength="50"><?php echo form_error('tempat_lahir','
  		<div class="text-danger small ml-3">','</div>') ?>
  	</div>

  	<div class="form-group">
  		<label>Tangal Lahir</label>
  		<input type="date" name="tanggal_lahir" class="form-control"><?php echo form_error('tanggal_lahir','
  		<div class="text-danger small ml-3">','</div>') ?>
  	</div>

  	<div class="form-group">
  		<label>Jenis Kelamin</label>
  		<select name="jenis_kelamin" class="form-control">
  			<option value="">-- Pilih Jenis Kelamin --</option>
  		<option>Laki-laki</option>
  		<option>Perempuan</option>
  		</select>
  		
  		<?php echo form_error('jenis_kelamin','
  		<div class="text-danger small ml-3">','</div>') ?>
  	</div>

  	<div class="form-group">
  		<label>Program Studi</label>
        <input type="text" name="nama_prodi" class="form-control" value="TEKNIK INFORMATIKA" readonly><?php echo form_error('nama_prodi','
      <div class="text-danger small ml-3">','</div>') ?>
  	</div>

  	<div class="form-group">
  		<label>Foto</label><br>
  		<input type="file" name="photo">
  	</div>

  	<button type="submit" class="btn btn-primary mb-5 mt-3" value="upload">SIMPAN</button>

  	<?php form_close(); ?>
</div>