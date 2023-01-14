  <div class="layout-px-spacing">

    <div class="middle-content container-xxl p-0">

      <!-- BREADCRUMB -->
      <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Setting</a></li>
            <li class="breadcrumb-item active" aria-current="page">Diagnosa</li>
          </ol>
        </nav>
      </div>
      <!-- /BREADCRUMB -->
      <div class="row layout-top-spacing">

        <div class="col-xl-6 col-lg-6 col-sm-6  layout-spacing">
          <div class="card">
            <div class="card-header">
             <svg width="32px" height="32px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:#04009a;}.cls-2{fill:#77acf1;}</style></defs><g data-name="13. Computer" id="_13._Computer"><path class="cls-1" d="M28,3H26a1,1,0,0,0,0,2h2a1,1,0,0,1,1,1V20H3V6A1,1,0,0,1,4,5H6A1,1,0,0,0,6,3H4A3,3,0,0,0,1,6V24a3,3,0,0,0,3,3h7.88A4.53,4.53,0,0,1,10,29.83L9.7,30H8a1,1,0,0,0,0,2H24a1,1,0,0,0,0-2H22.3l-.25-.17A4.53,4.53,0,0,1,20.12,27H28a3,3,0,0,0,3-3V6A3,3,0,0,0,28,3ZM19.36,30H12.64a6.55,6.55,0,0,0,1.28-3h4.16A6.55,6.55,0,0,0,19.36,30ZM28,25H4a1,1,0,0,1-1-1V22H29v2A1,1,0,0,1,28,25Z"/><path class="cls-1" d="M16,16a8,8,0,1,1,8-8A8,8,0,0,1,16,16ZM16,2a6,6,0,1,0,6,6A6,6,0,0,0,16,2Z"/><path class="cls-2" d="M18,7H17V6a1,1,0,0,0-2,0V7H14a1,1,0,0,0,0,2h1v1a1,1,0,0,0,2,0V9h1a1,1,0,0,0,0-2Z"/></g></svg> Konsultasi
           </div>
           <div class="card-body">
            <div class="text-center user-info">

              <svg width="64px" height="64px" viewBox="0 -0.18 64 64" xmlns="http://www.w3.org/2000/svg">
                <g id="Group_127" data-name="Group 127" transform="translate(-52.725 -50.435)">
                  <g id="XMLID_1_">
                    <g id="Group_126" data-name="Group 126">
                      <path id="Path_58" data-name="Path 58" d="M116.725,76v36.08a2,2,0,0,1-2,2h-60a2.006,2.006,0,0,1-2-2V68.755a2,2,0,0,1,2-2h1.67v-7.59a2.006,2.006,0,0,1,2-2h2v-4.73a2.006,2.006,0,0,1,2-2h49.03a2.006,2.006,0,0,1,2,2V74h1.3A1.993,1.993,0,0,1,116.725,76Zm-4,34.08V78H78.4a2.041,2.041,0,0,1-1.38-.55l-7.09-6.7H56.725v39.33ZM109.425,74V54.435H64.4v2.73h40.03a2.006,2.006,0,0,1,2,2V74Zm-7,0V61.165H60.4v5.59h10.33a2.013,2.013,0,0,1,1.38.54L79.2,74Z" fill="#03373d"/>
                      <path id="Path_59" data-name="Path 59" d="M112.725,78v32.08h-56V70.755h13.21l7.09,6.7A2.041,2.041,0,0,0,78.4,78Zm-15,15.83a13,13,0,1,0-13,13A13.012,13.012,0,0,0,97.725,93.835Z" fill="#ccc"/>
                      <path id="Path_60" data-name="Path 60" d="M109.425,54.435v19.57h-3V59.165a2.006,2.006,0,0,0-2-2H64.4v-2.73h45.03Z" fill="#ef472e"/>
                      <path id="Path_61" data-name="Path 61" d="M102.425,61.165v12.84H79.2l-7.09-6.71a2.013,2.013,0,0,0-1.38-.54H60.4v-5.59h42.03Z" fill="#f2f2f2"/>
                      <path id="Path_62" data-name="Path 62" d="M84.725,80.835a13,13,0,1,1-13,13A13.012,13.012,0,0,1,84.725,80.835Zm9,13a9,9,0,1,0-9,9A9.007,9.007,0,0,0,93.725,93.835Z" fill="#03373d"/>
                      <path id="Path_63" data-name="Path 63" d="M90.915,91.345v4.97l-3.7.01v3.7h-4.97v-3.7h-3.7v-4.97l3.7-.01v-3.7h4.97v3.7Z" fill="#ef472e"/>
                    </g>
                  </g>
                </g>
              </svg>
              <br>
              <p class=""><b>Profil Pasien</b></p>
            </div>
            <div class="row">
              <div class="col-md-6 p-2">
                  <span><label for="nik_pasien" class="form-label">NIK</label></span>
                <input type="number" name="nik_pasien" id="nik_pasien" class="form-control" placeholder="NIK" required="" value="<?=$this->session->userdata('nik')?>">
              </div>
              <div class="col-md-6 p-2">
                <span><label for="penyakit" class="form-label">Nama Pasien</label></span>
                <input type="text" name="nama_pasien" value="<?=$this->session->userdata('nama_lengkap')?>" id="nama_pasien" class="form-control" placeholder="Nama Pasien" >
              </div>
            </div>
            <div class="row">
               <div class="col-md-6 p-2">
                <label for="username" class="form-label">Jenis Kelamin</label>
                <div class="custom-control custom-radio">
                  <input type="radio" id="lk" value="laki-laki" name="jk" class="custom-control-input jk" <?=$this->session->userdata('jenis_kelamin') == "laki-laki" ? 'checked' : ''?>>
                  <label class="custom-control-label" for="lk">Laki - Laki</label>
                </div>
                <div class="custom-control custom-radio">
                  <input type="radio" id="pr" name="jk" value="perempuan" class="custom-control-input jk" <?=$this->session->userdata('jenis_kelamin') == "perempuan" ? 'checked' : ''?>>
                  <label class="custom-control-label" for="pr">Perempuan</label>
                </div>
              </div>
              <div class="col-md-6 p-2">
                <label for="penyakit" class="form-label">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" value="<?=$this->session->userdata('tgl_lahir')?>" id="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" >
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 p-2">
                <span><label for="penyakit" class="form-label">Alamat</label></span>
                <textarea name="alamat" id="alamat"  class="form-control" ><?=$this->session->userdata('alamat')?></textarea>
              </div>
              <div class="col-md-6 p-2">
                <label for="penyakit" class="form-label">No Hp</label>
                <input type="text" name="no_hp" id="no_hp"  value="<?=$this->session->userdata('no_hp')?>" class="form-control" placeholder="No Hp" >
              </div>
            </div>
          </div>
        </div>
        <br />
        <div class="card">
         <div class="card-header">
          <svg width="32px" height="32px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:#04009a;}.cls-2{fill:#77acf1;}</style></defs><g data-name="13. Computer" id="_13._Computer"><path class="cls-1" d="M28,3H26a1,1,0,0,0,0,2h2a1,1,0,0,1,1,1V20H3V6A1,1,0,0,1,4,5H6A1,1,0,0,0,6,3H4A3,3,0,0,0,1,6V24a3,3,0,0,0,3,3h7.88A4.53,4.53,0,0,1,10,29.83L9.7,30H8a1,1,0,0,0,0,2H24a1,1,0,0,0,0-2H22.3l-.25-.17A4.53,4.53,0,0,1,20.12,27H28a3,3,0,0,0,3-3V6A3,3,0,0,0,28,3ZM19.36,30H12.64a6.55,6.55,0,0,0,1.28-3h4.16A6.55,6.55,0,0,0,19.36,30ZM28,25H4a1,1,0,0,1-1-1V22H29v2A1,1,0,0,1,28,25Z"/><path class="cls-1" d="M16,16a8,8,0,1,1,8-8A8,8,0,0,1,16,16ZM16,2a6,6,0,1,0,6,6A6,6,0,0,0,16,2Z"/><path class="cls-2" d="M18,7H17V6a1,1,0,0,0-2,0V7H14a1,1,0,0,0,0,2h1v1a1,1,0,0,0,2,0V9h1a1,1,0,0,0,0-2Z"/></g></svg>Hasil Konsultasi
        </div>
        <div class="card-body">
          <div id="hasil"></div>
          <div id="tombol">

          </div>
          
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Penyakit</th>
                  <th>Bar Skor</th>
                  <th>Presentase Skor</th>
                </tr>
              </thead>
              <tbody id="hasil_komplit">

              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
    <div class="col-xl-6 col-lg-6 col-sm-6  layout-spacing">
      <div class="card">
        <div class="card-header">
         <svg width="32px" height="32px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:#04009a;}.cls-2{fill:#77acf1;}</style></defs><g data-name="13. Computer" id="_13._Computer"><path class="cls-1" d="M28,3H26a1,1,0,0,0,0,2h2a1,1,0,0,1,1,1V20H3V6A1,1,0,0,1,4,5H6A1,1,0,0,0,6,3H4A3,3,0,0,0,1,6V24a3,3,0,0,0,3,3h7.88A4.53,4.53,0,0,1,10,29.83L9.7,30H8a1,1,0,0,0,0,2H24a1,1,0,0,0,0-2H22.3l-.25-.17A4.53,4.53,0,0,1,20.12,27H28a3,3,0,0,0,3-3V6A3,3,0,0,0,28,3ZM19.36,30H12.64a6.55,6.55,0,0,0,1.28-3h4.16A6.55,6.55,0,0,0,19.36,30ZM28,25H4a1,1,0,0,1-1-1V22H29v2A1,1,0,0,1,28,25Z"/><path class="cls-1" d="M16,16a8,8,0,1,1,8-8A8,8,0,0,1,16,16ZM16,2a6,6,0,1,0,6,6A6,6,0,0,0,16,2Z"/><path class="cls-2" d="M18,7H17V6a1,1,0,0,0-2,0V7H14a1,1,0,0,0,0,2h1v1a1,1,0,0,0,2,0V9h1a1,1,0,0,0,0-2Z"/></g></svg> Gejala
       </div>
       <div class="card-body">
        <div class="row">
          <?php 
          foreach($gejala as $g):
           ?>
           <div class="col-md-4">
             <div class="form-check form-check-primary form-check-inline">
              <input class="form-check-input"  name="gejala<?=$g->kode_gejala?>" value="<?=$g->kode_gejala?>" type="checkbox" id="<?=$g->kode_gejala?>">
              <label class="form-check-label" for="<?=$g->kode_gejala?>">
                <?=$g->nama_gejala?>
              </label>
            </div> 
          </div>
        <?php endforeach; ?>



      </div>
    </div>
    <div class="card-footer">
      <div class="row">
        <div class="col-6">
          <a href="javascript:void(0);" class="btn btn-dark w-100">Cancel</a>
        </div>
        <div class="col-6">
          <button type="button" name="checking" id="checking" class="btn btn-secondary w-100">Checking</button>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
