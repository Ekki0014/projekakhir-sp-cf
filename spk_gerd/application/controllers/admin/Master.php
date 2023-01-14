<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_unv', 'mv');
	}

	public function gejala()
	{
		$data = [
			'gejala' => $this->db->get('tgejala')->result()
		];
		$this->template->load('data/template', 'admin/master/gejala',$data);
	}

	public function save_gejala($metode){
		$kirim = [
			'nama_gejala' => $this->input->post('nama_gejala'),
			'bobot'		 => $this->input->post('bobot'),
		];
		if($metode == 'tambah'){
			$kirim['kode_gejala'] = $this->input->post('kode_gejala');
			if($this->mv->save_data('tgejala', $kirim)){
				echo json_encode(['status' => TRUE,'pesan' => 'DATA BERHASIL DISIMPAN']);
			}else{
				echo json_encode(['status' => FALSE,'pesan' => 'DATA GAGAL DISIMPAN']);
			}	
		}else{
			if($this->mv->save_edit('tgejala', ['kode_gejala' => $this->input->post('kode_gejala')],$kirim)){
				echo json_encode(['status' => TRUE,'pesan' => 'DATA BERHASIL DIUPDATE']);
			}else{
				echo json_encode(['status' => FALSE,'pesan' => 'DATA GAGAL DIUPDATE']);
			}
		}
	}


	public function edit_gejala($kode_gejala){
		$data = $this->mv->edit_data('tgejala', ['kode_gejala' => rawurldecode($kode_gejala)])->row();
		echo json_encode($data);
	}

	public function delete_gejala($kode_gejala){
		if($this->mv->delete_data('tgejala', ['kode_gejala' => rawurldecode($kode_gejala)])){
			echo json_encode(['status' => TRUE,'pesan' => 'DATA BERHASIL DIHAPUS']);
		}else{
			echo json_encode(['status' => FALSE,'pesan' => 'DATA GAGAL DIHAPUS']);
		}
	}

	public function penyakit()
	{
		$data = [
			'penyakit' => $this->db->get('tpenyakit')->result()
		];
		$this->template->load('data/template', 'admin/master/penyakit',$data);
	}

	public function save_penyakit($metode){
		$kirim = [
			'nama_penyakit' => $this->input->post('nama_penyakit')
		];
		if($metode == 'tambah'){
			$kirim['kode_penyakit'] = $this->input->post('kode_penyakit');
			if($this->mv->save_data('tpenyakit', $kirim)){
				echo json_encode(['status' => TRUE,'pesan' => 'DATA BERHASIL DISIMPAN']);
			}else{
				echo json_encode(['status' => FALSE,'pesan' => 'DATA GAGAL DISIMPAN']);
			}	
		}else{
			if($this->mv->save_edit('tpenyakit', ['kode_penyakit' => $this->input->post('kode_penyakit')],$kirim)){
				echo json_encode(['status' => TRUE,'pesan' => 'DATA BERHASIL DIUPDATE']);
			}else{
				echo json_encode(['status' => FALSE,'pesan' => 'DATA GAGAL DIUPDATE']);
			}
		}
	}


	public function edit_penyakit($kode_penyakit){
		$data = $this->mv->edit_data('tpenyakit', ['kode_penyakit' => rawurldecode($kode_penyakit)])->row();
		echo json_encode($data);
	}

	public function delete_penyakit($kode_penyakit){
		if($this->mv->delete_data('tpenyakit', ['kode_penyakit' => rawurldecode($kode_penyakit)])){
			echo json_encode(['status' => TRUE,'pesan' => 'DATA BERHASIL DIHAPUS']);
		}else{
			echo json_encode(['status' => FALSE,'pesan' => 'DATA GAGAL DIHAPUS']);
		}
	}

	public function solusi()
	{
		$data = [
			'solusi' => $this->db->get('tsolusi')->result()
		];
		$this->template->load('data/template', 'admin/master/solusi',$data);
	}

	public function save_solusi($metode){
		$kirim = [
			'solusi' => $this->input->post('solusi')
		];
		if($metode == 'tambah'){
			$kirim['kode_solusi'] = $this->input->post('kode_solusi');
			if($this->mv->save_data('tsolusi', $kirim)){
				echo json_encode(['status' => TRUE,'pesan' => 'DATA BERHASIL DISIMPAN']);
			}else{
				echo json_encode(['status' => FALSE,'pesan' => 'DATA GAGAL DISIMPAN']);
			}	
		}else{
			if($this->mv->save_edit('tsolusi', ['kode_solusi' => $this->input->post('kode_solusi')],$kirim)){
				echo json_encode(['status' => TRUE,'pesan' => 'DATA BERHASIL DIUPDATE']);
			}else{
				echo json_encode(['status' => FALSE,'pesan' => 'DATA GAGAL DIUPDATE']);
			}
		}
	}


	public function edit_solusi($kode_solusi){
		$data = $this->mv->edit_data('tsolusi', ['kode_solusi' => rawurldecode($kode_solusi)])->row();
		echo json_encode($data);
	}

	public function delete_solusi($kode_solusi){
		if($this->mv->delete_data('tsolusi', ['kode_solusi' => rawurldecode($kode_solusi)])){
			echo json_encode(['status' => TRUE,'pesan' => 'DATA BERHASIL DIHAPUS']);
		}else{
			echo json_encode(['status' => FALSE,'pesan' => 'DATA GAGAL DIHAPUS']);
		}
	}


	public function pengguna()
	{
		$data = [
			'pengguna' => $this->db->get('tpengguna')->result()
		];
		$this->template->load('data/template', 'admin/master/pengguna',$data);
	}

	public function save_pengguna($metode){
		$kirim = [
			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'alamat'	   => $this->input->post('alamat'),
			'tgl_lahir'		=> $this->input->post('tgl_lahir'),
			'no_hp'			=> $this->input->post('no_hp'),
			'akses'			=> $this->input->post('akses'),
			'username'	    => $this->input->post('username'),
			'nik'		    => $this->input->post('nik'),
			'jenis_kelamin'	=> $this->input->post('jk')	
		];
		if($metode == 'tambah'){
			$cek = $this->db->from('tpengguna')->order_by('kdpengguna','DESC')->limit(1)->get();
			if($cek->num_rows() > 0){
				$ok = $cek->row();
				$kode = substr($ok->kdpengguna,6,9);
				$kodene = sprintf("PG-%04s",++$kode);
			}else{
				$kodene="PG-0001";	
			}
			$kirim['password'] = md5($this->input->post('password'));
			$kirim['kdpengguna'] = $kodene;
			if($this->mv->save_data('tpengguna', $kirim)){
				echo json_encode(['status' => TRUE,'pesan' => 'DATA BERHASIL DISIMPAN']);
			}else{
				echo json_encode(['status' => FALSE,'pesan' => 'DATA GAGAL DISIMPAN']);
			}	
		}else{
			$cek =$this->mv->edit_data('tpengguna', ['kdpengguna' => $this->input->post('kdpengguna')])->row(); 
			if($cek->password != md5($this->input->post('password'))){
				$kirim['password'] = md5($this->input->post('password'));
			}
			if($this->mv->save_edit('tpengguna', ['kdpengguna' => $this->input->post('kdpengguna')],$kirim)){
				echo json_encode(['status' => TRUE,'pesan' => 'DATA BERHASIL DIUPDATE']);
			}else{
				echo json_encode(['status' => FALSE,'pesan' => 'DATA GAGAL DIUPDATE']);
			}
		}
	}


	public function edit_pengguna($kdpengguna){
		$data = $this->mv->edit_data('tpengguna', ['kdpengguna' => rawurldecode($kdpengguna)])->row();
		echo json_encode($data);
	}

	public function delete_pengguna($kdpengguna,$status){
		$stat = rawurldecode($status) == 'aktif' ? 'tidak_aktif' : 'aktif';
		$up = [
			'status'		=> $stat
		];
		$this->mv->save_edit('tpengguna', ['kdpengguna' => rawurldecode($kdpengguna)],$up);
		echo json_encode(['status' => TRUE,'pesan' => 'STATUS BERHASIL DIUBAH','status' => $status,'stat' => $stat]);	
		// if($this->mv->delete_data('tpengguna', ['kdpengguna' => rawurldecode($kdpengguna)])){
		// 	echo json_encode(['status' => TRUE,'pesan' => 'DATA BERHASIL DIHAPUS']);
		// }else{
		// 	echo json_encode(['status' => FALSE,'pesan' => 'DATA GAGAL DIHAPUS']);
		// }
	}

}

/* End of file Master.php */
/* Location: ./application/controllers/admin/Master.php */