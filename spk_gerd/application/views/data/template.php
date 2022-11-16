
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Sistem Pakar Penyakit Lambung</title>
    <link rel="icon" type="image/x-icon" href="<?=base_url('assets_')?>/logo.png"/>
    <link href="<?=base_url('assets_')?>/layouts/vertical-light-menu/css/light/loader.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets_')?>/layouts/vertical-light-menu/css/dark/loader.css" rel="stylesheet" type="text/css" />
    <script src="<?=base_url('assets_')?>/layouts/vertical-light-menu/loader.js"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="<?=base_url('assets_')?>/src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets_')?>/layouts/vertical-light-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets_')?>/layouts/vertical-light-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="<?=base_url('assets_')?>/src/plugins/src/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url('assets_')?>/src/assets/css/light/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets_')?>/src/assets/css/dark/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets_')?>/src/plugins/src/table/datatable/datatables.css">
    
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets_')?>/src/plugins/css/light/table/datatable/dt-global_style.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets_')?>/src/plugins/css/dark/table/datatable/dt-global_style.css">
    <!-- END PAGE LEVEL STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="<?=base_url('assets_')?>/src/plugins/src/animate/animate.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="<?=base_url('assets_')?>/src/assets/css/light/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets_')?>/src/assets/css/light/components/carousel.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url('assets_')?>/src/assets/css/light/components/modal.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets_')?>/src/assets/css/light/components/tabs.css" rel="stylesheet" type="text/css">
    
    <link href="<?=base_url('assets_')?>/src/assets/css/dark/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets_')?>/src/assets/css/dark/components/carousel.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url('assets_')?>/src/assets/css/dark/components/modal.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets_')?>/src/assets/css/dark/components/tabs.css" rel="stylesheet" type="text/css">
    <!--  END CUSTOM STYLE FILE  -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link rel="stylesheet" href="<?=base_url('assets_')?>/src/plugins/src/sweetalerts2/sweetalerts2.css">
    <link href="<?=base_url('assets_')?>/src/plugins/css/light/sweetalerts2/custom-sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets_')?>/src/plugins/css/dark/sweetalerts2/custom-sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets_')?>/src/assets/css/light/components/accordions.css" rel="stylesheet" type="text/css" />

    <!-- END THEME GLOBAL STYLES -->
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets_')?>/src/plugins/src/vanillaSelectBox/vanillaSelectBox.css">
    
    <link href="<?=base_url('assets_')?>/src/assets/css/light/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets_')?>/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets_')?>/src/plugins/css/light/vanillaSelectBox/custom-vanillaSelectBox.css">

    <link href="<?=base_url('assets_')?>/src/assets/css/dark/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets_')?>/src/plugins/css/dark/vanillaSelectBox/custom-vanillaSelectBox.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets_/src/assets/css/light/elements/alert.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets_/src/assets/css/dark/elements/alert.css">
    <link href="<?= base_url(); ?>assets_/src/plugins/src/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets_/src/assets/css/light/components/list-group.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets_/src/assets/css/light/dashboard/dash_2.css" rel="stylesheet" type="text/css" />

    <link href="<?= base_url(); ?>assets_/src/assets/css/dark/components/list-group.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets_/src/assets/css/dark/dashboard/dash_2.css" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="<?=base_url('assets_')?>/src/plugins/src/global/vendors.min.js"></script>
    <script src="<?=base_url('assets_')?>/src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url('assets_')?>/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?=base_url('assets_')?>/src/plugins/src/mousetrap/mousetrap.min.js"></script>
    
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    
    <!-- BEGIN THEME GLOBAL STYLE -->
    
    <script src="<?=base_url('assets_')?>/src/plugins/src/sweetalerts2/sweetalerts2.min.js"></script>
    <!--   <script src="<?=base_url('assets_')?>/src/plugins/src/sweetalerts2/custom-sweetalert.js"></script> -->
    <script src="<?=base_url('assets_')?>/src/plugins/src/vanillaSelectBox/vanillaSelectBox.js"></script>
    <script src="<?=base_url('assets_')?>/select2/js/select2.min.js"></script>
    <script src="<?=base_url('assets_')?>/src/plugins/src/apex/apexcharts.min.js"></script>
    <!-- <script src="<?=base_url('assets_')?>/src/plugins/src/vanillaSelectBox/custom-vanillaSelectBox.js"></script> -->
    <!-- END THEME GLOBAL STYLE -->    
    <style>
    input:read-only {
        color: black!important;
    }
    
