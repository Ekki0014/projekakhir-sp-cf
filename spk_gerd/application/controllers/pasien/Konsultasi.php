<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsultasi extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_unv', 'mv');
	}

	public function konsultasi(){
		$data = [
			'gejala' => $this->mv->get_data('tgejala')->result()
		];
		$this->template->load('data/template', 'pasien/konsultasi',$data);
	}

	public function checking(){
		$pilihan = [
			'pilihan'  	=>  $this->input->post('pilihan'),
			'nama'     	=> $this->input->post('nama'),
			'alamat'	=> $this->input->post('alamat'),
			'no_hp'		=> $this->input->post('no_hp'),
			'tgl_lahir' => $this->input->post('tgl_lahir')
		];

		$cek = $this->db->from('tkonsultasi_h')->order_by('kd_konsultasi','DESC')->limit(1)->get();
		if($cek->num_rows() > 0){
			$ok = $cek->row();
			$kode = substr($ok->kd_konsultasi,6,9);
			$kodene = sprintf("SOLH-%04s",++$kode);
		}else{
			$kodene="SOLH-0001";	
		}
		$send = [
			'kd_konsultasi'	=> $kodene,
			'nama_pasien'   => $this->input->post('nama'),
			'alamat'		=> $this->input->post('alamat'),
			'tgl_lahir'	    => $this->input->post('tgl_lahir'),
			'no_hp'			=> $this->input->post('no_hp'),
			'tgl_input' 	=> date("Y-m-d")
		];

		if($this->mv->save_data('tkonsultasi_h', $send)){
			foreach($this->input->post('pilihan') as $p):
				$cek2 = $this->db->from('tkonsul_d')->order_by('kd_konsul_d','DESC')->limit(1)->get();
				if($cek2->num_rows() > 0){
					$is = $cek2->row();
					$kodd = substr($is->kd_konsul_d,6,9);
					$koddd = sprintf("SOLD-%04s",++$kodd);
				}else{
					$koddd = "SOLD-0001";
				}
				$kirim = [
					'kd_konsul_d' => $koddd,
					'kd_konsul_h' => $kodene,
					'kd_gejala'	  => $p
				];
				$this->mv->save_data('tkonsul_d', $kirim);
			endforeach;
		}

		$setting = $this->mv->get_data('tsetting_h');
		$header =[];
		$kk=[];
		$kiriman =[];
		foreach($setting->result() as $s):
			$jml=0;
			$isine="";
			$isip="";
			$isko="";
			$kode_gej=[];
			$kode_gejala=[];
			$detail = $this->mv->edit_data('tsetting_d', ['kode_setting' => $s->kode_setting])->result_array();
			foreach($detail as $d):
				$bot = $this->mv->edit_data('tgejala',['kode_gejala' => $d['kode_gejala']])->row();
				if(in_array($d['kode_gejala'],$this->input->post('pilihan'))){
					$bobot = str_replace(",",".",$bot->bobot);
					array_push($kode_gej,$bobot);
					array_push($kode_gejala,$d['kode_gejala']);
					$jml+=$bobot;
				}
			endforeach;
			if(count($kode_gej) > 0){
				$j = $kode_gej[0];
				$itungan = (float)$jml * (1-$j);
				$cf = $itungan * 100;
				$isi = [
					'skor' => (float)$jml,
					'J'		=> $j,
					'bobot_gejala' => $kode_gej,
					'kode_gejala'  => $kode_gejala,
					'itungan' => round($itungan,2),
					'cf'	=> round($cf,2)."%"
				];
				array_push($kk,$isi);

				$kirim_hasil = [
					'kd_konsultasi'	=> $send['kd_konsultasi'],
					'skor_perhitungan'	=> round($cf,2),
					'kode_penyakit'		=> $s->kode_penyakit
				];
				array_push($kiriman,$kirim_hasil);

			}
		endforeach;
		$this->db->insert_batch('tkeputusan', $kiriman);
		$cek_dulu = $this->db->query("SELECT *,skor_perhitungan as skor FROM tkeputusan,tpenyakit WHERE tkeputusan.kode_penyakit = tpenyakit.kode_penyakit AND tkeputusan.kd_konsultasi='".$send['kd_konsultasi']."'")->result();
		$wadah=[];
		foreach($cek_dulu as $cd):
			array_push($wadah,$cd);
		endforeach;
		$keys = array_column($wadah, 'skor');
		array_multisort($keys, SORT_DESC, $wadah);
		$datah = [
			'tertinggi'	=> $wadah[0],
			'wadah'      => $wadah,
			'semua'		=> $wadah,
		];
		//echo json_encode(['status' => TRUE,'isi' => $header,'kk' => $kk,'kiriman' => $kiriman,'datah' => $datah]);
		echo json_encode(['status' => TRUE,'datah' => $datah]);
	}

	public function cetak_konsul($kd_konsultasi){
		
		$this->load->library("Pdfgenerator");
		$data['konsul'] = $this->mv->edit_data('tkonsultasi_h', ['kd_konsultasi' => rawurldecode($kd_konsultasi)])->row();
		$file_pdf       = "DATA KONSULTASI";
		$paper          = "f4";
		$orientation    = "potrait";
		$html           = $this->load->view('admin/setting/cetak_hasil_pasien',$data,true);
		 //$this->load->view('admin/cetak_resep',$data,true);
		$this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
	}

	public function data_konsul(){
		$pasien = $this->mv->edit_data('tkonsultasi_h', ['nama_pasien' => $this->session->userdata('nama_lengkap'),'alamat' => $this->session->userdata('alamat'),'tgl_lahir' => $this->session->userdata('tgl_lahir'),'no_hp' => $this->session->userdata('no_hp')])->result();
		// $this->db->query("SELECT * FROM tkonsultasi_h WHERE tgl_input BETWEEN '".$tgl_awal."'"."AND "."'".$tgl_akhir."' ORDER BY tgl_input DESC")->result();
		$tampung =[];
		foreach($pasien as $p):
			$pen=[];
			$cek_dulu = $this->db->query("SELECT *,skor_perhitungan as skor FROM tkeputusan,tpenyakit WHERE tkeputusan.kode_penyakit = tpenyakit.kode_penyakit AND tkeputusan.kd_konsultasi='".$p->kd_konsultasi."'")->result();
			foreach($cek_dulu as $cd):
				array_push($pen,$cd);
			endforeach;
			$keys = array_column($pen, 'skor');
			array_multisort($keys, SORT_DESC, $pen);
			$p->penyakit = $pen[0]->nama_penyakit."(".$pen[0]->skor_perhitungan." %)";
			array_push($tampung,$p);
		endforeach;
		$data['tamp'] = $tampung;
		$this->template->load('data/template', 'pasien/data_konsultasi',$data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/admin/Dashboard.php */
?>