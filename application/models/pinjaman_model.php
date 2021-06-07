<?php

class Pinjaman_model extends CI_Model{

 	public function ambil_data($id)
 	{
 		$this->db->where('npm', $id);
 		return $this->db->get('tb_pinjaman')->row();
 	}

 	public function data_pinjaman($id_sess)
 	{
 		$sql = $this->db->select('*')->from('tb_user')->join('tb_pinjaman', 'tb_user.id_user = tb_pinjaman.id_user')->where('tb_user.id_user', $id_sess)->get()->result_array();
		return $sql;
 	}

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

    function get_autocomplete($table,$like,$search_data)
	{
		$this->db->where($like, $search_data);
		return $this->db->get($table, 10)->result();
	}
	function cari($npm){
        $query= $this->db->get_where('tb_peminjam',array('npm'=>$npm));
        return $query;
    }
    function search_blog($title){
        $this->db->like('npm', $title , 'both');
        $this->db->order_by('npm', 'ASC');
        $this->db->limit(10);
        return $this->db->get('tb_peminjam')->result();
    }

    public function get_mahasiswa($title)
    {
    	$this->db->like('npm', $title , 'both');
        $this->db->order_by('id_peminjam', 'ASC');
        $this->db->limit(10);
        return $this->db->get('tb_peminjam')->result();
    }

	public function ambil_id_pinjaman($id)
		{
			//$result = $this->db->where('id_pinjaman',$id)->get('tb_pinjaman1');
			$result = $this->db->query("SELECT * FROM tb_pinjaman1 LEFT JOIN tb_barang ON tb_pinjaman1.id_barang = tb_barang.id_barang WHERE id_pinjaman = '$id'");

			if($result->num_rows() > 0 ){
				return $result->result();
			}else{
				return false;
			}
		
		}

	public function ambil_kode_pinjaman($id)
		{
			$result = $this->db->where('kode_barang',$id)->get('tb_barang');

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
		public $id = 'npm';
		public function get_by_id($id)
		{
			$this->db->where($this->id,$id);
			return $this->db->get($this->table)->row();

		}

	public function get_kode_query()
	{
		$query = $this->db->get('tb_barang');
		return $query->result();
	}

	public function get_kodebarang($kode_barang)
	{
		$query = $this->db->get_where('tb_barang', array('kode_barang' => $kode_barang));
		return $query->result();
	}

	public function get_kode()
	{
		$kode_barang = $this->input->post('kode_barang');
		$barang = $this->pinjaman_model->get_kodebarang($kode_barang);

		if(count($barang)>0)
		{
			$pro_select_box='';
			$pro_select_box .= '<option value="">Select Province </option>';
			foreach($barang as $key){
				$pro_select_box .= ' ';
			}
		}
	}
}
?>