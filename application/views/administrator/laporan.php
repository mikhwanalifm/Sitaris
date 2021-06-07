<header class="panel-heading">
    <div class="panel-actions">
        <a href="#" class="fa fa-caret-down"></a>
            <a href="#" class="fa fa-times"></a>
    </div>
        <h2 class="panel-title">Laporan Data Skripsi</h2>
</header>

<body>
    <div class="panel-body">
    <form method="get" action="">
        <label><strong>Filter Berdasarkan</strong></label><br>
        <select name="filter" id="filter">
            <option value="">Pilih</option>
            <option value="2">Per Bulan</option>
            <option value="3">Per Tahun</option>
        </select>
        <br /><br />
        <div id="form-tanggal">
            <label>Tanggal</label><br>
            <input type="text" name="tanggal" class="input-tanggal" />
            <br /><br />
        </div>
        <div id="form-bulan">
            <label>Bulan</label><br>
            <select name="bulan">
                <option value="">Pilih</option>
                <option value="1">Januari</option>
                <option value="2">Februari</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5">Mei</option>
                <option value="6">Juni</option>
                <option value="7">Juli</option>
                <option value="8">Agustus</option>
                <option value="9">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
            </select>
            <br /><br />
        </div>
        <div id="form-tahun">
            <label>Tahun</label><br>
            <select name="tahun">
                <option value="">Pilih</option>
                <?php
                foreach($option_tahun as $data){ // Ambil data tahun dari model yang dikirim dari controller
                    echo '<option value="'.$data->tahun.'">'.$data->tahun.'</option>';
                }
                ?>
            </select>
            <br /><br />
        </div>
        <button class="btn btn-small btn-primary" type="submit">Tampilkan</button>
    </form>
    <hr />
    
    <b><?php echo $ket; ?></b><br /><br />
    <a class="btn btn-small btn-success" href="<?php echo $url_cetak; ?>"><i class="fa fa-file-pdf-o"></i> Unduh PDF</a><br /><br />
    <table class="table table-bordered table-striped mb-none">
    <tr>
        <th>Tanggal Upload</th>
        <th>NPM</th>
        <th>Nama</th>
        <th>Judul Skripsi</th>
        <th>Tanggal Sidang</th>
    </tr>
    <?php
    if( ! empty($transaksi)){
      $no = 1;
      foreach($transaksi->result() as $data){

            $tgl = date('d-m-Y', strtotime($data->tgl_upload));
            
        echo "<tr>";
        echo "<td>".$tgl."</td>";
        echo "<td>".$data->npm_member."</td>";
        echo "<td>".$data->nama_member."</td>";
        echo "<td>".$data->judul."</td>";
        echo "<td>".$data->tgl_sidang."</td>";
        echo "</tr>";
        $no++;
      }
    }
    ?>
    
    <script src="<?php echo base_url('assets/jquery-ui/jquery-ui.min.js'); ?>"></script> <!-- Load file plugin js jquery-ui -->
    <script>
    $(document).ready(function(){ // Ketika halaman selesai di load
        $('.input-tanggal').datepicker({
            dateFormat: 'yy-mm-dd' // Set format tanggalnya jadi yyyy-mm-dd
        });
        $('#form-tanggal, #form-bulan, #form-tahun').hide(); // Sebagai default kita sembunyikan form filter tanggal, bulan & tahunnya
        $('#filter').change(function(){ // Ketika user memilih filter
            if($(this).val() == '1'){ // Jika filter nya 1 (per tanggal)
                $('#form-bulan, #form-tahun').hide(); // Sembunyikan form bulan dan tahun
                $('#form-tanggal').show(); // Tampilkan form tanggal
            }else if($(this).val() == '2'){ // Jika filter nya 2 (per bulan)
                $('#form-tanggal').hide(); // Sembunyikan form tanggal
                $('#form-bulan, #form-tahun').show(); // Tampilkan form bulan dan tahun
            }else{ // Jika filternya 3 (per tahun)
                $('#form-tanggal, #form-bulan').hide(); // Sembunyikan form tanggal dan bulan
                $('#form-tahun').show(); // Tampilkan form tahun
            }
            $('#form-tanggal input, #form-bulan select, #form-tahun select').val(''); // Clear data pada textbox tanggal, combobox bulan & tahun
        })
    })
    </script>
</table>
</div>
</body>
</html>