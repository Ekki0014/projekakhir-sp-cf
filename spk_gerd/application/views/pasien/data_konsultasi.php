  <div class="layout-px-spacing">

    <div class="middle-content container-xxl p-0">

      <!-- BREADCRUMB -->
      <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Konsultasi Sayas</li>
          </ol>
        </nav>
      </div>
      <!-- /BREADCRUMB -->
      <div class="row layout-top-spacing">

        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
          <div class="card">
           <div class="card-header">
            <svg width="32px" height="32px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:#04009a;}.cls-2{fill:#77acf1;}</style></defs><g data-name="13. Computer" id="_13._Computer"><path class="cls-1" d="M28,3H26a1,1,0,0,0,0,2h2a1,1,0,0,1,1,1V20H3V6A1,1,0,0,1,4,5H6A1,1,0,0,0,6,3H4A3,3,0,0,0,1,6V24a3,3,0,0,0,3,3h7.88A4.53,4.53,0,0,1,10,29.83L9.7,30H8a1,1,0,0,0,0,2H24a1,1,0,0,0,0-2H22.3l-.25-.17A4.53,4.53,0,0,1,20.12,27H28a3,3,0,0,0,3-3V6A3,3,0,0,0,28,3ZM19.36,30H12.64a6.55,6.55,0,0,0,1.28-3h4.16A6.55,6.55,0,0,0,19.36,30ZM28,25H4a1,1,0,0,1-1-1V22H29v2A1,1,0,0,1,28,25Z"/><path class="cls-1" d="M16,16a8,8,0,1,1,8-8A8,8,0,0,1,16,16ZM16,2a6,6,0,1,0,6,6A6,6,0,0,0,16,2Z"/><path class="cls-2" d="M18,7H17V6a1,1,0,0,0-2,0V7H14a1,1,0,0,0,0,2h1v1a1,1,0,0,0,2,0V9h1a1,1,0,0,0,0-2Z"/></g></svg>Data Konsultasi Saya
          </div>
          <div class="card-body">
            <div id="tombole"></div>
            

            <div class="table-responsive">
              <table id="zero-config" class="table table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal Konsul</th>
                    <th>NIK</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>No Hp</th>
                    <th>Hasil Penyakit</th>
                    <th>Solusi Penyakit</th>
                    <th>Cetak Hasil</th>
                  </tr>
                </thead>
                <tbody id="data_pasien">
                  <?php 
                  $no=1;
                  foreach($tamp as $t):
                   ?>
                   <tr>
                    <td><?=$no++?></td>
                    <td><?=tgl_indo($t->tgl_input)?></td>
                    <td><?=$t->nik?></td>
                    <td><?=$t->nama_pasien?></td>
                    <td><?=$t->jenis_kelamin?></td>
                    <td><?=tgl_indo($t->tgl_lahir)?></td>
                    <td><?=$t->alamat?></td>
                    <td><?=$t->no_hp?></td>
                    <td><?=$t->penyakit?></td>
                    <td><?=$t->solusi?></td>
                    <td><a href="<?=base_url('admin/Diagnosa/cetak_konsul/')?><?=$t->kd_konsultasi?>" class="btn btn-info mb-2 mr-2" target="_blank">
                      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 58 58" style="enable-background:new 0 0 58 58;" xml:space="preserve">
                        <polygon style="fill:#C7CAC7;" points="49,35 49,52 52,52 52,49 58,49 58,17 0,17 0,49 6,49 6,52 9,52 9,35 " />
                        <polygon style="fill:#556080;" points="58,35 58,17 0,17 0,35 9,35 49,35 " />
                        <rect x="6" y="35" style="fill:#7383BF;" width="46" height="17" />
                        <polygon style="fill:#EDEADA;" points="49,0 49,7 49,17 9,17 9,0 " />
                        <polyline style="fill:#EDEADA;" points="49,35 49,58 9,58 9,35 " />
                        <path style="fill:#CEC9AE;" d="M41,44H17c-0.553,0-1-0.447-1-1s0.447-1,1-1h24c0.553,0,1,0.447,1,1S41.553,44,41,44z" />
                        <path style="fill:#CEC9AE;" d="M41,49H17c-0.553,0-1-0.447-1-1s0.447-1,1-1h24c0.553,0,1,0.447,1,1S41.553,49,41,49z" />
                        <circle style="fill:#A4E869;" cx="49" cy="26" r="4" />
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                      </svg>&nbsp;Cetak Hasil Konsultasi</a></td>
                    </tr>

                  <?php endforeach; ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>


    </div>
  </div>
</div>

