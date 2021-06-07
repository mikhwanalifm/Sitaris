<!DOCTYPE html>
<html><head>
	<title>Bukti Peminjaman Inventaris Laboratorium Informatika</title>
</head><body>
	<table>
		<tr>
			<th rowspan="6" width="200px"><img src="assets1/img/unib1.png" width="150" height="150"></th>
		</tr>
		<tr>
			<th colspan="3">LABORATORIUM TEKNIK INFORMATIKA</th>
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
		
	</table><hr><br>
	<p style="text-align:center; font-family: Times New Roman ; font-size: 10 "><b>LAPORAN INVENTARIS RUANGAN</b></p><br>
	<p style="text-align:center; font-family: Times New Roman ; font-size: 10 "><b>SEMESTER GANJIL TP.2019/2020</b></p><br>
	<p style="text-align:center; font-family: Times New Roman ; font-size: 10 "><b>PERIODE OKTOBER 2019</b></p><br>
	<br>
	<p style="text-align:left;">Ruang &nbsp;: Laboratorium Pemograman (Lantai 3)</p>
	<p style="text-align:left;">Gedung &nbsp;: LABORATORIUM TEKNIK INFORMATIKA FAKULTAS TEKNIK)</p>
		<table border="1" >
			
		<tr>
			<th> No </th>
			<th>Kode Barang </th>
			<th> Nama Barang </th>
			<th> Merek </th>
			<th> Jumlah (Satuan) </th>
			<th> Asal Barang </th>
			<th> Kondisi </th>
		</tr>

		<?php $no=1;
			foreach($labpro as $pro ) : ?>
		<tr >
			<th> <?php echo $no++ ?> </th>
			<th> <?php echo $pro->kode_barang ?> </th>
			<th> <?php echo $pro->nama_barang ?> </th>
			<th> <?php echo $pro->merek ?> </th>
			<th> <?php echo $pro->jumlah."(".$pro->satuan.")"?> </th>
			<th> <?php echo $pro->asal_barang ?> </th>
			<th> <?php echo $pro->kondisi ?> </th>
			
		</tr>
	<?php endforeach; ?>
	</table><br><br>
	
	
	<table>
		<tr>
			<th width="326px" > Mengetahui,  </th>
			<th width="326px" > Laboran Teknik Informatika </th>
		</tr>
		<tr>
			<th width="326px" >  Prodi Teknik Informatika  </th>
			<th width="326px" > Ketua </th>
		</tr>
		<tr>
			<th width="326px" height="200px" > Ernawati,S.T M.Cs </th>
			<th width="326px" height="200px"> Desi Andreswari,S.T.,M.Cs</th>
		</tr>

	</table><br>

</body></html>