</style>

</head>

<body class="layout-boxed">
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container container-xxl">
        <header class="header navbar navbar-expand-sm expand-header">

            <a href="javascript:void(0);" class="sidebarCollapse">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            </a>

           <!--  <div class="search-animated toggle-search">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                <form class="form-inline search-full form-inline search" role="search">
                    <div class="search-bar">
                        <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x search-close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </div>
                </form>
                <span class="badge badge-secondary">Ctrl + /</span>
            </div> -->

            <ul class="navbar-item flex-row ms-lg-auto ms-0">

             <!--    <li class="nav-item dropdown language-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="language-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="<?=base_url('assets_')?>/src/assets/img/1x1/us.svg" class="flag-width" alt="flag">
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="language-dropdown">
                        <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="<?=base_url('assets_')?>/src/assets/img/1x1/us.svg" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;USA</span></a>
                        <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="<?=base_url('assets_')?>/src/assets/img/1x1/tr.svg" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;Turkey</span></a>
                        <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="<?=base_url('assets_')?>/src/assets/img/1x1/br.svg" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;Brazil</span></a>
                        <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="<?=base_url('assets_')?>/src/assets/img/1x1/in.svg" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;India</span></a>
                        <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="<?=base_url('assets_')?>/src/assets/img/1x1/de.svg" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;Germany</span></a>
                    </div>
                </li> -->

              <!--   <li class="nav-item theme-toggle-item">
                    <a href="javascript:void(0);" class="nav-link theme-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon dark-mode"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun light-mode"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                    </a>
                </li> -->

      <!--           <li class="nav-item dropdown notification-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg><span class="badge badge-success"></span>
                    </a>

                    <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                        <div class="drodpown-title message">
                            <h6 class="d-flex justify-content-between"><span class="align-self-center">Messages</span> <span class="badge badge-primary">9 Unread</span></h6>
                        </div>
                        <div class="notification-scroll">
                            <div class="dropdown-item">
                                <div class="media server-log">
                                    <img src="<?=base_url('assets_')?>/src/assets/img/profile-16.jpeg" class="img-fluid me-2" alt="avatar">
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Kara Young</h6>
                                            <p class="">1 hr ago</p>
                                        </div>
                                        
                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="dropdown-item">
                                <div class="media ">
                                    <img src="<?=base_url('assets_')?>/src/assets/img/profile-15.jpeg" class="img-fluid me-2" alt="avatar">
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Daisy Anderson</h6>
                                            <p class="">8 hrs ago</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <div class="media file-upload">
                                    <img src="<?=base_url('assets_')?>/src/assets/img/profile-21.jpeg" class="img-fluid me-2" alt="avatar">
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Oscar Garner</h6>
                                            <p class="">14 hrs ago</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="drodpown-title notification mt-2">
                                <h6 class="d-flex justify-content-between"><span class="align-self-center">Notifications</span> <span class="badge badge-secondary">16 New</span></h6>
                            </div>

                            <div class="dropdown-item">
                                <div class="media server-log">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6" y2="6"></line><line x1="6" y1="18" x2="6" y2="18"></line></svg>
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Server Rebooted</h6>
                                            <p class="">45 min ago</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <div class="media file-upload">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Kelly Portfolio.pdf</h6>
                                            <p class="">670 kb</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <div class="media ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Licence Expiring Soon</h6>
                                            <p class="">8 hrs ago</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </li> -->

                <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar-container">
                            <div class="avatar avatar-sm avatar-indicators avatar-online">
                                <img alt="avatar" src="<?=base_url('assets_')?>/logo.png" class="rounded-circle">
                            </div>
                        </div>
                    </a>

                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="user-profile-section">
                            <div class="media mx-auto">
                                <div class="emoji me-2">
                                    &#x1F44B;
                                </div>
                                <div class="media-body">
                                    <h5><?=$this->session->userdata('nama_lengkap')?></h5>
                                    <p><?=$this->session->userdata('akses') == 'adm' ? 'Admin' : 'Pasien'?></p>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="dropdown-item">
                            <a href="user-profile.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> <span>Profile</span>
                            </a>
                        </div> -->
                       <!--  <div class="dropdown-item">
                            <a href="app-mailbox.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path></svg> <span>Inbox</span>
                            </a>
                        </div> -->
                        <!-- <div class="dropdown-item">
                            <a href="auth-boxed-lockscreen.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg> <span>Lock Screen</span>
                            </a>
                        </div> -->
                        <div class="dropdown-item">
                            <a href="<?=base_url('Welcome/logout')?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> <span>Log Out</span>
                            </a>
                        </div>
                    </div>
                    
                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">

            <nav id="sidebar">

                <div class="navbar-nav theme-brand flex-row  text-center">
                    <div class="nav-logo">
                        <div class="nav-item theme-logo">
                            <a href="./index.html">
                                <img src="<?=base_url('assets_')?>/logo.png"  alt="logo">
                            </a>
                        </div>
                        <div class="nav-item theme-text">
                            <a href="<?=base_url()?>" class="nav-link"><h5 style="color:black">SP-Lambung</h5></a>
                        </div>
                    </div>
                    <div class="nav-item sidebar-toggle">
                        <div class="btn-toggle sidebarCollapse">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left"><polyline points="11 17 6 12 11 7"></polyline><polyline points="18 17 13 12 18 7"></polyline></svg>
                        </div>
                    </div>
                </div>
                <div class="shadow-bottom"></div>
                <?php 
                $link = $this->uri->segment(2)."/".$this->uri->segment(3);
                $link2 = $this->uri->segment(1)."/".$this->uri->segment(2);
                ?>
                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <?php 
                    if($this->session->userdata('akses') == 'adm'):
                     ?>
                     <li class="menu  <?=$link2 == 'admin/Dashboard' ? 'active' : ''?>">
                        <a href="<?=base_url('admin/Dashboard')?>" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                <span>Dashboard</span>
                            </div>
                        </a>
                    </li>

                  <!--   <li class="menu active">
                        <a href="#dashboard" data-bs-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span>Dashboard</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled show" id="dashboard" data-bs-parent="#accordionExample">
                            <li class="active">
                                <a href="./index.html"> Analytics </a>
                            </li>
                            <li>
                                <a href="./index2.html"> Sales </a>
                            </li>
                        </ul>
                    </li> -->

                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>MASTER</span></div>
                    </li>

                    <li class="menu <?=$link == 'Master/pengguna' ? 'active' : ''?>">
                        <a href="<?=base_url('admin/Master/pengguna')?>" aria-expanded="false" class="dropdown-toggle">
                            <div class="">

                             <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 53 53" style="enable-background:new 0 0 53 53;" xml:space="preserve">
                              <path style="fill:#E7ECED;" d="M18.613,41.552l-7.907,4.313c-0.464,0.253-0.881,0.564-1.269,0.903C14.047,50.655,19.998,53,26.5,53
                              c6.454,0,12.367-2.31,16.964-6.144c-0.424-0.358-0.884-0.68-1.394-0.934l-8.467-4.233c-1.094-0.547-1.785-1.665-1.785-2.888v-3.322
                              c0.238-0.271,0.51-0.619,0.801-1.03c1.154-1.63,2.027-3.423,2.632-5.304c1.086-0.335,1.886-1.338,1.886-2.53v-3.546
                              c0-0.78-0.347-1.477-0.886-1.965v-5.126c0,0,1.053-7.977-9.75-7.977s-9.75,7.977-9.75,7.977v5.126
                              c-0.54,0.488-0.886,1.185-0.886,1.965v3.546c0,0.934,0.491,1.756,1.226,2.231c0.886,3.857,3.206,6.633,3.206,6.633v3.24
                              C20.296,39.899,19.65,40.986,18.613,41.552z" />
                              <g>
                                <path style="fill:#556080;" d="M26.953,0.004C12.32-0.246,0.254,11.414,0.004,26.047C-0.138,34.344,3.56,41.801,9.448,46.76
                                c0.385-0.336,0.798-0.644,1.257-0.894l7.907-4.313c1.037-0.566,1.683-1.653,1.683-2.835v-3.24c0,0-2.321-2.776-3.206-6.633
                                c-0.734-0.475-1.226-1.296-1.226-2.231v-3.546c0-0.78,0.347-1.477,0.886-1.965v-5.126c0,0-1.053-7.977,9.75-7.977
                                s9.75,7.977,9.75,7.977v5.126c0.54,0.488,0.886,1.185,0.886,1.965v3.546c0,1.192-0.8,2.195-1.886,2.53
                                c-0.605,1.881-1.478,3.674-2.632,5.304c-0.291,0.411-0.563,0.759-0.801,1.03V38.8c0,1.223,0.691,2.342,1.785,2.888l8.467,4.233
                                c0.508,0.254,0.967,0.575,1.39,0.932c5.71-4.762,9.399-11.882,9.536-19.9C53.246,12.32,41.587,0.254,26.953,0.004z" />
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
                        </svg>
                        <span>Data Pengguna</span>
                    </div>
                </a>
            </li>          

            <li class="menu <?=$link == 'Master/gejala' ? 'active' : ''?>">
                <a href="<?=base_url('admin/Master/gejala')?>" aria-expanded="false" class="dropdown-toggle">
                    <div class="">

                        <svg width="48px" height="48px" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><title>Free Medical icons</title><path d="M40,47.5H8a3,3,0,0,1-3-3V4.5a3,3,0,0,1,3-3H40a3,3,0,0,1,3,3v40A3,3,0,0,1,40,47.5Zm-31-4H39V5.5H9v38Z" fill="#2161ff"/><rect x="22" y="10" width="4" height="10" transform="translate(9 39) rotate(-90)" fill="#a6c7ff"/><rect x="22" y="10" width="4" height="10" transform="translate(48 30) rotate(-180)" fill="#a6c7ff"/><path d="M30,29.5H18a2,2,0,0,1,0-4H30A2,2,0,0,1,30,29.5Z" fill="#a6c7ff"/><path d="M30,38.5H18a2,2,0,0,1,0-4H30A2,2,0,0,1,30,38.5Z" fill="#a6c7ff"/><rect width="48" height="48" fill="none"/></svg>
                        <span>Gejala</span>
                    </div>
                </a>
            </li>          
            <li class="menu <?=$link == 'Master/penyakit' ? 'active' : ''?>">
                <a href="<?=base_url('admin/Master/penyakit')?>" aria-expanded="false" class="dropdown-toggle">
                    <div class="">

                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 392.53 392.53" style="enable-background:new 0 0 392.53 392.53;" xml:space="preserve">
                          <path style="fill:#FFFFFF;" d="M277.27,63.772c-33.681,0-53.851,32.194-64.84,59.345c-5.107,12.606-4.719,26.958,1.099,39.434
                          c16.614,31.547,4.655,98.974-61.996,101.818l0,0c-15.321-0.646-29.543-4.784-42.861-12.154c-13.446-7.046-29.026-8.663-41.956-4.073
                          c-42.02,14.869-45.188,75.96-44.671,101.042h28.509c0.323-13.123,2.327-23.855,3.943-28.638
                          c3.943-11.636,14.998-19.523,27.539-19.523c9.762,0,18.683,4.848,23.855,12.994c31.095,37.495,67.297,58.182,110.416,56.889
                          c78.093,1.745,153.018-77.705,154.311-159.03C377.084,153.178,333.383,63.19,277.27,63.772z" />
                          <path style="fill:#194F82;" d="M277.27,41.986c-33.616,0-61.349,21.721-80.679,62.966c-3.232-1.745-5.495-5.172-5.495-9.115V10.956
                          c0-6.012-4.848-10.925-10.925-10.925h-54.562c-6.012,0-10.925,4.848-10.925,10.925v84.816c0,46.416,36.719,84.299,82.618,86.497
                          c6.012,30.384-16.291,60.444-45.899,60.186l0,0c-10.279-0.711-21.01-3.168-32.776-9.568c-18.747-9.891-40.792-11.895-59.345-5.301
                          C-4.977,250.277-0.839,342.722,0.648,361.017c0.453,5.624,5.172,10.02,10.925,10.02h49.972h0.065
                          c6.012,0,10.925-4.848,10.925-10.925c0-0.711,1.422-29.22,2.521-32.711c1.164-3.426,4.396-4.655,6.788-4.655
                          c1.616,0,3.943,0.517,5.495,2.844c28.574,40.857,70.723,64.259,128.84,66.909l0,0c85.786-1.875,166.659-73.18,176.097-179.588
                          C396.995,121.889,335.193,36.815,277.27,41.986z M370.619,211.813c-1.293,81.196-76.283,160.776-154.311,159.03
                          c-43.119,1.422-79.386-19.394-110.416-56.889c-5.172-8.145-14.093-12.994-23.855-12.994c-12.541,0-23.596,7.887-27.539,19.523
                          c-1.616,4.784-3.62,15.515-3.943,28.638H22.046c-0.517-25.212,2.651-86.238,44.671-101.042c12.8-4.59,28.444-3.038,41.956,4.073
                          c13.382,7.24,27.669,11.507,42.861,12.154l0,0c66.586-2.844,78.61-70.335,61.996-101.818c-5.818-12.412-6.206-26.828-1.099-39.434
                          c10.99-27.022,31.224-59.345,64.84-59.345C333.383,63.19,377.084,153.178,370.619,211.813z M136.664,21.881h32.711v73.956
                          c0,13.317,8.145,24.76,19.653,29.608c-2.521,11.119-2.457,22.82,0.453,33.939c-29.996-5.689-52.752-32-52.752-63.612V21.881H136.664
                          z" />
                          <path style="fill:#FFC10D;" d="M189.415,159.449c-2.844-11.119-3.038-22.82-0.453-33.939c-11.507-4.848-19.653-16.291-19.653-29.608
                          v-74.02h-32.711v73.956C136.664,127.514,159.484,153.76,189.415,159.449z" />
                          <path style="fill:#56ACE0;" d="M277.27,85.558c-22.626-1.164-37.689,28.638-44.671,45.77c-2.844,6.982-2.651,14.998,0.646,21.915
                          c4.396,9.438,7.499,20.234,8.598,30.19h36.267c6.012,0,10.925,4.848,10.925,10.925c0,6.012-4.848,10.925-10.925,10.925H241.65
                          c-0.905,7.434-2.844,14.739-5.624,21.786h16.162c6.012,0,10.925,4.848,10.925,10.925c0,6.012-4.848,10.925-10.925,10.925h-28.186
                          c-17.261,23.402-43.895,37.172-72.469,37.172l0,0c-21.204,0.259-42.343-8.986-53.01-14.61c-5.172-2.715-28.121-13.446-43.83,15.58
                          c7.952-5.042,17.39-8.016,27.345-7.887c31.289,0.517,44.347,26.117,45.576,27.733c20.945,26.376,54.109,42.02,88.63,42.02l0,0
                          c76.865,0,130.715-76.8,132.525-138.473C350.256,161.841,321.747,87.885,277.27,85.558z" />
                          <path style="fill:#194F82;" d="M298.345,103.659c-4.655,3.879-5.236,10.731-1.487,15.386c15.063,18.23,32.582,48.679,30.19,90.311
                          c-0.646,4.59,2.844,11.119,10.925,11.507c5.689,0,10.537-4.461,10.925-10.279c2.78-48.743-17.519-84.299-35.168-105.568
                          C309.852,100.362,302.934,99.78,298.345,103.659z" />
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

                      <span>Penyakit</span>
                  </div>
              </a>
          </li>   
          <li class="menu <?=$link == 'Master/solusi' ? 'active' : ''?>">
            <a href="<?=base_url('admin/Master/solusi')?>" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                      <rect x="22.925" y="385.91" style="fill:#0052B4;" width="76.418" height="76.418" />
                      <g>
                        <rect x="175.761" y="362.985" style="fill:#93C7EF;" width="336.239" height="122.269" />
                        <rect x="175.761" y="194.866" style="fill:#93C7EF;" width="336.239" height="122.269" />
                        <rect x="175.761" y="26.746" style="fill:#93C7EF;" width="336.239" height="122.269" />
                    </g>
                    <g>
                        <rect x="343.881" y="362.985" style="fill:#78B9EB;" width="168.119" height="122.269" />
                        <rect x="343.881" y="194.866" style="fill:#78B9EB;" width="168.119" height="122.269" />
                        <rect x="343.881" y="26.746" style="fill:#78B9EB;" width="168.119" height="122.269" />
                    </g>
                    <rect x="22.925" y="49.672" style="fill:#FFFFFF;" width="76.418" height="76.418" />
                    <path style="fill:#006DF0;" d="M122.269,149.015H0V26.746h122.269V149.015z M45.851,103.164h30.567V72.597H45.851V103.164z" />
                    <polygon style="fill:#0052B4;" points="61.134,26.746 61.134,72.597 76.418,72.597 76.418,103.164 61.134,103.164 61.134,149.015 
                    122.269,149.015 122.269,26.746 " />
                    <rect x="22.925" y="217.791" style="fill:#FFFFFF;" width="76.418" height="76.418" />
                    <path style="fill:#006DF0;" d="M122.269,317.134H0V194.866h122.269V317.134z M45.851,271.284h30.567v-30.567H45.851V271.284z" />
                    <polygon style="fill:#0052B4;" points="61.134,194.866 61.134,240.716 76.418,240.716 76.418,271.284 61.134,271.284 
                    61.134,317.134 122.269,317.134 122.269,194.866 " />
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
                <span>Solusi</span>
            </div>
        </a>
    </li> 

    <li class="menu menu-heading">
        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>SETTING</span></div>
    </li>
    <li class="menu <?=$link == 'Diagnosa/diagnosa' ? 'active' : ''?>">
        <a href="<?=base_url('admin/Diagnosa/diagnosa')?>" aria-expanded="false" class="dropdown-toggle">
            <div class="">
              <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 417.074 417.074" style="enable-background:new 0 0 417.074 417.074;" xml:space="preserve">
                  <g>
                    <g id="Guides_For_Artboard_20_"></g>
                    <g id="Artwork_19_"></g>
                    <g id="Layer_2_19_">
                      <g>
                        <path style="fill:#E74424;" d="M165.401,139.394c0.869-2.422,3.305-3.914,5.858-3.58c2.552,0.332,4.527,2.397,4.746,4.961
                        l8.747,102.192l16.379-59.038c0.67-2.414,2.882-4.072,5.396-4.009c2.503,0.055,4.65,1.803,5.213,4.243l9.121,39.569
                        l15.573-65.431c0.608-2.56,2.957-4.313,5.582-4.201c2.628,0.125,4.797,2.103,5.163,4.708l11.622,82.857l5.21-16.84
                        c0.71-2.292,2.83-3.854,5.229-3.854h123.254v-28.214c0-26.045-21.116-47.166-47.176-47.166h-74.883V70.706
                        c0-26.057-21.115-47.17-47.17-47.17H196.02h-4.298c-26.049,0-47.176,21.114-47.176,47.17v74.884H69.659
                        c-26.036,0-47.162,21.121-47.162,47.166v28.816h113.416L165.401,139.394z" />
                        <path style="fill:#E74424;" d="M262.013,268.313c-0.759,2.448-3.12,4.046-5.668,3.838c-2.556-0.208-4.626-2.157-4.981-4.697
                        l-10.997-78.4L226.1,248.999c-0.587,2.466-2.791,4.207-5.324,4.207c-0.006,0-0.013,0-0.02,0c-2.542-0.01-4.743-1.767-5.314-4.245
                        l-9.525-41.325l-18.748,67.576c-0.664,2.387-2.836,4.009-5.271,4.009c-0.169,0-0.339-0.008-0.51-0.022
                        c-2.639-0.246-4.722-2.344-4.947-4.984l-9.203-107.526l-22.319,62.207c-0.78,2.176-2.841,3.625-5.152,3.625H23.226
                        c3.89,22.131,23.2,38.951,46.435,38.951h74.887v74.886c0,26.057,21.127,47.18,47.176,47.18h4.298h27.245
                        c26.055,0,47.17-21.124,47.17-47.18v-74.886h74.883c23.467,0,42.916-17.125,46.556-39.553h-118.6L262.013,268.313z" />
                        <path style="fill:#F7F1E6;" d="M411.603,220.971h-19.108H269.241c-2.399,0-4.52,1.563-5.229,3.854l-5.21,16.84l-11.622-82.857
                        c-0.366-2.605-2.535-4.583-5.163-4.708c-2.625-0.112-4.974,1.641-5.582,4.201l-15.573,65.431l-9.121-39.569
                        c-0.563-2.44-2.71-4.188-5.213-4.243c-2.514-0.063-4.726,1.596-5.396,4.009l-16.379,59.038l-8.747-102.192
                        c-0.219-2.564-2.194-4.63-4.746-4.961c-2.554-0.334-4.989,1.158-5.858,3.58l-29.486,82.179H22.499H5.474
                        c-3.023,0-5.474,2.451-5.474,5.475c0,3.022,2.45,5.473,5.474,5.473h17.752h116.539c2.312,0,4.372-1.449,5.152-3.625
                        l22.319-62.207l9.203,107.526c0.226,2.64,2.309,4.738,4.947,4.984c0.171,0.014,0.341,0.022,0.51,0.022
                        c2.436,0,4.607-1.622,5.271-4.009l18.748-67.577l9.525,41.325c0.571,2.479,2.772,4.235,5.314,4.245c0.007,0,0.014,0,0.02,0
                        c2.533,0,4.737-1.74,5.324-4.207l14.267-59.944l10.997,78.4c0.355,2.54,2.426,4.49,4.981,4.697
                        c2.548,0.208,4.909-1.39,5.668-3.838l11.263-36.396h118.599h19.729c3.022,0,5.472-2.45,5.472-5.473
                        C417.075,223.421,414.626,220.971,411.603,220.971z" />
                    </g>
                </g>
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
        </svg>
        <span>Diagnosa</span>
    </div>
