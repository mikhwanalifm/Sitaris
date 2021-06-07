<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
  		<i class="fas fa-university"></i> Form Edit Peminjam
  	</div>

    <?php foreach ($peminjam as $pnjm) : ?>
  	<?php echo form_open_multipart('administrator/peminjam/update_peminjam_aksi') ?>

  	<div class="form-group">
  		<label>NPM</label>
      <input type="hidden" name="id_peminjam" class="form-control" value="<?php echo $pnjm->id_peminjam ?>" >
  		<input type="text" name="npm" class="form-control" value="<?php echo $pnjm->npm ?>" onkeyup="this.value = this.value.toUpperCase()"><?php echo form_error('npm','
  		<div class="text-danger small ml-3">','</div>') ?>
  	</div>

  	<div class="form-group">
  		<label>Nama Lengkap</label>
  		<input type="text" name="nama_lengkap" class="form-control" value="<?php echo $pnjm->nama_lengkap ?>"><?php echo form_error('nama_lengkap','
  		<div class="text-danger small ml-3">','</div>') ?>
  	</div>

  	<div class="form-group">
  		<label>Alamat</label>
  		<input type="text" name="alamat" class="form-control" value="<?php echo $pnjm->alamat ?>"><?php echo form_error('alamat','
  		<div class="text-danger small ml-3">','</div>') ?>
  	</div>

  	<div class="form-group">
  		<label>Email</label>
  		<input type="text" name="email" class="form-control" value="<?php echo $pnjm->email ?>"><?php echo form_error('email','
  		<div class="text-danger small ml-3">','</div>') ?>
  	</div>

  	<div class="form-group">
  		<label>Telepon</label>
  		<input type="text" name="telepon" class="form-control" value="<?php echo $pnjm->telepon ?>"><?php echo form_error('telepon','
  		<div class="text-danger small ml-3">','</div>') ?>
  	</div>

  	<div class="form-group">
  		<label>Tempat Lahir</label>
  		<input type="text" name="tempat_lahir" class="form-control" value="<?php echo $pnjm->tempat_lahir ?>"><?php echo form_error('tempat_lahir','
  		<div class="text-danger small ml-3">','</div>') ?>
  	</div>

  	<div class="form-group">
  		<label>Tanggal Lahir</label>
  		<input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $pnjm->tanggal_lahir ?>"><?php echo form_error('tanggal_lahir','
  		<div class="text-danger small ml-3">','</div>') ?>
  	</div>

  	<div class="form-group">
  		<label>Jenis Kelamin</label>
  		<select name="jenis_kelamin" class="form-control" value="<?php echo $pnjm->jenis_kelamin ?>">
  		<option>Laki-laki</option>
  		<option>Perempuan</option>
  		</select>
  		
  		<?php echo form_error('jenis_kelamin','
  		<div class="text-danger small ml-3">','</div>') ?>
  	</div>

  	<div class="form-group">
  		<label>Program Studi</label>
      <input type="text" name="nama_prodi" class="form-control" value="<?php echo $pnjm->nama_prodi ?>" readonly>
  		<?php echo form_error('nama_prodi','
  				<div class="text-danger small ml-3">','</div>') ?>
  	</div>

  	<div class="form-group">
  		<label>Foto</label><br>
      <?php foreach($detail as $dt) :?>
        <img src="<?php echo base_url().'assets/uploads/'.$pnjm->photo ?>" style="width: 30%">
      <?php endforeach; ?> <br><br>
  		<input type="file" name="userfile" value="<?php echo $pnjm->photo ?>">
  	</div>

  	<button type="submit" class="btn btn-primary mb-5 mt-3">SIMPAN</button>

  	<?php form_close(); ?>
  <?php endforeach; ?>
</div>