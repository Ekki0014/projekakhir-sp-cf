  <div class="layout-px-spacing">

    <div class="middle-content container-xxl p-0">

      <!-- BREADCRUMB -->
      <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Master</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pengguna</li>
          </ol>
        </nav>
      </div>
      <!-- /BREADCRUMB -->

      <div class="row layout-top-spacing">

        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
         <button type="button" id="tambah" onclick="tambah()" class="btn btn-info mb-2 mr-2" data-bs-toggle="modal" data-bs-target="#rotateleftModal">
           <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 484.8 484.8" style="enable-background:new 0 0 484.8 484.8;" xml:space="preserve">
            <circle style="fill:#0D9B79;" cx="242.4" cy="242.4" r="242.4" />
            <path style="fill:#056B5C;" d="M0,242.4C0,376,108,484,242.4,484C376,484,484,376,484,242.4" />
            <polygon style="fill:#EBFFF6;" points="394.4,202.4 282.4,202.4 282.4,90.4 202.4,90.4 202.4,202.4 90.4,202.4 90.4,282.4 
            202.4,282.4 202.4,394.4 282.4,394.4 282.4,282.4 394.4,282.4 " />
            <polygon style="fill:#D6EAE0;" points="282.4,200.8 200.8,282.4 202.4,282.4 202.4,394.4 282.4,394.4 282.4,282.4 394.4,282.4 
            394.4,202.4 282.4,202.4 " />
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
          </svg>&nbsp;Tambah Data</button>
          <div class="widget-content widget-content-area br-8">
            <table id="zero-config" class="table dt-table-hover" style="width:100%">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Norm</th>
                  <th>Nik</th>
                  <th>Nama Lengkap</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <th>Tanggal Lahir</th>
                  <th>No Hp</th>
                  <th>Username</th>
                  <th>Hak Akses</th>
                  <th class="no-content">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $no=1;
                foreach($pengguna as $g):
                  ?>
                  <tr>
                    <td><?=$no++?></td>
                    <td><?=$g->kdpengguna?></td>
                    <td><?=$g->nik?></td>
                    <td><?=$g->nama_lengkap?></td>
                    <td><?=$g->jenis_kelamin?></td>
                    <td><?=$g->alamat?></td>
                    <td><?=tgl_indo($g->tgl_lahir)?></td>
                    <td><?=$g->no_hp?></td>
                    <td><?=$g->username?></td>
                    <td><?=$g->akses?></td>
                    <td>
                      <button type="button" class="btn btn-info btn-icon mb-2 me-4" onclick="edit(`<?=$g->kdpengguna?>`)" data-bs-toggle="modal" data-bs-target="#rotateleftModal">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 503.563 503.563" style="enable-background:new 0 0 503.563 503.563;" xml:space="preserve">
                          <path style="fill:#FF7058;" d="M406.641,490.541c7.314,7.314,18.808,7.314,26.122,0l57.469-57.469
                          c7.314-7.314,7.314-18.808,0-26.122l-34.482-34.482l-83.592,83.592L406.641,490.541z" />
                          <polygon style="fill:#D8AB53;" points="90.037,57.953 90.037,56.908 90.037,56.908 " />
                          <path style="fill:#FFD05C;" d="M32.567,116.467L17.939,48.549L8.535,8.843l39.706,8.359l67.918,15.673l0,0
                          c-1.045,6.269-3.135,11.494-8.359,16.718c-5.224,5.224-11.494,7.314-17.763,8.359c1.045,8.359-1.045,17.763-8.359,25.078
                          c-3.135,3.135-7.314,5.224-11.494,6.269c-4.18,1.045-8.359,2.09-12.539,1.045c0,6.269-3.135,12.539-8.359,17.763
                          C44.061,113.333,38.837,115.422,32.567,116.467z" />
                          <path style="fill:#84DBFF;" d="M415,382.916L90.037,57.953l0,0c6.269,0,12.539-3.135,17.763-8.359
                          c4.18-4.18,7.314-10.449,8.359-16.718l0,0l323.918,323.918L415,382.916L415,382.916z" />
                          <path style="fill:#54C0EB;" d="M57.645,90.345c8.359,1.045,17.763-1.045,25.078-8.359c5.224-5.224,7.314-12.539,7.314-19.853
                          c0-1.045,0-3.135,0-4.18L415,382.916l-32.392,32.392L57.645,90.345z" />
                          <path style="fill:#84DBFF;" d="M356.486,440.386L32.567,116.467l0,0c6.269-1.045,11.494-3.135,16.718-8.359
                          c5.224-5.224,7.314-11.494,8.359-17.763l0,0l324.963,324.963L356.486,440.386z" />
                          <polygon style="fill:#334A5E;" points="17.939,48.549 8.535,8.843 48.241,17.202 " />
                          <rect x="346.789" y="395.399" transform="matrix(-0.7071 0.7071 -0.7071 -0.7071 979.7654 405.8641)" style="fill:#FFD15C;" width="118.072" height="20.898" />
                          <path style="fill:#55BFE9;" d="M440.077,356.794l15.673,15.673L440.077,356.794z" />
                          <polygon style="fill:#FFD15C;" points="429.628,397.545 429.628,397.545 455.751,372.467 " />
                          <polygon style="fill:#55BFE9;" points="397.237,429.937 397.237,429.937 429.628,397.545 429.628,397.545 " />
                          <g>
                            <path style="fill:#40596B;" d="M476.649,157.218c-19.853,19.853-44.931,28.212-71.053,26.122l-58.514,58.514l-4.18,4.18
                            l-6.269,6.269l-84.637-84.637l11.494-11.494l58.514-58.514c-2.09-25.078,7.314-51.2,26.122-71.053
                            c22.988-22.988,55.38-31.347,85.682-24.033l-55.38,56.424l10.449,56.424l56.424,10.449l55.38-55.38
                            C506.951,100.794,499.637,133.186,476.649,157.218z" />
                            <path style="fill:#40596B;" d="M98.396,321.267c-25.078-2.09-51.2,7.314-71.053,26.122C4.355,370.378-4.004,403.814,3.31,433.071
                            l55.38-54.335l56.424,10.449l10.449,56.424l-55.38,55.38c30.302,7.314,62.694-1.045,85.682-24.033
                            c19.853-19.853,28.212-44.931,26.122-71.053l48.065-48.065l9.404-9.404l-84.637-84.637L98.396,321.267z" />
                          </g>
                          <rect x="196.426" y="240.026" transform="matrix(-0.7074 0.7068 -0.7068 -0.7074 560.5087 367.1391)" style="fill:#334A5E;" width="15.673" height="119.117" />
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
                        </svg>
                      </button>
                      <button class="btn <?=$g->status == 'aktif' ? 'btn-primary' : 'btn-danger'?> btn-icon mb-2 me-4" onclick="hapus(`<?=$g->kdpengguna?>`,`<?=$g->status?>`)">
                       <?=$g->status == 'aktif' ? 'Aktif' : 'Tidak Aktif'?>
                     </button>

                   </td>
                 </tr>
               <?php endforeach; ?>

             </tbody>
           </table>
         </div>
       </div>

     </div>

   </div>

 </div>

 <!-- modal -->   
 <div id="rotateleftModal" class="modal animated rotateInDownLeft custo-rotateInDownLeft" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="color: black">Form Pengguna</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </button>
      </div>
      <form action="javascript:void(0)" method="POST" id="form_pengguna">
        <div class="modal-body">
          <!-- form grid -->
          <div id="flFormsGrid" class="col-lg-12 layout-spacing">
            <input type="hidden" name="kdpengguna" id="kdpengguna">
            <div class="row">
              <div class="col-md-6 p-2">
                <label for="nik" class="form-label">NIK</label>
                <input type="number" id="nik" name="nik" class="form-control" placeholder="NIK" aria-label="NIK" required="">
              </div>
              <div class="col-md-6 p-2">
                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" aria-label="Nama Lengkap" required="">
              </div>
              <div class="col-md-6 p-2">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" required="" id="alamat" name="alamat"></textarea>
              </div>
              <div class="col-md-6 p-2">
                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" placeholder="Kode Solusi" aria-label="Kode Solusi" required="">
              </div>
              <div class="col-md-6 p-2">
                <label for="no_hp" class="form-label">No Hp</label>
                <input type="number" id="no_hp" name="no_hp" class="form-control" placeholder="No Hp" aria-label="No Hp" required="">
              </div>
              <div class="col-md-6 p-2">
                <label for="kode_solusi" class="form-label">Akses</label>
                <select name="akses" id="akses" class="form-control">
                  <option value="">Pilih Akses</option>
                  <option value="adm">Admin</option>
                  <option value="psn">Pasien</option>
                </select>
                
              </div>
              <div class="col-md-6 p-2">
                <label for="username" class="form-label">Username</label>
                <input type="text" id="username" name="username" class="form-control" placeholder="Username" aria-label="Username" required="">
              </div>
              <div class="col-md-6 p-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" aria-label="Password" required="">
              </div>
              <div class="col-md-6 p-2">
                <label for="username" class="form-label">Jenis Kelamin</label>
                <div class="custom-control custom-radio">
                  <input type="radio" id="lk" value="laki-laki" name="jk" class="custom-control-input">
                  <label class="custom-control-label" for="lk">Laki - Laki</label>
                </div>
                <div class="custom-control custom-radio">
                  <input type="radio" id="pr" name="jk" value="perempuan" class="custom-control-input">
                  <label class="custom-control-label" for="pr">Perempuan</label>
                </div>
              </div>
            </div>

          </div>
          <!-- end form -->
        </div>
        <div class="modal-footer md-button">
          <button class="btn" type="button" data-bs-dismiss="modal"><i class="flaticon-cancel-12"></i>
           <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
            <circle style="fill:#FF6643;" cx="256" cy="256" r="256" />
            <path style="fill:#FF4F19;" d="M256,0v512c141.385,0,256-114.615,256-256S397.385,0,256,0z" />
            <polygon style="fill:#F2F2F4;" points="365.904,184.885 327.115,146.096 256,217.211 184.885,146.096 146.096,184.885 217.211,256 
            146.096,327.115 184.885,365.904 256,294.789 327.115,365.904 365.904,327.115 294.789,256 " />
            <polygon style="fill:#DFDFE1;" points="365.904,184.885 327.115,146.096 256,217.211 256,294.789 327.115,365.904 365.904,327.115 
            294.789,256 " />
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
          </svg>&nbsp;Batal
        </button>
        <button type="submit" name="submit" id="submit" class="btn btn-primary">
          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 280.028 280.028" style="enable-background:new 0 0 280.028 280.028;" xml:space="preserve">
            <g>
              <path style="fill:#324D5B;" d="M17.502,0h245.024c9.661,0,17.502,7.832,17.502,17.502v245.024c0,9.67-7.841,17.502-17.502,17.502
              H17.502C7.841,280.027,0,272.195,0,262.526V17.502C0,7.841,7.841,0,17.502,0z" />
              <path style="fill:#CCD0D2;" d="M52.505,175.017h175.017c9.661,0,17.502,7.841,17.502,17.502v87.509H35.003v-87.509
              C35.003,182.858,42.844,175.017,52.505,175.017z" />
              <path style="fill:#E4E7E7;" d="M52.505,157.515h175.017c9.661,0,17.502,7.841,17.502,17.502v26.253H35.003v-26.253
              C35.003,165.356,42.844,157.515,52.505,157.515z" />
              <path style="fill:#2B414D;" d="M245.024,0v105.01c0,9.67-7.841,17.502-17.502,17.502H52.505c-9.661,0-17.502-7.832-17.502-17.502V0
              H245.024z" />
              <path style="fill:#CCD0D2;" d="M122.512,0v96.259c0,4.83,3.92,8.751,8.751,8.751h87.509c4.839,0,8.751-3.92,8.751-8.751V0H122.512z
              M210.021,78.758c0,4.83-3.912,8.751-8.751,8.751h-8.751c-4.839,0-8.751-3.92-8.751-8.751V26.253c0-4.83,3.912-8.751,8.751-8.751
              h8.751c4.839,0,8.751,3.92,8.751,8.751V78.758z" />
            </g>
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
          </svg>&nbsp;
          Simpan
        </button>
      </div>
    </form>
  </div>
