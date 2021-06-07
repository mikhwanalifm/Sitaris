<?php

class Barang_model extends CI_Model
{
	public function tampil_data($table)
		{
			return $this->db->get($table);

		}

	public function insert_data($data,$table)
		{
			$this->db->insert($table,$data);

		}

		public function edit_data($where,$table)
	{
		return $this->db->get_where($table,$where);
	}
	public function ambil_kode_barang($kode)
	{
		$result = $this->db->where('id_barang',$kode)->get('tb_barang');

		if($result->num_rows() > 0 ){
			return $result->result();
		}else{
			return false;
		}
	}
	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// Penambahan SQL untuk update data
	// SQL sama saja yg tadi hanya saja
	// ini versi SQL CI agar terlihat rapi
	public function viewUpdateBarang($id) {
		$this->db->select('kode_barang,nama_barang,jumlah,kondisi,tb_ruangan.kode_ruangan,tb_kategoribarang.kode_kategoribarang,tanggal_masuk');
		$this->db->from('tb_barang');
		$this->db->join('tb_kategoribarang', 'tb_barang.kode_kategoribarang = tb_kategoribarang.kode_kategoribarang');
		$this->db->join('tb_ruangan', 'tb_barang.kode_ruangan = tb_ruangan.kode_ruangan');
		$this->db->where('id', $id);
		return $this->db->get()->result();
	}


	}

?>