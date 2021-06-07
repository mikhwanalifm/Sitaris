<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
  		<i class="fas fa-university"></i> Form Edit Kerjasama
  	</div>

    <?php foreach ($kerjasama as $kjs) : ?>
  	<?php echo form_open_multipart('administrator/kerjasama/update_kerajsama_aksi') ?>

  	<div class="form-group">
  		<label>NAMA PERUSAHAAN</label>
      <input type="hidden" name="id_kerjasama" class="form-control" value="<?php echo $kjs->id_kerjasama ?>">
  		<input type="text" name="nama" class="form-control" value="<?php echo $kjs->nama ?>"><?php echo form_error('nama','
  		<div class="text-danger small ml-3">','</div>') ?>
  	</div>

  	<div class="form-group">
  		<label>FOTO</label><br>
      <?php foreach($detail as $dt) :?>
        <img src="<?php echo base_url().'assets1/img/clients/'.$dt->photo ?>" style="width: 30%">
      <?php endforeach; ?> <br><br>
  		<input type="file" name="userfile" value="<?php echo $kjs->photo ?>">
  	</div>

  	<button type="submit" class="btn btn-primary mb-5 mt-3">SIMPAN</button>

  	<?php form_close(); ?>
  <?php endforeach; ?>
</div>