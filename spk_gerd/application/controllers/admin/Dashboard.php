<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_unv', 'mv');
	}

	public function index()
	{
		// $data['lho'] = $this->db->query("SELECT * FROM tb_transaksi,tb_bahan WHERE tb_transaksi.kode_bahan=tb_bahan.kode_bahan AND month(tb_transaksi.tgl_transaksi) BETWEEN '1' AND '".$bulan."' AND tb_transaksi.jml_keluar !=0 GROUP BY tb_transaksi.kode_bahan")->result_array();
		$this->template->load('data/template','admin/dashboard');
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/admin/Dashboard.php */
?>