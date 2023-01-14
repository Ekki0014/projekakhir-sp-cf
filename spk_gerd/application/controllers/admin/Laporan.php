
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
		$data['usia'] = $this->db->query("SELECT DISTINCT usia from tkonsultasi_h WHERE usia IS NOT NULL")->result();
		$this->template->load('data/template', 'admin/laporan/pasien',$data);
	}


	public function tampilkan_pasien(){


		$tgl_awal 		= $this->input->post('tgl_awal');
		$tgl_akhir		= $this->input->post('tgl_akhir');

		$where=[];
		if($tgl_awal != "" || $tgl_awal != null){
		//	$tgl = ['tgl_input >=' => $tgl_awal, 'tgl_input <=' => $tgl_akhir];
			//array_push($where,$tgl);
			$where['tgl_input >=']  = $tgl_awal;
			$where['tgl_input <=']  = $tgl_akhir;
			//$tglak = 'tgl_akhir <='.$tgl_akhir;
			// $tanggal = "tgl_input BETWEEN '".$tgl_awal."'"."AND "."'".$tgl_akhir."'";
		}
		// else{
		// 	$tgl=[];
		// 	//$tglak="";
		// }

		if($this->input->post('jk') != "" || $this->input->post('jk') != null  ){
			$where['jenis_kelamin'] = $this->input->post('jk');
			// $kelamin = ['jenis_kelamin' =>$this->input->post('jk') ];
			// array_push($where,$kelamin);
			//$kelamin = "jenis_kelamin='".."'";
		}
		// else{
		// 	$kelamin=[];
		// }

		if($this->input->post('usia') != "" || $this->input->post('usia') != null){
			$where['usia'] = $this->input->post('usia');
			// $usia = ['usia' => $this->input->post('usia')];
			// array_push($where,$usia);
			//$usia = "usia='".$this->input->post('usia')."'";
		}


		//$q = "SELECT * FROM tkonsultasi_h WHERE  ".$tanggal." ".$kelamin." ".$usia."  ORDER BY tgl_input DESC";
		//$q=$where;
		//$merge = array_merge($where,$where);
		//$pasien=[];
		$pasien = $this->db->get_where('tkonsultasi_h',$where)->result();
		//$this->db->query($q)->result();
		
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
			$kd_peny = $pen[0]->kode_penyakit;
			$cek_sol = $this->db->query("SELECT tsolusi.kode_solusi,tsolusi.solusi FROM tsetting_h,tsolusi WHERE tsetting_h.kode_solusi = tsolusi.kode_solusi AND tsetting_h.kode_penyakit='".$kd_peny."'")->row();
		// $this->db->select('*')->from('tsetting_h')->join('tsolusi','tsolusi.kode_solusi = tsetting_h.kode_solusi')->where('tsetting_h',['tsetting_h.kode_penyakit' => "P01"])->get()->row();
			$p->solusi = $cek_sol->solusi;
			array_push($tampung,$p);

		endforeach;
		echo json_encode(['status' => TRUE,'data' => $tampung]);
		//print_r($q);
	}

	public function cetak_semua($tgl_awal ,$tgl_akhir,$kelamin ,$usia="" ){
		$this->load->library("Pdfgenerator");
		$where=[];
		if($tgl_awal != "kosong" ){
		//	$tgl = ['tgl_input >=' => $tgl_awal, 'tgl_input <=' => $tgl_akhir];
			//array_push($where,$tgl);
			$where['tgl_input >=']  = $tgl_awal;
			$where['tgl_input <=']  = $tgl_akhir;
			//$tglak = 'tgl_akhir <='.$tgl_akhir;
			// $tanggal = "tgl_input BETWEEN '".$tgl_awal."'"."AND "."'".$tgl_akhir."'";
		}
		// else{
		// 	$tgl=[];
		// 	//$tglak="";
		// }

		if($kelamin != "kosong"   ){
			$where['jenis_kelamin'] = $kelamin;
			// $kelamin = ['jenis_kelamin' =>$this->input->post('jk') ];
			// array_push($where,$kelamin);
			//$kelamin = "jenis_kelamin='".."'";
		}
		// else{
		// 	$kelamin=[];
		// }

		if($usia != "kosong"){
			$where['usia'] = $usia;
			// $usia = ['usia' => $this->input->post('usia')];
			// array_push($where,$usia);
			//$usia = "usia='".$this->input->post('usia')."'";
		}

		//$q = "SELECT * FROM tkonsultasi_h WHERE  ".$tanggal." ".$kelamin." ".$usia."  ORDER BY tgl_input DESC";
		//$q=$where;
		//$merge = array_merge($where,$where);
		//$pasien=[];
		$pasien = $this->db->get_where('tkonsultasi_h',$where)->result();
		//$this->db->query($q)->result();
		//$pasien = $this->db->query("SELECT * FROM tkonsultasi_h WHERE tgl_input BETWEEN '".$tgl_awal."'"."AND "."'".$tgl_akhir."' ORDER BY tgl_input DESC")->result();
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
			$kd_peny = $pen[0]->kode_penyakit;
			$cek_sol = $this->db->query("SELECT tsolusi.kode_solusi,tsolusi.solusi FROM tsetting_h,tsolusi WHERE tsetting_h.kode_solusi = tsolusi.kode_solusi AND tsetting_h.kode_penyakit='".$kd_peny."'")->row();
		// $this->db->select('*')->from('tsetting_h')->join('tsolusi','tsolusi.kode_solusi = tsetting_h.kode_solusi')->where('tsetting_h',['tsetting_h.kode_penyakit' => "P01"])->get()->row();
			$p->solusi = $cek_sol->solusi;
			array_push($tampung,$p);
		endforeach;
		$data['lap'] 		= $tampung;
		$data['tgl_awal'] 	= $tgl_awal;
		$data['tgl_akhir'] 	= $tgl_akhir;
		// print_r($data);
		$file_pdf       	= "DATA KONSULTASI";
		$paper          	= "f4";
		$orientation    	= "landscape";
		$html           	= $this->load->view('admin/laporan/cetak_laporan',$data,true);
		 //$this->load->view('admin/cetak_resep',$data,true);
		$this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);

	}


}

/* End of file Laporan.php */
/* Location: ./application/controllers/admin/Laporan.php */


?>