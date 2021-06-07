<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
  		<i class="fas fa-university"></i> Form Ubah User
  	</div>

  	<?php foreach($users as $user) : ?>
  	<form method="post" action ="<?php echo base_url('mahasiswa/user/update_aksi')?>">
  		<div class="form-group">
			<label>Nama Lengkap</label>
			<input type="text" class="form-control" name="nama_lengkap" placeholder="Masukan Nama Lengkap" value="<?php echo $user->nama_lengkap ?>" maxlength="120" readonly>
			<?php echo form_error('nama_lengkap','<div class="text-danger small ml-3">')?>
		</div>
		<div class="form-group">
			<label>Username</label>
			<input type="hidden" class="form-control" name="id_user" placeholder="Masukan Username" value="<?php echo $user->id_user?>" >
			<input type="text" class="form-control" name="username" placeholder="Masukan Username" value="<?php echo $user->username?>" maxlength="50" readonly>
			<?php echo form_error('username','<div class="text-danger small ml-3">')?>
		</div>
		<div class="form-group">
			
			<label>Password</label>
			<input type="text" class="form-control" name="password" placeholder="Masukan Password"   maxlength="50">
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
			
			<input type="hidden" class="form-control" name="level" placeholder="Masukan Username" value="<?php echo $user->level?>">
			<?php echo form_error('level','<div class="text-danger small ml-3">')?>
		</div>

		<div class="form-group">
			<input type="hidden" class="form-control" name="blokir" placeholder="Masukan Username" value="<?php echo $user->blokir?>">
			<input type="hidden" class="form-control" name="id_sessions" placeholder="Masukan Username" value="<?php echo $user->id_sessions?>">
			<?php echo form_error('id_sessions','<div class="text-danger small ml-3">')?>
		</div>
			

		<button type="submit" class="btn btn-primary">SIMPAN</button>
	</form>
	<?php endforeach; ?>
</div>