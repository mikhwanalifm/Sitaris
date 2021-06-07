<html>
<head>
  <title>Cetak PDF</title>
  <style>
    table {
      border-collapse:collapse;
      table-layout:fixed;width: 630px;
    }
    table td {
      word-wrap:break-word;
      width: 20%;
    }
  </style>

</head>
<body>
   
    <!-- <table border="1">
    <tr>
      <br>
      <th rowspan="6" width="200px"><img src="assets1/img/unib1.png" width="100" height="100"></th>
    </tr>
    <tr>
      <th colspan="3" style="text-align: center; font-family: Times;">LABORATORIUM TEKNIK INFORMATIKA</th>
      <th rowspan="4" width="200px"></th>
    </tr>
    <tr>
      <th colspan="3">Fakultas Teknik</th>
    </tr>
    <tr>
      <th colspan="3">Universitas Bengkulu</th>
    </tr>
    <tr>
      <th colspan="3">Jl.Wr Supratman. Kel.Kandang Limun Bengkulu</th>
    </tr>
    
  </table>-->
  <img src="assets1/img/unib1.png" height="100px"
  align="left"/>
  <p style="text-align: center; font-family: Times; font-size: 20px; line-height:1.5em;"><span> <b>LABORATORIUM TEKNIK INFORMATIKA</b></span></p><br/>
  <p style="text-align: center; font-family: Times;font-size: 20px;line-height:1.5em;"><span><b> FAKULTAS TEKNIK</b></span></p><br>
  <p style="text-align: center; font-family: Times;font-size: 20px;line-height:1.5em;"><span><b>UNIVERSITAS BENGKULU</b></span></p><br>
  <p style="text-align: center; font-family: Times;font-size: 20px; line-height:1.5em;"><span><b>JL. WR.SUPRATMAN. KEL.KANDANG LIMUN BENGKULU</b></span></p><br>
  <br><hr><br><br>
  <b><?php echo $ket; ?></b><br /><br />
  <table border="1" cellpadding="8">

  <tr style="text-align: center">
     <th>Tanggal</th>
        <th>Kode Barang</th>
        <th>Barang</th>
        <th>Nama</th>
        <th>NPM</th>
        <th>Jumlah</th>
        <th>Denda</th>
        <th>Status</th>
  </tr>
    <?php
    if( ! empty($transaksi)){
      $no = 1;
      foreach($transaksi as $data){
            $tgl = date('d-m-Y', strtotime($data->tanggal_kembali));
        echo "<tr>";
        echo "<td>".$tgl."</td>";
        echo "<td>".$data->kode_barang."</td>";
        echo "<td>".$data->nama_barang."</td>";
        echo "<td>".$data->nama_lengkap."</td>";
        echo "<td>".$data->npm."</td>";
        echo "<td>".$data->jumlah1."</td>";
        echo "<td>".$data->denda."</td>";
        echo "<td>".$data->status."</td>";
        echo "</tr>";
        $no++;
      }
    }
    ?>
  </table>
  <br><br>
  <p style="text-align: right; font-family: Times; font-size: 12px; line-height:1.5em;"><span> <b>Bengkulu, <?php echo date('d-m-Y')?></b></span></p>
  <p style="text-align: left; font-family: Times; font-size: 12px; line-height:1.5em;"><span> <b>Ketua Program Studi</b></span><p style="text-align: right; font-family: Times; font-size: 12px; line-height:1.5em;"><span> <b>Ketua Laboratorium</b></span></p></p><br/><br><br><br>
  <p style="text-align: left; font-family: Times; font-size: 12px; line-height:1.5em;"><span> <b>Ernawati S.T.,M.Cs </b></span><p style="text-align: right; font-family: Times; font-size: 12px; line-height:1.5em;"><span> <b>Desi Andreswari S.T.,M.Cs</b></span></p></p><br/><br><br><br>

   <br/>
</body>
</html>