<?php if (!defined("BASEPATH")) exit("No direct script access allowed");

function alertsuccess($pesan)
{
	$ci = &get_instance();
	return $ci->session->set_flashdata("pesan", "<script>$(document).ready(function(){alert('asd');});</script>");
}
function alerterror($pesan)
{
	$ci = &get_instance();
	return $ci->session->set_flashdata("pesan", "<script>document.onload = setTimeout(function () {Command: toastr['error']('" . $pesan . "', 'MAAF !!!!')
		toastr.options = {'closeButton': false,'debug': false,'newestOnTop': false,'progressBar': false,'positionClass': 'toast-bottom-right','preventDuplicates': false,'showDuration': '300','hideDuration': '1000','timeOut': '5000','extendedTimeOut': '1000','showEasing': 'easeOutBounce','hideEasing': 'easeInBack','showMethod': 'slideDown','hideMethod': 'slideUp'}}, 0);</script>");
}

function ambil_satu_colom($table, $where)
{
	$ci = &get_instance();
	return $ci->db->get_where($table, $where);
}

function ceksession()
{
	$ci = &get_instance();
	if ($ci->session->userdata('username') == null || $ci->session->userdata('nama_pengguna') == null || $ci->session->userdata('no_telp') == null || $ci->session->userdata('email') == null  || $ci->session->userdata('alamat') == null || $ci->session->userdata('hak_akses') == null || $ci->session->userdata('status') == null) {
		$ci->session->unset_userdata('username');
		$ci->session->unset_userdata('nama_pengguna');
		$ci->session->unset_userdata('no_telp');
		$ci->session->unset_userdata('email');
		$ci->session->unset_userdata('alamat');
		$ci->session->unset_userdata('hak_akses');
		$ci->session->unset_userdata('status');
		return FALSE;
	} else {
		if ($ci->session->userdata('status') != "SIPS-DESA-BUKUR") {
			$ci->session->unset_userdata('username');
			$ci->session->unset_userdata('nama_pengguna');
			$ci->session->unset_userdata('no_telp');
			$ci->session->unset_userdata('email');
			$ci->session->unset_userdata('alamat');
			$ci->session->unset_userdata('hak_akses');
			$ci->session->unset_userdata('status');
			return FALSE;
		} else {
			return TRUE;
		}
	}
}
function kode_otomatis()
{
	$ci = &get_instance();
	return $ci->uuid->v4();
}
function tgl_indo($tanggal)
{
	$bulan = array(
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}
function rupiah($d)
{
	return 'Rp.' . number_format($d, 0, ',', '.');
}
function cekIdUbah()
{
	$ci = &get_instance();
	if ($ci->session->userdata('id_ubah')) {
		return true;
	} else {
		return false;
	}
}
function bulanRomawi($bulan)
{
	//$bulan = date('m');
	if ($bulan == 1) {
		return 'JANUARI';
	} else if ($bulan == 2) {
		return 'FEBRUARI';
	} else if ($bulan == 3) {
		return 'MARET';
	} else if ($bulan == 4) {
		return 'APRIL';
	} else if ($bulan == 5) {
		return 'MEI';
	} else if ($bulan == 6) {
		return 'JUNI';
	} else if ($bulan == 7) {
		return 'JULI';
	} else if ($bulan == 8) {
		return 'AGUSTUS';
	} else if ($bulan == 9) {
		return 'SEPTEMBER';
	} else if ($bulan == 10) {
		return 'OKTOBER';
	} else if ($bulan == 11) {
		return 'NOVEMBER';
	} else if ($bulan == 12) {
		return 'DESEMBER';
	}
}
function nomorSurat($tahun)
{
	$ci 			= &get_instance();
	$total 			= $ci->db->select('".$field."')
	->from('surat')
	->like('no_surat', $tahun, 'both')
	->get()->num_rows();
	$totall			= ++$total;
	return '045.2 / ' . $totall . ' / ' . bulanRomawi() . ' / ' . $tahun;
}
function format_indo($tgl)
{
	$pecahka = explode('-', $tgl);
	return $pecahka[2] . ' ' . $pecahka[1] . ' ' . $pecahka[0];
}

function bulane($bulan){
	$data_bulan = array(
		'1' => 'Jan',
		'2' => 'Feb',
		'3' => 'Mar',
		'4' => 'Apr',
		'5' => 'Mei',
		'6' => 'Jun',
		'7' => 'Jul',
		'8' => 'Agu',
		'9' => 'Sep',
		'10' => 'Okt',
		'11' => 'Nov',
		'12' => 'Des',
	);
	return $data_bulan[$bulan];
}

function random_color_part(){
	return str_pad(dechex(mt_rand(0,255)), 2, '0',STR_PAD_LEFT);
}

function random_color(){
	return random_color_part().random_color_part().random_color_part();
}

