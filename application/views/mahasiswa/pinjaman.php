<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
  		<i class="fas fa-edit"></i> Pinjaman
  	</div>

  	<?php echo $this->session->flashdata('pesan') ?>



  	<?php 
  		echo anchor('mahasiswa/pinjaman/tambah_pinjaman','<button class="btn btn-sm btn-primary mb-3"><i class="fa fa-plus fa-sm"></i> TAMBAH</button>')

      
  	?>
    
    <?php 

    $sql = $this->db->query("SELECT * FROM tb_pinjaman1 LEFT JOIN tb_barang ON tb_pinjaman1.id_barang = tb_barang.id_barang where npm='$_SESSION[username]' AND status='Diterima'");
      $cek_npm = $sql->num_rows();
      if ($cek_npm == 0) {

        echo anchor('mahasiswa/pinjaman/pdf','<button class="btn btn-sm btn-success mb-3" disabled ><i class="fa fa-print fa-sm"></i> PRINT</button>');
      }else{
        echo anchor('mahasiswa/pinjaman/pdf','<button class="btn btn-sm btn-success mb-3" ><i class="fa fa-print fa-sm"></i> PRINT</button>');

      }
        
     
    ?>



  	<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Riwayat Pinjaman</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                   <tr>
                      <th>NO</th>
                      <th>Nama Mahasiswa</th>
                      <th>NPM</th>
                      <th>Barang</th>
                      <th>Jumlah</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                      $no = 1;
                      $pinjaman = $this->db->query("SELECT * FROM tb_pinjaman1 LEFT JOIN tb_barang ON tb_pinjaman1.id_barang = tb_barang.id_barang where npm='$_SESSION[username]'")->result();
                      foreach ($pinjaman as $pin) : ?>
                      <tr>
                          <td width="20px"><?php echo $no++ ?></td>
                          <td><?php echo $pin->nama_lengkap ?></td>
                          <td><?php echo $pin->npm ?></td>
                          <td><?php echo $pin->nama_barang ?></td>
                          <td><?php echo $pin->jumlah1 ?></td>
                          <td><?php echo $pin->status ?></td>
                          <td class="text-center" width="160px">
                          <a href="" ><?php echo anchor('mahasiswa/pinjaman/detail/'.$pin->id_pinjaman,'<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>'); ?></a>
                        </td>
                        <?php  endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

</div>