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
								<td colspan="2" align="center">Jalan Dr. Sutomo No. 42, Batang</td>
							</tr>
							<!-- <tr>
								<td colspan="2" align="center">082322744798</td>
							</tr> -->
						</table>
						<hr>
						<div align="center">
							<b>PERIODE : <?= tgl_indo($tgl_awal) ?> S/D <?= tgl_indo($tgl_akhir) ?> </b><br>
							<!-- 	 -->
						</div>
						<br>
						<table class="tbl" border="1"  cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Pasien</th>
									<!-- <th>PELANGGAN</th> -->
									<th>Tanggal Lahir</th>
									<th>Alamat</th>
									<th>No Hp</th>
									<th>Hasil Penyakit</th>
								</tr>
							</thead>
							<tbody>
								<?php $no=1; foreach($lap as $l): ?>
								<tr>
									<td align="center"><?=$no++?></td>
									<td align="center"><?=$l->nama_pasien?></td>
									<td align="center"><?=$l->tgl_lahir?></td>
									<td align="center"><?=$l->alamat?></td>
									<td align="center"><?=$l->no_hp?></td>
									<td align="center"><?=$l->penyakit?></td>
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
					<div class="page-footer-space"></div>
				</td>
			</tr>
		</tfoot>

	</table>
</body>

</html>