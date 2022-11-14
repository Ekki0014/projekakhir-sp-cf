  <div class="layout-px-spacing">

    <div class="middle-content container-xxl p-0">

      <!-- BREADCRUMB -->
      <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Master</a></li>
            <li class="breadcrumb-item active" aria-current="page">Gejala</li>
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
                  <th>Kode Gejala</th>
                  <th>Gejala Penyakit</th>
                  <th>Bobot</th>
                  <th class="no-content">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $no=1;
                foreach($gejala as $g):
                  ?>
                  <tr>
                    <td><?=$no++?></td>
                    <td><?=$g->kode_gejala?></td>
                    <td><?=$g->nama_gejala?></td>
                    <td><?=$g->bobot?></td> 
                    <td>
                      <button type="button" class="btn btn-info btn-icon mb-2 me-4" onclick="edit(`<?=$g->kode_gejala?>`)" data-bs-toggle="modal" data-bs-target="#rotateleftModal">
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
                      <button class="btn btn-danger btn-icon mb-2 me-4" onclick="hapus(`<?=$g->kode_gejala?>`)">
                       <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <path style="fill:#77757F;" d="M395.636,93.091h-46.545h-23.273V23.273C325.818,10.42,315.398,0,302.545,0h-93.091h-93.091
                        c-12.853,0-23.273,10.42-23.273,23.273v69.818H69.818H23.273C10.42,93.091,0,103.511,0,116.364s10.42,23.273,23.273,23.273h23.273
                        v287.03c0,12.853,10.42,23.273,23.273,23.273h93.091h46.545h11.785c-1.285-1.624-2.529-3.285-3.752-4.959
                        c-0.386-0.529-0.765-1.066-1.145-1.6c-0.853-1.198-1.69-2.408-2.51-3.629c-0.391-0.582-0.785-1.16-1.17-1.747
                        c-1.095-1.674-2.169-3.365-3.204-5.081c-0.002-0.002-0.002-0.003-0.003-0.005V265.278c6.582-10.92,14.401-21.012,23.273-30.075
                        c4.861-4.966,10.031-9.627,15.487-13.943c2.535-2.005,5.134-3.928,7.786-5.783c7.34-5.131,15.12-9.672,23.273-13.557
                        c14.473-6.893,30.118-11.709,46.545-14.069c7.602-1.092,15.371-1.669,23.273-1.669c7.902,0,15.67,0.577,23.273,1.669v-48.215h23.273
                        c12.853,0,23.273-10.42,23.273-23.273C418.909,103.511,408.489,93.091,395.636,93.091z M256,93.091h-46.545h-46.545h-23.273V46.545
                        h69.818h69.818v46.545H256z" />
                        <g>
                          <polygon style="fill:#C3C3C7;" points="93.091,139.636 93.091,403.394 139.636,403.394 139.636,139.636 116.364,139.636    " />
                          <path style="fill:#C3C3C7;" d="M195.5,403.394c-6.028-16.994-9.318-35.269-9.318-54.303v54.303H195.5z" />
                        </g>
                        <g>
                          <path style="fill:#A9A8AE;" d="M186.182,139.636v209.455c0-44.286,17.77-84.492,46.545-113.887v-95.567H186.182z" />
                          <path style="fill:#A9A8AE;" d="M302.545,139.636h-23.273v62.286c14.473-6.893,30.118-11.709,46.545-14.069v-48.216H302.545z" />
                        </g>
                        <path style="fill:#87868D;" d="M221.24,449.939c-4.274-5.407-8.212-11.092-11.785-17.02v17.02H221.24z" />
                        <g>
                          <polygon style="fill:#77757F;" points="93.091,139.636 93.091,403.394 139.636,403.394 139.636,139.636 116.364,139.636    " />
                          <path style="fill:#77757F;" d="M186.182,349.091v54.303h9.318c2.861,8.065,6.327,15.846,10.367,23.273
                          c1.15,2.115,2.349,4.197,3.589,6.253V139.636h-23.273v209.455H186.182z" />
                        </g>
                        <path style="fill:#57575C;" d="M162.909,93.091h-23.273V46.545h69.818V0h-93.091c-12.853,0-23.273,10.42-23.273,23.273v69.818
                        H69.818H23.273C10.42,93.091,0,103.511,0,116.364s10.42,23.273,23.273,23.273h23.273v287.03c0,12.853,10.42,23.273,23.273,23.273
                        h93.091h46.545v-17.02c-1.24-2.056-2.439-4.139-3.589-6.253c-4.04-7.427-7.506-15.208-10.367-23.273h-9.317v-54.303V139.636h23.273
                        V93.091H162.909z M139.636,403.394H93.091V139.636h23.273h23.273V403.394z" />
                        <path style="fill:#D8143A;" d="M372.364,187.851c-7.602-1.092-15.371-1.669-23.273-1.669c-7.902,0-15.67,0.577-23.273,1.669
                        c-16.427,2.36-32.073,7.176-46.545,14.069c-8.153,3.883-15.932,8.426-23.273,13.557c-2.652,1.854-5.25,3.779-7.786,5.783
                        c-5.458,4.316-10.628,8.977-15.487,13.943c-28.776,29.395-46.545,69.601-46.545,113.887c0,19.034,3.291,37.309,9.318,54.303
                        c2.861,8.065,6.327,15.846,10.367,23.273c4.464,8.208,9.615,15.99,15.372,23.273C251.1,487.714,297.312,512,349.091,512
                        C438.919,512,512,438.919,512,349.091C512,267.163,451.205,199.179,372.364,187.851z M398.459,365.546
                        c9.089,9.089,9.089,23.824,0,32.912c-4.544,4.544-10.501,6.817-16.455,6.817s-11.913-2.271-16.457-6.817l-16.455-16.455
                        l-16.455,16.455c-4.544,4.544-10.501,6.817-16.457,6.817c-5.956,0-11.913-2.271-16.455-6.817c-9.089-9.089-9.089-23.824,0-32.912
                        l16.455-16.455l-16.455-16.455c-9.089-9.089-9.089-23.824,0-32.912c9.087-9.089,23.824-9.089,32.912,0l16.455,16.455l16.455-16.455
                        c9.087-9.089,23.824-9.089,32.912,0s9.089,23.824,0,32.912l-16.455,16.455L398.459,365.546z" />
                        <path style="fill:#B8002B;" d="M332.636,398.459c-4.544,4.544-10.501,6.817-16.455,6.817c-5.956,0-11.913-2.271-16.455-6.817
                        c-9.089-9.089-9.089-23.824,0-32.912l16.454-16.455l-16.455-16.455c-9.089-9.089-9.089-23.824,0-32.912
                        c9.087-9.089,23.824-9.089,32.912,0l16.455,16.455V186.182c-7.902,0-15.67,0.577-23.273,1.669
                        c-16.427,2.36-32.073,7.176-46.545,14.069c-8.153,3.883-15.932,8.426-23.273,13.557c-2.652,1.854-5.25,3.779-7.786,5.783
                        c-5.458,4.316-10.628,8.977-15.487,13.943c-28.776,29.395-46.545,69.601-46.545,113.887c0,19.034,3.291,37.309,9.318,54.303
                        c2.861,8.065,6.327,15.846,10.367,23.273c4.464,8.208,9.615,15.99,15.372,23.273C251.1,487.714,297.312,512,349.091,512V382.003
                        L332.636,398.459z" />
                        <path style="fill:#70001E;" d="M299.723,299.723c-9.089,9.089-9.089,23.824,0,32.912l16.455,16.455l-16.455,16.455
                        c-9.089,9.089-9.089,23.824,0,32.912c4.544,4.544,10.501,6.817,16.455,6.817c5.956,0,11.913-2.271,16.455-6.817l16.457-16.455
                        l16.455,16.455c4.544,4.544,10.501,6.817,16.455,6.817c5.956,0,11.913-2.271,16.455-6.817c9.089-9.089,9.089-23.824,0-32.912
                        l-16.454-16.455l16.455-16.455c9.089-9.089,9.089-23.824,0-32.912c-9.087-9.089-23.824-9.089-32.912,0l-16.455,16.455
                        l-16.455-16.455C323.547,290.634,308.81,290.634,299.723,299.723z" />
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
        <h5 class="modal-title">Form Gejala</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </button>
      </div>
      <form action="javascript:void(0)" method="POST" id="form_gejala">
        <div class="modal-body">
          <!-- form grid -->
          <div id="flFormsGrid" class="col-lg-12 layout-spacing">
            <div class="row">
              <div class="col-md-6 p-2">
                <label for="kode_gejala" class="form-label">Kode Gejala</label>
                <input type="text" id="kode_gejala" name="kode_gejala" class="form-control" placeholder="Kode Gejala" aria-label="Kode Gejala" required="">
              </div>
              <div class="col-md-6 p-2">
                <label for="nama_gejala" class="form-label">Nama Gejala</label>
                <input type="text" class="form-control" name="nama_gejala" id="nama_gejala" placeholder="Nama Gejala" aria-label="Nama Gejala" required="">
              </div>
              <div class="col-md-12 p-2">
                <label for="bobot" class="form-label">Bobot</label>
                <input type="text" class="form-control" name="bobot" id="bobot" placeholder="Bobot" aria-label="Bobot" required="">
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
      $("#form_gejala")[0].reset();
      $(".modal-title").text('TAMBAH DATA GEJALA');
      metode = "tambah";
      $("#kode_gejala").removeAttr('readonly');
    }

    function edit(kode_gejala){
      $("#form_gejala")[0].reset();
      $(".modal-title").text('EDIT DATA GEJALA');
      metode = "edit";
      $.ajax({
        url:"<?=base_url('admin/Master/edit_gejala')?>/"+kode_gejala,
        type:"GET",
        dataType:"JSON",
        success: function(data){
          $("#kode_gejala").attr('readonly','readonly');
          $("#kode_gejala").val(`${data.kode_gejala}`);
          $("#nama_gejala").val(`${data.nama_gejala}`);
          $("#bobot").val(`${data.bobot}`);
        },error: function(jqXHR, textStatus, errorThrow){
         Swal.fire(
          'Gagal!',
          `GAGAL MENGAMBIL DATA`,
          'error'
          )
       }
     });
    }

    $("#form_gejala").submit(function(e){
     e.preventDefault();
     $.ajax({
      url:"<?=base_url('admin/Master/save_gejala/')?>"+metode,
      type:"POST",
      data:$("#form_gejala").serialize(),
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

    function hapus(kode_gejala){
      Swal.fire({
        title: 'Apakah Data Akan Dihapus?',
        text: "Data Akan Terhapus",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus!'
      }).then((result) => {
        if (result.isConfirmed) {
         $.ajax({
          url:"<?=base_url('admin/Master/delete_gejala');?>/"
          +kode_gejala,
          type:"POST",
          dataType:"JSON",
          cache:false,
          success:function(a){
            if(a.status == true){
              Swal.fire(
                'Deleted!',
                `${a.pesan}`,
                'success'
                )
              setTimeout(function(){
                location.reload()
              },1000)                 
            }else{
             Swal.fire(
              'GAGAL!',
              `${a.pesan}`,
              'error'
              )
           }
         }
       })

       }
     })
    }
  </script>
