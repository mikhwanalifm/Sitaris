<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
  		<i class="fas fa-eye"></i> Detail Mahasiswa
  	</div>

  	<table class="table table-hover table-striped table-bordered">
  		<?php foreach($detail as $dt) : ?>
  		<tr>
  			<th width="400px">FOTO</th>
  			<th><img class="mb-1" src="<?php echo base_url('assets1/img/clients/').$dt->photo ?>" style="width: 50%"></th>
  		</tr>
  		<tr>
  			<th width="400px">NAMA PERUSAHAAN</th>
  			<th><?php echo $dt->nama ?></th>
  		</tr>
  	<?php endforeach; ?>
  	</table>
  	<?php echo anchor('administrator/kerjasama','<div class="btn btn-primary btn-sm">KEMBALI</div>')?>
</div>