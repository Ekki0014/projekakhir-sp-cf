<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Model_barang extends CI_Model
{
	public function ambil_data($id =  null)
	{
		if ($id) {
			return $this->db->get_where('tb_barang', ['id_barang' => $id]);
		} else {
			return $this->db->select('*')
			->from('tb_barang')
			->join('tb_merk', 'tb_barang.id_merk=tb_merk.id_merk')
			->join('tb_spesifikasi','tb_barang.id_barang=tb_spesifikasi.id_barang')
			->get();
		}
	}
	public function ambilBarangPerKategori($id)
	{
		return $this->db->select('*')
		->from('tb_barang')
		->join('tb_merk', 'tb_barang.id_merk=tb_merk.id_merk')
		->join('tb_spesifikasi','tb_barang.id_barang=tb_spesifikasi.id_barang')
		->where('tb_barang.id_merk', $id)
		->get();
	}
	public function ambilBarangName($id)
	{
		return $this->db->select('*')
		->from('tb_barang')
		->join('tb_merk', 'tb_barang.id_merk=tb_merk.id_merk')
		->join('tb_spesifikasi','tb_barang.id_barang=tb_spesifikasi.id_barang')
		->like('tb_barang.nama_barang', $id, 'both')
		->get();
	}
	public function ambil_cart($id_barang = null)
	{
		return $this->db->select('tk.jumlah as jumlah, tb.nama_barang as nama_barang, tb.harga_barang as harga_barang,tk.idk')
		->from('tb_keranjang as tk')
		->join('tb_barang as tb', 'tk.id_barang=tb.id_barang')
		->where('tk.id_pengguna', $this->session->userdata('id_pengguna'))
		->get();
	}

	public function cek_cart($id){
		return $this->db->select('tk.idk,tk.id_pengguna')->from('tb_keranjang as tk')->where(['idk' => $id])->get();
	}

	public function save_cart($data){
		return $this->db->insert('tb_keranjang',$data);
	}

	public function update_cart($id,$data){
		return $this->db->where(['idk' => $id])->update('tb_keranjang', $data);
	}

	public function del_cart($id){
		return $this->db->where('idk', $id)->delete('tb_keranjang');
	}

	public function save($tabel,$data){
		return $this->db->insert($tabel,$data);
	}

}