</a>
</li>       
<li class="menu <?=$link == 'Diagnosa/konsultasi' ? 'active' : ''?>">
    <a href="<?=base_url('admin/Diagnosa/konsultasi')?>" aria-expanded="false" class="dropdown-toggle">
        <div class="">
           <svg width="32px" height="32px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:#04009a;}.cls-2{fill:#77acf1;}</style></defs><g data-name="13. Computer" id="_13._Computer"><path class="cls-1" d="M28,3H26a1,1,0,0,0,0,2h2a1,1,0,0,1,1,1V20H3V6A1,1,0,0,1,4,5H6A1,1,0,0,0,6,3H4A3,3,0,0,0,1,6V24a3,3,0,0,0,3,3h7.88A4.53,4.53,0,0,1,10,29.83L9.7,30H8a1,1,0,0,0,0,2H24a1,1,0,0,0,0-2H22.3l-.25-.17A4.53,4.53,0,0,1,20.12,27H28a3,3,0,0,0,3-3V6A3,3,0,0,0,28,3ZM19.36,30H12.64a6.55,6.55,0,0,0,1.28-3h4.16A6.55,6.55,0,0,0,19.36,30ZM28,25H4a1,1,0,0,1-1-1V22H29v2A1,1,0,0,1,28,25Z"/><path class="cls-1" d="M16,16a8,8,0,1,1,8-8A8,8,0,0,1,16,16ZM16,2a6,6,0,1,0,6,6A6,6,0,0,0,16,2Z"/><path class="cls-2" d="M18,7H17V6a1,1,0,0,0-2,0V7H14a1,1,0,0,0,0,2h1v1a1,1,0,0,0,2,0V9h1a1,1,0,0,0,0-2Z"/></g></svg>
           <span>Konsultasi</span>
       </div>
   </a>
