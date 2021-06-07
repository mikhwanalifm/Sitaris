<?php

class Kembali_model extends CI_Model{


	public function tampil_data($table)
	{
		return $this->db->get($table);
	}

	public function insert_data($data,$table)
		{
			$this->db->insert($table,$data);

		}
	function get_where($table,array $where)
	{
		return $this->db->where($where)->get($table);
	}

	function update($table,$where,$wherenya,array $data){
    	return $this->db->where($where,$wherenya)->update($table,$data);
    }

	public function ambil_status_pinjaman($id)
		{
			$result = $this->db->where('status',$id)->get('tb_pinjaman');

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

	public $table = 'tb_pinjaman';
		public $id = 'id_pinjaman';
		public function get_by_id($id)
		{
			$this->db->where($this->id,$id);
			return $this->db->get($this->table)->row();

		}
}
?>