</div>
</div>

<script>
  var pilihan = [];
  var check = $(".form-check-input:checked").val();

  $(':checkbox').change(function(){
    var liste2 = $(':checkbox:checked').map(function() {
      return this.value;
    }).get();
    pilihan=liste2;
  });

  $("#checking").on('click',function(){
    var nama = $("#nama_pasien").val();
    var alamat = $("#alamat").val();
    var no_hp = $("#no_hp").val();
    var tgl_lahir = $("#tgl_lahir").val();
    var nik     = $("#nik_pasien").val();
     var jk  = $('input[name="jk"]:checked').val();
    if(nama || alamat || no_hp || tgl_lahir){
      $("#hasil").empty()
      $("#hasil_komplit").empty()
      $("#tombol").empty()
      $.ajax({
        type:"POST",
        url: "<?=base_url('pasien/Konsultasi/checking')?>",
        data: {pilihan:pilihan,nama:nama,alamat:alamat,no_hp:no_hp,tgl_lahir:tgl_lahir,nik:nik,jk:jk},
        success:function(msg){
         var isi = JSON.parse(msg);
         console.log(isi.datah.tertinggi);
         $("#hasil").append(`<div class="alert alert-arrow-left alert-icon-left alert-light-primary alert-dismissible fade show mb-4" role="alert">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
          <strong>Informasi!</strong> Berdasarkan Perhitungan dapat disimpulkan bahwa diagnosa dari inputan pengguna adalah <b>${isi.datah.tertinggi.nama_penyakit} Dengan Skor ${isi.datah.tertinggi.skor} %</b>Dan Solusi dari kesimpulan tersebut adalah <b>${isi.datah.tertinggi.solusi}</b>.
          </div>`);
         for(var a=0;a<isi.datah.semua.length;a++){
          $("#hasil_komplit").append(` <tr>
            <td>${isi.datah.semua[a].nama_penyakit}</td>
            <td>                                                    
            <div class="progress br-30">
            <div class="progress-bar br-30 bg-danger" role="progressbar" style="width: ${isi.datah.semua[a].skor}%" aria-valuenow="${isi.datah.semua[a].skor}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </td>
            <td><p class="text-danger">${isi.datah.semua[a].skor}%</p></td>
            </tr>`);
        }
        $("#tombol").append(` <a href="<?=base_url('pasien/Konsultasi/cetak_konsul/')?>${isi.datah.tertinggi.kd_konsultasi}" class="btn btn-info mb-2 mr-2" target="_blank">
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
          </svg>&nbsp;Cetak Hasil Konsultasi</a>`)
      }
    });  
    }else{
      Swal.fire(
        'Informasi!',
        `Data Pasien Harus Diisi`,
        'error'
        )
    }
    
  })
  
  
</script>