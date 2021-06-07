<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
  		<i class="fas fa-eye"></i> Detail Barang
  	</div>

  	<table class="table table-hover table-striped table-bordered">
      <?php foreach($detail as $dt) : ?>
  		<tr>
  			<th width="400px">KODE BARANG</th>
  			<th><?php echo $dt->kode_barang ?></th>
  		</tr>
  		<tr>
  			<th width="400px">NAMA BARANG</th>
  			<th><?php echo $dt->nama_barang ?></th>
  		</tr>
      <tr>
        <th width="400px">MEREK</th>
        <th><?php echo $dt->merek ?></th>
      </tr>
  		<tr>
  		<th width="400px">JUMLAH (SATUAN)</th>
  			<th><?php echo $dt->jumlah."(".$dt->satuan.")" ?></th>
  		</tr>
       <th width="400px">ASAL BARANG</th>
        <th><?php echo $dt->asal_barang ?></th>
      </tr>
      <th width="400px">KONDISI</th>
        <th><?php echo $dt->kondisi ?></th>
      </tr>
  		<tr>
  			<th width="400px">RUANGAN</th>
  			<th><?php echo $dt->nama_ruangan ?></th>
  		</tr>
        
  	<?php endforeach; ?>
  	</table>
  	<?php echo anchor('administrator/barang','<div class="btn btn-primary btn-sm">KEMBALI</div>')?>
</div>