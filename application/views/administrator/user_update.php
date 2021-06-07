<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
  		<i class="fas fa-university"></i> Form Ubah User
  	</div>

  	<?php foreach($users as $user) : ?>
  	<form method="post" action ="<?php echo base_url('administrator/user/update_aksi')?>">
  		<div class="form-group">
			<label>Nama Lengkap</label>
			<input type="text" class="form-control" name="nama_lengkap" placeholder="Masukan Nama Lengkap" value="<?php echo $user->nama_lengkap ?>" maxlength="120">
			<?php echo form_error('nama_lengkap','<div class="text-danger small ml-3">')?>
		</div>
		<div class="form-group">
			<label>Username</label>
			<input type="hidden" class="form-control" name="id_user" placeholder="Masukan Username" value="<?php echo $user->id_user?>">
			<input type="text" class="form-control" name="username" placeholder="Masukan Username" value="<?php echo $user->username?>" maxlength="50">
			<?php echo form_error('username','<div class="text-danger small ml-3">')?>
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="text" class="form-control" name="password" placeholder="Masukan Password" value="<?php echo $user->password ?>"  maxlength="50">
			<?php echo form_error('password','<div class="text-danger small ml-3">')?>
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" class="form-control" name="email" placeholder="Masukan Email" value="<?php echo $user->email?>"  maxlength="50">
			<?php echo form_error('email','<div class="text-danger small ml-3">')?>
		</div>
		<div class="form-group">
			<label>Nomor Handphone</label>
			<input type="text" class="form-control" name="no_hp" placeholder="Masukan Nomor Handphone" value="<?php echo $user->no_hp?>"  maxlength="50">
			<?php echo form_error('no_hp','<div class="text-danger small ml-3">')?>
		</div>
		<div class="form-group">
			<label>Level</label>
			<select name="level" class="form-control">
				<?php 
					if($level=='admin'){
				?>
				<option value="admin" selected>Administrator</option>
				<option value="mahasiswa" >Mahasiswa</option>
				<?php 
				}

				elseif($level=='mahasiswa'){
				?>
				<option value="admin" >Administrator</option>
				<option value="mahasiswa" selected >Mahasiswa</option>

			<?php 
				} else {

			?>
				<option value="admin" >Administrator</option>
				<option value="mahasiswa" selected >Mahasiswa</option>
			</select>
		<?php } ?>
			<?php echo form_error('level','<div class="text-danger small ml-3">')?>
		</div>

		<div class="form-group">
			<label>Blokir</label>
			<select name="blokir" class="form-control">
				<?php 
					if($blokir=='Y'){
				?>
				<option value="Y" selected>Ya</option>
				<option value="N" >Tidak</option>
				<?php 
				}

				elseif($blokir=='N'){
				?>
				<option value="Y" >Ya</option>
				<option value="N" selected >Tidak</option>

			<?php 
				} else {

			?>
				<option value="Y" >Ya</option>
				<option value="N" selected >Tidak</option>
			</select>
		<?php } ?>
			<?php echo form_error('blokir','<div class="text-danger small ml-3">')?>
		</div>

		<button type="submit" class="btn btn-primary">SIMPAN</button>
	</form>
	<?php endforeach; ?>
</div>