</li>  
<li class="menu menu-heading">
    <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>LAPORAN</span></div>
</li>     
<li class="menu <?=$link == 'Laporan/pasien' ? 'active' : ''?>">
    <a href="<?=base_url('admin/Laporan/pasien')?>" aria-expanded="false" class="dropdown-toggle">
        <div class="">

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
  <span>Laporan Pasien</span>
</div>
</a>
</li>       
<?php endif ?>
<?php if($this->session->userdata('akses') == 'psn'): 
    $link4 = $this->uri->segment(1)."/".$this->uri->segment(2)."/".$this->uri->segment(3);
    ?>
    <li class="menu <?=$link4 == 'pasien/Konsultasi/Konsultasi' ? 'active' : ''?>">
        <a href="<?=base_url('pasien/Konsultasi/Konsultasi')?>" aria-expanded="false" class="dropdown-toggle">
            <div class="">
               <svg width="32px" height="32px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:#04009a;}.cls-2{fill:#77acf1;}</style></defs><g data-name="13. Computer" id="_13._Computer"><path class="cls-1" d="M28,3H26a1,1,0,0,0,0,2h2a1,1,0,0,1,1,1V20H3V6A1,1,0,0,1,4,5H6A1,1,0,0,0,6,3H4A3,3,0,0,0,1,6V24a3,3,0,0,0,3,3h7.88A4.53,4.53,0,0,1,10,29.83L9.7,30H8a1,1,0,0,0,0,2H24a1,1,0,0,0,0-2H22.3l-.25-.17A4.53,4.53,0,0,1,20.12,27H28a3,3,0,0,0,3-3V6A3,3,0,0,0,28,3ZM19.36,30H12.64a6.55,6.55,0,0,0,1.28-3h4.16A6.55,6.55,0,0,0,19.36,30ZM28,25H4a1,1,0,0,1-1-1V22H29v2A1,1,0,0,1,28,25Z"/><path class="cls-1" d="M16,16a8,8,0,1,1,8-8A8,8,0,0,1,16,16ZM16,2a6,6,0,1,0,6,6A6,6,0,0,0,16,2Z"/><path class="cls-2" d="M18,7H17V6a1,1,0,0,0-2,0V7H14a1,1,0,0,0,0,2h1v1a1,1,0,0,0,2,0V9h1a1,1,0,0,0,0-2Z"/></g></svg>
               <span>Konsultasi</span>
           </div>
       </a>
   </li>  
   <li class="menu <?=$link4 == 'pasien/Konsultasi/Data_konsul' ? 'active' : ''?>">
    <a href="<?=base_url('pasien/Konsultasi/Data_konsul')?>" aria-expanded="false" class="dropdown-toggle">
        <div class="">
         <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
         <polygon style="fill:#A0F6FA;" points="455.736,0 455.736,444.484 399.473,466.989 421.978,0 "/>
         <polygon style="fill:#D0FBFD;" points="56.264,0 56.264,512 388.22,512 421.978,455.736 421.978,0 "/>
         <polygon style="fill:#FF9269;" points="388.22,67.516 388.22,174.418 354.462,174.418 320.703,120.967 354.462,67.516 "/>
         <rect x="123.78" y="67.516" style="fill:#FFB082;" width="230.681" height="106.901"/>
         <polygon style="fill:#50D1DD;" points="455.736,444.484 388.22,512 388.22,444.484 421.978,444.484 "/>
         <g>
            <path style="fill:#25BBCC;" d="M303.824,385.407H132.22c-4.662,0-8.44-3.779-8.44-8.44s3.778-8.44,8.44-8.44h171.604
            c4.662,0,8.44,3.779,8.44,8.44S308.486,385.407,303.824,385.407z"/>
            <path style="fill:#25BBCC;" d="M379.78,351.648H132.22c-4.662,0-8.44-3.779-8.44-8.44s3.778-8.44,8.44-8.44h247.56
            c4.662,0,8.44,3.779,8.44,8.44S384.442,351.648,379.78,351.648z"/>
            <path style="fill:#25BBCC;" d="M379.78,317.89H132.22c-4.662,0-8.44-3.779-8.44-8.44s3.778-8.44,8.44-8.44h247.56
            c4.662,0,8.44,3.779,8.44,8.44S384.442,317.89,379.78,317.89z"/>
            <path style="fill:#25BBCC;" d="M379.78,284.132H132.22c-4.662,0-8.44-3.779-8.44-8.44s3.778-8.44,8.44-8.44h247.56
            c4.662,0,8.44,3.779,8.44,8.44S384.442,284.132,379.78,284.132z"/>
            <path style="fill:#25BBCC;" d="M379.78,250.374H132.22c-4.662,0-8.44-3.779-8.44-8.44s3.778-8.44,8.44-8.44h247.56
            c4.662,0,8.44,3.779,8.44,8.44S384.442,250.374,379.78,250.374z"/>
            <path style="fill:#25BBCC;" d="M213.802,452.923H132.22c-4.662,0-8.44-3.779-8.44-8.44c0-4.661,3.778-8.44,8.44-8.44h81.582
            c4.662,0,8.44,3.779,8.44,8.44C222.242,449.144,218.464,452.923,213.802,452.923z"/>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
    </svg>

    <span>Konsultasi Saya</span>
