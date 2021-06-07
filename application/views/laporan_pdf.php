<!DOCTYPE html>
<html><head>
	<title>Bukti Peminjaman Inventaris Laboratorium Informatika</title>
</head><body>
	<table>
		<?php 
		//$pinjaman = $this->db->query("SELECT * FROM tb_pinjaman1 LEFT JOIN tb_barang ON tb_pinjaman1.id_barang = tb_barang.id_barang where npm='$_SESSION[username]' AND status='Diterima'")->result();
		foreach($pinjaman as $pnjm) : ?>
		<tr>
			<th rowspan="6" width="200px"><img src="assets1/img/unib1.png" width="150" height="150"></th>
		</tr>
		<tr>
			<th colspan="3">LABORATORIUM TEKNIK INFORMATIKA</th>
			<th rowspan="4" width="200px">Tanggal-Bulan-Tahun<br><?php
					$timezone = new DateTimeZone('Asia/Jakarta');
					$date = new DateTime();
					$date->setTimeZone($timezone);

					echo $date->format('d-m-Y H:i:s') . '<br/>';

			?></th>
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
		
		<tr>
			<th colspan="3">FORMULIR PEMINJAMAN BARANG/ALAT LABORATORIUM</th>
			<th>Nomor Formulir<br><?php echo $pnjm->id_pinjaman?></th>
		</tr>
	<?php endforeach; ?>
	</table><hr><br>
	
		<table border="1" >
			
		<tr>
			<th> No </th>
			<th width="236px" > Nama Barang </th>
			<th width="185px"> Kode Barang </th>
			<th width="185px"> Keterangan </th>
		</tr>

		<?php $no=1;
		//$pinjaman = $this->db->query("SELECT * FROM tb_pinjaman1 LEFT JOIN tb_barang ON tb_pinjaman1.id_barang = tb_barang.id_barang where npm='$_SESSION[username]' AND status='Diterima'")->result();
			foreach($pinjaman as $pnjm ) : ?>
		<tr >
			<th> <?php echo $no++ ?> </th>
			<th width="136px" > <?php echo $pnjm->nama_barang ?> </th>
			<th width="50px"> <?php echo $pnjm->kode_barang ?> </th>
			<th width="50px"> &nbsp; </th>
		</tr>
	<?php endforeach; ?>
	</table><br><br>
	
	<table border="1">
		<tr>
			<th width="200px" colspan="2" > Data Peminjam </th>
		</tr>
		<?php foreach($pinjaman as $pnjm) : ?>

		<tr>
			<th width="200px" > Nama  </th>
			<th width="447px" > <?php echo $pnjm->nama_lengkap ?> </th>
		</tr>
		<tr>
			<th width="200px" > Instansi </th>
			<th width="447px" > <?php echo $pnjm->nama_prodi ?> </th>
		</tr>
		<tr>
			<th width="200px" > Kontak (HP) </th>
			<th width="447px" >  <?php echo $pnjm->no_hp ?> </th>
		</tr>
		<tr>
			<th width="200px" > Keperluan </th>
			<th width="447px" >  <?php echo $pnjm->keperluan ?> </th>
		</tr>
		<tr>
			<th width="200px" > Durasi </th>
			<th width="447px" >  <?php echo $pnjm->durasi." Hari " ?> </th>
		</tr>
		<?php endforeach; ?>
	</table><br><br>
	
	<table border="1">
		<?php 
		//$pinjaman = $this->db->query("SELECT * FROM tb_pinjaman1 LEFT JOIN tb_barang ON tb_pinjaman1.id_barang = tb_barang.id_barang where npm='$_SESSION[username]' AND status='Diterima'")->result();
		foreach($pinjaman as $pnjm) : ?>
		<tr>
			<th width="600px" colspan="3" > Serah Terima (Validasi Peminjaman) </th>
		</tr>
		<tr>
			<th width="213px" rowspan="2"> Peminjam  </th>
			<th width="213px" rowspan="2"> Perwakilan dari Peminjam </th>
			<th width="213px" rowspan="2"> Laboran </th>
		</tr>
		<tr>
			
			
		</tr>
		<tr>
			<th width="213px" rowspan="2" height="100px"> &nbsp; </th>
			<th width="213px" rowspan="2"> &nbsp; </th>
			<th width="213px" rowspan="2"> &nbsp; </th>
			
		</tr>
		<tr>
			
		</tr>
		<tr>
			<th width="213px" > <?php echo $pnjm->nama_lengkap ?> </th>
			<th width="213px" > <?php echo $pnjm->nama_prodi ?> </th>
			<th width="213px" > Hendri </th>
		</tr>
		<?php endforeach; ?>
	</table><br><br><br>
	
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