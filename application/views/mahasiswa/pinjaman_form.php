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
    <?php echo form_open_multipart('mahasiswa/pinjaman/tambah_pinjaman_aksi') ?>

    <div class="form-group">
      <label>NPM</label>
      <input type="text" name="npm" class="form-control" onkeyup="this.value = this.value.toUpperCase()" maxlength="9" value="<?php echo $_SESSION['username']?>" readonly><?php echo form_error('npm','
      <div class="text-danger small ml-3">','</div>') ;
      $UN = $_SESSION['username'];
      $nama = $this->db->query("SELECT * from tb_user where username='$UN'")->result();
      ?>
    </div>

    <div class="form-group">
      <label>Program Studi</label>
      <input type="text" name="nama_prodi" class="form-control" value="<?php echo "Teknik Informatika" ?>" readonly>
    </div>

    <div class="form-group">
      <label>Nama Lengkap</label>
      <?php foreach($nama as $bt) : ?>
        <input type="text" name="nama_lengkap" class="form-control"  maxlength="50" value="<?php echo $bt->nama_lengkap?>" readonly><?php echo form_error('nama_lengkap','
        <div class="text-danger small ml-3">','</div>') ?>
      <?php endforeach; ?>
    </div>

    <div class="form-group" id="only-number">
      <label>Nomor HP</label>
        <input type="text" name="no_hp" class="form-control" id="number" value="<?php echo $bt->no_hp?>" readonly maxlength="13"><?php echo form_error('no_hp','
        <div class="text-danger small ml-3">','</div>') ?>
    </div>

    <div class="form-group" >
      <label>Nama Barang </label>
      <select name="id_barang" class="form-control" id="barang">
        <option value="" selected disabled>--Daftar Barang--</option>
        <?php foreach($barang as $brg) : ?>
        <option value="<?php echo $brg->id_barang ?>"><?php echo $brg->nama_barang;?></option>
        <?php endforeach; ?>
      </select>
    </div>

    <!-- <div class="form-group">
      <label>Kode Barang </label>
      <input type="text" name="nama_barang" class="form-control" readonly id="txtresults">
    </div> -->
    

    <div class="form-group">
      <label>Jumlah </label>
      <input type="number" name="jumlah1" class="form-control" min="1" max="1"  oninvalid="this.setCustomValidity('Maksimal Peminjaman 1 Barang!)" oninput="setCustomValidity('')">
      <?php echo form_error('jumlah','
      <div class="text-danger small ml-3">','</div>') ?>
    </div>

    <div class="form-group">
      <label>Keperluan</label>
      <textarea name="keperluan" class="form-control" maxlength="100" placeholder="Keperluan Anda ..."><?php echo form_error('keperluan','
        <div class="text-danger small ml-3">','</div>') ?>
        

      </textarea>

    </div>

    <div class="form-group">
      <label>Durasi</label>
        <input type="number" name="durasi" class="form-control" min="1" max="7"  oninvalid="this.setCustomValidity('Maksimal Peminjaman 7 Hari!)" oninput="setCustomValidity('')"><?php echo form_error('durasi','
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
<script>
    $(function() {
      $('#only-number').on('keydown', '#number', function(e){
          -1!==$
          .inArray(e.keyCode,[46,8,9,27,13,110,190]) || /65|67|86|88/
          .test(e.keyCode) && (!0 === e.ctrlKey || !0 === e.metaKey)
          || 35 <= e.keyCode && 40 >= e.keyCode || (e.shiftKey|| 48 > e.keyCode || 57 < e.keyCode)
          && (96 > e.keyCode || 105 < e.keyCode) && e.preventDefault()
      });
    })
</script>