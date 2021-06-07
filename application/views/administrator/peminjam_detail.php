<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
  		<i class="fas fa-eye"></i> Detail Peminjam
  	</div>

  	<table class="table table-hover table-striped table-bordered">
  		<?php foreach($detail as $dt) : ?>
  		<tr>
  			<th width="400px">FOTO</th>
  			<th><img class="mb-1" src="<?php echo base_url('assets/uploads/').$dt->photo ?>" style="width: 50%"></th>
  		</tr>
  		<tr>
  			<th width="400px">NPM</th>
  			<th><?php echo $dt->npm ?></th>
  		</tr>
  		<tr>
  			<th width="400px">Nama Lengkap</th>
  			<th><?php echo $dt->nama_lengkap ?></th>
  		</tr>
  		<tr>
  			<th width="400px">Alamat</th>
  			<th><?php echo $dt->alamat ?></th>
  		</tr>
  		<tr>
  			<th width="400px">Email</th>
  			<th><?php echo $dt->email ?></th>
  		</tr>
  		<tr>
  			<th width="400px">Telepon</th>
  			<th><?php echo $dt->telepon ?></th>
  		</tr>
  		<tr>
  			<th width="400px">Tempat Lahir</th>
  			<th><?php echo $dt->tempat_lahir ?></th>
  		</tr>
  		<tr>
  			<th width="400px">Tanggal Lahir</th>
  			<th><?php echo $dt->tanggal_lahir ?></th>
  		</tr>
  		 <tr>
  			<th width="400px">Jenis Kelamin</th>
  			<th><?php echo $dt->jenis_kelamin ?></th>
  		</tr>
  		<tr>
  			<th width="400px">Program Studi</th>
  			<th><?php echo $dt->nama_prodi ?></th>
  		</tr>
  	<?php endforeach; ?>
  	</table>
  	<?php echo anchor('administrator/peminjam','<div class="btn btn-primary btn-sm">KEMBALI</div>')?>
</div>