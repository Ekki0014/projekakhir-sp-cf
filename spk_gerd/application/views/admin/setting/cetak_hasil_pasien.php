<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>

<head>
    <!-- <title>SURAT PESAN TEMPAT</title> -->
  <!--   <style type="text/css">
    .page-header,
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
        margin-left: 12mm;
        margin-right: 12mm;
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
    }

    @media print {
        .bgcol {
            background-color: black !important;
            -webkit-print-color-adjust: exact;
        }
    }

    td {
        vertical-align: top;
    }
</style> -->
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
                        <center>
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">

                                <tr>
                                    <td align="center" width="5%"><img style="width : 80px;margin-right: -200px" src="<?= base_url(); ?>assets_/logo.png?>"></td>
                                    <td align="center"><center><span style="word-spacing : 5px;font-size: 20px;font-weight: bold;">RSUD KABUPATEN BATANG</span> <br><span style="word-spacing : 5px;">Jalan Dr. Sutomo No. 42, Batang</span></center></td>

                                </tr>
                            </table>
                        </center>
                        <hr>
                        <hr size="5px">

                        <br>
                        <table width="100%" cellpadding="0" cellpadding="0" cellspacing="0" border="0">
                            <tr >
                                <td><b>Data Pasien :</b></td>
                            </tr>
                        </table>
                        <br>

                        <table width="100%" cellpadding="0" cellspacing="1" border="0">
                         <tr>

                            <td>Kode Konsultasi</td>
                            <td >: <?=$konsul->kd_konsultasi?></td>
                            <!--  <td><?=$data->alamat;?></td> -->
                        </tr>
                        <tr>

                            <td>Tanggal Konsultasi</td>
                            <td >: <?=tgl_indo($konsul->tgl_input)?></td>
                            <!--  <td><?=$data->alamat;?></td> -->
                        </tr>
                        <tr>

                            <td width="40%">NIK Pasien</td>
                            <td>: <?=$konsul->nik?></td>
                            <!--   <td><?=$data->nama_jenazah?></td> -->
                        </tr> 
                        <tr>

                            <td width="40%">Nama Pasien</td>
                            <td>: <?=$konsul->nama_pasien?></td>
                            <!--   <td><?=$data->nama_jenazah?></td> -->
                        </tr>
                          <tr>

                            <td width="40%">Jenis Kelamin</td>
                            <td>: <?=$konsul->jenis_kelamin?></td>
                            <!--   <td><?=$data->nama_jenazah?></td> -->
                        </tr>
                          <tr>

                            <td width="40%">Usia</td>
                            <td>: <?=$konsul->usia?> Tahun</td>
                            <!--   <td><?=$data->nama_jenazah?></td> -->
                        </tr>
                        <tr>

                            <td>Alamat</td>
                            <td >: <?=$konsul->alamat?></td>
                            <!--  <td><?=$data->alamat;?></td> -->
                        </tr>
                        <tr>

                            <td>Tanggal Lahir</td>
                            <td>: <?=tgl_indo($konsul->tgl_lahir)?></td>
                            <!--  <td>MM</td> -->
                        </tr>
                        <tr>
                            <td>Nomor Telepon/HP</td>
                            <td>: <?=$konsul->no_hp?></td>
                            <!--   <td><?=$data->no_hp;?></td> -->
                        </tr>
                        <tr>
                            <td colspan="3">&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="3"> Berdasarkan Gejala Penyakit Yang dirasakan oleh <b><?=$konsul->nama_pasien?></b> Yaitu : </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <table border="1" width="100%">
                                 <tr>
                                     <td><b>Kode Gejala</b></td>
                                     <td><b>Nama Gejala</b></td>
                                 </tr>   
                                 <?php 
                                 $konsul_d = $this->db->select('tkonsul_d.*,tgejala.nama_gejala')->from('tkonsul_d')->join('tgejala','tkonsul_d.kd_gejala = tgejala.kode_gejala')->where(['tkonsul_d.kd_konsul_h' => $konsul->kd_konsultasi])->get()->result();
                                 foreach($konsul_d as $kd):
                                  ?>
                                  <tr>
                                     <td><?=$kd->kd_gejala?></td>
                                     <td><?=$kd->nama_gejala?></td>
                                 </tr>
                             <?php endforeach; ?>

                         </table>
                     </td>
                 </tr>
                 <tr>
                    <td colspan="3">Berdasarkan Hasil Perhitungan Kemungkinan Diagnosa Maka Didapatkan hasil :</td>
                </tr>
                <tr>
                    <td colspan="3">
                        <table border="1" width="100%">
                         <tr>
                             <td><b>Kode Penyakit</b></td>
                             <td><b>Nama Penyakit</b></td>
                             <td><b>Skor</b></td>
                         </tr>   
                         <?php 
                         $cek_dulu = $this->db->query("SELECT *,skor_perhitungan as skor FROM tkeputusan,tpenyakit WHERE tkeputusan.kode_penyakit = tpenyakit.kode_penyakit AND tkeputusan.kd_konsultasi='".$konsul->kd_konsultasi."'")->result();
                         $wadah=[];
                         foreach($cek_dulu as $cd):
                            array_push($wadah,$cd);
                        endforeach;
                        $keys = array_column($wadah, 'skor');
                        array_multisort($keys, SORT_DESC, $wadah);
                        $peny = $wadah[0];
                        foreach($wadah as $w):
                           
                            ?>
                            <tr>
                                <td><?=$w->kode_penyakit?></td>
                             <td><?=$w->nama_penyakit?></td>
                             <td><?=$w->skor_perhitungan?></td>
                         </tr> 
                     <?php endforeach; ?>

                 </table>
             </td>
         </tr>
         <tr>
            <?php 
                $cekt = $this->db->get_where('tsetting_h',['kode_penyakit' => $peny->kode_penyakit])->row();
                $solusi ="";
                if($cekt->kode_solusi != "" || $cekt->kode_solusi != NULL){
                    $sol = $this->db->get_where('tsolusi',['kode_solusi' => $cekt->kode_solusi])->row();
                    $solusi= $sol->solusi;
                }
             ?>
            <td colspan="3"> Berdasarkan hasil tersebut disimpulkan bahwa diagnosa dari gejala yang dialami sdr. <b><?=$konsul->nama_pasien?></b> adalah <b><?=$peny->nama_penyakit?></b> dengan skor <b><?=$peny->skor_perhitungan?></b> dan Solusi dari kesimpulan tersebut adalah <b><?=$solusi?></b></td>
        </tr>

        <br>

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
           <!--  <script type="text/javascript">
                setTimeout(function() {
                    window.print();
                }, 500);
                window.onfocus = function() {
                    setTimeout(function() {
                        window.close();
                    }, 50);
                }
            </script> -->
        </body>

        </html>