</div>
</div>
<script>
    // $("#tambah").on('click',function(){
    //     alert("DAD");
    // })
    var link;
    var metode="tambah";
    function tambah(){
      $("#form_pengguna")[0].reset();
      $(".modal-title").text('TAMBAH PENGGUNA');
      metode = "tambah";
      //$("#kode_solusi").removeAttr('readonly');
    }

    function edit(kdpengguna){
      $("#form_pengguna")[0].reset();
      $(".modal-title").text('EDIT PENGGUNA');
      metode = "edit";
      $.ajax({
        url:"<?=base_url('admin/Master/edit_pengguna')?>/"+kdpengguna,
        type:"GET",
        dataType:"JSON",
        success: function(data){
          $("#kdpengguna").attr('readonly','readonly');
          $("#kdpengguna").val(`${data.kdpengguna}`);
          $("#nama_lengkap").val(`${data.nama_lengkap}`);
          $("#alamat").val(`${data.alamat}`);
          $("#tgl_lahir").val(`${data.tgl_lahir}`);
          $("#no_hp").val(`${data.no_hp}`);
          $("#akses option[value='" +data.akses+"']").attr("selected","selected");
          $("#username").val(`${data.username}`);
          $("#password").val(`${data.password}`);
          $("#nik").val(`${data.nik}`);
          if(data.jenis_kelamin ==  'laki-laki'){
            $("#lk").attr('checked','checked');
          }else{
            $("#pr").attr('checked','checked');
          }
        },error: function(jqXHR, textStatus, errorThrow){
         Swal.fire(
          'Gagal!',
          `GAGAL MENGAMBIL DATA`,
          'error'
          )
       }
     });
    }

    $("#form_pengguna").submit(function(e){
     e.preventDefault();
     $.ajax({
      url:"<?=base_url('admin/Master/save_pengguna/')?>"+metode,
      type:"POST",
      data:$("#form_pengguna").serialize(),
      dataType:"JSON",
      success:function(data){
        if(data.status == true){
         Swal.fire(
          'Berhasil!',
          `${data.pesan}`,
          'success'
          )
         setTimeout(function(){
          location.reload()
          $("#rotateleftModal").modal('hide');
        },1000)                 
       }else{
        Swal.fire(
          'Gagal!',
          `${data.pesan}`,
          'error'
          )
      }
    },
    error:function(er){
     Swal.fire(
      'Gagal!',
      'API GAGAL',
      'error'
      )
   }
 })
   })

    function hapus(kode_solusi,status){
      Swal.fire({
        title: 'Apakah Status Akan Diubah?',
        text: "Status Akan Diubah",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Ubah!'
      }).then((result) => {
        if (result.isConfirmed) {
         $.ajax({
          url:"<?=base_url('admin/Master/delete_pengguna');?>/"
          +kode_solusi+"/"+status,
          type:"POST",
          dataType:"JSON",
          cache:false,
          success:function(a){
            Swal.fire(
              'Informasi!',
              `${a.pesan}`,
              'success'
              )
            setTimeout(function(){
              location.reload()
            },1000)                 
           //  if(a.status == true){

           //  }else{
           //   Swal.fire(
           //    'GAGAL!',
           //    `${a.pesan}`,
           //    'error'
           //    )
           // }
         }
       })

       }
     })
    }
  </script>
