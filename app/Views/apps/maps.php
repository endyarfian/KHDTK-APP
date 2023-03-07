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
    <link href="<?= base_url('dashboard/plugins/leaflet/leaflet.css') ?>" rel="stylesheet" type="text/css" />

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="<?= base_url('dashboard/assets/css/elements/miscellaneous.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('dashboard/assets/css/elements/breadcrumb.css') ?>" rel="stylesheet" type="text/css" />

</head>
<style>
    .info {
        padding: 6px 8px;
        font: 16px/18px Arial, Helvetica, sans-serif;
        background: white;
        background: rgba(255, 255, 255, 0.8);
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        border-radius: 5px;

    }

    .info h4 {
        margin: 0 0 5px;
        color: #777;
    }

    .leaflet-map {
        border-radius: 8px;
        height: 710px;
    }

    .container-map {
        max-width: 100%;
        padding-left: 8px;
        padding-right: 5px;

    }

    .leaflet-tooltip.my-labels {
        background-color: transparent;
        border: transparent;
        box-shadow: none;
        font-weight: bold;
        font-size: 12px;
    }
</style>

<body class=" alt-menu sidebar-noneoverflow">
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
                            <a href="<?= base_url(); ?>/logout">
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
    <!--  END NAVBAR  -->

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
                            </li>>
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
                                <a href="/database/hwd"> Kelola Kawasan HWD </a>
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

                <div class="row">
                    <div id="mapBasic" class="col-lg-12 layout-top-spacing layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>PETA POTENSI KHDTK FAKULTAS KEHUTANAN UGM</h4>
                                    </div>
                                </div>

                            </div>
                            <div class="widget-content widget-content-area split-buttons">
                                <div class="row mb-4">
                                    <div class="col-lg-6">
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupVerticalDrop1" type="button" class="btn btn-outline-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Pilih Data Peta
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                                    <!-- <path d="M4 3h16a2 2 0 0 1 2 2v6a10 10 0 0 1-10 10A10 10 0 0 1 2 11V5a2 2 0 0 1 2-2z"></path> -->
                                                    <polyline points="8 10 12 14 16 10"></polyline>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                <a class="dropdown-item" href="<?= base_url('apps/maps'); ?>">Potensi Kawasan</a>
                                                <a class="dropdown-item" href="<?= base_url('apps/maps-pl'); ?>">Penutupan Lahan 2022</a>
                                            </div>
                                        </div>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupVerticalDrop1" type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Download Data Kawasan
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                                    <!-- <path d="M4 3h16a2 2 0 0 1 2 2v6a10 10 0 0 1-10 10A10 10 0 0 1 2 11V5a2 2 0 0 1 2-2z"></path> -->
                                                    <polyline points="8 10 12 14 16 10"></polyline>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                <a class="dropdown-item" href="<?= base_url('dashboard/download/khdtk.zip'); ?>">Peta Kawasan KHDTK Tahun 2022</a>
                                                <a class="dropdown-item" href="<?= base_url('dashboard/download/pl_khdtk.zip'); ?>">PL KHDTK Tahun 2022</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <div id="basic-map" class="leaflet-map"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!--  BEGIN FOOTER  -->
                <div class="footer-wrapper">
                    <div class="footer-section f-section-1">
                        <p class=""><b><?= $footer; ?></b></p>
                    </div>
                    <div class="footer-section f-section-2">
                        <p class=""><?= $credit; ?></p>
                    </div>
                </div>
                <!--  END FOOTER  -->
            </div>
        </div>
        <!--  END CONTENT AREA  -->


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

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?= base_url('dashboard/assets/js/scrollspyNav.js') ?>"></script>
        <script src="<?= base_url('dashboard/json/khdtk_point.js') ?>"></script>

        <script src="<?= base_url('dashboard/plugins/leaflet/leaflet.js') ?>"></script>
        <script src="<?= base_url('dashboard/plugins/leaflet/jquery-3.5.1.js') ?>"></script>
        <script src="<?= base_url('dashboard/plugins/leaflet/leaflet-providers.js') ?>"></script>
        <!-- END PAGE LEVEL PLUGINS -->

        <!--  BEGIN CUSTOM SCRIPTS FILE  -->
        <!-- maps -->
        <script>
            var data = <?= json_encode($anakpetak) ?>;
            var map = L.map('basic-map', {
                center: [-7.318437, 111.40],
                zoom: 13,
                scrollWhellZoom: false,
            });

            var lyrOSM = L.tileLayer.provider('OpenStreetMap.Mapnik');
            var lyrOpenTopoMap = L.tileLayer.provider('OpenTopoMap');
            var lyrWorldImagery = L.tileLayer.provider('Esri.WorldImagery');
            map.addLayer(lyrOSM);

            // control that shows state info on hover
            info = L.control();

            info.onAdd = function(map) {
                this._div = L.DomUtil.create('div', 'info');
                this.update();
                return this._div;
            };

            info.update = function(props) {
                this._div.innerHTML = '<h4><b>Data KHTDK Fakultas Kehutanan UGM</b></h4>' + 'Pilih kawasan untuk melihat data lebih detail' +
                    (props ?
                        '<br> Kode Anak Petak : <b>' + props.KODE +
                        '</b> | Anak Petak : <b>' + props.TOPONIMI +
                        '</b> | Petak : <b>' + props.Petak +
                        '</b><br> Luas Total : <b>' + props.luas +
                        '</b> Ha | Luas Kawasan Hutan: <b>' + props.luasht + ' Ha' :
                        '</b> <br>atau layangkan cursor pada petak');
            };

            info.addTo(map);

            // get color depending on population density value


            function style(feature) {
                return {
                    weight: 1,
                    opacity: 1,
                    color: 'white',
                    dashArray: '3',
                    fillOpacity: 0.2,
                    fillColor: 'black'
                };
            }


            function highlightFeature(e) {
                var layer = e.target;

                layer.setStyle({
                    weight: 3,
                    color: '#cc4c02',
                    dashArray: '',
                    fillOpacity: 0.3,

                });

                if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
                    layer.bringToFront();
                }

                info.update(layer.feature.properties);
            }

            var geojson;

            function resetHighlight(e) {
                geojson.resetStyle(e.target);
                info.update();
            }

            function zoomToFeature(e) {
                map.feature(e.target.getBounds());
            }

            function onEachFeature(feature, layer) {
                layer.on('click', function(ev) {
                    window.open("/apps/maps/detail/" + feature.properties.id)
                });
                layer.on({
                    mouseover: highlightFeature,
                    mouseout: resetHighlight,

                });
            }

            geojson = L.geoJson(data, {
                onEachFeature: onEachFeature,
                style: style,
            }).addTo(map);

            // get name
            var point = <?= json_encode($point) ?>;
            var petak = L.geoJSON(point, {
                pointToLayer: function(feature, latlng) {
                    label = String(feature.properties.TOPONIMI)
                    return new L.CircleMarker(latlng, {
                        radius: 1,
                    }).bindTooltip(label, {
                        permanent: true,
                        direction: "center",
                        className: "my-labels"
                    }).openTooltip();
                }
            });
            // get name
            var inven = <?= json_encode($inven) ?>;
            var inven = L.geoJSON(inven, {
                pointToLayer: function(feature, latlng) {
                    label = String(feature.properties.PU)
                    return new L.CircleMarker(latlng, {
                        radius: 1,
                    }).bindTooltip(label, {
                        permanent: true,
                        direction: "center",
                        className: "my-labels"
                    }).openTooltip();
                }
            });
            // legend


            var baseLayers = {
                "Open Street Map (Default)": lyrOSM,
                "Open Topo Map (Topography)": lyrOpenTopoMap,
                "Esri World Imagery (Satellite)": lyrWorldImagery,


            };

            var overlays = {
                "Batas Anak Petak": geojson,
                "Nama Petak": petak,
                "Data Inventarisasi": inven,
            };

            var layerControl = L.control.layers(baseLayers, overlays, {
                position: 'bottomleft'
            }).addTo(map);


            L.control.scale({
                position: 'bottomright'
            }).addTo(map);
            map.attributionControl.addAttribution('Data provider &copy; <a href="http://fkt.ugm.ac.id/">Fakultas Kehutanan UGM</a>');
        </script>
        <!--  END CUSTOM SCRIPTS FILE  -->
</body>

</html>