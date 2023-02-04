<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title><?= $title; ?></title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('dashboard/assets/img/favicon.ico') ?>" />
    <link href="<?= base_url('dashboard/assets/css/loader.css') ?>" rel="stylesheet" type="text/css" />
    <script src="<?= base_url('dashboard/assets/js/loader.js') ?>"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,600,700" rel="stylesheet">
    <link href="<?= base_url('dashboard/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('dashboard/assets/css/plugins.css') ?>" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="<?= base_url('dashboard/plugins/animate/animate.css') ?>" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->

    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="<?= base_url('dashboard/plugins/apex/apexcharts.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('dashboard/assets/css/dashboard/dash_2.css') ?>" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->

    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('dashboard/plugins/table/datatable/datatables.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('dashboard/plugins/table/datatable/custom_dt_html5.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('dashboard/plugins/table/datatable/dt-global_style.css') ?>">
    <!-- END PAGE LEVEL CUSTOM STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="<?= base_url('dashboard/assets/css/elements/miscellaneous.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('dashboard/assets/css/elements/breadcrumb.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('dashboard/assets/css/scrollspyNav.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('dashboard/plugins/leaflet/leaflet.css') ?>" rel="stylesheet" type="text/css" />

    <style>
        .btn-light {
            border-color: transparent;
        }

        .leaflet-map {
            border-radius: 8px;
            height: 340px;
            margin-left: 20px;
            margin-right: 20px;
            margin-bottom: 20px;
        }

        .icon {
            padding: 8px 8px;
            border-radius: 50%;
            display: inline-flex;
            align-self: center;
            height: 34px;
            width: 34px;
            margin-right: 12px;
        }

        .progress .progress-bar.bg-gradient-1 {
            background-color: #4361ee;
            background: linear-gradient(to right, #34495e 0%, #2c3e50 100%);
        }

        .progress .progress-bar.bg-gradient-2 {
            background-color: #4361ee;
            background-image: linear-gradient(to right, #9b59b6 0%, #8e44ad 100%);
        }

        .progress .progress-bar.bg-gradient-3 {
            background-color: #4361ee;
            background-image: linear-gradient(to right, #3498db 0%, #2980b9 100%);
        }

        .progress .progress-bar.bg-gradient-4 {
            background-color: #4361ee;
            background-image: linear-gradient(to right, #1abc9c 0%, #16a085 100%);
        }

        .progress .progress-bar.bg-gradient-5 {
            background-color: #4361ee;
            background-image: linear-gradient(to right, #2ecc71 0%, #27ae60 100%);
        }

        .progress .progress-bar.bg-gradient-6 {
            background-color: #4361ee;
            background-image: linear-gradient(to right, #f1c40f 0%, #f39c12 100%);
        }

        .progress .progress-bar.bg-gradient-7 {
            background-color: #4361ee;
            background-image: linear-gradient(to right, #e67e22 0%, #d35400 100%);
        }

        .progress .progress-bar.bg-gradient-8 {
            background-color: #4361ee;
            background-image: linear-gradient(to right, #e74c3c 0%, #c0392b 100%);
        }
    </style>

    <!--  END CUSTOM STYLE FILE  -->

</head>

<body class="alt-menu sidebar-noneoverflow">
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-border spinner-border-reverse align-self-center text-primary"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container fixed-top">
        <header class="header navbar navbar-expand-sm expand-header">
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg></a>

            <ul class="navbar-item flex-row ml-auto">

                <li class="nav-item align-self-center search-animated">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                    <form class="form-inline search-full form-inline search" role="search">
                        <div class="search-bar">
                            <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
                        </div>
                    </form>
                </li>

                <li class="nav-item dropdown language-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="language-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="<?= base_url('dashboard/assets/img/id.png') ?>" class="flag-width" alt="flag">
                    </a>
                </li>

                <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="user-profile-section">
                            <div class="media mx-auto">
                                <img src="<?= base_url(); ?>\dashboard\assets\img\<?= user()->user_image; ?>" class="img-fluid mr-2" alt="avatar">
                                <div class="media-body">
                                    <h5><?= user()->username; ?></h5>
                                    <p><?= user()->role; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-item">
                            <a href="<?= base_url(); ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg> <span>Beranda</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="<?= base_url('/logout'); ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg> <span>Keluar</span>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </header>
    </div>

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container sidebar-closed sbar-open" id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">

            <nav id="sidebar">

                <ul class="navbar-nav theme-brand flex-row  text-center">
                    <li class="nav-item theme-logo">
                        <a href="index.html">
                            <img src="<?= base_url('dashboard/assets/img/UGM90PX.png') ?>" class="navbar-logo" alt="logo">
                        </a>
                    </li>
                    <li class="nav-item theme-text">
                        <a href="index.php" class="nav-link "><img src="<?= base_url('dashboard/assets/img/130x45.png') ?>" class="navbar-logo"></a>
                    </li>
                </ul>

                <ul class="list-unstyled menu-categories" id="accordionExample">

                    <!--  begin dashboard  -->

                    <li class="menu">
                        <a href="/apps/dashboard" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                <span>Dashboard</span>
                            </div>
                        </a>
                    </li>
                    <!--  end dashboard  -->

                    <!--  BEGIN apps  -->
                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="19" cy="12" r="1"></circle>
                                <circle cx="5" cy="12" r="1"></circle>
                            </svg><span>APPS</span></div>
                    </li>

                    <li class="menu active">
                        <a href="/apps/maps" aria-expanded="true" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                    <polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon>
                                    <line x1="8" y1="2" x2="8" y2="18"></line>
                                    <line x1="16" y1="6" x2="16" y2="22"></line>
                                </svg>
                                <span>Web GIS</span>
                            </div>
                        </a>
                    </li>
                    <!--  end apps  -->

                    <?php if (in_groups('admin', 'developer')) : ?>
                        <!--  begin menu-admin  -->
                        <li class="menu menu-heading">
                            <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                    <circle cx="5" cy="12" r="1"></circle>
                                </svg><span>ADMIN CONTROL</span></div>
                        </li>
                        <li class="menu">
                            <a href="/database/data-user" aria-expanded="false" class="dropdown-toggle">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                        <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                                        <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                                        <line x1="6" y1="6" x2="6" y2="6"></line>
                                        <line x1="6" y1="18" x2="6" y2="18"></line>
                                    </svg>
                                    <span>Database Pengguna</span>
                                </div>
                            </a>
                        </li>

                        <li class="menu menu-heading">
                            <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                    <circle cx="5" cy="12" r="1"></circle>
                                </svg><span>DATABASE MANAGEMENT</span></div>
                        </li>

                        <!--  begin rencana realisasi  -->
                        <li class="menu">
                            <a href="#renstra" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 17 21" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                        <path d="M 6.60,3.91
                                             C 6.60,3.91 0.94,3.91 0.94,3.91M 3.77,1.05
                                             C 3.77,1.05 3.77,6.77 3.77,6.77M 9.43,0.95
                                             C 9.43,0.95 9.43,7.62 9.43,7.62
                                               9.43,7.62 16.06,7.62 16.06,7.62M 0.94,8.58
                                             C 0.94,8.58 0.94,18.11 0.94,18.11
                                               0.94,19.16 1.79,20.01 2.83,20.01
                                               2.83,20.01 14.14,20.01 14.14,20.01
                                               15.18,20.01 16.02,19.16 16.02,18.11
                                               16.02,18.11 16.02,7.62 16.02,7.62
                                               16.02,7.62 9.43,0.95 9.43,0.95">
                                        </path>
                                    </svg>
                                    <span>+ Rencana Pengelolaan</span>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                            </a>
                            <ul class="collapse submenu list-unstyled" id="renstra" data-parent="#accordionExample">
                                <li>
                                    <a href="/database/rencana-strategis"> Rencana Strategis </a>
                                </li>
                                <li>
                                    <a href="/database/rencana-tahunan"> Rencana Tahunan</a>
                                </li>
                            </ul>
                        </li>
                        <!--  end rencana realisasi  -->

                        <!--  BEGIN penataan kawasan  -->
                        <li class="menu">
                            <a href="#penataan" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 21 21" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                        <path d="M 6.69,3.81
                                            C 6.69,3.81 0.95,3.81 0.95,3.81M 3.81,0.95
                                            C 3.81,0.95 3.81,6.69 3.81,6.69M 0.95,10.50
                                            C 0.95,10.50 10.50,15.29 10.50,15.29
                                              10.50,15.29 20.05,10.50 20.05,10.50M 0.95,15.29
                                            C 0.95,15.29 10.50,20.05 10.50,20.05
                                              10.50,20.05 20.05,15.29 20.05,15.29M 8.95,9.73
                                            C 8.95,9.73 10.50,10.50 10.50,10.50
                                              10.50,10.50 20.05,5.74 20.05,5.74
                                              20.05,5.74 10.53,0.98 10.53,0.98
                                              10.53,0.98 8.95,1.73 8.95,1.73">
                                        </path>
                                    </svg>
                                    <span>+ Penataan Kawasan</span>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                            </a>
                            <ul class="collapse submenu list-unstyled" id="penataan" data-parent="#accordionExample">
                                <li>
                                    <a href="/database/organisasi-kawasan"> Pengorganisasian Kawasan </a>
                                </li>
                                <li>
                                    <a href="/database/struktur-umt"> Struktur Kawasan UMT </a>
                                </li>
                                <li>
                                    <a href="/database/tanaman-umt"> Jenis Tanaman pada UMT </a>
                                </li>
                            </ul>
                        </li>
                        <!--  end penataan kawasan  -->

                        <!--  BEGIN potensi sdh  -->
                        <li class="menu">
                            <a href="#potensi" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 21 21" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                        <path d="M 6.67,3.82
                                            C 6.67,3.82 0.96,3.82 0.96,3.82M 3.81,0.96
                                            C 3.81,0.96 3.81,6.67 3.81,6.67M 20.02,10.51
                                            C 20.02,6.04 16.93,2.27 12.77,1.24
                                              12.02,1.07 11.26,0.96 10.48,0.96
                                              10.48,0.96 10.48,10.51 10.48,10.51
                                              10.48,10.51 20.04,10.60 20.04,10.60M 19.28,14.22
                                            C 17.80,17.75 14.33,20.04 10.50,20.04
                                              5.23,20.04 0.96,15.77 0.96,10.49
                                              0.96,10.05 0.98,9.62 1.05,9.20"></path>
                                    </svg>
                                    <span>+ Potensi SDH</span>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                            </a>
                            <ul class="collapse submenu list-unstyled" id="potensi" data-parent="#accordionExample">
                                <li>
                                    <a href="/database/inven-sdh"> Inventarisasi SDH </a>
                                </li>
                                <li>
                                    <a href="/database/ukur-pu"> Pengukuran dalam PU </a>
                                </li>
                            </ul>
                        </li>
                        <!--  end potensi sdh  -->

                        <!--  begin potensi sosekbud  -->
                        <li class="menu">
                            <a href="#sosekbud" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 22 19" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                        <path d="M 0.92,3.81
                                            C 0.92,3.81 6.41,3.81 6.41,3.81M 3.68,0.95
                                            C 3.68,0.95 3.68,6.64 3.68,6.64M 17.88,4.74
                                            C 17.88,6.84 16.24,8.55 14.21,8.55
                                              12.18,8.55 10.53,6.84 10.53,4.74
                                              10.53,2.63 12.18,0.93 14.21,0.93
                                              16.24,0.93 17.88,2.63 17.88,4.74 Z
                                            M 7.33,18.05
                                            C 7.33,18.05 7.33,16.14 7.33,16.14
                                              7.33,14.03 8.98,12.33 11.01,12.33
                                              11.01,12.33 17.42,12.33 17.42,12.33
                                              19.46,12.33 21.10,14.03 21.10,16.14
                                              21.10,16.14 21.10,18.05 21.10,18.05">
                                        </path>
                                    </svg>
                                    <span>+ Potensi SOSEKBUD</span>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                            </a>
                            <ul class="collapse submenu list-unstyled" id="sosekbud" data-parent="#accordionExample">
                                <li>
                                    <a href="/database/sosekbud-desa"> SOSEKBUD Desa </a>
                                </li>
                                <li>
                                    <a href="/database/hwd"> Kelola Kawasan HWD </a>
                                </li>
                            </ul>
                        </li>
                        <!--  end potensi sosekbud  -->
                        <li class="menu">
                            <a href="/database/alokasi-realisasi" aria-expanded="false" class="dropdown-toggle">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                        <path d="M 7.62,9.79
                                        C 7.62,9.79 7.62,20.90 7.62,20.90M 16.38,20.90
                                        C 16.38,20.90 16.38,3.29 16.38,3.29
                                          16.38,2.06 15.42,1.10 14.20,1.10
                                          14.20,1.10 10.63,1.10 10.63,1.10M 10.67,5.49
                                        C 10.67,5.49 20.73,5.49 20.73,5.49
                                          21.95,5.49 22.91,6.46 22.91,7.68
                                          22.91,7.68 22.91,18.66 22.91,18.66
                                          22.91,19.89 21.95,20.86 20.73,20.86
                                          20.73,20.86 3.27,20.86 3.27,20.86
                                          2.05,20.86 1.09,19.89 1.09,18.66
                                          1.09,18.66 1.09,9.79 1.09,9.79M 7.62,4.39
                                        C 7.62,4.39 1.09,4.39 1.09,4.39M 4.36,1.10
                                        C 4.36,1.10 4.36,7.68 4.36,7.68"></path>
                                    </svg>
                                    <span>+ Alokasi & Realisasi</span>
                                </div>
                            </a>
                        </li>
                        <!--  end menu-admin  -->
                    <?php endif; ?>

                    <!--  begin menu-user  -->
                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="19" cy="12" r="1"></circle>
                                <circle cx="5" cy="12" r="1"></circle>
                            </svg><span>DATABASE</span></div>
                    </li>
                    <!--  begin rencana realisasi  -->
                    <li class="menu">
                        <a href="#renstra-user" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                    <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                    <polyline points="13 2 13 9 20 9"></polyline>
                                </svg>
                                <span>Rencana Pengelolaan</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="renstra-user" data-parent="#accordionExample">
                            <li>
                                <a href="/database-user/rencana-strategis"> Rencana Strategis </a>
                            </li>
                            <li>
                                <a href="/database-user/rencana-tahunan"> Rencana Tahunan</a>
                            </li>
                        </ul>
                    </li>
                    <!--  end rencana realisasi  -->

                    <!--  BEGIN penataan kawasan  -->
                    <li class="menu">
                        <a href="#penataan-user" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                    <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                    <polyline points="2 17 12 22 22 17"></polyline>
                                    <polyline points="2 12 12 17 22 12"></polyline>
                                </svg>
                                <span>Penataan Kawasan</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="penataan-user" data-parent="#accordionExample">
                            <li>
                                <a href="/database-user/organisasi-kawasan"> Pengorganisasian Kawasan </a>
                            </li>
                            <li>
                                <a href="/database-user/struktur-umt"> Struktur Kawasan UMT </a>
                            </li>
                            <li>
                                <a href="/database-user/tanaman-umt"> Jenis Tanaman pada UMT </a>
                            </li>
                        </ul>
                    </li>
                    <!--  end penataan kawasan  -->

                    <!--  BEGIN potensi sdh  -->
                    <li class="menu">
                        <a href="#potensi-user" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                    <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                                    <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                                </svg>
                                <span>Potensi SDH</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="potensi-user" data-parent="#accordionExample">
                            <li>
                                <a href="/database-user/inven-sdh"> Inventarisasi SDH </a>
                            </li>
                            <li>
                                <a href="/database-user/ukur-pu"> Pengukuran dalam PU </a>
                            </li>
                        </ul>
                    </li>
                    <!--  end potensi sdh  -->

                    <!--  begin potensi sosekbud  -->
                    <li class="menu">
                        <a href="#sosekbud-user" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                <span>Potensi SOSEKBUD</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="sosekbud-user" data-parent="#accordionExample">
                            <li>
                                <a href="/database-user/sosekbud-desa"> SOSEKBUD Desa </a>
                            </li>
                            <li>
                                <a href="/database-user/hwd"> Kelola Kawasan HWD </a>
                            </li>
                        </ul>
                    </li>
                    <!--  end potensi sosekbud  -->
                    <li class="menu">
                        <a href="/database-user/alokasi-realisasi" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                    <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                    <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                </svg>
                                <span>Alokasi & Realisasi</span>
                            </div>
                        </a>
                    </li>
                    <!--  end menu-user  -->

                    <!--  begin profil  -->
                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="19" cy="12" r="1"></circle>
                                <circle cx="5" cy="12" r="1"></circle>
                            </svg>
                            <span>ACCOUNT</span>
                        </div>
                    </li>
                    <li class="menu">
                        <a href="/pages/profil" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                <span>Profil</span>
                            </div>
                        </a>
                    </li>
                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="19" cy="12" r="1"></circle>
                                <circle cx="5" cy="12" r="1"></circle>
                            </svg>
                            <span>MISC.</span>
                        </div>
                    </li>
                    <li class="menu">
                        <a href="/pages/doc" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                    <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                    <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                                </svg>
                                <span>Documentation</span>
                            </div>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="/pages/faq" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="17" x2="12" y2="17"></line>
                                </svg>
                                <span>FAQ</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="/pages/changelog" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                    <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                                    <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                                </svg>
                                <span>Changelog</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="/logout" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                    <path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path>
                                    <line x1="12" y1="2" x2="12" y2="12"></line>
                                </svg>
                                <span>Logout</span>
                            </div>
                        </a>
                    </li>
                    <!--  end profil  -->

                </ul>

            </nav>

        </div>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="page-header">
                    <div class="page-title">
                        <h3>DETAIL KAWASAN (<?= $data2['anakpetak']; ?>)</h3>
                    </div>
                </div>

                <div class="row layout-top-spacing">

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                        <div class="widget-two">
                            <div class="widget-content">
                                <div class="w-numeric-value">
                                    <div class="w-content">
                                        <span class="w-value">CITRA SATELIT</span>
                                    </div>
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                            <circle cx="12" cy="10" r="3"></circle>
                                        </svg>
                                    </div>
                                </div>
                                <div id="map-kecil" class="leaflet-map"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-one">
                            <div class="widget-heading">
                                <h5 class="">DETAIL PENUTUPAN LAHAN</h5>
                            </div>

                            <div class="widget-content">
                                <div id="pl"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-two">
                            <div class="widget-heading">
                                <h5 class="">KOMPOSISI KAWASAN</h5>
                            </div>
                            <div class="widget-content">
                                <div id="chart-2" class=""></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                        <div class="widget widget-three">
                            <div class="widget-heading">
                                <h5 class="">LUASAN KOMPOSISI KAWASAN</h5>
                            </div>
                            <div class="widget-content">

                                <div class="order-summary">

                                    <div class="summary-list">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                                <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                                                <line x1="12" y1="9" x2="12" y2="13"></line>
                                                <line x1="12" y1="17" x2="12" y2="17"></line>
                                            </svg>
                                        </div>
                                        <div class="w-summary-details">
                                            <div class="w-summary-info">
                                                <h6>Area Penggunaan Lain</h6>
                                                <p class="summary-count"><?= $pie['apl']; ?> Ha</p>
                                            </div>
                                            <div class="w-summary-stats">
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-1" role="progressbar" style="width: <?= $pie['persen_apl']; ?>%" aria-valuenow="<?= $pie['persen_apl']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="summary-list">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                                <path d="M 6.25,21.48
                                                        C 6.25,21.48 6.25,13.28 6.25,13.28M 17.75,21.48
                                                        C 17.75,21.48 17.75,13.28 17.75,13.28M 2.91,10.64
                                                        C 3.30,12.19 4.68,13.28 6.25,13.28
                                                            6.25,13.28 6.29,13.28 6.29,13.28
                                                            7.86,13.27 9.21,12.18 9.59,10.64
                                                            11.05,9.99 11.99,8.52 11.99,6.90
                                                            11.99,8.52 12.94,9.99 14.40,10.64
                                                            14.40,10.64 14.40,10.64 14.40,10.64
                                                            14.78,12.19 16.16,13.28 17.74,13.28
                                                            17.74,13.28 17.78,13.28 17.78,13.28
                                                            19.34,13.27 20.70,12.18 21.07,10.64
                                                            22.54,9.99 23.48,8.52 23.48,6.90
                                                            23.48,5.28 22.53,3.81 21.07,3.16
                                                            20.69,1.61 19.31,0.52 17.73,0.52
                                                            16.15,0.52 14.77,1.61 14.39,3.16
                                                            12.92,3.81 11.98,5.28 11.98,6.90
                                                            11.98,5.28 11.04,3.81 9.58,3.16
                                                            9.20,1.61 7.82,0.52 6.24,0.52
                                                            4.66,0.52 3.28,1.61 2.90,3.16
                                                            1.43,3.81 0.49,5.28 0.49,6.90
                                                            0.49,8.52 1.44,9.99 2.90,10.64
                                                            2.90,10.64 2.90,10.64 2.90,10.64
                                                            2.90,10.64 2.91,10.64 2.91,10.64 Z" />
                                            </svg>
                                        </div>
                                        <div class="w-summary-details">
                                            <div class="w-summary-info">
                                                <h6>Hutan Tanaman</h6>
                                                <p class="summary-count"><?= $pie['ht']; ?> Ha</p>
                                            </div>
                                            <div class="w-summary-stats">
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-2" role="progressbar" style="width: <?= $pie['persen_ht']; ?>%" aria-valuenow="<?= $pie['persen_ht']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="summary-list">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card">
                                                <path d="M 21.40,16.85
                                                        C 21.40,18.31 20.24,19.49 18.79,19.49
                                                          17.35,19.49 16.18,18.31 16.18,16.85
                                                          16.18,15.40 17.35,14.22 18.79,14.22
                                                          20.24,14.22 21.40,15.40 21.40,16.85 Z
                                                        M 7.82,16.85
                                                        C 7.82,18.31 6.65,19.49 5.21,19.49
                                                          3.76,19.49 2.60,18.31 2.60,16.85
                                                          2.60,15.40 3.76,14.22 5.21,14.22
                                                          6.65,14.22 7.82,15.40 7.82,16.85 Z
                                                        M 16.18,5.79
                                                        C 16.18,5.79 20.36,5.79 20.36,5.79
                                                          20.36,5.79 23.50,8.95 23.50,8.95
                                                          23.50,8.95 23.50,14.21 23.50,14.21
                                                          23.50,14.21 16.18,14.21 16.18,14.21
                                                          16.18,14.21 16.18,5.79 16.18,5.79 Z
                                                        M 16.18,0.51
                                                        C 16.18,0.51 16.18,14.22 16.18,14.22
                                                          16.18,14.22 0.51,14.22 0.51,14.22
                                                          0.51,14.22 0.51,0.51 0.51,0.51
                                                          0.51,0.51 16.18,0.51 16.18,0.51 Z" />
                                            </svg>
                                        </div>
                                        <div class="w-summary-details">
                                            <div class="w-summary-info">
                                                <h6>Jalan</h6>
                                                <p class="summary-count"><?= $pie['jalan']; ?> Ha</p>
                                            </div>

                                            <div class="w-summary-stats">
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-3" role="progressbar" style="width: <?= $pie['persen_jln']; ?>%" aria-valuenow="<?= $pie['persen_jln']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="summary-list">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                            </svg>
                                        </div>
                                        <div class="w-summary-details">
                                            <div class="w-summary-info">
                                                <h6>Permukiman</h6>
                                                <p class="summary-count"><?= $pie['permukiman']; ?> Ha</p>
                                            </div>
                                            <div class="w-summary-stats">
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-4" role="progressbar" style="width: <?= $pie['persen_pmk']; ?>%" aria-valuenow="<?= $pie['persen_pmk']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="summary-list">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag">
                                                <path d="M 12.54,7.58
           C 12.76,2.47 14.36,0.47 16.27,0.47
             18.19,0.47 19.78,2.47 20.00,7.58M 16.27,23.53
           C 16.27,23.53 16.27,17.28 16.27,17.28M 5.73,23.53
           C 5.73,23.53 5.73,17.28 5.73,17.28M 16.27,6.59
           C 16.27,6.59 17.78,6.59 17.78,6.59M 5.73,6.59
           C 5.73,6.59 7.24,6.59 7.24,6.59M 14.76,4.30
           C 14.76,4.30 16.27,4.30 16.27,4.30M 4.22,4.30
           C 4.22,4.30 5.73,4.30 5.73,4.30M 2.00,7.59
           C 2.22,2.48 3.81,0.48 5.73,0.48
             7.64,0.48 9.24,2.48 9.46,7.59M 11.00,11.94
           C 11.00,11.94 11.00,7.35 11.00,7.35M 0.46,7.35
           C 1.00,7.35 1.51,7.44 2.00,7.59
             4.16,8.25 5.73,10.29 5.73,12.70
             5.73,10.29 7.30,8.25 9.47,7.59
             9.47,7.59 9.47,7.59 9.47,7.59
             9.95,7.44 10.47,7.35 11.01,7.35
             11.01,7.35 11.01,7.35 11.01,7.35
             11.54,7.35 12.05,7.44 12.55,7.59
             14.71,8.25 16.28,10.29 16.28,12.70
             16.28,10.29 17.85,8.25 20.01,7.59
             20.01,7.59 20.01,7.59 20.01,7.59
             20.49,7.44 21.01,7.35 21.55,7.35
             21.55,7.35 21.55,7.35 21.55,7.35
             21.55,7.35 21.55,11.94 21.55,11.94
             21.55,14.86 19.24,17.23 16.38,17.28
             16.38,17.28 16.30,17.28 16.30,17.28
             16.30,17.28 16.28,17.28 16.28,17.28
             13.37,17.28 11.02,14.89 11.02,11.94
             11.02,14.86 8.71,17.23 5.85,17.28
             5.85,17.28 5.77,17.28 5.77,17.28
             5.77,17.28 5.75,17.28 5.75,17.28
             2.84,17.28 0.49,14.89 0.49,11.94
             0.49,11.94 0.49,7.35 0.49,7.35
             0.49,7.35 0.46,7.35 0.46,7.35 Z" />
                                            </svg>
                                        </div>
                                        <div class="w-summary-details">
                                            <div class="w-summary-info">
                                                <h6>Pertanian Lahan Kering</h6>
                                                <p class="summary-count"><?= $pie['pertanian_lk']; ?> Ha</p>
                                            </div>
                                            <div class="w-summary-stats">
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-5" role="progressbar" style="width: <?= $pie['persen_plk']; ?>%" aria-valuenow="<?= $pie['persen_plk']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="summary-list">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card">
                                                <path d="M 18.90,21.58
           C 20.17,20.33 22.23,20.33 23.50,21.58M 9.70,21.58
           C 10.97,20.33 13.03,20.33 14.30,21.58M 14.30,21.58
           C 15.57,22.82 17.63,22.82 18.90,21.58M 5.10,21.58
           C 6.38,22.82 8.43,22.82 9.70,21.58M 0.51,21.58
           C 1.78,20.33 3.83,20.33 5.10,21.58M 3.48,14.44
           C 3.05,14.02 2.80,13.44 2.80,12.84
             2.80,11.60 3.83,10.60 5.10,10.60
             6.38,10.60 7.41,11.61 7.41,12.84
             7.41,12.85 7.41,12.85 7.41,12.85
             7.41,12.85 7.41,22.15 7.41,22.15M 20.52,11.06
           C 20.96,10.64 21.20,10.07 21.20,9.47
             21.20,8.23 20.17,7.22 18.90,7.22
             17.63,7.22 16.60,8.23 16.60,9.47
             16.60,9.48 16.60,9.48 16.60,9.48
             16.60,9.48 16.60,22.15 16.60,22.15M 7.09,5.29
           C 6.56,4.76 6.25,4.05 6.25,3.30
             6.25,1.75 7.54,0.49 9.13,0.49
             10.71,0.49 12.00,1.75 12.00,3.29
             12.00,3.29 12.00,20.64 12.00,20.64" />s
                                            </svg>
                                        </div>
                                        <div class="w-summary-details">
                                            <div class="w-summary-info">
                                                <h6>Sawah</h6>
                                                <p class="summary-count"><?= $pie['sawah']; ?> Ha</p>
                                            </div>
                                            <div class="w-summary-stats">
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-6" role="progressbar" style="width: <?= $pie['persen_sawah']; ?>%" aria-valuenow="<?= $pie['persen_sawah']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="summary-list">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card">
                                                <path d="M 2.02,9.17
           C 1.77,8.91 1.62,8.55 1.62,8.19
             1.62,7.42 2.24,6.79 3.01,6.79
             3.77,6.79 4.39,7.42 4.39,8.19
             4.39,8.19 4.39,8.19 4.39,8.19
             4.39,8.19 4.39,14.39 4.39,14.39M 12.31,7.08
           C 12.57,6.82 12.71,6.46 12.71,6.09
             12.71,5.32 12.09,4.70 11.33,4.70
             10.56,4.70 9.94,5.32 9.94,6.09
             9.94,6.09 9.94,6.10 9.94,6.10
             9.94,6.10 9.94,16.73 9.94,16.73M 4.20,3.49
           C 3.88,3.17 3.70,2.72 3.70,2.26
             3.70,1.29 4.48,0.51 5.44,0.51
             6.40,0.51 7.17,1.29 7.17,2.25
             7.17,2.25 7.17,14.19 7.17,14.19M 22.69,21.44
           C 23.20,20.66 23.49,19.73 23.49,18.76
             23.49,16.81 22.34,15.05 20.57,14.27
             20.11,12.40 18.43,11.09 16.52,11.09
             14.61,11.09 12.93,12.40 12.47,14.27
             11.29,14.79 10.38,15.75 9.91,16.90
             9.68,16.73 9.44,16.58 9.16,16.46
             8.80,15.00 7.49,13.97 5.98,13.97
             4.48,13.97 3.17,15.00 2.80,16.46
             1.41,17.07 0.51,18.46 0.51,19.98
             0.51,20.49 0.61,20.98 0.79,21.44M 9.91,16.90
           C 12.30,17.07 12.98,20.19 11.93,21.49M 4.53,20.18
           C 4.53,20.18 3.43,20.18 3.43,20.18M 5.62,18.52
           C 5.62,18.52 4.53,18.52 4.53,18.52M 17.66,17.95
           C 17.66,17.95 18.75,17.95 18.75,17.95M 16.57,16.30
           C 16.57,16.30 17.66,16.30 17.66,16.30" />
                                            </svg>
                                        </div>
                                        <div class="w-summary-details">
                                            <div class="w-summary-info">
                                                <h6>Semak Belukar</h6>
                                                <p class="summary-count"><?= $pie['semak']; ?> Ha</p>
                                            </div>
                                            <div class="w-summary-stats">
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-7" role="progressbar" style="width: <?= $pie['persen_semak']; ?>%" aria-valuenow="<?= $pie['persen_semak']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="summary-list">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card">
                                                <path d="M 18.90,16.55
           C 20.16,15.30 22.22,15.30 23.50,16.55M 9.70,16.55
           C 10.97,15.30 13.03,15.30 14.30,16.55M 14.30,16.55
           C 15.57,17.81 17.62,17.81 18.90,16.55M 5.10,16.55
           C 6.37,17.81 8.43,17.81 9.70,16.55M 0.51,16.55
           C 1.78,15.30 3.84,15.30 5.11,16.55M 18.90,9.00
           C 20.16,7.74 22.22,7.74 23.50,9.00M 9.70,9.00
           C 10.97,7.74 13.03,7.74 14.30,9.00M 14.30,9.00
           C 15.57,10.26 17.62,10.26 18.90,9.00M 5.10,9.00
           C 6.37,10.26 8.43,10.26 9.70,9.00M 0.51,9.00
           C 1.78,7.74 3.84,7.74 5.11,9.00M 18.90,1.45
           C 20.16,0.19 22.22,0.19 23.50,1.45M 9.70,1.45
           C 10.97,0.19 13.03,0.19 14.30,1.45M 14.30,1.45
           C 15.57,2.70 17.62,2.70 18.90,1.45M 5.10,1.45
           C 6.37,2.70 8.43,2.70 9.70,1.45M 0.51,1.45
           C 1.78,0.19 3.84,0.19 5.11,1.45" />
                                            </svg>
                                        </div>
                                        <div class="w-summary-details">
                                            <div class="w-summary-info">
                                                <h6>Tubuh Air</h6>
                                                <p class="summary-count"><?= $pie['sungai']; ?> Ha</p>
                                            </div>

                                            <div class="w-summary-stats">
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-8" role="progressbar" style="width: <?= $pie['persen_sungai']; ?>%" aria-valuenow="<?= $pie['persen_sungai']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- potensi -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">

                        <div class="widget widget-account-invoice-three">

                            <div class="widget-heading">
                                <div class="wallet-usr-info">
                                    <div class="add">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                            </svg></span>
                                    </div>
                                </div>
                                <div class="wallet-balance">
                                    <p><b>ESTIMASI POTENSI</b></p>
                                    <h5 class=""><?= $data2['anakpetak']; ?></h5>
                                </div>
                            </div>

                            <div class="widget-amount">

                                <div class="w-a-info funds-received">
                                    <span>LBDS <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up">
                                            <polyline points="18 15 12 9 6 15"></polyline>
                                        </svg></span>
                                    <?php
                                    $a = array_column($data3, 'lbds');
                                    $lbds = array_sum($a); ?>
                                    <p><?= round($lbds / $jumlahpu * $data2['luas_ht'], 2); ?> m²</p>
                                </div>

                                <div class="w-a-info funds-spent">
                                    <span>VOLUME <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg></span>
                                    <?php
                                    $volume = array_column($data3, 'volume');
                                    $vol = array_sum($volume); ?>
                                    <p><?= round($vol * $data2['luas_ht'], 2) ?> m³</p>
                                </div>
                            </div></br></br>

                            <div class="widget-content">

                                <div class="invoice-list">
                                    <div class="inv-detail">
                                        <div class="info-detail-1">
                                            <p>Jumlah Petak Ukur</p>
                                            <p><span class="bill-amount"><?= $jumlahpu ?></span></p>
                                        </div>
                                        <div class="info-detail-2">
                                            <p>Estimasi Jumlah Tegakan</p>
                                            <?php
                                            $a = array_column($data3, 'jumlah_pohon');
                                            $n = array_sum($a); ?>
                                            <p><span class="bill-amount"><?= round($n * $data2['luas_ht'], 0) ?></span></p>
                                        </div>
                                        <div class="info-detail-2">
                                            <p>BDH Rata-rata</p>
                                            <?php
                                            $a = array_column($data3, 'dbh_rata');
                                            $dbh = array_sum($a); ?>
                                            <p><span class="bill-amount"> <?= round($dbh / $jumlahpu, 2) ?></span> <span class="w-currency">cm</span> </p>
                                        </div>
                                        <div class="info-detail-2">
                                            <p>Tinggi Rata-rata</p>
                                            <?php
                                            $a = array_column($data3, 'tinggi_rata');
                                            $tinggi = array_sum($a); ?>
                                            <p><span class="bill-amount"><?= round($tinggi / $jumlahpu, 2) ?></span></span> <span class="w-currency">m</span> </p>
                                        </div>
                                        <div class="info-detail-3">
                                            <p>C (<i>Crown Density</i>)</p>
                                            <?php
                                            $a = array_column($data3, 'c');
                                            $c = array_sum($a); ?>
                                            <p> <span class="bill-amount"><?= round($c / $jumlahpu, 2) ?></span></p>
                                        </div>
                                        <div class="info-detail-3">
                                            <p>D (<i>Crown Diamater</i>)</p>
                                            <?php
                                            $a = array_column($data3, 'd');
                                            $d = array_sum($a); ?>
                                            <p> <span class="bill-amount"><?= round($d / $jumlahpu, 2) ?></span></p>
                                        </div>
                                        <div class="info-detail-4">
                                            <p>N (<i>Number of Standing Stock</i>)</p>
                                            <?php
                                            $a = array_column($data3, 'n');
                                            $n = array_sum($a); ?>
                                            <p> <span class="bill-amount"><?= round($n / $jumlahpu, 2) ?></span></p>
                                        </div>
                                        <div class="info-detail-4">
                                            <p>NDVI (<i>Normalize Difference Vegetation Index</i>)</p>
                                            <?php
                                            $a = array_column($data3, 'ndvi');
                                            $n = array_sum($a); ?>
                                            <p> <span class="bill-amount"><?= round($n / $jumlahpu, 2) ?></span></p>
                                        </div>
                                        <div class="info-detail-4">
                                            <p>MSAVI (<i>Modified Soil Adjusted Vegetation Index</i>)</p>
                                            <?php
                                            $a = array_column($data3, 'msavi');
                                            $n = array_sum($a); ?>
                                            <p> <span class="bill-amount"><?= round($n / $jumlahpu, 2) ?></span></p>
                                        </div>
                                    </div>
                                    </br>
                                    </br>
                                    <div class="inv-action">
                                        <a href="javascript:void(0);" class="btn btn-outline-primary view-details">Data Inventarisasi</a>
                                        <a href="javascript:void(0);" class="btn btn-outline-primary pay-now">Data Petak Ukur</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- table -->
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-form">
                                <div class="form-group row mr-3">
                                    <label class="col-lg-12"><b>DATA TABULAR KAWASAN</b></label>
                                </div>
                            </div>
                            <table id="default-ordering" class="table table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No. </th>
                                        <th>Anak Petak</th>
                                        <th>Luas</th>
                                        <th><i>Net Planted Area</i> (Ha)</th>
                                        <th>Cucu Petak</th>
                                        <th>Kode Tanaman</th>
                                        <th>Jenis</th>
                                        <th>Kode Inven UMT</th>
                                        <th>No. PU</th>
                                        <th>N/Ha</th>
                                        <th>C</th>
                                        <th>D</th>
                                        <th>N</th>
                                        <th>LBDS (m²/Ha)</th>
                                        <th>Volume (m³/Ha)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($data1 as $var) : ?>
                                        <tr>
                                            <td scope="row"> <?= $no++; ?> </td>
                                            <td><?= $var['anak_petak']; ?></td>
                                            <td><?= $var['luasanakpetak']; ?></td>
                                            <td><?= $var['luas_ht']; ?></td>
                                            <td><?= $var['cupet']; ?></td>
                                            <td><?= $var['cupettnm']; ?></td>
                                            <td><?= $var['jenis_lokal']; ?></td>
                                            <td><?= $var['invenumt']; ?></td>
                                            <td><?= $var['kodeinvenpu']; ?></td>
                                            <td><?= $var['jumlah_pohon']; ?></td>
                                            <td><?= $var['c']; ?></td>
                                            <td><?= $var['d']; ?></td>
                                            <td><?= $var['n']; ?></td>
                                            <td><?= $var['lbds']; ?></td>
                                            <td><?= $var['volume']; ?></td>

                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <div class="footer-wrapper">
                    <div class="footer-section f-section-1">
                        <p class=""><b>KHDTK WEB APPS Ver. 2. 0.</b></p>
                    </div>
                    <div class="footer-section f-section-2">
                        <p class="">Copyright © <?= date('Y'); ?>, constructed by<a target="#" href="#"> enlisters studio/endyarfian</a>.</p>
                    </div>
                </div>
                <!--  END FOOTER  -->
                <!--  END CONTENT AREA  -->

            </div>
        </div>
    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="<?= base_url('dashboard/assets/js/libs/jquery-3.1.1.min.js') ?>"></script>
    <script src="<?= base_url('dashboard/bootstrap/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('dashboard/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('dashboard/plugins/perfect-scrollbar/perfect-scrollbar.min.js') ?>"></script>
    <script src="<?= base_url('dashboard/plugins/blockui/jquery.blockUI.min.js') ?>"></script>
    <script src="<?= base_url('dashboard/assets/js/app.js') ?>"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="<?= base_url('dashboard/plugins/highlight/highlight.pack.js') ?>"></script>
    <script src="<?= base_url('dashboard/assets/js/custom.js') ?>"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
    <script src="<?= base_url('dashboard/assets/js/elements/tooltip.js') ?>"></script>
    <script src="<?= base_url('dashboard/assets/js/scrollspyNav.js') ?>"></script>
    <script src="<?= base_url('dashboard/plugins/table/datatable/datatables.js') ?>"></script>
    <script src="<?= base_url('dashboard/plugins/apex/apexcharts.min.js') ?>"></script>
    <script src="<?= base_url('dashboard/plugins/leaflet/leaflet-providers.js') ?>"></script>
    <script src="<?= base_url('dashboard/plugins/leaflet/leaflet.js') ?>"></script>
    <script src="<?= base_url('dashboard/plugins/leaflet/jquery-3.5.1.js') ?>"></script>
    <script>
        $('#default-ordering').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
                "<'table-responsive'tr>" +
                "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                "sInfo": "Menampilkan _PAGE_ dari _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Cari...",
                "sLengthMenu": "Tampilkan :  _MENU_",
            },
            "order": [
                [3, "desc"]
            ],
            "stripeClasses": [],
            "lengthMenu": [5, 10, 20, 50],
            "pageLength": 5,
            drawCallback: function() {
                $('.dataTables_paginate > .pagination').addClass(' pagination-style-13 pagination-bordered');
            }
        });
    </script>
    <!-- chart PL -->
    <script>
        var d_1options1 = {

            series: [{
                name: 'Organic',
                data: [
                    <?= $chart['jagung']; ?>,
                    <?= $chart['jalan']; ?>,
                    <?= $chart['jati']; ?>,
                    <?= $chart['jati_campur_semak']; ?>,
                    <?= $chart['jpp']; ?>,
                    <?= $chart['mahoni']; ?>,
                    <?= $chart['makam']; ?>,
                    <?= $chart['permukiman']; ?>,
                    <?= $chart['sawah']; ?>,
                    <?= $chart['semak']; ?>,
                    <?= $chart['sungai']; ?>,
                    <?= $chart['tebu']; ?>
                ]
            }],
            chart: {
                height: 350,
                type: 'bar',
                toolbar: {
                    show: true,
                }
            },

            plotOptions: {
                bar: {
                    borderRadius: 10,
                    columnWidth: '50%'

                },
            },
            colors: ['#0984e3'],


            dataLabels: {
                enabled: false
            },
            legend: {
                position: 'bottom',
                horizontalAlign: 'center',
                fontSize: '14px',
                markers: {
                    width: 10,
                    height: 10,
                },
                itemMargin: {
                    horizontal: 0,
                    vertical: 8
                }
            },
            stroke: {
                curve: 'smooth',
                show: true,
                width: 2,
                colors: ['transparent']
            },

            xaxis: {
                categories: ['Jagung', 'Jalan', 'Jati', 'Jati Campur', 'JPP', 'Mahoni', 'Makam', 'Permukiman', 'Sawah', 'Semak', 'Tubuh Air', 'Tebu'],
                labels: {
                    style: {
                        fontSize: '10px'
                    }
                }
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'light',
                    type: 'vertical',
                    shadeIntensity: 0.3,
                    inverseColors: false,
                    opacityFrom: 1,
                    opacityTo: 0.8,
                    stops: [0, 100]
                }
            },
            grid: {
                borderColor: '#bcbcbc',
                strokeDashArray: 4,
                yaxis: {
                    lines: {
                        show: true
                    }
                }
            },
            yaxis: {
                title: {
                    text: 'Luas (Ha)'
                }
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return val
                    }
                }
            }
        }



        var d_1C_3 = new ApexCharts(
            document.querySelector("#pl"),
            d_1options1
        );
        d_1C_3.render();
    </script>
    <!-- pie -->
    <script>
        var options = {
            chart: {
                type: 'donut',
                width: 560
            },
            colors: ['#34495e', '#9b59b6', '#3498db', '#1abc9c', '#2ecc71', '#f1c40f', '#e67e22', '#e74c3c'],
            dataLabels: {
                enabled: true
            },
            legend: {
                position: 'bottom',
                horizontalAlign: 'center',
                fontSize: '14px',
                markers: {
                    width: 10,
                    height: 10,
                },
                itemMargin: {
                    horizontal: 0,
                    vertical: 8
                }
            },
            plotOptions: {
                pie: {
                    donut: {
                        size: '65%',
                        background: 'transparent',
                        labels: {
                            show: true,
                            name: {
                                show: true,
                                fontSize: '15px',
                                fontFamily: 'Rubik',
                                color: undefined,
                                offsetY: -10
                            },
                            value: {
                                show: true,
                                fontSize: '26px',
                                fontFamily: 'Rubik',
                                color: '20',
                                offsetY: 16,
                                formatter: function(val) {
                                    return val
                                }
                            },
                            total: {
                                show: true,
                                showAlways: true,
                                label: 'Total',
                                color: '#888ea8',
                                formatter: function(w) {
                                    return w.globals.seriesTotals.reduce(function(a, b) {
                                        return a + b
                                    }, 0, )
                                }
                            }
                        }
                    }
                }
            },
            stroke: {
                show: true,
                width: 10,
            },
            series: [
                <?= $pie['persen_apl']; ?>,
                <?= $pie['persen_ht']; ?>,
                <?= $pie['persen_jln']; ?>,
                <?= $pie['persen_pmk']; ?>,
                <?= $pie['persen_plk']; ?>,
                <?= $pie['persen_sawah']; ?>,
                <?= $pie['persen_semak']; ?>,
                <?= $pie['persen_sungai']; ?>,
            ],
            labels: ['APL', 'Hutan', 'Jalan', 'Permukiman', 'Pertanian Lahan Kering', 'Sawah', 'Semak', 'Tubuh Air'],
            responsive: [{
                breakpoint: 1599,
                options: {
                    chart: {
                        width: '350px',
                        height: '400px'
                    },
                    legend: {
                        position: 'bottom'
                    }
                },

                breakpoint: 1439,
                options: {
                    chart: {
                        width: '250px',
                        height: '390px'
                    },
                    legend: {
                        position: 'bottom'
                    },
                    plotOptions: {
                        pie: {
                            donut: {
                                size: '65%',
                            }
                        }
                    }
                },
            }]
        }

        var chart = new ApexCharts(
            document.querySelector("#chart-2"),
            options
        );

        chart.render();
    </script>
    <!-- map -->
    <script>
        var data = <?= json_encode($anakpetak) ?>;
        var map = L.map('map-kecil', {
            center: [-7.318437, 111.40],
            zoom: 13,
            scrollWhellZoom: false,
        });

        function style(feature) {
            return {
                weight: 1,
                opacity: 1,
                color: 'white',
                dashArray: '3',
                fillOpacity: 0.1,
                fillColor: 'black'
            };
        }

        map.scrollWheelZoom.disable();

        geojson = L.geoJson(data, {
            style: style,
        }).addTo(map);

        var tiles = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/{variant}/MapServer/tile/{z}/{y}/{x}', {
            variant: 'World_Imagery',
            // tileSize: 512,
            // zoomOffset: -1,
            attribution: 'Tiles: Esri World Imagery | Data : Fak. Kehutanan UGM'
        }).addTo(map);


        geojson.eachLayer(function(layer) {
            if (layer.feature.properties.KodeAnakPe === "<?= $data2['anakpetak']; ?>") {
                map.fitBounds(layer.getBounds());
            }
        });
    </script>
    <!-- END PAGE LEVEL CUSTOM SCRIPTS  -->
</body>

</html>