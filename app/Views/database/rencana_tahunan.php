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
                <li class="menu active">
                    <a href="#renstra" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
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
                    <ul class="collapse recent-submenu mini-recent-submenu submenu list-unstyled show" id="renstra" data-parent="#accordionExample">
                        <li>
                            <a href="/database/rencana-strategis"> Rencana Strategis </a>
                        </li>
                        <li class="active">
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
                                Rencana Pengelolaan</a></li>
                        <li class="active"><a href="javscript:void(0);">
                                Rencana Tahunan</a></li>
                    </ul>
                </div>
            </div>

            <!-- begin tabel penataan kawasan -->
            <div>
                <div class="seperator-header">
                    <h4 class=""><b>DATA RENCANA TAHUNAN</b></h4>
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
                                        <th>Kode RENSTRA</th>
                                        <th>Kode Rencana Tahunan</th>
                                        <th>No. SK Rencana Tahunan</th>
                                        <th>Tanggal Mulai</th>
                                        <th>Tanggal Berakhir</th>
                                        <th>Tanggal Pengesahan</th>
                                        <th>Pengesah</th>
                                        <th>Deskripsi</th>
                                        <th class="dt-no-sorting">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($rt as $var) : ?>
                                        <tr>
                                            <td scope="row"> <?= $no++; ?> </td>
                                            <td><?= $var['kode_renstra']; ?></td>
                                            <td><?= $var['kode_rencana_tahunan']; ?></td>
                                            <td><?= $var['no_sk_rencana_tahunan']; ?></td>
                                            <td><?= $var['tanggal_berlaku']; ?></td>
                                            <td><?= $var['tanggal_berakhir']; ?></td>
                                            <td><?= $var['disahkan_tanggal']; ?></td>
                                            <td><?= $var['pengesah']; ?></td>
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
                    <h4 class=""><b>DATA TUJUAN RENCANA TAHUNAN </b></h4>
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
                                        <th>Kode Rencana Tahunan</th>
                                        <th>Kode Tujuan RENSTRA</th>
                                        <th>Kode Tujuan Rencana Tahunan</th>
                                        <th>Tujuan</th>
                                        <th>Deskripsi</th>
                                        <th class="dt-no-sorting">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($rttujuan as $var) : ?>
                                        <tr>
                                            <td scope="row"> <?= $no++; ?> </td>
                                            <td><?= $var['kode_rencana_tahunan']; ?></td>
                                            <td><?= $var['kode_renstra_tujuan']; ?></td>
                                            <td><?= $var['kode_rencana_tahunan_tujuan']; ?></td>
                                            <td><?= $var['tujuan']; ?></td>
                                            <td><?= $var['deskripsi']; ?></td>
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
            <!-- end tabel UMT -->

            <!-- begin tabel zonasi -->
            <div>
                <div class="seperator-header">
                    <h4 class=""><b>DATA SASARAN RENCANA TAHUNAN</b></h4>
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
                                        <th>Kode Sasaran Rencana Tahunan</th>
                                        <th>Kode Sasaran RENSTRA</th>
                                        <th>Kode Tujuan Rencana Tahunan</th>
                                        <th>Sasaran</th>
                                        <th>Satuan</th>
                                        <th>Volume</th>
                                        <th>Deskripsi</th>
                                        <th class="dt-no-sorting">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($rttarget as $var) : ?>
                                        <tr>
                                            <td scope="row"> <?= $no++; ?> </td>
                                            <td><?= $var['kode_rencana_tahunan_target']; ?></td>
                                            <td><?= $var['kode_renstra_target']; ?></td>
                                            <td><?= $var['kode_rencana_tahunan_tujuan']; ?></td>
                                            <td><?= $var['sasaran']; ?></td>
                                            <td><?= $var['satuan']; ?></td>
                                            <td><?= $var['volume']; ?></td>
                                            <td><?= $var['deskripsi']; ?></td>
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
            <!-- begin tabel LMU -->
            <div>
                <div class="seperator-header">
                    <h4 class=""><b>DATA RENCANA KEGIATAN TAHUNAN</b></h4>
                </div>

                <div>
                    <!-- Input -->
                    <button class="btn btn-outline-info mb-2 mr-2" data-toggle="modal" data-target="#inputlmu"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 -1 30 30" ffill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>INPUT DATA</button>
                </div>

                <div class="row" id="cancel-row">
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <table id="table-3" class="table table-hover style-3" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No. </th>
                                        <th>Kode Sasaran Rencana Tahunan</th>
                                        <th>Kode Rencana Kegiatan Tahunan</th>
                                        <th>Kegiatan</th>
                                        <th>Deskripsi</th>
                                        <th class="dt-no-sorting">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($rtk as $var) : ?>
                                        <tr>
                                            <td scope="row"> <?= $no++; ?> </td>
                                            <td><?= $var['kode_rencana_tahunan_target']; ?></td>
                                            <td><?= $var['kode_rencana_tahunan_kegiatan']; ?></td>
                                            <td><?= $var['kegiatan']; ?></td>
                                            <td><?= $var['deskripsi']; ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-outline-dark btn-sm bs-tooltip" title="edit" data-toggle="modal" data-target="#editlmu<?= $var['id']; ?>">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                                            <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                                                            <polygon points="12 15 17 21 7 21 12 15"></polygon>
                                                        </svg>
                                                    </button>
                                                    <button type="button" class="btn btn-outline-dark btn-sm bs-tooltip" title="hapus" data-toggle="modal" data-target="#hapuslmu<?= $var['id']; ?>">
                                                        <svg xmlns=" http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
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
            <!-- end tabel LMU -->

            <!-- BEGIN MODAL -->
            <div>
                <!-- modal penaataan kawasan -->
                <div id="inputpk" class="modal animated fadeInDown" role="dialog" tabindex="-1" aria-labelledby="inputpk" aria-hidden="false">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">INPUT DATA RENCANA TAHUNAN</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </button>
                            </div>
                            <form action="rencana-tahunan/savert" method="post">
                                <div class="modal-body">
                                    <div class="form-group mb-4">
                                        <label for="koderenstra">
                                            <span class="badge outline-badge-dark"> Kode RENSTRA </span></label>
                                        <select class="form-control <?= ($validation1->hasError('koderenstra')) ? 'is-invalid' : ''; ?>" id="koderenstra" name="koderenstra">
                                            <?php foreach ($renstra as $pk) : ?>
                                                <option><?= $pk['kode_renstra']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation1->getError('koderenstra'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="kodert">
                                            <span class="badge outline-badge-dark"> Kode Rencana Tahunan</span></label>
                                        <input type="text" class="form-control <?= ($validation1->hasError('kodert')) ? 'is-invalid' : ''; ?>" id="kodert" name="kodert" value="<?= old('kodert'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation1->getError('kodert'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="skrt">
                                            <span class="badge outline-badge-dark"> No. SK Rencana Tahunan</span></label>
                                        <input type="text" class="form-control <?= ($validation1->hasError('skrt')) ? 'is-invalid' : ''; ?>" id="skrt" name="skrt" value="<?= old('skrt'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation1->getError('skrt'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="mulairt">
                                            <span class="badge outline-badge-dark">Tanggal Mulai</span></label>
                                        <input type="date" name="mulairt" class="form-control <?= ($validation1->hasError('mulairt')) ? 'is-invalid' : ''; ?>" id="mulairt" value="<?= old('mulairt'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation1->getError('mulairt'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="akhirrt">
                                            <span class="badge outline-badge-dark"> Tanggal Berakhir</span></label>
                                        <input type="date" name="akhirrt" class="form-control <?= ($validation1->hasError('akhirrt')) ? 'is-invalid' : ''; ?>" id="akhirrt" value="<?= old('akhirrt'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation1->getError('akhirrt'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="sahrt">
                                            <span class="badge outline-badge-dark">Tanggal Pengesahan</span></label>
                                        <input type="date" name="sahrt" class="form-control <?= ($validation1->hasError('sahrt')) ? 'is-invalid' : ''; ?>" id="sahrt" value="<?= old('sahrt'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation1->getError('sahrt'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="pengesahrt">
                                            <span class="badge outline-badge-dark">Pengesah</span></label>
                                        <input type="text" name="pengesahrt" class="form-control <?= ($validation1->hasError('pengesahrt')) ? 'is-invalid' : ''; ?>" id="pengesahrt" value="<?= old('pengesahrt'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation1->getError('pengesahrt'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="desrt">
                                            <span class="badge outline-badge-dark">Deskripsi</span></label>
                                        <input type="text" name="desrt" class="form-control <?= ($validation1->hasError('desrt')) ? 'is-invalid' : ''; ?>" id="desrt" value="<?= old('desrt'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation1->getError('desrt'); ?>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Tutup</button>
                                        <button type="submit" class="btn btn-success" id="simpanpk">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <?php foreach ($rt as $var) : ?>
                    <div id="editpk<?= $var['id'] ?>" class="modal animated fadeInDown" role="dialog" tabindex="-1" aria-labelledby="editpk" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">UPDATE DATA RENCANA STRATEGIS</h5>
                                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                </div>
                                <form action="rencana-tahunan/editrt/<?= $var['id']; ?>" method="post" id="form1">
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
                                            <label for="editkoderenstra">
                                                <span class="badge outline-badge-dark"> Kode RENSTRA </span></label>
                                            <select class="form-control <?= ($validation1->hasError('editkoderenstra')) ? 'is-invalid' : ''; ?>" id="editkoderenstra" name="editkoderenstra">
                                                <option selected=""><?= $var['kode_renstra']; ?></option>
                                                <?php foreach ($renstra as $pk) : ?>
                                                    <option><?= $pk['kode_renstra']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="editkodert">
                                                <span class="badge outline-badge-dark">Kode Rencana Tahunan</span></label>
                                            <input type="text" class="form-control" id="editkodert" name="editkodert" value="<?= $var['kode_rencana_tahunan']; ?>">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="editskrt">
                                                <span class="badge outline-badge-dark">SK Rencana Tahunan</span></label>
                                            <input type="text" class="form-control" id="editskrt" name="editskrt" value="<?= $var['no_sk_rencana_tahunan']; ?>">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="editmulairt">
                                                <span class="badge outline-badge-dark">Tanggal Mulai</span></label>
                                            <input id="editmulairt" name="editmulairt" class="form-control" type="date" value="<?= $var['tanggal_berlaku']; ?>">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="editakhirrt">
                                                <span class="badge outline-badge-dark">Tanggal Berakhir</span></label>
                                            <input id="editakhirrt" name="editakhirrt" class="form-control" type="date" value="<?= $var['tanggal_berakhir']; ?>">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="editsahrt">
                                                <span class="badge outline-badge-dark">Tanggal Pengesahan</span></label>
                                            <input id="editsahrt" name="editsahrt" class="form-control" type="date" value="<?= $var['disahkan_tanggal']; ?>">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="editpengesahrt">
                                                <span class="badge outline-badge-dark"> Pengesah</span></label>
                                            <input type="text" name="editpengesahrt" class="form-control" id="editpengesahrt" value="<?= $var['pengesah']; ?>">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="editdesrt">
                                                <span class="badge outline-badge-dark"> Deskripsi</span></label>
                                            <input type="text" name="editdesrt" class="form-control" id="editdesrt" value="<?= $var['deskripsi']; ?>">
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
                                    <h5 class="modal-title">HAPUS DATA RENCANA TAHUNAN</h5>
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
                                    <form action="rencana-tahunan/hapusrt/<?= $var['id']; ?>" class="form-vertical" method="post">
                                        <ul class="list-group ">
                                            <li class="list-group-item"><strong> Kode RENSTRA =</strong> <?= $var['kode_renstra']; ?></li>
                                            <li class="list-group-item"><strong> Kode Rencana Tahunan =</strong> <?= $var['kode_rencana_tahunan']; ?></li>
                                            <li class="list-group-item"><strong> No. SK Rencana Tahunan = </strong><?= $var['no_sk_rencana_tahunan']; ?></li>
                                            <li class="list-group-item"><strong> Tanggal Mulai = </strong><?= $var['tanggal_berlaku']; ?></li>
                                            <li class="list-group-item"><strong> Tanggal Berakhir = </strong><?= $var['tanggal_berakhir']; ?></li>
                                            <li class="list-group-item"><strong> Tanggal Pengesahan = </strong><?= $var['disahkan_tanggal']; ?></li>
                                            <li class="list-group-item"><strong> Pengesah = </strong><?= $var['pengesah']; ?></li>
                                            <li class="list-group-item"><strong> Deskripsi = </strong><?= $var['deskripsi']; ?></li>
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
                                <h5 class="modal-title">INPUT DATA <br>TUJUAN RENCANA TAHUNAN</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </button>
                            </div>
                            <form action="rencana-tahunan/saverttujuan" method="post">
                                <div class="modal-body">
                                    <div class="form-group mb-4">
                                        <label for="kodert1">
                                            <span class="badge outline-badge-dark">Kode Rencana Tahunan</span></label>
                                        <select class="form-control <?= ($validation1->hasError('kodert1')) ? 'is-invalid' : ''; ?>" id="kodert1" name="kodert1">
                                            <?php foreach ($rt as $pk) : ?>
                                                <option><?= $pk['kode_rencana_tahunan']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation1->getError('kodert1'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="koderenstratu">
                                            <span class="badge outline-badge-dark">Kode Tujuan RENSTRA</span></label>
                                        <select class="form-control <?= ($validation1->hasError('koderenstratu')) ? 'is-invalid' : ''; ?>" id="koderenstratu" name="koderenstratu">
                                            <?php foreach ($renstratujuan as $pk) : ?>
                                                <option><?= $pk['kode_renstra_tujuan']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation1->getError('koderenstratu'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="koderttujuan">
                                            <span class="badge outline-badge-dark">Kode Tujuan Rencana Tahunan</span></label>
                                        <input type="text" class="form-control <?= ($validation1->hasError('koderttujuan')) ? 'is-invalid' : ''; ?>" id="koderttujuan" name="koderttujuan" value="<?= old('koderttujuan'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation1->getError('koderttujuan'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="tujuan">
                                            <span class="badge outline-badge-dark">Tujuan</span></label>
                                        <input type="text" class="form-control <?= ($validation1->hasError('tujuan')) ? 'is-invalid' : ''; ?>" id="tujuan" name="tujuan" value="<?= old('tujuan'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation1->getError('tujuan'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="desrttujuan">
                                            <span class="badge outline-badge-dark">Deskripsi</span></label>
                                        <input type="text" class="form-control <?= ($validation1->hasError('desrttujuan')) ? 'is-invalid' : ''; ?>" id="desrttujuan" name="desrttujuan" value="<?= old('desrttujuan'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation1->getError('desrttujuan'); ?>
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

                <?php foreach ($rttujuan as $var) : ?>

                    <div id="editumt<?= $var['id'] ?>" class="modal animated fadeInDown" role="dialog" tabindex="-1" aria-labelledby="editumt" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">UPDATE DATA <br>TUJUAN RENCANA TAHUNAN</h5>
                                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                </div>
                                <form action="rencana-tahunan/editrttujuan/<?= $var['id']; ?>" method="post">
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
                                            <label for="editkodert1">
                                                <span class="badge outline-badge-dark">Kode Rencana Tahunan</span></label>
                                            <select class="form-control" id="editkodert1" name="editkodert1">
                                                <option selected=""><?= $var['kode_rencana_tahunan']; ?></option>
                                                <?php foreach ($rt as $pk) : ?>
                                                    <option><?= $pk['kode_rencana_tahunan']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="editkoderenstratu">
                                                <span class="badge outline-badge-dark">Kode Tujuan RENSTRA</span></label>
                                            <select class="form-control" id="editkoderenstratu" name="editkoderenstratu">
                                                <option selected=""><?= $var['kode_renstra_tujuan']; ?></option>
                                                <?php foreach ($renstratujuan as $pk) : ?>
                                                    <option><?= $pk['kode_renstra_tujuan']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="editkoderttujuan">
                                                <span class="badge outline-badge-dark">Kode Tujuan Rencana Tahunan</span></label>
                                            <input type="text" class="form-control" id="editkoderttujuan" name="editkoderttujuan" value="<?= $var['kode_rencana_tahunan_tujuan']; ?>">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="edittujuan">
                                                <span class="badge outline-badge-dark"> Tujuan </span></label>
                                            <input type="text" class="form-control" id="edittujuan" name="edittujuan" value="<?= $var['tujuan']; ?>">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="editdesrttujuan">
                                                <span class="badge outline-badge-dark"> Deskripsi </span></label>
                                            <input id="editdesrttujuan" name="editdesrttujuan" class="form-control" type="text" value="<?= $var['deskripsi']; ?>">
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
                                    <h5 class="modal-title">HAPUS DATA <br>TUJUAN RENCANA TAHUNAN</h5>
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
                                    <form action="rencana-tahunan/hapusrttujuan/<?= $var['id']; ?>" class="form-vertical" method="post">
                                        <ul class="list-group ">
                                            <li class="list-group-item"><strong> Kode Rencana Tahunan =</strong> <?= $var['kode_rencana_tahunan']; ?></li>
                                            <li class="list-group-item"><strong> Kode Tujuan RENSTRA =</strong> <?= $var['kode_renstra_tujuan']; ?></li>
                                            <li class="list-group-item"><strong> Kode Tujuan Rencana Tahunan =</strong> <?= $var['kode_rencana_tahunan_tujuan']; ?></li>
                                            <li class="list-group-item"><strong> Tujuan = </strong><?= $var['tujuan']; ?></li>
                                            <li class="list-group-item"><strong> Deskripsi = </strong><?= $var['deskripsi']; ?></li>
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
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">INPUT DATA <br>SASARAN RENCANA TAHUNAN</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </button>
                            </div>
                            <form action="rencana-tahunan/saverttarget" method="post">
                                <div class="modal-body">
                                    <div class="form-group mb-4">
                                        <label for="koderttarget">
                                            <span class="badge outline-badge-dark">Kode Sasaran Rencana Tahunan</span></label>
                                        <input type="text" class="form-control <?= ($validation1->hasError('koderttarget')) ? 'is-invalid' : ''; ?>" id="koderttarget" name="koderttarget" value="<?= old('koderttarget'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation1->getError('koderttarget'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="koderenstrata">
                                            <span class="badge outline-badge-dark">Kode Sasaran RENSTRA</span></label>
                                        <select class="form-control <?= ($validation1->hasError('koderenstrata')) ? 'is-invalid' : ''; ?>" id="koderenstrata" name="koderenstrata">
                                            <?php foreach ($renstratarget as $pk) : ?>
                                                <option><?= $pk['kode_renstra_target']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation1->getError('koderenstrata'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="koderttujuan1">
                                            <span class="badge outline-badge-dark">Kode Tujuan Rencana Tahunan</span></label>
                                        <select class="form-control <?= ($validation1->hasError('koderttujuan1')) ? 'is-invalid' : ''; ?>" id="koderttujuan1" name="koderttujuan1">
                                            <?php foreach ($rttujuan as $pk) : ?>
                                                <option><?= $pk['kode_rencana_tahunan_tujuan']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation1->getError('koderttujuan1'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="sasaran">
                                            <span class="badge outline-badge-dark"> Sasaran </span></label>
                                        <input type="text" class="form-control <?= ($validation1->hasError('sasaran')) ? 'is-invalid' : ''; ?>" id="sasaran" name="sasaran" value="<?= old('sasaran'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation1->getError('sasaran'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="satuan">
                                            <span class="badge outline-badge-dark"> Satuan </span></label>
                                        <input type="text" class="form-control <?= ($validation1->hasError('satuan')) ? 'is-invalid' : ''; ?>" id="satuan" name="satuan" value="<?= old('satuan'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation1->getError('satuan'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="volume">
                                            <span class="badge outline-badge-dark"> Volume </span></label>
                                        <input type="text" class="form-control <?= ($validation1->hasError('volume')) ? 'is-invalid' : ''; ?>" id="volume" name="volume" value="<?= old('volume'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation1->getError('volume'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="desrttarget">
                                            <span class="badge outline-badge-dark"> Deskripsi </span></label>
                                        <input type="text" class="form-control <?= ($validation1->hasError('desrttarget')) ? 'is-invalid' : ''; ?>" id="desrttarget" name="desrttarget" value="<?= old('desrttarget'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation1->getError('desrttarget'); ?>
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

                <?php foreach ($rttarget as $var) : ?>

                    <div id="editzonasi<?= $var['id'] ?>" class="modal animated fadeInDown" role="dialog" tabindex="-1" aria-labelledby="editzonasi" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">UPDATE DATA <br>SASARAN RENCANA TAHUNAN</h5>
                                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                </div>
                                <form action="rencana-tahunan/editrttarget/<?= $var['id']; ?>" method="post">
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
                                            <label for="editkoderttarget">
                                                <span class="badge outline-badge-dark">Kode Sasaran Rencana Tahunan</span></label>
                                            <input type="text" class="form-control" id="editkoderttarget" name="editkoderttarget" value="<?= $var['kode_renstra_target']; ?>">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="editkoderenstrata">
                                                <span class="badge outline-badge-dark">Kode Sasaran RENSTRA</span></label>
                                            <select class="form-control" id="editkoderenstrata" name="editkoderenstrata">
                                                <option selected=""><?= $var['kode_renstra_target']; ?></option>
                                                <?php foreach ($renstratarget as $pk) : ?>
                                                    <option value="<?= $pk['kode_renstra_target']; ?>"><?= $pk['kode_renstra_target']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="editkoderttujuan1">
                                                <span class="badge outline-badge-dark">Kode Tujuan Rencana Tahunan</span></label>
                                            <select class="form-control" id="editkoderttujuan1" name="editkoderttujuan1">
                                                <option selected=""><?= $var['kode_rencana_tahunan_tujuan']; ?></option>
                                                <?php foreach ($rttujuan as $pk) : ?>
                                                    <option value="<?= $pk['kode_rencana_tahunan_tujuan']; ?>"><?= $pk['kode_rencana_tahunan_tujuan']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="editsasaran">
                                                <span class="badge outline-badge-dark"> Sasaran </span></label>
                                            <input type="text" class="form-control" id="editsasaran" name="editsasaran" value="<?= $var['sasaran']; ?>">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="editsatuan">
                                                <span class="badge outline-badge-dark"> Satuan </span></label>
                                            <input type="text" class="form-control" id="editsatuan" name="editsatuan" value="<?= $var['satuan']; ?>">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="editvolume">
                                                <span class="badge outline-badge-dark"> Volume </span></label>
                                            <input type="text" class="form-control" id="editvolume" name="editvolume" value="<?= $var['volume']; ?>">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="editdesrttarget">
                                                <span class="badge outline-badge-dark"> Deskripsi </span></label>
                                            <input type="text" class="form-control" id="editdesrttarget" name="editdesrttarget" value="<?= $var['deskripsi']; ?>">
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
                                    <h5 class="modal-title">HAPUS DATA <br>SASARAN RENCANA STRATEGIS</h5>
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
                                    <form action="rencana-tahunan/hapusrttarget/<?= $var['id']; ?>" class="form-vertical" method="post">
                                        <ul class="list-group ">
                                            <li class="list-group-item"><strong> Kode Sasaran Rencana Tahunan =</strong> <?= $var['kode_rencana_tahunan_target']; ?></li>
                                            <li class="list-group-item"><strong> Kode Sasaran RENSTRA =</strong> <?= $var['kode_renstra_target']; ?></li>
                                            <li class="list-group-item"><strong> Kode Tujuan Rencana Tahunan =</strong> <?= $var['kode_rencana_tahunan_tujuan']; ?></li>
                                            <li class="list-group-item"><strong> Sasaran = </strong><?= $var['sasaran']; ?></li>
                                            <li class="list-group-item"><strong> Satuan = </strong><?= $var['satuan']; ?></li>
                                            <li class="list-group-item"><strong> Volume = </strong><?= $var['volume']; ?></li>
                                            <li class="list-group-item"><strong> Deskripsi = </strong><?= $var['deskripsi']; ?></li>
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

                <!-- modal lmu -->

                <div id="inputlmu" class="modal animated fadeInDown" role="dialog" tabindex="-1" aria-labelledby="inputlmu" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">INPUT DATA RENCANA KEGIATAN TAHUNAN</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </button>
                            </div>
                            <form action="rencana-tahunan/savertk" method="post">
                                <div class="modal-body">
                                    <div class="form-group mb-4">
                                        <label for="koderttarget1">
                                            <span class="badge outline-badge-dark"> Kode Sasaran Rencana Tahunan </span></label>
                                        <select class="form-control <?= ($validation1->hasError('koderttarget1')) ? 'is-invalid' : ''; ?>" id="koderttarget1" name="koderttarget1" value="<?= old('koderttarget1'); ?>">
                                            <?php foreach ($rttarget as $pk) : ?>
                                                <option><?= $pk['kode_rencana_tahunan_target']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation1->getError('koderttarget1'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="kodertk">
                                            <span class="badge outline-badge-dark"> Kode Rencana Tahunan Kegiatan</span></label>
                                        <input type="text" class="form-control <?= ($validation1->hasError('kodertk')) ? 'is-invalid' : ''; ?>" id="kodertk" name="kodertk" value="<?= old('kodertk'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation1->getError('kodertk'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="kegiatan">
                                            <span class="badge outline-badge-dark"> Kegiatan </span></label>
                                        <input type="text" class="form-control <?= ($validation1->hasError('kegiatan')) ? 'is-invalid' : ''; ?>" id="kegiatan" name="kegiatan" value="<?= old('kegiatan'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation1->getError('kegiatan'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="desrtk">
                                            <span class="badge outline-badge-dark"> Deskripsi </span></label>
                                        <input type="text" class="form-control <?= ($validation1->hasError('desrtk')) ? 'is-invalid' : ''; ?>" id="desrtk" name="desrtk" value="<?= old('desrtk'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation1->getError('desrtk'); ?>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Tutup</button>
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <?php foreach ($rtk as $var) : ?>
                    <div id="editlmu<?= $var['id']; ?>" class="modal animated fadeInDown" role="dialog" tabindex="-1" aria-labelledby="editlmu" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">UPDATE DATA <br>RENCANA KEGIATAN TAHUNAN</h5>
                                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                </div>
                                <form action="rencana-tahunan/editrtk/<?= $var['id']; ?>" method="post">
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
                                            <label for="editkoderttarget1">
                                                <span class="badge outline-badge-dark"> Kode Sasaran Rencana Tahunan </span></label>
                                            <select class="form-control" id="editkoderttarget1" name="editkoderttarget1">
                                                <option selected=""><?= $var['kode_rencana_tahunan_target']; ?></option>
                                                <?php foreach ($rttarget as $pk) : ?>
                                                    <option><?= $pk['kode_rencana_tahunan_target']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="editkodertk">
                                                <span class="badge outline-badge-dark"> Kode Rencana Tahunan Kegiatan </span></label>
                                            <input type="text" class="form-control" id="editkodertk" name="editkodertk" value="<?= $var['kode_rencana_tahunan_kegiatan']; ?>">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="editkegiatan">
                                                <span class="badge outline-badge-dark"> Kegiatan </span></label>
                                            <input type="text" class="form-control" id="editkegiatan" name="editkegiatan" value="<?= $var['kegiatan']; ?>">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="editdesrtk">
                                                <span class="badge outline-badge-dark"> Deskripsi </span></label>
                                            <input type="text" class="form-control" id="editdesrtk" name="editdesrtk" value="<?= $var['deskripsi']; ?>">
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Tutup</button>
                                            <button type="submit" class="btn btn-info" id="editlmu">Perbarui</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div id="hapuslmu<?= $var['id'] ?>" class="modal animated fadeInDown" role="dialog" tabindex="-1" aria-labelledby="hapuslmu" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">HAPUS DATA RENCANA KEGIATAN TAHUNAN</h5>
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
                                    <form action="rencana-tahunan/hapuslmu/<?= $var['id']; ?>" class="form-vertical" method="post">
                                        <ul class="list-group ">
                                            <li class="list-group-item"><strong> Kode Sasaran Rencana Tahunan =</strong> <?= $var['kode_rencana_tahunan_target']; ?></li>
                                            <li class="list-group-item"><strong> Kode Rencana Tahunan Kegiatan =</strong> <?= $var['kode_rencana_tahunan_kegiatan']; ?></li>
                                            <li class="list-group-item"><strong> Kegiatan = </strong><?= $var['kegiatan']; ?></li>
                                            <li class="list-group-item"><strong> Deskripsi = </strong><?= $var['deskripsi']; ?></li>
                                        </ul>
                                        <div class="form-group mb-4">
                                            <input type="hidden" value="DELETE" name="_method">
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>Batal</button>
                                            <button type="submit" class="btn btn-danger" id="hapuslmu">Hapus</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- end modal lmu -->
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
        if ('<?= ($validation1->hasError('koderenstra')) ?>') {
            inputpk = $('#inputpk').modal('show');
        } else if ('<?= ($validation1->hasError('kodert')) ?>') {
            inputpk = $('#inputpk').modal('show');
        } else if ('<?= ($validation1->hasError('skrt')) ?>') {
            inputpk = $('#inputpk').modal('show');
        } else if ('<?= ($validation1->hasError('mulairt')) ?>') {
            inputpk = $('#inputpk').modal('show');
        } else if ('<?= ($validation1->hasError('akhirrt')) ?>') {
            inputpk = $('#inputpk').modal('show');
        } else if ('<?= ($validation1->hasError('sahrt')) ?>') {
            inputpk = $('#inputpk').modal('show');
        } else if ('<?= ($validation1->hasError('pengesahrt')) ?>') {
            inputpk = $('#inputpk').modal('show');
        } else if ('<?= ($validation1->hasError('desrt')) ?>') {
            inputpk = $('#inputpk').modal('show');
        } else {
            inputpk = $('#inputpk').modal('hide');
        }
    </script>
    <script>
        let inputumt;
        if ('<?= ($validation1->hasError('kodert1')) ?>') {
            inputumt = $('#inputumt').modal('show');
        } else if ('<?= ($validation1->hasError('koderenstratu')) ?>') {
            inputumt = $('#inputumt').modal('show');
        } else if ('<?= ($validation1->hasError('koderttujuan')) ?>') {
            inputumt = $('#inputumt').modal('show');
        } else if ('<?= ($validation1->hasError('tujuan')) ?>') {
            inputumt = $('#inputumt').modal('show');
        } else if ('<?= ($validation1->hasError('desrttujuan')) ?>') {
            inputumt = $('#inputumt').modal('show');
        } else {
            inputumt = $('#inputumt').modal('hide');
        }
    </script>
    <script>
        let inputzonasi;
        if ('<?= ($validation1->hasError('koderttarget')) ?>') {
            inputzonasi = $('#inputzonasi').modal('show');
        } else if ('<?= ($validation1->hasError('koderenstrata')) ?>') {
            inputzonasi = $('#inputzonasi').modal('show');
        } else if ('<?= ($validation1->hasError('koderttujuan1')) ?>') {
            inputzonasi = $('#inputzonasi').modal('show');
        } else if ('<?= ($validation1->hasError('sasaran')) ?>') {
            inputzonasi = $('#inputzonasi').modal('show');
        } else if ('<?= ($validation1->hasError('satuan')) ?>') {
            inputzonasi = $('#inputzonasi').modal('show');
        } else if ('<?= ($validation1->hasError('volume')) ?>') {
            inputzonasi = $('#inputzonasi').modal('show');
        } else if ('<?= ($validation1->hasError('desrttarget')) ?>') {
            inputzonasi = $('#inputzonasi').modal('show');
        } else {
            inputzonasi = $('#inputzonasi').modal('hide');
        }
    </script>
    <script>
        let inputlmu;
        if ('<?= ($validation1->hasError('koderttarget1')) ?>') {
            inputlmu = $('#inputlmu').modal('show');
        } else if ('<?= ($validation1->hasError('kodertk')) ?>') {
            inputlmu = $('#inputlmu').modal('show');
        } else if ('<?= ($validation1->hasError('kegiatan')) ?>') {
            inputlmu = $('#inputlmu').modal('show');
        } else if ('<?= ($validation1->hasError('desrtk')) ?>') {
            inputlmu = $('#inputlmu').modal('show');
        } else {
            inputlmu = $('#inputlmu').modal('hide');
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