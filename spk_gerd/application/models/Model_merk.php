<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Model_merk extends CI_Model
{
	public function ambil_data($id =  null)
	{
		if ($id) {
			return $this->db->get_where('tb_merk', ['id_merk' => $id]);
		} else {
			return $this->db->get('tb_merk');
		}
	}
	public function simpan_data($value)
	{
		return $this->db->insert('tb_merk', $value);
	}
	public function ubah($data, $id)
	{
		return $this->db->where(['id_merk' => $id])->update('tb_merk', $data);
	}
	public function hapus($id)
	{
		return $this->db->where('id_merk', $id)->delete('tb_merk');
	}
}
