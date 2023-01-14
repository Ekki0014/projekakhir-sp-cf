<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_login', 'ml');
		$this->load->model('Model_unv', 'mv');
	}
	public function index()
	{
		if (isset($_POST['submit'])) {
			$this->form_validation->set_rules('username', 'username', 'required');
			$this->form_validation->set_rules('password', 'password', 'required');
			if (!$this->form_validation->run()) {
				$session['gagal'] = "Username atau Password Salah";
				$this->session->set_userdata($session);
				redirect('Welcome');
			} else {
				$username = $this->input->post('username', true);
				$password = $this->input->post('password', true);
				$result = $this->ml->get_login($username, $password);
				if ($result) {
					$sdata['username'] = $result->username;
					$sdata['nama_lengkap'] = $result->nama_lengkap;
					$sdata['alamat'] = $result->alamat;
					$sdata['nik']	= $result->nik;
					$sdata['jenis_kelamin']	= $result->jenis_kelamin;
					$sdata['status']		= $result->status;
					$sdata['username'] = $result->username;
					$sdata['password'] = $result->password;
					$sdata['akses'] = $result->akses;
					$sdata['tgl_lahir'] = $result->tgl_lahir;
					$sdata['no_hp'] = $result->no_hp;
					$sdata['kdpengguna']   = $result->kdpengguna;
					$this->session->set_userdata($sdata);
					if ($sdata['akses'] == 'adm') {
						redirect('admin/Dashboard');
					} else if ($sdata['akses'] == 'psn') {
						redirect('pasien/Konsultasi/Konsultasi');
					}
				} else {
					$session['gagal'] = "Username atau Password Salah";
					$this->session->set_userdata($session);
					redirect('welcome');
				}
			}
		}else{

			$this->load->view('welcome_message');
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('Welcome');
	}

	public function saveRegister()
	{
		$kirim = [
			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'alamat'	   => $this->input->post('alamat'),
			'tgl_lahir'		=> $this->input->post('tgl_lahir'),
			'no_hp'			=> $this->input->post('no_hp'),
			'akses'			=> $this->input->post('akses'),
			'username'	    => $this->input->post('username'),
			'nik'		    => $this->input->post('nik'),
			'jenis_kelamin'	=> $this->input->post('jk'),
			'status'		=> 'tidak_aktif'	
		];
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
		
	}
}
