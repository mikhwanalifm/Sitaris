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
    <b><?php echo $ket; ?></b><br /><br />
    
  <table border="1" cellpadding="8">
  <tr>
   <th>Tanggal</th>
        <th>Kode Barang</th>
        <th>Barang</th>
        <th>Nama</th>
        <th>NPM</th>
        <th>Jumlah</th>
        <th>Status</th>
  </tr>
    <?php
    if( ! empty($transaksi)){
      $no = 1;
      foreach($transaksi as $data){
            $tgl = date('d-m-Y', strtotime($data->tanggal_pinjam));
         echo "<tr>";
        echo "<td>".$tgl."</td>";
        echo "<td>".$data->kode_barang."</td>";
        echo "<td>".$data->nama_barang."</td>";
        echo "<td>".$data->nama_lengkap."</td>";
        echo "<td>".$data->npm."</td>";
        echo "<td>".$data->jumlah."</td>";
        echo "<td>".$data->status."</td>";
        echo "</tr>";
        $no++;
      }
    }
    ?>
  </table>
</body>
</html>