<!doctype html>
<html lang="en" class="light-theme">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?= base_url(); ?>assets/logo2.jpeg" type="image/png" />
  <!--plugins-->
  <link href="<?= base_url(); ?>assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/css/bootstrap-extended.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


  <!-- loader-->
  <link href="<?= base_url(); ?>assets/css/pace.min.css" rel="stylesheet" />

  <!--Theme Styles-->
  <link href="<?= base_url(); ?>assets/css/dark-theme.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/css/light-theme.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/css/semi-dark.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/css/header-colors.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/sweet-alert/sweetalert2.min.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />
  
  <!-- Bootstrap bundle JS -->
  <script src="<?= base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
  <!--plugins-->
  <script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
  <script src="<?= base_url(); ?>assets/sweet-alert/sweetalert2.min.js"></script>
  <script src="<?= base_url(); ?>assets/plugins/select2/js/select2.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/form-select2.js"></script>
  <title>DICKY ADV</title>
</head>
<script>
  <?php
  $berhasil = $this->session->userdata('sukses');
  if ($berhasil) {
    ?>
    $(document).ready(function() {
      swal("Informasi!", "<?= $berhasil ?>", "success");
    })
    <?php $this->session->unset_userdata('sukses');
  } ?>
</script>

<body>


  <!--start wrapper-->
  <div class="wrapper">
    <!--start top header-->
    <header class="top-header">
      <nav class="navbar navbar-expand gap-3">
        <div class="mobile-toggle-icon fs-3">
          <i class="bi bi-list"></i>
        </div>
        <form class="searchbar">
          <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i class="bi bi-search"></i></div>
          <input class="form-control" type="text" placeholder="Type here to search">
          <div class="position-absolute top-50 translate-middle-y search-close-icon"><i class="bi bi-x-lg"></i></div>
        </form>
        <div class="top-navbar-right ms-auto">
          <ul class="navbar-nav align-items-center">
            <li class="nav-item search-toggle-icon">
              <a class="nav-link" href="#">
                <div class="">
                  <i class="bi bi-search"></i>
                </div>
              </a>
            </li>
            <li class="nav-item dropdown dropdown-user-setting">
              <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                <div class="user-setting d-flex align-items-center">
                  <img src="<?=base_url('assets/images/l.png');?>" class="user-img" alt="">
                </div>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <a class="dropdown-item" href="#">
                    <div class="d-flex align-items-center">
                      <img src="<?=base_url('assets/images/l.png');?>" alt="" class="rounded-circle" width="54" height="54">
                      <div class="ms-3">
                        <h6 class="mb-0 dropdown-user-name"><?=$this->session->userdata('namaLengkap')?></h6>
                        <small class="mb-0 dropdown-user-designation text-secondary"><?=$this->session->userdata('hakAkses')?></small>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li>
                  <a class="dropdown-item" href="<?=base_url('Welcome/logout');?>">
                    <div class="d-flex align-items-center">
                      <div class=""><i class="bi bi-lock-fill"></i></div>
                      <div class="ms-3"><span>Logout</span></div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!--end top header-->

    <!--start sidebar -->
    <aside class="sidebar-wrapper" data-simplebar="true">
      <div class="sidebar-header">
        <div>
          <img src="<?= base_url(); ?>assets/logo2.jpeg" class="logo-icon" alt="logo icon">
        </div>
        <div>
          <h4 class="logo-text">DICKY ADV</h4>
        </div>
        <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
        </div>
      </div>
      <!--navigation-->
      <ul class="metismenu" id="menu">
        <?php
        $sess = $this->session->userdata('hakAkses');
        ?>
        <li>
          <a href="<?= $sess =='admin' ? base_url('admin/Dashboard') :base_url('pengguna/Dashboard') ;?>">
            <div class="parent-icon"><i class="bi bi-house-fill"></i>
            </div>
            <div class="menu-title">Dashboard</div>
          </a>
        </li>
        <?php
        if ($sess == 'admin') :
          ?>
          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><i class="bi bi-grid-fill"></i>
              </div>
              <div class="menu-title">Master</div>
            </a>
            <ul>
              <li> <a href="<?= base_url('admin/Pengguna'); ?>"><i class="bi bi-circle"></i>Data Pengguna</a>
              </li>
              <li> <a href="<?= base_url('admin/Jenis'); ?>"><i class="bi bi-circle"></i>Data Jenis</a>
              </li>
              <li> <a href="<?= base_url('admin/Barang'); ?>"><i class="bi bi-circle"></i>Data Barang</a>
              </li>
            </ul>
          </li>
          <li class="menu-label">Transaksi</li>
          <li>
            <a href="<?= base_url('admin/Transaksi/masuk') ?>">
              <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
              </div>
              <div class="menu-title">Transaksi Masuk</div>
            </a>
          </li>
          <li>
            <a href="<?= base_url('admin/Transaksi/proses') ?>">
              <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
              </div>
              <div class="menu-title">Transaksi Proses</div>
            </a>
          </li>
          <li>
            <a href="<?= base_url('admin/Transaksi/selesai') ?>">
              <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
              </div>
              <div class="menu-title">Transaksi Selesai</div>
            </a>
          </li>
          <li class="menu-label">Laporan</li>
          <li>
            <a href="<?= base_url('admin/Laporan') ?>">
              <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
              </div>
              <div class="menu-title">Laporan Penjualan</div>
            </a>
          </li>
          <li>
            <a href="<?= base_url('admin/Laporan/pengguna') ?>">
              <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
              </div>
              <div class="menu-title">Laporan Pengguna</div>
            </a>
          </li>
        <?php endif; ?>
        
        <?php
        if ($sess == 'pelanggan') :
          ?>
          <li>
            <a href="<?= base_url('Pengguna/Belanja') ?>">
              <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
              </div>
              <div class="menu-title">Belanja Saya</div>
            </a>
          </li>
          <li>
            <a href="<?= base_url('Pengguna/Belanja/sudah') ?>">
              <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
              </div>
              <div class="menu-title">Pembelian Sudah Bayar</div>
            </a>
          </li>
        <?php endif; ?>
        <?php if($sess != 'admin'): ?>
          <li>
            <a href="<?= base_url('Pengguna/Barang') ?>">
              <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
              </div>
              <div class="menu-title">Produk</div>
            </a>
          </li>
          <li>
            <a href="<?= base_url('Pengguna/Barang/custom_barang') ?>">
              <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
              </div>
              <div class="menu-title">Custom Barang</div>
            </a>
          </li>
        <?php endif; ?>
      </ul>
      <!--end navigation-->
    </aside>
    <!--end sidebar -->

    <!--start content-->
    <main class="page-content">

      <?= $contents; ?>


    </main>
    <!--end page main-->

    <!--start overlay-->
    <div class="overlay nav-toggle-icon"></div>
    <!--end overlay-->

    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->

    <!--start switcher-->
    <!-- <div class="switcher-body">
  <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="bi bi-paint-bucket me-0"></i></button>
  <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
    <div class="offcanvas-header border-bottom">
      <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
      <h6 class="mb-0">Theme Variation</h6>
      <hr>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1" checked>
        <label class="form-check-label" for="LightTheme">Light</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2">
        <label class="form-check-label" for="DarkTheme">Dark</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme" value="option3">
        <label class="form-check-label" for="SemiDarkTheme">Semi Dark</label>
      </div>
      <hr>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="MinimalTheme" value="option3">
        <label class="form-check-label" for="MinimalTheme">Minimal Theme</label>
      </div>
      <hr/>
      <h6 class="mb-0">Header Colors</h6>
      <hr/>
      <div class="header-colors-indigators">
        <div class="row row-cols-auto g-3">
          <div class="col">
            <div class="indigator headercolor1" id="headercolor1"></div>
          </div>
          <div class="col">
            <div class="indigator headercolor2" id="headercolor2"></div>
          </div>
          <div class="col">
            <div class="indigator headercolor3" id="headercolor3"></div>
          </div>
          <div class="col">
            <div class="indigator headercolor4" id="headercolor4"></div>
          </div>
          <div class="col">
            <div class="indigator headercolor5" id="headercolor5"></div>
          </div>
          <div class="col">
            <div class="indigator headercolor6" id="headercolor6"></div>
          </div>
          <div class="col">
            <div class="indigator headercolor7" id="headercolor7"></div>
          </div>
          <div class="col">
            <div class="indigator headercolor8" id="headercolor8"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
<!--end switcher-->

</div>
<!--end wrapper-->



<script src="<?= base_url(); ?>assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script src="<?= base_url(); ?>assets/js/table-datatable.js"></script>
<script src="<?= base_url(); ?>assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="<?= base_url(); ?>assets/js/pace.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/chartjs/js/Chart.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/chartjs/js/Chart.extension.js"></script>
<script src="<?= base_url(); ?>assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
<!--app-->
<script src="<?= base_url(); ?>assets/js/app.js"></script>
<script src="<?= base_url(); ?>assets/js/index.js"></script>
<script>
  new PerfectScrollbar(".best-product");
</script>


</body>

</html>