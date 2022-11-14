
<!doctype html>
<html lang="en" class="light-theme">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?=base_url();?>assets/images/favicon-32x32.png" type="image/png" />
  <!-- Bootstrap CSS -->
  <link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?=base_url();?>assets/css/bootstrap-extended.css" rel="stylesheet" />
  <link href="<?=base_url();?>assets/css/style.css" rel="stylesheet" />
  <link href="<?=base_url();?>assets/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- loader-->
  <link href="<?=base_url();?>assets/css/pace.min.css" rel="stylesheet" />

  <title>Snacked - Bootstrap 5 Admin Template</title>
</head>

<body>

  <!--start wrapper-->
  <div class="wrapper">
    
   <!--start content-->
   <main class="authentication-content">
    <div class="container-fluid">
      <div class="authentication-card">
        <div class="card shadow rounded-0 overflow-hidden">
          <div class="row g-0">
            <div class="col-lg-6 bg-login d-flex align-items-center justify-content-center">
              <img src="<?=base_url();?>assets/images/error/login-img.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6">
              <div class="card-body p-4 p-sm-5">
                <h5 class="card-title">Daftar Akun</h5>
                <p class="card-text mb-3">Silahkan Daftar Akun untuk login</p>
                <form class="form-body" method="POST" action="<?=base_url('Welcome/saveRegister');?>" enctype="multipart/form-data">
                  <div class="login-separater text-center mb-4"> <span>REGISTER AKUN</span>
                    <hr>
                  </div>
                  <div class="row g-3">
                   <div class="col-12 ">
                    <label for="inputName" class="form-label">Email</label>
                    <div class="ms-auto position-relative">
                      <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-person-circle"></i></div>
                      <input type="text" class="form-control radius-30 ps-5" id="nik" placeholder="Email" name="nik">
                    </div>
                  </div>
                  <div class="col-12 ">
                    <label for="inputName" class="form-label">Foto</label>
                    <div class="ms-auto position-relative">
                      <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-person-circle"></i></div>
                      <input type="file" class="form-control radius-30 ps-5" id="foto" placeholder="Foto" name="foto">
                    </div>
                  </div>

                  <div class="col-12 ">
                    <label for="inputName" class="form-label">Nama Lengkap</label>
                    <div class="ms-auto position-relative">
                      <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-person-circle"></i></div>
                      <input type="text" class="form-control radius-30 ps-5" id="inputName" placeholder="Nama Lengkap" name="namaLengkap">
                    </div>
                  </div>
                  <div class="col-12 ">
                    <label for="inputName" class="form-label">Alamat</label>
                    <div class="ms-auto position-relative">
                      <textarea name="alamat" id="" cols="3"  class="form-control"></textarea>
                    </div>
                  </div>
                  <!-- <div class="col-12">
                    <label for="inputEmailAddress" class="form-label">Username</label>
                    <div class="ms-auto position-relative">
                      <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>
                      <input type="text" class="form-control radius-30 ps-5" id="inputEmailAddress" placeholder="Username" name="username">
                    </div>
                  </div> -->
                  <div class="col-12">
                    <label for="inputChoosePassword" class="form-label">Password</label>
                    <div class="ms-auto position-relative">
                      <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                      <input type="password" class="form-control radius-30 ps-5" id="inputChoosePassword" placeholder="Password" name="password">
                    </div>
                  </div>
                          <!-- <div class="col-12">
                            <div class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                              <label class="form-check-label" for="flexSwitchCheckChecked">I Agree to the Trems & Conditions</label>
                            </div>
                          </div> -->
                          <div class="col-12">
                            <div class="d-grid">
                              <button type="submit" class="btn btn-primary radius-30">Register</button>
                            </div>
                          </div>
                          <div class="col-12">
                            <p class="mb-0">Already have an account? <a href="<?=base_url('Welcome');?>">Sign up here</a></p>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
        
        <!--end page main-->

      </div>
      <!--end wrapper-->


      <!--plugins-->
      <script src="<?=base_url();?>assets/js/jquery.min.js"></script>
      <script src="<?=base_url();?>assets/js/pace.min.js"></script>

      
    </body>

    </html>