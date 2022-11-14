<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnosa extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_unv', 'mv');
	}

	public function diagnosa()
	{
		$send = [
			'penyakit' => $this->mv->get_data('tpenyakit'),
			'gejala'   => $this->mv->get_data('tgejala'),
			'setting'  => $this->db->select('*')->from('tsetting_h')->join('tpenyakit','tsetting_h.kode_penyakit = tpenyakit.kode_penyakit')->get(),
		];
		$this->template->load('data/template', 'admin/setting/diagnosa',$send);
	}

	public function add_gejala()
	{
		$data = [
			'id'	=> $this->input->post('kd_gejala'),
			'qty'	=>10,
			'name'	=> $this->input->post('nm_gejala'),
			'price'	=>10
		];

		$this->cart->insert($data);
		echo $this->show_cart();
	}


	public function show_cart(){
		$output = '';
		foreach($this->cart->contents() as $items):
			$output .='
			<tr>
			<td>'.$items['name'].'</td>
			<td><button type="button" id="'.$items['rowid'].'" class="hapus_gejala btn btn-danger btn-xs">Batal</button></td>
			</tr>
			';
		endforeach;
		return $output;
	}

	public function load_cart(){
		echo $this->show_cart();
	}

	public function hapus_cart(){
		$data = array(
			'rowid' => $this->input->post('row_id'),
			'qty'   => 0,
		);
		$this->cart->update($data);
		echo $this->show_cart();
	}


	public function simpan_setting($metode){
		if($metode == "tambah"){
			$kode = $this->mv->get_data('tsetting_h')->num_rows();
			$send = [
				'kode_penyakit'	=> $this->input->post('penyakit')
			];
			if($kode > 0){
				$send['kode_setting'] = sprintf("SET-%04s",++$kode);
			}else if($kode ==0){
				$send['kode_setting']="SET-0001";	
			}
			$this->mv->save_data('tsetting_h', $send);
			foreach($this->cart->contents() as $items):
				$kd = $this->mv->get_data('tsetting_d')->num_rows();
				if($kd > 0){
					$kodene = sprintf("SETD-%04s",++$kd);
				}else if($kd ==0){
					$kodene="SETD-0001";	
				}
				$set = [
					'kode_set_d' => $kodene,
					'kode_setting'	=> $send['kode_setting'],
					'kode_gejala'  => $items['id']
				];
				$this->mv->save_data('tsetting_d', $set);
			endforeach;
			$this->cart->destroy();	
			echo json_encode(['status' => TRUE,'pesan' => "DATA BERHASIL DISIMPAN",'metode' => $metode]);		
		}else{
			$send = [
				'kode_penyakit'  => $this->input->post('penyakit')
			];

			$this->mv->save_edit('tsetting_h', ['kode_setting' => $this->input->post('kode_setting')],$send);
			$this->mv->delete_data('tsetting_d',['kode_setting' => $this->input->post('kode_setting')]);
			foreach($this->cart->contents() as $items):
				$cek = $this->db->from('tsetting_d')->order_by('kode_set_d','DESC')->limit(1)->get();
				if($cek->num_rows() > 0){
					$ok = $cek->row();
					$kode = substr($ok->kode_set_d,6,9);
					$kodene = sprintf("SETD-%04s",++$kode);
				}else{
					$kd = $cek->num_rows();
					if($kd > 0){
						$kodene = sprintf("SETD-%04s",++$kd);
					}else if($kd ==0){
						$kodene="SETD-0001";	
					}	
				}

				$set = [
					'kode_set_d' => $kodene,
					'kode_setting'	=> $this->input->post('kode_setting'),
					'kode_gejala'  => $items['id']
				];
				$this->mv->save_data('tsetting_d', $set);
			endforeach;
			$this->cart->destroy();	
			echo json_encode(['status' => TRUE,'pesan' => "DATA BERHASIL DIUPDATE",'metode' => $metode]);	
		}
		
		
	}


	public function gejala_penyakit($kode_setting){
		$kode = rawurldecode($kode_setting);
		$data = $this->db->select('tsetting_d.*,tgejala.nama_gejala')->from('tsetting_d')->join('tgejala','tsetting_d.kode_gejala = tgejala.kode_gejala')->where(['tsetting_d.kode_setting' => $kode])->get()->result();
		$output = '';
		foreach($data as $d):
			$output .='
			<tr>
			<td>'.$d->kode_gejala.'</td>
			<td>'.$d->nama_gejala.'</td>
			<td><button type="button" id="'.$d->kode_set_d.'" class="hapus_gej btn btn-danger btn-xs">Batal</button></td>
			</tr>
			';
		endforeach;
		echo json_encode($output);
	}

	public function edit_diagnosa($kode_setting){
		$data = $this->mv->edit_data('tsetting_h', ['kode_setting' => rawurldecode($kode_setting)])->row();
		$detail = $this->db->select('tsetting_d.*,tgejala.nama_gejala')->from('tsetting_d')->join('tgejala','tsetting_d.kode_gejala=tgejala.kode_gejala')->where(['tsetting_d.kode_setting' => rawurldecode($kode_setting)])->get()->result();		
		$this->cart->destroy();
		foreach($detail as $d):
			$isi = [
				'id'	=> $d->kode_gejala,
				'qty'	=>10,
				'name'	=> $d->nama_gejala,
				'price'	=>10,
				'kode_set_d' => $d->kode_set_d
			];
			$this->cart->insert($isi);
		endforeach;
		echo json_encode($data);
	}

	public function reset_cart(){
		$this->cart->destroy();
		echo json_encode(['status' => TRUE]);
	}

	public function hapus_gejala(){
		
		$cek = $this->mv->edit_data('tsetting_d', ['kode_set_d' => $this->input->post('row_id')])->row();
		$nm = $this->db->select('tsetting_h.kode_penyakit,tpenyakit.nama_penyakit')->from('tsetting_h')->join('tpenyakit','tsetting_h.kode_penyakit = tpenyakit.kode_penyakit')->where(['tsetting_h.kode_setting' => $cek->kode_setting])->get()->row();

		if($this->mv->delete_data('tsetting_d', ['kode_set_d' => $this->input->post('row_id')])){
			echo json_encode(['status' => true,'pesan' => "DATA BERHASIL DIHAPUS",'kode_setting' => $cek->kode_setting,'nama_penyakit' => $nm->nama_penyakit]);
		}else{
			echo json_encode(['status' => false, 'pesan' => "DATA GAGAL DIHAPUS"]);
		}
	}

	public function delete_diagnosa($kode_setting){
		$del_h = $this->mv->delete_data('tsetting_h', ['kode_setting' => rawurldecode($kode_setting)]);
		if($del_h){
			$del_d = $this->mv->delete_data('tsetting_d', ['kode_setting' => rawurldecode($kode_setting)]);
			echo json_encode(['status' => true, 'pesan' => "DATA BERHASIL DIHAPUS"]);
		}else{
			echo json_encode(['status' => false, 'pesan' => "DATA GAGAL DIHAPUS"]);
		}
	}

	public function konsultasi(){
		$data = [
			'gejala' => $this->mv->get_data('tgejala')->result()
		];
		$this->template->load('data/template', 'admin/setting/konsultasi',$data);
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

}

/* End of file Diagnosa.php */
/* Location: ./application/controllers/admin/Diagnosa.php */