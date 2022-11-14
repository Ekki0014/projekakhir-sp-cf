<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Model_pengguna extends CI_Model
{
	public function ambil_data($id =  null)
	{
		if ($id) {
			return $this->db->get_where('tb_pengguna', ['id_pengguna' => $id]);
		} else {
			return $this->db->get_where('tb_pengguna', ['hak_akses' => '0']);
		}
	}
	public function simpan_data($value)
	{
		return $this->db->insert('tb_pengguna', $value);
	}
	public function ubah($data, $id)
	{
		return $this->db->where(['id_pengguna' => $id])->update('tb_pengguna', $data);
	}
	public function hapus($id)
	{
		return $this->db->where('id_pengguna', $id)->delete('tb_pengguna');
	}
}
