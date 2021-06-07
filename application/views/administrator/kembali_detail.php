<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
  		<i class="fas fa-eye"></i> Detail Pengembalian
  	</div>

  	<table class="table table-hover table-striped table-bordered">
      <?php foreach($detail as $dt) : ?>
  		<tr>
  			<th width="400px">NAMA BARANG</th>
  			<th><?php echo $dt->nama_barang ?></th>
  		</tr>
  		<tr>
  			<th width="400px">NAMA PEMINJAM</th>
  			<th><?php echo $dt->nama_lengkap ?></th>
  		</tr>
  		<tr>
  		<th width="400px">NPM</th>
  			<th><?php echo $dt->npm ?></th>
  		</tr>
        <th width="400px">JUMLAH</th>
        <th><?php echo $dt->jumlah1 ?></th>
      </tr>
  		<tr>
  			<th width="400px">STATUS</th>
  			<th><?php echo $dt->status ?></th>
  		</tr>
  		<tr>
  			<th width="400px">TANGGAL PINJAM</th>
  			<th><?php echo $dt->tanggal_pinjam ?></th>
  		</tr>
  		<tr>
  			<th width="400px">TANGGAL KEMBALI</th>
  			<th><?php echo $dt->tanggal_kembali ?></th>
  		</tr>
      <tr>
        <th width="400px">FILE</th>
        <th><img class="mb-1" src="<?php echo base_url('assets/uploads/file/').$dt->file ?>" style="width: 50%"></th>
      </tr>
  	<?php endforeach; ?>
  	</table>
  	<?php echo anchor('administrator/kembali','<div class="btn btn-primary btn-sm">KEMBALI</div>')?>
</div>