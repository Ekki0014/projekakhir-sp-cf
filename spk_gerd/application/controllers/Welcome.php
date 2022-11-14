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
					$sdata['username'] = $result->username;
					$sdata['password'] = $result->password;
					$sdata['akses'] = $result->akses;
					$sdata['tgl_lahir'] = $result->tgl_lahir;
					$sdata['no_hp'] = $result->no_hp;
					$sdata['kdpengguna']   = $result->kdpengguna;
					$this->session->set_userdata($sdata);
					if ($sdata['akses'] == 'adm') {
						redirect('admin/Master/gejala');
					} else if ($sdata['akses'] == 'pelanggan') {
						redirect('admin/Diagnosa/konsultasi');
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

	public function register()
	{
		$this->load->view('register');
	}

	public function saveRegister()
	{
		$send = [
			'namaLengkap'	=> $this->input->post('namaLengkap'),
			'alamat'		=> $this->input->post('alamat'),
			'username'		=> $this->input->post('nik'),
			'password'		=> md5($this->input->post('password')),
			'hakAkses'		=> "pelanggan",
			'nik'			=> $this->input->post('nik'),
			'status'		=> 'a',
			'tgl_masuk'		=> date('Y-m-d')
		];
		$config['upload_path']		='assets/images';
		$config['allowed_types']	= '*';
		$config['encrypt_name']		= TRUE;
		$this->load->library('upload',$config);
		if($this->upload->do_upload('foto')){
			$uploadData		= $this->upload->data();
			$uploadFile		= $uploadData['file_name'];
		}
		$send['foto']		= $uploadFile;
		$this->mv->save_data('tbuser', $send);
		redirect('Welcome');	
	}
}
