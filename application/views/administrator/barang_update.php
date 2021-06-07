<div class="container-fluid">
	<div class="alert alert-success" role="alert">
  		<i class="fas fa-edit"></i> Form Update Barang
  	</div>

  	<?php foreach($barang as $brg) : ?>
  		<form method="post" action="<?php echo base_url('administrator/barang/update_aksi') ?>">
            <div class="form-group">
      
      <label>KODE BARANG</label>
      <input type="hidden" name="id_barang" class="form-control" value="<?php echo $brg->id_barang ?>" maxlength="25">
      <input type="text" name="kode_barang" class="form-control" value="<?php echo $brg->kode_barang ?>" maxlength="25">
      <?php echo form_error('kode_barang','<div class="text-danger small ml-3">') ?>
      
    </div>

    <div class="form-group">
      
      <label>NAMA BARANG</label>
      <input type="text" name="nama_barang" class="form-control" value="<?php echo $brg->nama_barang ?>" maxlength="50">
      <?php echo form_error('nama_barang','<div class="text-danger small ml-3">') ?>
      
    </div>

    <div class="form-group">
      
      <label>MEREK</label>
      <input type="text" name="merek" class="form-control" value="<?php echo $brg->merek ?>">
      <?php echo form_error('merek','<div class="text-danger small ml-3">') ?>
      
    </div>

    <div class="form-group">
      
      <label>JUMLAH</label>
      <input type="number" name="jumlah" class="form-control" value="<?php echo $brg->jumlah ?>" maxlength="25">
      <?php echo form_error('jumlah','<div class="text-danger small ml-3">') ?>
      
    </div>

    <div class="form-group">
      
      <label>SATUAN</label>
      <select name="satuan" class="form-control" required oninvalid="this.setCustomValidity('Silahkan Pilih Satuan Yang Benar')" oninput="setCustomValidity('')">>
        <option value="">-- Pilih Satuan --</option>
        <option value="Set">Set</option>
        <option value="Buah">Buah</option>
        <option value="Lembar">Lembar</option>
      </select>
    </div>

    <div class="form-group">
      
      <label>ASAL BARANG</label>
      <input type="text" name="asal_barang" class="form-control" value="<?php echo $brg->asal_barang ?>" maxlength="50">
      <?php echo form_error('asal_barang','<div class="text-danger small ml-3">') ?>
      
    </div>

    <div class="form-group">
      
      <label>KONDISI</label>
      <select name="kondisi" class="form-control" required oninvalid="this.setCustomValidity('Silahkan Pilih Kondisi Yang Benar')" oninput="setCustomValidity('')">
        <option value="">--Pilih Kondisi--</option>
        <option value="Baik">Baik</option>
        <option value="Rusak">Rusak</option>
      </select>
    </div>
    <div class="form-group">
      
      <label>NAMA RUANGAN</label>
      <select name="nama_ruangan" class="form-control" required oninvalid="this.setCustomValidity('Silahkan Pilih Ruangan Yang Benar')" oninput="setCustomValidity('')">
        <option value="">--Pilih Nama Ruangan --</option>
        <?php foreach($ruangan as $rgn) : ?>
          <option value="<?php echo $rgn->nama_ruangan ?>"><?php echo $rgn->nama_ruangan ?></option>
        <?php endforeach; ?>
      </select>
    </div>
  		<button type="submit" class="btn btn-sm btn-primary">SIMPAN</button>
  		</form>
  	<?php endforeach; ?>
</div>