</div>
</a>
</li>  
<?php endif; ?>

</ul>

</nav>

</div>
<!--  END SIDEBAR  -->

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <?=$contents?>
    <!--  BEGIN FOOTER  -->
    <div class="footer-wrapper">
        <div class="footer-section f-section-1">
            <p class="">Copyright © <span class="dynamic-year">2022</span> <a target="_blank" href="https://designreset.com/cork-admin/">DesignReset</a>, All rights reserved.</p>
        </div>
        <div class="footer-section f-section-2">
            <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
        </div>
    </div>
    <!--  END FOOTER  -->
</div>
<!--  END CONTENT AREA  -->

</div>
<!-- END MAIN CONTAINER -->

<script src="<?=base_url('assets_')?>/layouts/vertical-light-menu/app.js"></script>
<script src="<?=base_url('assets_')?>/src/assets/js/custom.js"></script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<!-- <script src="<?=base_url('assets_')?>/src/plugins/src/apex/apexcharts.min.js"></script> -->
<script src="<?=base_url('assets_')?>/src/assets/js/dashboard/dash_1.js"></script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

<script src="<?=base_url('assets_')?>/src/assets/js/dashboard/dash_2.js"></script>
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?=base_url('assets_')?>/src/plugins/src/table/datatable/datatables.js"></script>
<!-- <script src="<?=base_url('assets_')?>/src/assets/js/scrollspyNav.js"></script> -->
<script>
    $('#zero-config').DataTable({
        "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
        "oLanguage": {
            "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
            "sInfo": "Showing page _PAGE_ of _PAGES_",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "Search...",
            "sLengthMenu": "Results :  _MENU_",
        },
        "stripeClasses": [],
        "lengthMenu": [7, 10, 20, 50],
        "pageLength": 10 
    });
</script>
<!-- END PAGE LEVEL SCRIPTS -->

</body>
</html>