<?php

class Informasi_model extends CI_Model
{

		public $table = 'tb_informasi';
		public $id = 'id_informasi';
	public function tampil_data($table)
		{
			return $this->db->get($table);

		}

	public function insert_data($data,$table)
		{
			$this->db->insert($table,$data);

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

	public function edit_data($where,$table)
	{
		return $this->db->get_where($table,$where);
	}

	}

?>