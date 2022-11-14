
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_unv', 'mv');
		//Load Dependencies

	}

	// List all your items
	public function pasien()
	{
		$this->template->load('data/template', 'admin/laporan/pasien');
	}


	public function tampilkan_pasien(){
		$tgl_awal 		= $this->input->post('tgl_awal');
		$tgl_akhir		= $this->input->post('tgl_akhir');

		$pasien = $this->db->query("SELECT * FROM tkonsultasi_h WHERE tgl_input BETWEEN '".$tgl_awal."'"."AND "."'".$tgl_akhir."' ORDER BY tgl_input DESC")->result();
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
		echo json_encode(['status' => TRUE,'data' => $tampung]);
	}

	public function cetak_semua($tgl_awal,$tgl_akhir){
		$this->load->library("Pdfgenerator");

		$pasien = $this->db->query("SELECT * FROM tkonsultasi_h WHERE tgl_input BETWEEN '".$tgl_awal."'"."AND "."'".$tgl_akhir."' ORDER BY tgl_input DESC")->result();
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
	 	$data['lap'] 		= $tampung;
	 	$data['tgl_awal'] 	= $tgl_awal;
	 	$data['tgl_akhir'] 	= $tgl_akhir;
		$file_pdf       	= "DATA PRINTING";
		$paper          	= "f4";
		$orientation    	= "potrait";
		$html           	= $this->load->view('admin/laporan/cetak_laporan',$data,true);
		 //$this->load->view('admin/cetak_resep',$data,true);
		$this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
	}


}

/* End of file Laporan.php */
/* Location: ./application/controllers/admin/Laporan.php */


?>