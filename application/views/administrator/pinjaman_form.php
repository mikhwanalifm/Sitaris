<div class="container-fluid">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript">
    
    $(function(){
      $("#barang").change(function(){
        var displaycourse=$("#barang option:selected ").text();
        $("#txtresults").val(displaycourse);
      });
    });

  </script>
	<div class="alert alert-success" role="alert">
  		<i class="fas fa-university"></i> Form Pinjaman
  	</div>
    <?php echo $this->session->flashdata('pesan') ?>
  	<?php echo form_open_multipart('administrator/pinjaman/tambah_pinjaman_aksi') ?>

  	<div class="form-group">
  		<label>NPM</label>
  		<input type="text" name="npm" class="form-control" onkeyup="this.value = this.value.toUpperCase()" maxlength="9"><?php echo form_error('npm','
  		<div class="text-danger small ml-3">','</div>') ?>
  	</div>

    <div class="form-group">
      <label>Program Studi</label>
      <input type="text" name="nama_prodi" class="form-control" value="<?php echo "Teknik Informatika" ?>" readonly>
    </div>

  	<div class="form-group">
  		<label>Nama Lengkap</label>
    		<input type="text" name="nama_lengkap" class="form-control" value="" maxlength="50"><?php echo form_error('nama_lengkap','
    		<div class="text-danger small ml-3">','</div>') ?>
  	</div>

  	<div class="form-group" >
  		<label>Nama Barang </label>
  		<select name="kode_barang" class="form-control" id="barang">
        <option value="" selected disabled>--Daftar Barang--</option>
        <?php foreach($barang as $brg) : ?>
        <option value="<?php echo $brg->kode_barang ?>"><?php echo $brg->nama_barang ."(". $brg->nama_ruangan.")";?></option>
        <?php endforeach; ?>
      </select>
  	</div>

    <div class="form-group">
      <label>Kode Barang </label>
      <input type="text" name="nama_barang" class="form-control" readonly id="txtresults">
    </div>
    

  	<div class="form-group">
  		<label>Jumlah </label>
  		<input type="number" name="jumlah" class="form-control" min="1" max="1"  oninvalid="this.setCustomValidity('Maksimal Peminjaman 1 Barang!)" oninput="setCustomValidity('')">
      <?php echo form_error('jumlah','
  		<div class="text-danger small ml-3">','</div>') ?>
  	</div>

  	<div class="form-group">
  		<label>Status</label>
  		<input type="text" name="status" class="form-control" value="Diminta" readonly><?php echo form_error('status','
      <div class="text-danger small ml-3">','</div>') ?>
  		</select>
  		
  		<?php echo form_error('status','
  		<div class="text-danger small ml-3">','</div>') ?>
  	</div>

  	<div class="form-group">
  		<label>Berkas Permohonan</label><br>
  		<input type="file" name="file">
  	</div>

  	<button type="submit" class="btn btn-primary mb-5 mt-3" value="upload">SIMPAN</button>

  	<?php form_close(); ?>
  
</div>
