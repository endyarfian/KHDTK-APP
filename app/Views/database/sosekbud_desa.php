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
                <li class="menu active">
                    <a href="#sosekbud" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
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
                    <ul class="collapse submenu recent-submenu mini-recent-submenu list-unstyled show" id="sosekbud" data-parent="#accordionExample">
                        <li class="active">
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
                                Potensi Sosial Ekonomi dan Budaya</a></li>
                        <li class="active"><a href="javscript:void(0);">
                                Sosial Ekonomi dan Budaya Pada Lingkup Desa</a></li>
                    </ul>
                </div>
            </div>

            <!-- begin tabel penataan kawasan -->
            <div>
                <div class="seperator-header">
                    <h4 class=""><b>DATA DESA</b></h4>
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
                                        <th>Kode Desa</th>
                                        <th>Kabupaten</th>
                                        <th>Kecamatan</th>
                                        <th>Desa</th>
                                        <th>Luas Wilayah Desa(Km²)</th>
                                        <th class="dt-no-sorting">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($desa as $var) : ?>
                                        <tr>
                                            <td scope="row"> <?= $no++; ?> </td>
                                            <td><?= $var['kode_desa']; ?></td>
                                            <td><?= $var['kab']; ?></td>
                                            <td><?= $var['kec']; ?></td>
                                            <td><?= $var['desa']; ?></td>
                                            <td><?= $var['luas']; ?></td>
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
                    <h4 class=""><b>DATA LEMBAGA DESA</b></h4>
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
                                        <th>Kode Lembaga Desa</th>
                                        <th>Kode Desa</th>
                                        <th>Nama Lembaga</th>
                                        <th>Jenis Lembaga</th>
                                        <th>Alamat</th>
                                        <th>No. Telepon</th>
                                        <th>Email</th>
                                        <th>No. SK</th>
                                        <th>Tanggal Berlaku</th>
                                        <th>Tanggal Berakhir</th>
                                        <th class="dt-no-sorting">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($lemdes as $var) : ?>
                                        <tr>
                                            <td scope="row"> <?= $no++; ?> </td>
                                            <td><?= $var['kode_lemdes']; ?></td>
                                            <td><?= $var['kode_desa']; ?></td>
                                            <td><?= $var['nama']; ?></td>
                                            <td><?= $var['jenis']; ?></td>
                                            <td><?= $var['alamat']; ?></td>
                                            <td><?= $var['telp']; ?></td>
                                            <td><?= $var['email']; ?></td>
                                            <td><?= $var['sk']; ?></td>
                                            <td><?= $var['tanggal_berlaku']; ?></td>
                                            <td><?= $var['tanggal_berakhir']; ?></td>
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

            <!-- BEGIN MODAL -->
            <div>
                <!-- modal penaataan kawasan -->
                <div id="inputpk" class="modal animated fadeInDown" role="dialog" tabindex="-1" aria-labelledby="inputpk" aria-hidden="false">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">INPUT DATA DESA</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </button>
                            </div>
                            <form action="sosekbud-desa/savedesa" method="post">
                                <div class="modal-body">
                                    <div class="form-group mb-4">
                                        <label for="kodedesa">
                                            <span class="badge outline-badge-dark"> Kode Desa </span></label>
                                        <input type="text" class="form-control <?= ($validation2->hasError('kodedesa')) ? 'is-invalid' : ''; ?>" id="kodedesa" name="kodedesa" value="<?= old('kodedesa'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation2->getError('kodedesa'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="kab">
                                            <span class="badge outline-badge-dark"> Kabupaten </span></label>
                                        <input type="text" class="form-control <?= ($validation2->hasError('kab')) ? 'is-invalid' : ''; ?>" id="kab" name="kab" value="<?= old('kab'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation2->getError('kab'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="kec">
                                            <span class="badge outline-badge-dark"> Kecamatan </span></label>
                                        <input type="text" class="form-control <?= ($validation2->hasError('kec')) ? 'is-invalid' : ''; ?>" id="kec" name="kec" value="<?= old('kec'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation2->getError('kec'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="desa">
                                            <span class="badge outline-badge-dark"> Desa </span></label>
                                        <input type="text" class="form-control <?= ($validation2->hasError('desa')) ? 'is-invalid' : ''; ?>" id="desa" name="desa" value="<?= old('desa'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation2->getError('desa'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="luas">
                                            <span class="badge outline-badge-dark"> Luas Wilayah Desa (Km²)</span></label>
                                        <input type="text" class="form-control <?= ($validation2->hasError('luas')) ? 'is-invalid' : ''; ?>" id="luas" name="luas" value="<?= old('luas'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation2->getError('luas'); ?>
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

                <?php foreach ($desa as $var) : ?>
                    <div id="editpk<?= $var['id'] ?>" class="modal animated fadeInDown" role="dialog" tabindex="-1" aria-labelledby="editpk" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">UPDATE DATA DESA</h5>
                                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                </div>
                                <form action="sosekbud-desa/editdesa/<?= $var['id']; ?>" method="post" id="form1">
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
                                            <label for="editkodedesa">
                                                <span class="badge outline-badge-dark"> Kode Desa </span></label>
                                            <input type="text" class="form-control" id="editkodedesa" name="editkodedesa" value="<?= $var['kode_desa']; ?>">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="editkab">
                                                <span class="badge outline-badge-dark"> Kabupaten </span></label>
                                            <input type="text" class="form-control" id="editkab" name="editkab" value="<?= $var['kab']; ?>">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="editkec">
                                                <span class="badge outline-badge-dark"> Kecamatan </span></label>
                                            <input type="text" class="form-control" id="editkec" name="editkec" value="<?= $var['kec']; ?>">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="editdesa">
                                                <span class="badge outline-badge-dark"> Desa </span></label>
                                            <input type="text" class="form-control" id="editdesa" name="editdesa" value="<?= $var['desa']; ?>">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="editluas">
                                                <span class="badge outline-badge-dark"> Luas Wilayah Desa (Km²) </span></label>
                                            <input type="text" class="form-control" id="editluas" name="editluas" value="<?= $var['luas']; ?>">
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
                                    <h5 class="modal-title">HAPUS DATA DESA</h5>
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
                                    <form action="sosekbud-desa/hapusdesa/<?= $var['id']; ?>" class="form-vertical" method="post">
                                        <ul class="list-group ">
                                            <li class="list-group-item"><strong> Kode Desa =</strong> <?= $var['kode_desa']; ?></li>
                                            <li class="list-group-item"><strong> Kabupaten = </strong><?= $var['kab']; ?></li>
                                            <li class="list-group-item"><strong> Kecamatan = </strong><?= $var['kec']; ?></li>
                                            <li class="list-group-item"><strong> Desa = </strong><?= $var['desa']; ?></li>
                                            <li class="list-group-item"><strong> Luas Wilayah Desa (Km²) = </strong><?= $var['luas']; ?></li>
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
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">INPUT DATA LEMBAGA DESA</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </button>
                            </div>
                            <form action="sosekbud-desa/savelemdes" method="post">
                                <div class="modal-body">
                                    <div class="form-row mb-4">
                                        <div class="col">
                                            <label for="kodelemdes">
                                                <span class="badge outline-badge-dark"> Kode Lembaga Desa </span></label>
                                            <input type="text" class="form-control <?= ($validation2->hasError('kodelemdes')) ? 'is-invalid' : ''; ?>" id="kodelemdes" name="kodelemdes" value="<?= old('kodelemdes'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('kodelemdes'); ?>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="kodedesa1">
                                                <span class="badge outline-badge-dark"> Kode Desa </span></label>
                                            <select class="form-control <?= ($validation2->hasError('kodedesa1')) ? 'is-invalid' : ''; ?>" id="kodedesa1" name="kodedesa1">
                                                <?php foreach ($desa as $pk) : ?>
                                                    <option><?= $pk['kode_desa']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('kodedesa1'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="col">
                                            <label for="nama">
                                                <span class="badge outline-badge-dark"> Nama Lembaga Desa </span></label>
                                            <input type="text" class="form-control <?= ($validation2->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" value="<?= old('nama'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('nama'); ?>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="jenis">
                                                <span class="badge outline-badge-dark"> Jenis Lembaga Desa </span></label>
                                            <input type="text" class="form-control <?= ($validation2->hasError('jenis')) ? 'is-invalid' : ''; ?>" id="jenis" name="jenis" value="<?= old('jenis'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('jenis'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="col">
                                            <label for="alamat">
                                                <span class="badge outline-badge-dark"> Alamat </span></label>
                                            <input id="alamat" name="alamat" class="form-control <?= ($validation2->hasError('alamat')) ? 'is-invalid' : ''; ?>" type="text" value="<?= old('alamat'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('alamat'); ?>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="tlp">
                                                <span class="badge outline-badge-dark"> Nomor Telepon </span></label>
                                            <input id="tlp" name="tlp" class="form-control <?= ($validation2->hasError('tlp')) ? 'is-invalid' : ''; ?>" type="text" value="<?= old('tlp'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('tlp'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="col">
                                            <label for="email">
                                                <span class="badge outline-badge-dark"> Email </span></label>
                                            <input id="email" name="email" class="form-control <?= ($validation2->hasError('email')) ? 'is-invalid' : ''; ?>" type="text" value="<?= old('email'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('email'); ?>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="sk">
                                                <span class="badge outline-badge-dark"> Nomor SK </span></label>
                                            <input id="sk" name="sk" class="form-control <?= ($validation2->hasError('sk')) ? 'is-invalid' : ''; ?>" type="text" value="<?= old('sk'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('sk'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="col">
                                            <label for="berlaku">
                                                <span class="badge outline-badge-dark"> Tanggal Berlaku </span></label>
                                            <input id="berlaku" name="berlaku" class="form-control <?= ($validation2->hasError('berlaku')) ? 'is-invalid' : ''; ?>" type="date" value="<?= old('berlaku'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('berlaku'); ?>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="berakhir">
                                                <span class="badge outline-badge-dark"> Tanggal Berakhir </span></label>
                                            <input id="berakhir" name="berakhir" class="form-control <?= ($validation2->hasError('berakhir')) ? 'is-invalid' : ''; ?>" type="date" value="<?= old('berakhir'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('berakhir'); ?>
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

                <?php foreach ($lemdes as $var) : ?>

                    <div id="editumt<?= $var['id'] ?>" class="modal animated fadeInDown" role="dialog" tabindex="-1" aria-labelledby="editumt" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">UPDATE DATA LEMBAGA DESA</h5>
                                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                </div>
                                <form action="sosekbud-desa/editlemdes/<?= $var['id']; ?>" method="post">
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
                                                <label for="editkodelemdes">
                                                    <span class="badge outline-badge-dark"> Kode Lembaga Desa </span></label>
                                                <input type="text" class="form-control" id="editkodelemdes" name="editkodelemdes" value="<?= $var['kode_lemdes']; ?>">
                                            </div>
                                            <div class="col">
                                                <label for="editkodedesa1">
                                                    <span class="badge outline-badge-dark"> Kode Desa </span></label>
                                                <select class="form-control" id="editkodedesa1" name="editkodedesa1">
                                                    <option selected=""><?= $var['kode_desa']; ?></option>
                                                    <?php foreach ($desa as $pk) : ?>
                                                        <option><?= $pk['kode_desa']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row mb-4">
                                            <div class="col">
                                                <label for="editnama">
                                                    <span class="badge outline-badge-dark"> Nama Lembaga Desa </span></label>
                                                <input type="text" class="form-control" id="editnama" name="editnama" value="<?= $var['nama']; ?>">
                                            </div>
                                            <div class="col">
                                                <label for="editjenis">
                                                    <span class="badge outline-badge-dark"> Jenis Lemabaga Desa </span></label>
                                                <input type="text" class="form-control" id="editjenis" name="editjenis" value="<?= $var['jenis']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-row mb-4">
                                            <div class="col">
                                                <label for="editalamat">
                                                    <span class="badge outline-badge-dark"> Alamat </span></label>
                                                <input type="text" class="form-control" id="editalamat" name="editalamat" value="<?= $var['alamat']; ?>">
                                            </div>
                                            <div class="col">
                                                <label for="edittlp">
                                                    <span class="badge outline-badge-dark"> Nomor Telepon </span></label>
                                                <input type="text" class="form-control" id="edittlp" name="edittlp" value="<?= $var['telp']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-row mb-4">
                                            <div class="col">
                                                <label for="editemail">
                                                    <span class="badge outline-badge-dark"> Email </span></label>
                                                <input type="text" class="form-control" id="editemail" name="editemail" value="<?= $var['email']; ?>">
                                            </div>
                                            <div class="col">
                                                <label for="editsk">
                                                    <span class="badge outline-badge-dark"> Nomor SK </span></label>
                                                <input type="text" class="form-control" id="editsk" name="editsk" value="<?= $var['sk']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-row mb-4">
                                            <div class="col">
                                                <label for="editberlaku">
                                                    <span class="badge outline-badge-dark"> Tanggal Berlaku </span></label>
                                                <input id="editberlaku" name="editberlaku" class="form-control" type="date" value="<?= $var['tanggal_berlaku']; ?>">
                                            </div>
                                            <div class="col">
                                                <label for="editberakhir">
                                                    <span class="badge outline-badge-dark"> Tanggal Berakhir </span></label>
                                                <input id="editberakhir" name="editberakhir" class="form-control" type="date" value="<?= $var['tanggal_berakhir']; ?>">
                                            </div>
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
                                    <h5 class="modal-title">HAPUS DATA LEMBAGA DESA</h5>
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
                                    <form action="sosekbud-desa/hapuslemdes/<?= $var['id']; ?>" class="form-vertical" method="post">
                                        <ul class="list-group ">
                                            <li class="list-group-item"><strong> Kode Lembaga Desa =</strong> <?= $var['kode_lemdes']; ?></li>
                                            <li class="list-group-item"><strong> Kode Desa =</strong> <?= $var['kode_desa']; ?></li>
                                            <li class="list-group-item"><strong> Nama Lembaga Desa =</strong> <?= $var['nama']; ?></li>
                                            <li class="list-group-item"><strong> Jenis Lembaga Desa =</strong> <?= $var['jenis']; ?></li>
                                            <li class="list-group-item"><strong> Alamat =</strong> <?= $var['alamat']; ?></li>
                                            <li class="list-group-item"><strong> Nomor Telepon =</strong> <?= $var['telp']; ?></li>
                                            <li class="list-group-item"><strong> Email =</strong> <?= $var['email']; ?></li>
                                            <li class="list-group-item"><strong> Nomor SK =</strong> <?= $var['sk']; ?></li>
                                            <li class="list-group-item"><strong> Tanggal Berlaku =</strong> <?= $var['tanggal_berlaku']; ?></li>
                                            <li class="list-group-item"><strong> Tanggal Berakhir =</strong> <?= $var['tanggal_berakhir']; ?></li>
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
        if ('<?= ($validation2->hasError('kodedesa')) ?>') {
            inputpk = $('#inputpk').modal('show');
        } else if ('<?= ($validation2->hasError('kab')) ?>') {
            inputpk = $('#inputpk').modal('show');
        } else if ('<?= ($validation2->hasError('kec')) ?>') {
            inputpk = $('#inputpk').modal('show');
        } else if ('<?= ($validation2->hasError('desa')) ?>') {
            inputpk = $('#inputpk').modal('show');
        } else if ('<?= ($validation2->hasError('luas')) ?>') {
            inputpk = $('#inputpk').modal('show');
        } else {
            inputpk = $('#inputpk').modal('hide');
        }
    </script>
    <script>
        let inputumt;
        if ('<?= ($validation2->hasError('kodelemdes')) ?>') {
            inputumt = $('#inputumt').modal('show');
        } else if ('<?= ($validation2->hasError('kodedesa1')) ?>') {
            inputumt = $('#inputumt').modal('show');
        } else if ('<?= ($validation2->hasError('nama')) ?>') {
            inputumt = $('#inputumt').modal('show');
        } else if ('<?= ($validation2->hasError('jenis')) ?>') {
            inputumt = $('#inputumt').modal('show');
        } else if ('<?= ($validation2->hasError('alamat')) ?>') {
            inputumt = $('#inputumt').modal('show');
        } else if ('<?= ($validation2->hasError('tlp')) ?>') {
            inputumt = $('#inputumt').modal('show');
        } else if ('<?= ($validation2->hasError('email')) ?>') {
            inputumt = $('#inputumt').modal('show');
        } else if ('<?= ($validation2->hasError('sk')) ?>') {
            inputumt = $('#inputumt').modal('show');
        } else if ('<?= ($validation2->hasError('berlaku')) ?>') {
            inputumt = $('#inputumt').modal('show');
        } else if ('<?= ($validation2->hasError('berakhir')) ?>') {
            inputumt = $('#inputumt').modal('show');
        } else {
            inputumt = $('#inputumt').modal('hide');
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