<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>

<head>
	<title>Laporan Hasil Konsultasi Pasien RSUD Kabupaten Batang</title>
	<style type="text/css">
/*	.page-header,
	.page-header-space {
		height: 1mm;
	}

	.page-footer,
	.page-footer-space {
		height: 1mm;
	}

	.page-footer {
		position: fixed;
		bottom: 0;
		width: 100%;
	}

	.page-header {
		position: fixed;
		top: 0mm;
		width: 100%;
	}

	.page {
		page-break-after: always;
		margin-left: 1mm;
		margin-right: 1mm;
	}

	@page {
		margin: 17mm 17mm 17mm 17mm;
	}

	html,
	body {
		width: 210mm;
		height: 297mm;
	}

	@media print {
		thead {
			display: table-header-group;
		}

		tfoot {
			display: table-footer-group;
		}

		body {
			margin: 0;
		}
	}

	table.tbl {
		width: 100%;
		border-collapse: collapse;
	}

	table.tbl th {
		padding: 6px;
	}

	table.tbl td {
		padding: 5px;
		}*/
	</style>
</head>

<body>
	<div class="page-header" style="text-align: center"></div>
	<div class="page-footer"></div>
	<table width="100%">
		<thead>
			<tr>
				<td>
					<!--place holder for the fixed-position header-->
					<div class="page-header-space"></div>
				</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<!--*** CONTENT GOES HERE ***-->
					<div class="page">
						<table width="100%">
							<tr>
								<td colspan="2" align="center"><span style="font-size: 30px;font-weight: bold;">Laporan Hasil Konsultasi Pasien RSUD Kabupaten Batang</span></td>
							</tr>
							<tr>
								<td colspan="2" align="center">Jl. Dr.Sutomo No.42, Kadilangu, Kauman, Kec. Batang, Kabupaten Batang, Jawa Tengah 51216</td>
							</tr>
							<tr>
								<td colspan="2" align="center">(0285) 4493033</td>
							</tr>
						</table>
						<hr>
						<div align="center">
							<?php 
							if($tgl_awal != "kosong"){
								?>
								<b>PERIODE : <?= $tgl_awal ?> S/D <?= $tgl_akhir ?> </b>
								<?php 
							}
							?>
							<br>
							<!-- 	 -->
						</div>
						<br>
						<table class="tbl" border="1"  cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>No</th>
									<th>Tanggal Konsul</th>
									<th>NIK</th>
									<th>Nama Lengkap</th>
									<th>Usia</th>
									<th>Jenis Kelamin</th>
									<th>Tanggal Lahir</th>
									<th>Alamat</th>
									<th>No Hp</th>
									<th>Hasil Penyakit</th>
									<th>Solusi Penyakit</th>
									
								</tr>
							</thead>
							<tbody>
								<?php $no=1; foreach($lap as $l): ?>
								<tr>
									<td align="center"><?=$no++?></td>
									<td align="center"><?=tgl_indo($l->tgl_input)?></td>
									<td align="center"><?=$l->nik?></td>
									<td align="center"><?=$l->nama_pasien?></td>
									<td align="center"><?=$l->usia?></td>
									<td align="center"><?=$l->jenis_kelamin?></td>
									<td align="center"><?=tgl_indo($l->tgl_lahir)?></td>
									<td align="center"><?=$l->alamat?></td>
									<td align="center"><?=$l->no_hp?></td>
									<td align="center"><?=$l->penyakit?></td>
									<td align="center"><?=$l->solusi?></td>
								</tr>
							<?php endforeach; ?>
						</tbody>

					</table>
				</div>
			</td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<td>
				<!--place holder for the fixed-position footer-->
				<div class="page-footer-space">Batang,<?=tgl_indo(date('Y-m-d'))?></div><br>
				Mengetahui, Tenaga Medis 
				
			</td>
		</tr>
		<?php for($i=1;$i<=10;$i++): ?>
			<tr>
				<td></td>
			</tr>
		<?php endfor; ?>
		<tr>
			<td>Admin</td>
		</tr>
	</tfoot>

</table>
</body>

</html>