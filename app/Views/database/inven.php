<?= $this->extend('template/database'); ?>
<?= $this->section('content'); ?>

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

                <li class="menu">
                    <a href="/apps/maps" aria-expanded="false" class="dropdown-toggle">
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
                <li class="menu ">
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
                    <ul class="collapse submenu  list-unstyled " id="penataan" data-parent="#accordionExample">
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
                <li class="menu active">
                    <a href="#potensi" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
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
                    <ul class="collapse submenu recent-submenu mini-recent-submenu list-unstyled show" id="potensi" data-parent="#accordionExample">
                        <li class="active">
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
                <div class="page-title breadcrumb-four">
                    <ul class="breadcrumb">
                        <li><a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg></a>
                        </li>
                        <li><a href="javscript:void(0);">
                                Potensi Sumberdaya Hutan</a></li>
                        <li class="active"><a href="javscript:void(0);">
                                Inventarisasi Sumberdaya Hutan</a></li>
                    </ul>
                </div>
            </div>

            <!-- begin tabel penataan kawasan -->
            <div>
                <div class="seperator-header">
                    <h4 class=""><b>DATA INVENTARISASI</b></h4>
                </div>
                <div>
                    <!-- Input -->
                    <button class="btn btn-outline-info mb-2 mr-2" data-toggle="modal" data-target="#inputpk">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 -1 30 30" ffill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>INPUT DATA</button>
                </div>

                <div class="row" id="cancel-row">

                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <table id="table" class="table table-hover style-3" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No. </th>
                                        <th>Kode Inventarisasi</th>
                                        <th>No SK</th>
                                        <th>Tanggal Mulai</th>
                                        <th>Tanggal Selesai</th>
                                        <th>Penanggung Jawab</th>
                                        <th>Metode</th>
                                        <th><i>Index Sampling</i> (%)</th>
                                        <th>Bentuk PU</th>
                                        <th>Luas PU (m²)</th>
                                        <th>Kode Rencana Kegiatan Tahunan</th>
                                        <th>Deskripsi</th>
                                        <th class="dt-no-sorting">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($inven as $var) : ?>
                                        <tr>
                                            <td scope="row"> <?= $no++; ?> </td>
                                            <td><?= $var['kode_inventarisasi']; ?></td>
                                            <td><?= $var['no_sk']; ?></td>
                                            <td><?= $var['tanggal_mulai']; ?></td>
                                            <td><?= $var['tanggal_selesai']; ?></td>
                                            <td><?= $var['pj']; ?></td>
                                            <td><?= $var['metode']; ?></td>
                                            <td><?= $var['is']; ?></td>
                                            <td><?= $var['bentuk_pu']; ?></td>
                                            <td><?= $var['luas_pu']; ?></td>
                                            <td><?= $var['kode_rencana_tahunan_kegiatan']; ?></td>
                                            <td><?= $var['deskripsi']; ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-outline-dark btn-sm bs-tooltip" title="edit" data-toggle="modal" data-target="#editpk<?= $var['id']; ?>">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                                            <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                                                            <polygon points="12 15 17 21 7 21 12 15"></polygon>
                                                        </svg>
                                                    </button>
                                                    <button type="button" class="btn btn-outline-dark btn-sm bs-tooltip" title="hapus" data-toggle="modal" data-target="#hapuspk<?= $var['id'] ?>">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <!-- end tabel penataan kawasan -->

            <!-- begin tabel umt -->
            <div>
                <div class="seperator-header">
                    <h4 class=""><b>DATA INVENTARISASI UMT</b></h4>
                </div>

                <div>
                    <!-- Input -->
                    <button class="btn btn-outline-info mb-2 mr-2" data-toggle="modal" data-target="#inputumt">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 -1 30 30" ffill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>INPUT DATA</button>
                </div>

                <div class="row" id="cancel-row">

                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <table id="table-1" class="table table-hover style-3" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No. </th>
                                        <th>Kode Inven UMT</th>
                                        <th>Kode Inventarisasi</th>
                                        <th>Kode Tanaman Cucu Petak</th>
                                        <th>Tanggal Inven UMT</th>
                                        <th>Penanggung Jawab</th>
                                        <th class="dt-no-sorting">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($invenumt as $var) : ?>
                                        <tr>
                                            <td scope="row"> <?= $no++; ?> </td>
                                            <td><?= $var['kode_inven_umt']; ?></td>
                                            <td><?= $var['kode_inventarisasi']; ?></td>
                                            <td><?= $var['kode_cupet_tnm']; ?></td>
                                            <td><?= $var['tanggal']; ?></td>
                                            <td><?= $var['pj']; ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-outline-dark btn-sm bs-tooltip" title="edit" data-toggle="modal" data-target="#editumt<?= $var['id']; ?>">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                                            <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                                                            <polygon points="12 15 17 21 7 21 12 15"></polygon>
                                                        </svg>
                                                    </button>
                                                    <button type="button" class="btn btn-outline-dark btn-sm bs-tooltip" title="hapus" data-toggle="modal" data-target="#hapusumt<?= $var['id']; ?>">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <!-- end tabel umt -->

            <!-- begin tabel zonasi -->
            <div>
                <div class="seperator-header">
                    <h4 class=""><b>DATA INVENTARISASI PETAK UKUR</b></h4>
                </div>

                <div>
                    <!-- Input -->
                    <button class="btn btn-outline-info mb-2 mr-2" data-toggle="modal" data-target="#inputzonasi">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 -1 30 30" ffill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                        INPUT DATA</button>
                </div>

                <div class="row" id="cancel-row">

                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <table id="table-2" class="table table-hover style-3" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No. </th>
                                        <th>Kode Inven UMT</th>
                                        <th>Kode Inven PU</th>
                                        <th>No. PU</th>
                                        <th>Tanggal Inven</th>
                                        <th>Penanggung Jawab</th>
                                        <th>Luas PU (m²)</th>
                                        <th>Bentuk PU</th>
                                        <th>Koordinat X</th>
                                        <th>Koordinat Y</th>
                                        <th>NDVI</th>
                                        <th>MSAVI</th>
                                        <th>C</th>
                                        <th>D</th>
                                        <th>N</th>
                                        <th>Jenis Tanah</th>
                                        <th><i>Slope</i> (%)</th>
                                        <th><i>Altitude</i> (m)</th>
                                        <th class="dt-no-sorting">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($invenpu as $var) : ?>
                                        <tr>
                                            <td scope="row"> <?= $no++; ?> </td>
                                            <td><?= $var['kode_inven_umt']; ?></td>
                                            <td><?= $var['kode_inven_pu']; ?></td>
                                            <td><?= $var['no_pu']; ?></td>
                                            <td><?= $var['tanggal']; ?></td>
                                            <td><?= $var['pj']; ?></td>
                                            <td><?= $var['luas_pu']; ?></td>
                                            <td><?= $var['bentuk_pu']; ?></td>
                                            <td><?= $var['koordinat_x']; ?></td>
                                            <td><?= $var['koordinat_y']; ?></td>
                                            <td><?= $var['ndvi']; ?></td>
                                            <td><?= $var['msavi']; ?></td>
                                            <td><?= $var['c']; ?></td>
                                            <td><?= $var['d']; ?></td>
                                            <td><?= $var['n']; ?></td>
                                            <td><?= $var['jenis_tanah']; ?></td>
                                            <td><?= $var['kelerengan']; ?></td>
                                            <td><?= $var['altitude']; ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-outline-dark btn-sm bs-tooltip" title="edit" data-toggle="modal" data-target="#editzonasi<?= $var['id']; ?>">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                                            <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                                                            <polygon points="12 15 17 21 7 21 12 15"></polygon>
                                                        </svg>
                                                    </button>
                                                    <button type="button" class="btn btn-outline-dark btn-sm bs-tooltip" title="hapus" data-toggle="modal" data-target="#hapuszonasi<?= $var['id']; ?>">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <!-- end tabel zonasi -->

            <!-- BEGIN MODAL -->
            <div>
                <!-- modal penaataan kawasan -->
                <div id="inputpk" class="modal animated fadeInDown" role="dialog" tabindex="-1" aria-labelledby="inputpk" aria-hidden="false">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">INPUT DATA INVENTARISASI</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </button>
                            </div>
                            <form action="inven-sdh/saveinven" method="post">
                                <div class="modal-body">
                                    <div class="form-row mb-4">
                                        <div class="col">
                                            <label for="kodeinven">
                                                <span class="badge outline-badge-dark"> Kode Inventarisasi </span></label>
                                            <input type="text" class="form-control <?= ($validation2->hasError('kodeinven')) ? 'is-invalid' : ''; ?>" id="kodeinven" name="kodeinven" value="<?= old('kodeinven'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('kodeinven'); ?>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="skinven">
                                                <span class="badge outline-badge-dark"> Nomor SK Inventarisasi </span></label>
                                            <input type="text" class="form-control <?= ($validation2->hasError('skinven')) ? 'is-invalid' : ''; ?>" id="skinven" name="skinven" value="<?= old('skinven'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('skinven'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="col">
                                            <label for="mulaiinven">
                                                <span class="badge outline-badge-dark"> Tanggal Mulai </span></label>
                                            <input type="date" class="form-control <?= ($validation2->hasError('mulaiinven')) ? 'is-invalid' : ''; ?>" id="mulaiinven" name="mulaiinven" value="<?= old('mulaiinven'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('mulaiinven'); ?>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="selesaiinven">
                                                <span class="badge outline-badge-dark"> Tanggal Selesai </span></label>
                                            <input type="date" class="form-control <?= ($validation2->hasError('selesaiinven')) ? 'is-invalid' : ''; ?>" id="selesaiinven" name="selesaiinven" value="<?= old('selesaiinven'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('selesaiinven'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="col">
                                            <label for="pjinven">
                                                <span class="badge outline-badge-dark"> Penanggung Jawab </span></label>
                                            <input type="text" class="form-control <?= ($validation2->hasError('pjinven')) ? 'is-invalid' : ''; ?>" id="pjinven" name="pjinven" value="<?= old('pjinven'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('pjinven'); ?>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="metodeinven">
                                                <span class="badge outline-badge-dark"> Metode Inventarisasi </span></label>
                                            <input type="text" class="form-control <?= ($validation2->hasError('metodeinven')) ? 'is-invalid' : ''; ?>" id="metodeinven" name="metodeinven" value="<?= old('metodeinven'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('metodeinven'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="col">
                                            <label for="isinven">
                                                <span class="badge outline-badge-dark"> <i>Index Sampling</i> (%) </span></label>
                                            <input type="text" class="form-control <?= ($validation2->hasError('isinven')) ? 'is-invalid' : ''; ?>" id="isinven" name="isinven" value="<?= old('isinven'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('isinven'); ?>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="bentukpuinven">
                                                <span class="badge outline-badge-dark"> Bentuk Petak Ukur </span></label>
                                            <input type="text" class="form-control <?= ($validation2->hasError('bentukpuinven')) ? 'is-invalid' : ''; ?>" id="bentukpuinven" name="bentukpuinven" value="<?= old('bentukpuinven'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('bentukpuinven'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="col">
                                            <label for="luaspuinven">
                                                <span class="badge outline-badge-dark"> Luas Petak Ukur (m²) </span></label>
                                            <input type="text" class="form-control <?= ($validation2->hasError('luaspuinven')) ? 'is-invalid' : ''; ?>" id="luaspuinven" name="luaspuinven" value="<?= old('luaspuinven'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('luaspuinven'); ?>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="kodertk">
                                                <span class="badge outline-badge-dark"> Kode Rencana Tahunan Kegiatan </span></label>
                                            <select name="kodertk" class="form-control <?= ($validation2->hasError('kodertk')) ? 'is-invalid' : ''; ?>" id="kodertk" value="<?= old('kodertk'); ?>">
                                                <?php foreach ($rtk as $pk) : ?>
                                                    <option><?= $pk['kode_rencana_tahunan_kegiatan']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('kodertk'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <label for="desinven">
                                            <span class="badge outline-badge-dark"> Deskripsi </span></label>
                                        <input type="text" class="form-control <?= ($validation2->hasError('desinven')) ? 'is-invalid' : ''; ?>" id="desinven" name="desinven" value="<?= old('desinven'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation2->getError('desinven'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Tutup</button>
                                    <button type="submit" class="btn btn-success" id="simpanpk">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <?php foreach ($inven as $var) : ?>
                    <div id="editpk<?= $var['id'] ?>" class="modal animated fadeInDown" role="dialog" tabindex="-1" aria-labelledby="editpk" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">UPDATE DATA INVENTARISASI</h5>
                                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                </div>
                                <form action="inven-sdh/editinven/<?= $var['id']; ?>" method="post" id="form1">
                                    <div class="modal-body">
                                        <div class="alert alert-icon-left alert-light-info mb-4" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" data-dismiss="alert" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close">
                                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                                </svg></button>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                                <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                                                <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                                            </svg>
                                            <strong>Penting!</strong> Data dibawah ini akan diperbarui.
                                        </div>
                                        <div class="form-row mb-4">
                                            <div class="col">
                                                <label for="editkodeinven">
                                                    <span class="badge outline-badge-dark"> Kode Inventarisasi </span></label>
                                                <input type="text" class="form-control" id="editkodeinven" name="editkodeinven" value="<?= $var['kode_inventarisasi']; ?>">
                                            </div>
                                            <div class="col">
                                                <label for="editskinven">
                                                    <span class="badge outline-badge-dark"> Nomor SK Inventarisasi </span></label>
                                                <input type="text" class="form-control" id="editskinven" name="editskinven" value="<?= $var['no_sk']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-row mb-4">
                                            <div class="col">
                                                <label for="editmulaiinven">
                                                    <span class="badge outline-badge-dark"> Tanggal Mulai </span></label>
                                                <input id="editmulaiinven" name="editmulaiinven" class="form-control" type="date" value="<?= $var['tanggal_mulai']; ?>">
                                            </div>
                                            <div class="col">
                                                <label for="editselesaiinven">
                                                    <span class="badge outline-badge-dark"> Tanggal Selesai </span></label>
                                                <input id="editselesaiinven" name="editselesaiinven" class="form-control" type="date" value="<?= $var['tanggal_selesai']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-row mb-4">
                                            <div class="col">
                                                <label for="editpjinven">
                                                    <span class="badge outline-badge-dark"> Penanggung Jawab </span></label>
                                                <input type="text" class="form-control" id="editpjinven" name="editpjinven" value="<?= $var['pj']; ?>">
                                            </div>
                                            <div class="col">
                                                <label for="editmetodeinven">
                                                    <span class="badge outline-badge-dark"> Metode Inventarisasi </span></label>
                                                <input type="text" class="form-control" id="editmetodeinven" name="editmetodeinven" value="<?= $var['metode']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-row mb-4">
                                            <div class="col">
                                                <label for="editisinven">
                                                    <span class="badge outline-badge-dark"> <i>Index Sampling</i> (%) </span></label>
                                                <input type="text" class="form-control" id="editisinven" name="editisinven" value="<?= $var['is']; ?>">
                                            </div>
                                            <div class="col">
                                                <label for="editbentukpuinven">
                                                    <span class="badge outline-badge-dark"> Bentuk Petak Ukur </span></label>
                                                <input type="text" class="form-control" id="editbentukpuinven" name="editbentukpuinven" value="<?= $var['bentuk_pu']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-row mb-4">
                                            <div class="col">
                                                <label for="editluaspuinven">
                                                    <span class="badge outline-badge-dark"> Luas Petak Ukur (m²) </span></label>
                                                <input type="text" class="form-control" id="editluaspuinven" name="editluaspuinven" value="<?= $var['luas_pu']; ?>">
                                            </div>
                                            <div class="col">
                                                <label for="editkodertk">
                                                    <span class="badge outline-badge-dark"> Kode Rencana Tahunan Kegiatan </span></label>
                                                <select class="form-control" id="editkodertk" name="editkodertk">
                                                    <option selected=""><?= $var['kode_rencana_tahunan_kegiatan']; ?></option>
                                                    <?php foreach ($rtk as $pk) : ?>
                                                        <option><?= $pk['kode_rencana_tahunan_kegiatan']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row mb-4">
                                            <label for="editdesinven">
                                                <span class="badge outline-badge-dark"> Deskripsi</span></label>
                                            <input type="text" class="form-control" id="editdesinven" name="editdesinven" value="<?= $var['deskripsi']; ?>">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Tutup</button>
                                        <button type="submit" class="btn btn-info" id="editpk">Perbarui</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div id="hapuspk<?= $var['id'] ?>" class="modal animated fadeInDown" role="dialog" aria-labelledby="hapuspk" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">HAPUS DATA INVENTARISASI</h5>
                                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="alert alert-icon-left alert-light-danger mb-4" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" data-dismiss="alert" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close">
                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                            </svg></button>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                            <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                                            <line x1="12" y1="9" x2="12" y2="13"></line>
                                            <line x1="12" y1="17" x2="12" y2="17"></line>
                                        </svg>
                                        <strong>Penting!</strong> Data dibawah ini akan dihapus.
                                    </div>
                                    <form action="inven-sdh/hapusinven/<?= $var['id']; ?>" class="form-vertical" method="post">
                                        <ul class="list-group ">
                                            <li class="list-group-item"><strong>Kode Inventarisasi =</strong> <?= $var['kode_inventarisasi']; ?></li>
                                            <li class="list-group-item"><strong>Nomor SK Inventarisasi =</strong> <?= $var['no_sk']; ?></li>
                                            <li class="list-group-item"><strong>Tanggal Mulai =</strong> <?= $var['tanggal_mulai']; ?></li>
                                            <li class="list-group-item"><strong>Tanggal Selesai =</strong> <?= $var['tanggal_selesai']; ?></li>
                                            <li class="list-group-item"><strong>Penanggung Jawab =</strong> <?= $var['pj']; ?></li>
                                            <li class="list-group-item"><strong>Metode Inventarisasi =</strong> <?= $var['metode']; ?></li>
                                            <li class="list-group-item"><strong><i>Index Sampling</i> (%) =</strong> <?= $var['is']; ?></li>
                                            <li class="list-group-item"><strong>Bentuk Petak Ukur =</strong> <?= $var['bentuk_pu']; ?></li>
                                            <li class="list-group-item"><strong>Luas Petak Ukur (m²) =</strong> <?= $var['luas_pu']; ?></li>
                                            <li class="list-group-item"><strong>Kode Rencana Tahunan Kegiatan =</strong> <?= $var['kode_rencana_tahunan_kegiatan']; ?></li>
                                            <li class="list-group-item"><strong>Deskripsi =</strong> <?= $var['deskripsi']; ?></li>
                                        </ul>
                                        <div class="form-group mb-4">
                                            <input type="hidden" value="DELETE" name="_method">
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>Batal</button>
                                            <button type="submit" class="btn btn-danger" id="hapuspk">Hapus</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- end modal penaataan kawasan -->

                <!-- modal umt -->
                <div id="inputumt" class="modal animated fadeInDown" role="dialog" tabindex="-1" aria-labelledby="inputumt" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">INPUT DATA <br>INVENTARISASI UMT</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </button>
                            </div>
                            <form action="inven-sdh/saveinvenumt" method="post">
                                <div class="modal-body">
                                    <div class="form-group mb-4">
                                        <label for="kodeinvenumt">
                                            <span class="badge outline-badge-dark"> Kode Inventarisasi Unit Menejemen Terkecil </span></label>
                                        <input type="text" class="form-control <?= ($validation2->hasError('kodeinvenumt')) ? 'is-invalid' : ''; ?>" id="kodeinvenumt" name="kodeinvenumt" value="<?= old('kodeinvenumt'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation2->getError('kodeinvenumt'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="kodeinven1">
                                            <span class="badge outline-badge-dark"> Kode Inventarisasi </span></label>
                                        <select class="form-control <?= ($validation2->hasError('kodeinven1')) ? 'is-invalid' : ''; ?>" id="kodeinven1" name="kodeinven1">
                                            <?php foreach ($inven as $pk) : ?>
                                                <option><?= $pk['kode_inventarisasi']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation2->getError('kodeinven1'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="kodetnmcupet">
                                            <span class="badge outline-badge-dark"> Kode Tanaman Cucu Petak </span></label>
                                        <select class="form-control <?= ($validation2->hasError('kodetnmcupet')) ? 'is-invalid' : ''; ?>" id="kodetnmcupet" name="kodetnmcupet">
                                            <?php foreach ($tnmcupet as $pk) : ?>
                                                <option><?= $pk['kode_cupet_tnm']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation2->getError('kodetnmcupet'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="tglinvenumt">
                                            <span class="badge outline-badge-dark"> Tanggal Inventarisasi </span></label>
                                        <input id="tglinvenumt" name="tglinvenumt" class="form-control <?= ($validation2->hasError('tglinvenumt')) ? 'is-invalid' : ''; ?>" type="date" value="<?= old('tglinvenumt'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation2->getError('tglinvenumt'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="pjinvenumt">
                                            <span class="badge outline-badge-dark"> Penanggung Jawab </span></label>
                                        <input type="text" class="form-control <?= ($validation2->hasError('pjinvenumt')) ? 'is-invalid' : ''; ?>" id="pjinvenumt" name="pjinvenumt" value="<?= old('pjinvenumt'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation2->getError('pjinvenumt'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Tutup</button>
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <?php foreach ($invenumt as $var) : ?>

                    <div id="editumt<?= $var['id'] ?>" class="modal animated fadeInDown" role="dialog" tabindex="-1" aria-labelledby="editumt" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">UPDATE DATA <br> INVENTARISASI UMT</h5>
                                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                </div>
                                <form action="inven-sdh/editinvenumt/<?= $var['id']; ?>" method="post">
                                    <div class="modal-body">
                                        <div class="alert alert-icon-left alert-light-info mb-4" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" data-dismiss="alert" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close">
                                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                                </svg></button>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                                <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                                                <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                                            </svg>
                                            <strong>Penting!</strong> Data dibawah ini akan diperbarui.
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="editkodeinvenumt">
                                                <span class="badge outline-badge-dark"> Kode Inventarisasi Unit Menejemen Terkecil </span></label>
                                            <input type="text" class="form-control" id="editkodeinvenumt" name="editkodeinvenumt" value="<?= $var['kode_inven_umt']; ?>">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="editkodeinven1">
                                                <span class="badge outline-badge-dark"> Kode Inventarisasi</span></label>
                                            <select class="form-control" id="editkodeinven1" name="editkodeinven1">
                                                <option selected=""><?= $var['kode_inventarisasi']; ?></option>
                                                <?php foreach ($inven as $pk) : ?>
                                                    <option><?= $pk['kode_inventarisasi']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="editkodetnmcupet">
                                                <span class="badge outline-badge-dark"> Kode Tanaman Cucu Petak </span></label>
                                            <select class="form-control" id="editkodetnmcupet" name="editkodetnmcupet">
                                                <option selected=""><?= $var['kode_cupet_tnm']; ?></option>
                                                <?php foreach ($tnmcupet as $pk) : ?>
                                                    <option><?= $pk['kode_cupet_tnm']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="edittglinvenumt">
                                                <span class="badge outline-badge-dark"> Tanggal Inventarisasi </span></label>
                                            <input id="edittglinvenumt" name="edittglinvenumt" class="form-control" type="date" value="<?= $var['tanggal']; ?>">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="editpjinvenumt">
                                                <span class="badge outline-badge-dark"> Penanggung Jawab </span></label>
                                            <input type="text" class="form-control" id="editpjinvenumt" name="editpjinvenumt" value="<?= $var['pj']; ?>">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Tutup</button>
                                        <button type="submit" class="btn btn-info" id="editumt">Perbarui</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div id="hapusumt<?= $var['id'] ?>" class="modal animated fadeInDown" role="dialog" aria-labelledby="hapusumt" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">HAPUS DATA <br>INVENTARISASI UMT</h5>
                                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="alert alert-icon-left alert-light-danger mb-4" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" data-dismiss="alert" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close">
                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                            </svg></button>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                            <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                                            <line x1="12" y1="9" x2="12" y2="13"></line>
                                            <line x1="12" y1="17" x2="12" y2="17"></line>
                                        </svg>
                                        <strong>Penting!</strong> Data dibawah ini akan dihapus.
                                    </div>
                                    <form action="inven-sdh/deleteinvenumt/<?= $var['id']; ?>" class="form-vertical" method="post">
                                        <ul class="list-group ">
                                            <li class="list-group-item"><strong> Kode Inventarisasi Unit Menejemen Terkecil =</strong> <?= $var['kode_inven_umt']; ?></li>
                                            <li class="list-group-item"><strong> Kode Inventarisasi =</strong> <?= $var['kode_inventarisasi']; ?></li>
                                            <li class="list-group-item"><strong> Kode Tanaman Cucu Petak =</strong> <?= $var['kode_cupet_tnm']; ?></li>
                                            <li class="list-group-item"><strong> Tanggal Inventarisasi =</strong> <?= $var['tanggal']; ?></li>
                                            <li class="list-group-item"><strong> Penanggung Jawab =</strong> <?= $var['pj']; ?></li>
                                        </ul>
                                        <div class="form-group mb-4">
                                            <input type="hidden" value="DELETE" name="_method">
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>Batal</button>
                                            <button type="submit" class="btn btn-danger" id="hapusumt">Hapus</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
                <!-- end modal UMT -->

                <!-- modal zonasi -->
                <div id="inputzonasi" class="modal animated fadeInDown" role="dialog" tabindex="-1" aria-labelledby="inputzonasi" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">INPUT DATA INVENTARISASI PETAK UKUR</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </button>
                            </div>
                            <form action="inven-sdh/saveinvenpu" method="post">
                                <div class="modal-body">
                                    <div class="form-row mb-4">
                                        <div class="col">
                                            <label for="kodeinvenumt1">
                                                <span class="badge outline-badge-dark"> Kode Inventarisasi UMT </span></label>
                                            <select class="form-control <?= ($validation2->hasError('kodeinvenumt1')) ? 'is-invalid' : ''; ?>" id="kodeinvenumt1" name="kodeinvenumt1">
                                                <?php foreach ($invenumt as $pk) : ?>
                                                    <option><?= $pk['kode_inven_umt']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('kodeinvenumt1'); ?>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="kodeinvenpu">
                                                <span class="badge outline-badge-dark"> Kode Inventarisasi Petak Ukur </span></label>
                                            <input type="text" class="form-control <?= ($validation2->hasError('kodeinvenpu')) ? 'is-invalid' : ''; ?>" id="kodeinvenpu" name="kodeinvenpu" value="<?= old('kodeinvenpu'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('kodeinvenpu'); ?>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="nopu">
                                                <span class="badge outline-badge-dark"> No. Petak Ukur </span></label>
                                            <input type="text" class="form-control <?= ($validation2->hasError('nopu')) ? 'is-invalid' : ''; ?>" id="nopu" name="nopu" value="<?= old('nopu'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('nopu'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="col">
                                            <label for="tglinvenpu">
                                                <span class="badge outline-badge-dark"> Tanggal Inventarisasi </span></label>
                                            <input type="date" class="form-control <?= ($validation2->hasError('tglinvenpu')) ? 'is-invalid' : ''; ?>" id="tglinvenpu" name="tglinvenpu" value="<?= old('tglinvenpu'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('tglinvenpu'); ?>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="pjinvenpu">
                                                <span class="badge outline-badge-dark"> Penanggung Jawab </span></label>
                                            <input type="text" class="form-control <?= ($validation2->hasError('pjinvenpu')) ? 'is-invalid' : ''; ?>" id="pjinvenpu" name="pjinvenpu" value="<?= old('pjinvenpu'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('pjinvenpu'); ?>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="luasinvenpu">
                                                <span class="badge outline-badge-dark"> Luas Petak Ukur (m²)</span></label>
                                            <input type="text" class="form-control <?= ($validation2->hasError('luasinvenpu')) ? 'is-invalid' : ''; ?>" id="luasinvenpu" name="luasinvenpu" value="<?= old('luasinvenpu'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('luasinvenpu'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="col">
                                            <label for="bentukinvenpu">
                                                <span class="badge outline-badge-dark"> Bentuk Petak Ukur </span></label>
                                            <input type="text" class="form-control <?= ($validation2->hasError('bentukinvenpu')) ? 'is-invalid' : ''; ?>" id="bentukinvenpu" name="bentukinvenpu" value="<?= old('bentukinvenpu'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('bentukinvenpu'); ?>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="x">
                                                <span class="badge outline-badge-dark"> Koordinat X </span></label>
                                            <input type="text" class="form-control <?= ($validation2->hasError('x')) ? 'is-invalid' : ''; ?>" id="x" name="x" value="<?= old('x'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('x'); ?>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="y">
                                                <span class="badge outline-badge-dark"> Koordinat Y </span></label>
                                            <input type="text" class="form-control <?= ($validation2->hasError('y')) ? 'is-invalid' : ''; ?>" id="y" name="y" value="<?= old('y'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('y'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="col">
                                            <label for="ndvi">
                                                <span class="badge outline-badge-dark"> NDVI <i>(Normalized Difference Vegetation Index)</i> </span></label>
                                            <input type="text" class="form-control <?= ($validation2->hasError('ndvi')) ? 'is-invalid' : ''; ?>" id="ndvi" name="ndvi" value="<?= old('ndvi'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('ndvi'); ?>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="msavi">
                                                <span class="badge outline-badge-dark"> MSAVI <i>(Modified Soil Adjusted Vegetation Index)</i> </span></label>
                                            <input type="text" class="form-control <?= ($validation2->hasError('msavi')) ? 'is-invalid' : ''; ?>" id="msavi" name="msavi" value="<?= old('msavi'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('msavi'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="col">
                                            <label for="c">
                                                <span class="badge outline-badge-dark"> C <i>(Crown Density)</i></span></label>
                                            <input type="text" class="form-control <?= ($validation2->hasError('c')) ? 'is-invalid' : ''; ?>" id="c" name="c" value="<?= old('c'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('c'); ?>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="d">
                                                <span class="badge outline-badge-dark"> D <i>(Crown Diameter)</i></span></label>
                                            <input type="text" class="form-control <?= ($validation2->hasError('d')) ? 'is-invalid' : ''; ?>" id="d" name="d" value="<?= old('d'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('d'); ?>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="n">
                                                <span class="badge outline-badge-dark"> N <i>(Number of Standing Stock)</i></span></label>
                                            <input type="text" class="form-control <?= ($validation2->hasError('n')) ? 'is-invalid' : ''; ?>" id="n" name="n" value="<?= old('n'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('n'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="col">
                                            <label for="jenistanah">
                                                <span class="badge outline-badge-dark"> Jenis Tanah </span></label>
                                            <input type="text" class="form-control <?= ($validation2->hasError('jenistanah')) ? 'is-invalid' : ''; ?>" id="jenistanah" name="jenistanah" value="<?= old('jenistanah'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('jenistanah'); ?>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="slope">
                                                <span class="badge outline-badge-dark"> <i>Slope</i> (%) </span></label>
                                            <input type="text" class="form-control <?= ($validation2->hasError('slope')) ? 'is-invalid' : ''; ?>" id="slope" name="slope" value="<?= old('slope'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('slope'); ?>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="altitude">
                                                <span class="badge outline-badge-dark"> <i>Altitude</i> (m)</span></label>
                                            <input type="text" class="form-control <?= ($validation2->hasError('altitude')) ? 'is-invalid' : ''; ?>" id="altitude" name="altitude" value="<?= old('altitude'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('altitude'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Tutup</button>
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <?php foreach ($invenpu as $var) : ?>

                    <div id="editzonasi<?= $var['id'] ?>" class="modal animated fadeInDown" role="dialog" tabindex="-1" aria-labelledby="editzonasi" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">UPDATE DATA INVENTARISASI PETAK UKUR</h5>
                                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                </div>
                                <form action="inven-sdh/editinvenpu/<?= $var['id']; ?>" method="post">
                                    <div class="modal-body">
                                        <div class="alert alert-icon-left alert-light-info mb-4" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" data-dismiss="alert" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close">
                                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                                </svg></button>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                                <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                                                <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                                            </svg>
                                            <strong>Penting!</strong> Data dibawah ini akan diperbarui.
                                        </div>
                                        <div class="form-row mb-4">
                                            <div class="col">
                                                <label for="editkodeinvenumt1">
                                                    <span class="badge outline-badge-dark"> Kode Inventarisasi UMT </span></label>
                                                <select class="form-control" id="editkodeinvenumt1" name="editkodeinvenumt1">
                                                    <option selected=""><?= $var['kode_inven_umt']; ?></option>
                                                    <?php foreach ($invenumt as $pk) : ?>
                                                        <option><?= $pk['kode_inven_umt']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for="editkodeinvenpu">
                                                    <span class="badge outline-badge-dark"> Kode Inventarisasi Petak Ukur </span></label>
                                                <input type="text" class="form-control" id="editkodeinvenpu" name="editkodeinvenpu" value="<?= $var['kode_inven_pu']; ?>">
                                            </div>
                                            <div class="col">
                                                <label for="editnopu">
                                                    <span class="badge outline-badge-dark"> No. Petak Ukur </span></label>
                                                <input type="text" class="form-control" id="editnopu" name="editnopu" value="<?= $var['no_pu']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-row mb-4">
                                            <div class="col">
                                                <label for="edittglinvenpu">
                                                    <span class="badge outline-badge-dark"> Tanggal Inventarisasi </span></label>
                                                <input type="date" class="form-control" id="edittglinvenpu" name="edittglinvenpu" value="<?= $var['tanggal']; ?>">
                                            </div>
                                            <div class="col">
                                                <label for="editpjinvenpu">
                                                    <span class="badge outline-badge-dark"> Penanggung Jawab </span></label>
                                                <input type="text" class="form-control" id="editpjinvenpu" name="editpjinvenpu" value="<?= $var['pj']; ?>">
                                            </div>
                                            <div class="col">
                                                <label for="editluasinvenpu">
                                                    <span class="badge outline-badge-dark"> Luas Petak Ukur (m²) </span></label>
                                                <input type="text" class="form-control" id="editluasinvenpu" name="editluasinvenpu" value="<?= $var['luas_pu']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-row mb-4">
                                            <div class="col">
                                                <label for="editbentukinvenpu">
                                                    <span class="badge outline-badge-dark"> Bentuk Petak Ukur </span></label>
                                                <input type="text" class="form-control" id="editbentukinvenpu" name="editbentukinvenpu" value="<?= $var['bentuk_pu']; ?>">
                                            </div>
                                            <div class="col">
                                                <label for="editx">
                                                    <span class="badge outline-badge-dark"> Koordinat X </span></label>
                                                <input type="text" class="form-control" id="editx" name="editx" value="<?= $var['koordinat_x']; ?>">
                                            </div>
                                            <div class="col">
                                                <label for="edity">
                                                    <span class="badge outline-badge-dark"> Koordinat Y </span></label>
                                                <input type="text" class="form-control" id="edity" name="edity" value="<?= $var['koordinat_y']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-row mb-4">
                                            <div class="col">
                                                <label for="editndvi">
                                                    <span class="badge outline-badge-dark"> NDVI <i>(Normalized Difference Vegetation Index)</i> </span></label>
                                                <input type="text" class="form-control" id="editndvi" name="editndvi" value="<?= $var['ndvi']; ?>">
                                            </div>
                                            <div class="col">
                                                <label for="editmsavi">
                                                    <span class="badge outline-badge-dark"> MSAVI <i>(Modified Soil Adjusted Vegetation Index)</i> </span></label>
                                                <input type="text" class="form-control" id="editmsavi" name="editmsavi" value="<?= $var['msavi']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-row mb-4">
                                            <div class="col">
                                                <label for="editc">
                                                    <span class="badge outline-badge-dark"> C <i>(Crown Density)</i> </span></label>
                                                <input type="text" class="form-control" id="editc" name="editc" value="<?= $var['c']; ?>">
                                            </div>
                                            <div class="col">
                                                <label for="editd">
                                                    <span class="badge outline-badge-dark"> D <i>(Crown Diameter)</i> </span></label>
                                                <input type="text" class="form-control" id="editd" name="editd" value="<?= $var['d']; ?>">
                                            </div>
                                            <div class="col">
                                                <label for="editn">
                                                    <span class="badge outline-badge-dark"> N <i>(Number of Standing Stock)</i> </span></label>
                                                <input type="text" class="form-control" id="editn" name="editn" value="<?= $var['n']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-row mb-4">
                                            <div class="col">
                                                <label for="editjenistanah">
                                                    <span class="badge outline-badge-dark"> Jenis Tanah </span></label>
                                                <input type="text" class="form-control" id="editjenistanah" name="editjenistanah" value="<?= $var['jenis_tanah']; ?>">
                                            </div>
                                            <div class="col">
                                                <label for="editslope">
                                                    <span class="badge outline-badge-dark"> <i>Slope</i> (%) </span></label>
                                                <input type="text" class="form-control" id="editslope" name="editslope" value="<?= $var['kelerengan']; ?>">
                                            </div>
                                            <div class="col">
                                                <label for="editaltitude">
                                                    <span class="badge outline-badge-dark"> <i>Altitude</i> (m) </span></label>
                                                <input type="text" class="form-control" id="editaltitude" name="editaltitude" value="<?= $var['altitude']; ?>">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Tutup</button>
                                        <button type="submit" class="btn btn-info" id="editzonasi">Perbarui</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div id="hapuszonasi<?= $var['id'] ?>" class="modal animated fadeInDown" role="dialog" aria-labelledby="hapuszonasi" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">HAPUS DATA INVENTARISASI PETAK UKUR</h5>
                                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="alert alert-icon-left alert-light-danger mb-4" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" data-dismiss="alert" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close">
                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                            </svg></button>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                            <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                                            <line x1="12" y1="9" x2="12" y2="13"></line>
                                            <line x1="12" y1="17" x2="12" y2="17"></line>
                                        </svg>
                                        <strong>Penting!</strong> Data dibawah ini akan dihapus.
                                    </div>
                                    <form action="inven-sdh/hapusinvenpu/<?= $var['id']; ?>" class="form-vertical" method="post">
                                        <ul class="list-group ">
                                            <li class="list-group-item"><strong> Kode Inventarisasi UMT =</strong> <?= $var['kode_inven_umt']; ?></li>
                                            <li class="list-group-item"><strong> Kode Inventarisasi Petak Ukur =</strong> <?= $var['kode_inven_pu']; ?></li>
                                            <li class="list-group-item"><strong> No. Petak Ukur =</strong> <?= $var['no_pu']; ?></li>
                                            <li class="list-group-item"><strong> Tanggal Inventarisasi =</strong> <?= $var['tanggal']; ?></li>
                                            <li class="list-group-item"><strong> Penanggung Jawab =</strong> <?= $var['pj']; ?></li>
                                            <li class="list-group-item"><strong> Luas Petak Ukur (m²) =</strong> <?= $var['luas_pu']; ?></li>
                                            <li class="list-group-item"><strong> Bentuk Petak Ukur =</strong> <?= $var['bentuk_pu']; ?></li>
                                            <li class="list-group-item"><strong> Koordinat X =</strong> <?= $var['koordinat_x']; ?></li>
                                            <li class="list-group-item"><strong> Koordinat Y =</strong> <?= $var['koordinat_y']; ?></li>
                                            <li class="list-group-item"><strong> NDVI <i>(Normalized Difference Vegetation Index)</i> =</strong> <?= $var['ndvi']; ?></li>
                                            <li class="list-group-item"><strong> MSAVI <i>(Modified Soil Adjusted Vegetation Index)</i> =</strong> <?= $var['msavi']; ?></li>
                                            <li class="list-group-item"><strong> C <i>(Crown Density)</i> =</strong> <?= $var['c']; ?></li>
                                            <li class="list-group-item"><strong> D <i>(Crown Diameter)</i> =</strong> <?= $var['d']; ?></li>
                                            <li class="list-group-item"><strong> N <i>(Number of Standing Stock)</i> =</strong> <?= $var['n']; ?></li>
                                            <li class="list-group-item"><strong> Jenis Tanah =</strong> <?= $var['jenis_tanah']; ?></li>
                                            <li class="list-group-item"><strong> <i>Slope</i> (%) =</strong> <?= $var['kelerengan']; ?></li>
                                            <li class="list-group-item"><strong> <i>Altitude</i> (m) =</strong> <?= $var['altitude']; ?></li>
                                        </ul>
                                        <div class="form-group mb-4">
                                            <input type="hidden" value="DELETE" name="_method">
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>Batal</button>
                                            <button type="submit" class="btn btn-danger" id="hapuszonasi">Hapus</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
                <!-- end modal zonasi -->

            </div>
            <!-- END MODAL -->
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
<script src="<?= base_url('dashboard/assets/js/validation-oraganisasikawasan.js') ?>"></script>
<script src="<?= base_url('dashboard/assets/js/scrollspyNav.js') ?>"></script>
<script src="<?= base_url('dashboard/plugins/table/datatable/datatables.js') ?>"></script>
<script src="<?= base_url('dashboard/plugins/sweetalerts/sweetalert.js') ?>"></script>
<script src="<?= base_url('dashboard/plugins/sweetalerts/sweetalert2.min.js') ?>"></script>
<script src="<?= base_url('dashboard/plugins/sweetalerts/custom-sweetalert.js') ?>"></script>
<script src="<?= base_url('dashboard/plugins/apex/apexcharts.min.js') ?>"></script>
<script src="<?= base_url('dashboard/assets/js/dashboard/dash_1.js') ?>"></script>

<!-- NOTIF  -->
<script>
    <?php
    if (session()->getFlashdata('info')) {
    ?>
        swal.fire({
            icon: '<?= session()->getFlashdata('info'); ?>',
            title: '<?= session()->getFlashdata('judul'); ?>',
            text: '<?= session()->getFlashdata('pesan'); ?>',
            type: '<?= session()->getFlashdata('info'); ?>',
        })

    <?php
    }
    ?>
</script>

<!-- END NOTIF  -->
<!-- validation  -->
<div>
    <script>
        let inputpk;
        if ('<?= ($validation2->hasError('kodeinven')) ?>') {
            inputpk = $('#inputpk').modal('show');
        } else if ('<?= ($validation2->hasError('skinven')) ?>') {
            inputpk = $('#inputpk').modal('show');
        } else if ('<?= ($validation2->hasError('mulaiinven')) ?>') {
            inputpk = $('#inputpk').modal('show');
        } else if ('<?= ($validation2->hasError('selesaiinven')) ?>') {
            inputpk = $('#inputpk').modal('show');
        } else if ('<?= ($validation2->hasError('pjinven')) ?>') {
            inputpk = $('#inputpk').modal('show');
        } else if ('<?= ($validation2->hasError('metodeinven')) ?>') {
            inputpk = $('#inputpk').modal('show');
        } else if ('<?= ($validation2->hasError('isinven')) ?>') {
            inputpk = $('#inputpk').modal('show');
        } else if ('<?= ($validation2->hasError('bentukpuinven')) ?>') {
            inputpk = $('#inputpk').modal('show');
        } else if ('<?= ($validation2->hasError('luaspuinven')) ?>') {
            inputpk = $('#inputpk').modal('show');
        } else if ('<?= ($validation2->hasError('kodertk')) ?>') {
            inputpk = $('#inputpk').modal('show');
        } else if ('<?= ($validation2->hasError('desinven')) ?>') {
            inputpk = $('#inputpk').modal('show');
        } else {
            inputpk = $('#inputpk').modal('hide');
        }
    </script>
    <script>
        let inputumt;
        if ('<?= ($validation2->hasError('kodeinvenumt')) ?>') {
            inputumt = $('#inputumt').modal('show');
        } else if ('<?= ($validation2->hasError('kodeinven1')) ?>') {
            inputumt = $('#inputumt').modal('show');
        } else if ('<?= ($validation2->hasError('kodetnmcupet')) ?>') {
            inputumt = $('#inputumt').modal('show');
        } else if ('<?= ($validation2->hasError('tglinvenumt')) ?>') {
            inputumt = $('#inputumt').modal('show');
        } else if ('<?= ($validation2->hasError('pjinvenumt')) ?>') {
            inputumt = $('#inputumt').modal('show');
        } else {
            inputumt = $('#inputumt').modal('hide');
        }
    </script>
    <script>
        let inputzonasi;
        if ('<?= ($validation2->hasError('kode_inven_umt')) ?>') {
            inputzonasi = $('#inputzonasi').modal('show');
        } else if ('<?= ($validation2->hasError('kode_inven_pu')) ?>') {
            inputzonasi = $('#inputzonasi').modal('show');
        } else if ('<?= ($validation2->hasError('no_pu')) ?>') {
            inputzonasi = $('#inputzonasi').modal('show');
        } else if ('<?= ($validation2->hasError('pj')) ?>') {
            inputzonasi = $('#inputzonasi').modal('show');
        } else if ('<?= ($validation2->hasError('luas_pu')) ?>') {
            inputzonasi = $('#inputzonasi').modal('show');
        } else if ('<?= ($validation2->hasError('bentuk_pu')) ?>') {
            inputzonasi = $('#inputzonasi').modal('show');
        } else if ('<?= ($validation2->hasError('koordinat_x')) ?>') {
            inputzonasi = $('#inputzonasi').modal('show');
        } else if ('<?= ($validation2->hasError('koordinat_y')) ?>') {
            inputzonasi = $('#inputzonasi').modal('show');
        } else if ('<?= ($validation2->hasError('ndvi')) ?>') {
            inputzonasi = $('#inputzonasi').modal('show');
        } else if ('<?= ($validation2->hasError('msavi')) ?>') {
            inputzonasi = $('#inputzonasi').modal('show');
        } else if ('<?= ($validation2->hasError('c')) ?>') {
            inputzonasi = $('#inputzonasi').modal('show');
        } else if ('<?= ($validation2->hasError('d')) ?>') {
            inputzonasi = $('#inputzonasi').modal('show');
        } else if ('<?= ($validation2->hasError('n')) ?>') {
            inputzonasi = $('#inputzonasi').modal('show');
        } else if ('<?= ($validation2->hasError('jenis_tanah')) ?>') {
            inputzonasi = $('#inputzonasi').modal('show');
        } else if ('<?= ($validation2->hasError('kelerengan')) ?>') {
            inputzonasi = $('#inputzonasi').modal('show');
        } else if ('<?= ($validation2->hasError('altitude')) ?>') {
            inputzonasi = $('#inputzonasi').modal('show');
        } else {
            inputzonasi = $('#inputzonasi').modal('hide');
        }
    </script>

</div>
<!-- end validation  -->

<!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
<script src="<?= base_url('dashboard/plugins/table/datatable/button-ext/dataTables.buttons.min.js') ?>"></script>
<script src="<?= base_url('dashboard/plugins/table/datatable/button-ext/jszip.min.js') ?>"></script>
<script src="<?= base_url('dashboard/plugins/table/datatable/button-ext/buttons.html5.min.js') ?>"></script>
<script src="<?= base_url('dashboard/plugins/table/datatable/button-ext/buttons.print.min.js') ?>"></script>
<script src="<?= base_url('dashboard/plugins/table/datatable/tabledata.js') ?>"></script>

<!-- END PAGE LEVEL CUSTOM SCRIPTS  -->
</body>

</html>
<?= $this->endSection(); ?>