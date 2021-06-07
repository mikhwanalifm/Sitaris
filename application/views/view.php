
<div class="container-fluid">

    <div class="alert alert-success" role="alert">
  		<i class="fas fa-edit"></i> Laporan Transaksi
  	</div>
    <form method="get" action="" >
        <label>Filter Berdasarkan</label><br>
        <select name="filter" id="filter" class="form-control">
            <option value="">Pilih</option>
            <!-- <option value="1">Per Tanggal</option> -->
            <option value="2">Per Bulan</option>
            <option value="3">Per Tahun</option>
        </select>
        <br /><br />
        <div id="form-tanggal">
            <label>Tanggal</label><br>
            <input type="text" name="tanggal" class="input-tanggal">
            <br /><br />
        </div>
        <div id="form-bulan">
            <label>Bulan</label><br>
            <select name="bulan" class="form-control">
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
        <div id="form-tahun" >
            <label>Tahun</label><br>
            <select name="tahun" class="form-control">
                <option value="">Pilih</option>
                <?php
                foreach($option_tahun as $data){ // Ambil data tahun dari model yang dikirim dari controller
                    echo '<option value="'.$data->tahun.'">'.$data->tahun.'</option>';
                }
                ?>
            </select>
            <br /><br />
        </div>
        <button type="submit" class="btn btn-success btn-sm">Tampilkan</button>
        <a href="<?php echo base_url('transaksi'); ?>">Reset Filter</a>
    </form>
    <hr />
    
    <b><?php echo $ket; ?></b><br /><br />
    <a href="" ><?php echo anchor($url_cetak,'<div class="btn btn-sm btn-info"><i class="fa fa-print"> Cetak</i></div>'); ?></a><br><br>

<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                   <tr>
                        <th>Tanggal</th>
                        <th>Kode Barang</th>
                        <th>Barang</th>
                        <th>Nama</th>
                        <th>NPM</th>
                        <th>Jumlah</th>
                        <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                        if( ! empty($transaksi)){
                          $no = 1;
                          foreach($transaksi as $datas){
                                $tgl = date('d-m-Y', strtotime($datas->tanggal_kembali));
                                
                            echo "<tr>";
                            echo "<td>".$tgl."</td>";
                            echo "<td>".$datas->kode_barang."</td>";
                            echo "<td>".$datas->nama_barang."</td>";
                            echo "<td>".$datas->nama_lengkap."</td>";
                            echo "<td>".$datas->npm."</td>";
                            echo "<td>".$datas->jumlah1."</td>";
                            echo "<td>".$datas->status."</td>";
                            echo "</tr>";
                            $no++;
                          }
                        }
                        ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

<script>
    $(document).ready(function(){ // Ketika halaman selesai di load
        /*$('.input-tanggal').datepicker({
            dateFormat: 'yy-mm-dd' 
        }); */
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