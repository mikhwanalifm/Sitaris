<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
  		<i class="fas fa-university"></i> Form Tambah User
  	</div>

  	<form method="post" action ="<?php echo base_url('administrator/user/tambah_users_aksi')?>">
  		<div class="form-group">
			<label>Nama Lengkap</label>
			<input type="text" class="form-control" name="nama_lengkap" placeholder="Masukan Nama Lengkap" maxlength="120">
			<?php echo form_error('nama_lengkap','<div class="text-danger small ml-3">')?>
		</div>
		<div class="form-group">
			<label>Username</label>
			<input type="text" class="form-control" name="username" placeholder="Masukan Username" maxlength="9" onkeyup="this.value = this.value.toUpperCase()">
			<?php echo form_error('username','<div class="text-danger small ml-3">')?>
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="text" class="form-control" name="password" placeholder="Masukan Password" maxlength="50" >
			<?php echo form_error('password','<div class="text-danger small ml-3">')?>
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" class="form-control" name="email" placeholder="Masukan Email" maxlength="50">
			<?php echo form_error('email','<div class="text-danger small ml-3">')?>
		</div>
		<div class="form-group">
			<label>Nomor Handphone</label>
			<input type="text" class="form-control" name="no_hp" placeholder="Masukan Nomor Handphone" maxlength="13" >
			<?php echo form_error('no_hp','<div class="text-danger small ml-3">')?>
		</div>
		<div class="form-group">
			<label>Level</label>
			<select name="level" class="form-control" required oninvalid="this.setCustomValidity('Silahkan Pilih Level Yang Benar')" oninput="setCustomValidity('')">
				<option value=""> -- Pilih Level -- </option>
				<?php 
					if($level=='admin'){
				?>
				<option value="admin" selected>Admin</option>
				<option value="mahasiswa" >Mahasiswa</option>
				<?php 
				}
				elseif($level=='mahasiswa'){
				?>
				<option value="admin" >Admin</option>
				<option value="mahasiswa" selected >Mahasiswa</option>

			<?php 
				} else {

			?>
				<option value="admin" >Admin</option>
				<option value="mahasiswa"  >Mahasiswa</option>
			</select>
		<?php } ?>
			<?php echo form_error('level','<div class="text-danger small ml-3">')?>
		</div>

		<div class="form-group">
			<label>Blokir</label>
			<select name="blokir" class="form-control" required oninvalid="this.setCustomValidity('Silahkan Pilih Status Yang Benar')" oninput="setCustomValidity('')">
				<option value=""> -- Status Blokir -- </option>
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
				<option value="N" >Tidak</option>
			</select>
		<?php } ?>
			<?php echo form_error('blokir','<div class="text-danger small ml-3">')?>
		</div>

		<button type="submit" class="btn btn-primary">SIMPAN</button>
	</form>
</div>