<script>
 $("#form_laporan").submit(function(e){
   e.preventDefault();
   $("#data_pasien").empty();
   $("#tombole").empty();
   $.ajax({
    url:"<?=base_url('admin/Laporan/tampilkan_pasien/')?>",
    type:"POST",
    data:$("#form_laporan").serialize(),
    dataType:"JSON",
    success:function(data){
      console.log(data.data)
      table = $("#zero-config").DataTable();
      if(data.data != ''){
        var b=1;
        for(var a=0;a<data.data.length;a++){
          // $("#data_pasien").append(` <tr>
          //   <td>${b++}</td>
          //   <td>${data.data[a].nama_pasien}</td>
          //   <td>${data.data[a].tgl_lahir}</td>
          //   <td>${data.data[a].alamat}</td>
          //   <td>${data.data[a].no_hp}</td>
          //   <td>${data.data[a].penyakit}</td>
          //   <td>${data.data[a].penyakit}</td>
          //   </tr>`);
          table.row.add([b++,data.data[a].nama_pasien,data.data[a].tgl_lahir,data.data[a].alamat,data.data[a].no_hp,data.data[a].penyakit,`<a href="<?=base_url('admin/Diagnosa/cetak_konsul/')?>${data.data[a].kd_konsultasi}" class="btn btn-info mb-2 mr-2" target="_blank">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 58 58" style="enable-background:new 0 0 58 58;" xml:space="preserve">
            <polygon style="fill:#C7CAC7;" points="49,35 49,52 52,52 52,49 58,49 58,17 0,17 0,49 6,49 6,52 9,52 9,35 " />
            <polygon style="fill:#556080;" points="58,35 58,17 0,17 0,35 9,35 49,35 " />
            <rect x="6" y="35" style="fill:#7383BF;" width="46" height="17" />
            <polygon style="fill:#EDEADA;" points="49,0 49,7 49,17 9,17 9,0 " />
            <polyline style="fill:#EDEADA;" points="49,35 49,58 9,58 9,35 " />
            <path style="fill:#CEC9AE;" d="M41,44H17c-0.553,0-1-0.447-1-1s0.447-1,1-1h24c0.553,0,1,0.447,1,1S41.553,44,41,44z" />
            <path style="fill:#CEC9AE;" d="M41,49H17c-0.553,0-1-0.447-1-1s0.447-1,1-1h24c0.553,0,1,0.447,1,1S41.553,49,41,49z" />
            <circle style="fill:#A4E869;" cx="49" cy="26" r="4" />
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            </svg>&nbsp;Cetak Hasil Konsultasi</a>`]);
        }  
      }else{
        $("#zero-config").html(`<h3 style="color:#000000;"> <b>Tidak Ada Data</b></h3>`);
      }
      table.draw();

      $("#tombole").append(`<button type="button" onclick="cetak_semua()"  class="btn btn-info mb-2 mr-2">
       <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 58 58" style="enable-background:new 0 0 58 58;" xml:space="preserve">
       <polygon style="fill:#C7CAC7;" points="49,35 49,52 52,52 52,49 58,49 58,17 0,17 0,49 6,49 6,52 9,52 9,35 " />
       <polygon style="fill:#556080;" points="58,35 58,17 0,17 0,35 9,35 49,35 " />
       <rect x="6" y="35" style="fill:#7383BF;" width="46" height="17" />
       <polygon style="fill:#EDEADA;" points="49,0 49,7 49,17 9,17 9,0 " />
       <polyline style="fill:#EDEADA;" points="49,35 49,58 9,58 9,35 " />
       <path style="fill:#CEC9AE;" d="M41,44H17c-0.553,0-1-0.447-1-1s0.447-1,1-1h24c0.553,0,1,0.447,1,1S41.553,44,41,44z" />
       <path style="fill:#CEC9AE;" d="M41,49H17c-0.553,0-1-0.447-1-1s0.447-1,1-1h24c0.553,0,1,0.447,1,1S41.553,49,41,49z" />
       <circle style="fill:#A4E869;" cx="49" cy="26" r="4" />
       <g></g>
       <g></g>
       <g></g>
       <g></g>
       <g></g>
       <g></g>
       <g></g>
       <g></g>
       <g></g>
       <g></g>
       <g></g>
       <g></g>
       <g></g>
       <g></g>
       <g></g>
       </svg>&nbsp;Cetak Semua Data</button>`);
      
    },
    error:function(er){

    }
  })
 })


 function cetak_semua(){
  var tgl_awal  = $("#tgl_awal").val();
  var tgl_akhir = $("#tgl_akhir").val();
  window.open(`<?=base_url('admin/Laporan/cetak_semua/')?>${tgl_awal}/${tgl_akhir}`);
}

</script>