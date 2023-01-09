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
                <li class="menu active">
                    <a href="#penataan" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
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
                    <ul class="collapse submenu recent-submenu mini-recent-submenu list-unstyled show" id="penataan" data-parent="#accordionExample">
                        <li class="active">
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
                                Penataan & Pengorganisasian Kawasan</a></li>
                        <li class="active"><a href="javscript:void(0);">
                                Pengorganisasian Kawasan</a></li>
                    </ul>
                </div>
            </div>

            <!-- begin tabel penataan kawasan -->
            <div>
                <div class="seperator-header">
                    <h4 class=""><b>DATA PENATAAN KAWASAN</b></h4>
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
                                        <th>Kode Penataan Kawasan</th>
                                        <th>No SK</th>
                                        <th>Tanggal Berlaku</th>
                                        <th>Kode Rencana Tahunan Kegiatan</th>
                                        <th class="dt-no-sorting">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($penataankawasan as $var) : ?>
                                        <tr>
                                            <td scope="row"> <?= $no++; ?> </td>
                                            <td><?= $var['kode_penataan_kawasan']; ?></td>
                                            <td><?= $var['no_sk']; ?></td>
                                            <td><?= $var['tanggal_berlaku']; ?></td>
                                            <td><?= $var['kode_rencana_tahunan_kegiatan']; ?></td>
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
                    <h4 class=""><b>DATA UNIT MANAJEMEN TERKECIL</b></h4>
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
                                        <th>Kode Penataan Kawasan</th>
                                        <th>Kode UMT</th>
                                        <th>Tipe UMT</th>
                                        <th>UMT</th>
                                        <th>Tanggal Berlaku</th>
                                        <th class="dt-no-sorting">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($umt as $var) : ?>
                                        <tr>
                                            <td scope="row"> <?= $no++; ?> </td>
                                            <td><?= $var['kode_penataan_kawasan']; ?></td>
                                            <td><?= $var['kode_umt']; ?></td>
                                            <td><?= $var['tipe_umt']; ?></td>
                                            <td><?= $var['umt']; ?></td>
                                            <td><?= $var['tanggal_berlaku']; ?></td>
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
                    <h4 class=""><b>DATA ZONASI KAWASAN</b></h4>
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
                                        <th>Kode Penataan Kawasan</th>
                                        <th>Kode Zonasi</th>
                                        <th>Zonasi</th>
                                        <th>SK Pengesahan</th>
                                        <th>Deskripsi</th>
                                        <th>Arahan Land use</th>
                                        <th class="dt-no-sorting">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($zonasi as $var) : ?>
                                        <tr>
                                            <td scope="row"> <?= $no++; ?> </td>
                                            <td><?= $var['kode_penataan_kawasan']; ?></td>
                                            <td><?= $var['kode_zonasi']; ?></td>
                                            <td><?= $var['zonasi']; ?></td>
                                            <td><?= $var['sk']; ?></td>
                                            <td><?= $var['deskripsi']; ?></td>
                                            <td><?= $var['land_use']; ?></td>
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
                    <h4 class=""><b>DATA <i>LAND MANAGEMENT UNITS</i></b></h4>
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
                                        <th>Kode Penataan Kawasan</th>
                                        <th>Kode LMU</th>
                                        <th>LMU</th>
                                        <th>SK Pengesahan</th>
                                        <th>Deskripsi</th>
                                        <th>Altitude (m)</th>
                                        <th>Slope (%)</th>
                                        <th>Jenis Tanah</th>
                                        <th>Penutupan Lahan</th>
                                        <th class="dt-no-sorting">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($lmu as $var) : ?>
                                        <tr>
                                            <td scope="row"> <?= $no++; ?> </td>
                                            <td><?= $var['kode_penataan_kawasan']; ?></td>
                                            <td><?= $var['kode_lmu']; ?></td>
                                            <td><?= $var['lmu']; ?></td>
                                            <td><?= $var['sk']; ?></td>
                                            <td><?= $var['deskripsi']; ?></td>
                                            <td><?= $var['altitude']; ?></td>
                                            <td><?= $var['slope']; ?></td>
                                            <td><?= $var['jenis_tanah']; ?></td>
                                            <td><?= $var['pl']; ?></td>
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

            <!-- begin tabel zonasi lmu -->
            <div>
                <div class="seperator-header">
                    <h4 class=""><b>DATA ZONASI <i>LAND MANAGEMENT UNITS</i></b></h4>
                </div>

                <div>
                    <!-- Input -->
                    <button class="btn btn-outline-info mb-2 mr-2" data-toggle="modal" data-target="#inputzonasilmu"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 -1 30 30" ffill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>INPUT DATA</button>
                </div>

                <div class="row" id="cancel-row">

                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <table id="table-4" class="table table-hover style-3" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No. </th>
                                        <th>Kode Zonasi LMU</th>
                                        <th>Kode LMU</th>
                                        <th>Kode Zonasi</th>
                                        <th>Altitude (m)</th>
                                        <th class="dt-no-sorting">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($zonasilmu as $var4) : ?>
                                        <tr>
                                            <td scope="row"> <?= $no++; ?> </td>
                                            <td><?= $var4['kode_zonasi_lmu']; ?></td>
                                            <td><?= $var4['kode_lmu']; ?></td>
                                            <td><?= $var4['kode_zonasi']; ?></td>
                                            <td><?= $var4['altitude']; ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-outline-dark btn-sm bs-tooltip" title="edit" data-toggle="modal" data-target="#editzonasilmu<?= $var4['id']; ?>">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                                            <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                                                            <polygon points="12 15 17 21 7 21 12 15"></polygon>
                                                        </svg>
                                                    </button>
                                                    <button type="button" class="btn btn-outline-dark btn-sm bs-tooltip" title="hapus" data-toggle="modal" data-target="#hapuszonasilmu<?= $var4['id']; ?>">
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
            <!-- end tabel zonasi lmu -->

            <!-- BEGIN MODAL -->
            <div>
                <!-- modal penaataan kawasan -->
                <div id="inputpk" class="modal animated fadeInDown" role="dialog" tabindex="-1" aria-labelledby="inputpk" aria-hidden="false">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">INPUT DATA PENATAAN KAWASAN</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </button>
                            </div>
                            <form action="organisasi-kawasan/savepk" method="post">
                                <div class="modal-body">
                                    <div class="form-group mb-4">
                                        <label for="kodepk">
                                            <span class="badge outline-badge-dark"> Kode Penataan Kawasan </span></label>
                                        <input type="text" class="form-control <?= ($validation2->hasError('kodepk')) ? 'is-invalid' : ''; ?>" id="kodepk" name="kodepk" value="<?= old('kodepk'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation2->getError('kodepk'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="skpk">
                                            <span class="badge outline-badge-dark"> Nomor Surat Keputusan Penataan Kawasan </span></label>
                                        <input type="text" class="form-control <?= ($validation2->hasError('skpk')) ? 'is-invalid' : ''; ?>" id="skpk" name="skpk" value="<?= old('skpk'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation2->getError('skpk'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="tglskpk">
                                            <span class="badge outline-badge-dark"> Tanggal Berlaku Surat Keputusan Penataan Kawasan </span></label>
                                        <input type="date" class="form-control <?= ($validation2->hasError('tglskpk')) ? 'is-invalid' : ''; ?>" id="tglskpk" name="tglskpk" value="<?= old('tglskpk'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation2->getError('tglskpk'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="kodert">
                                            <span class="badge outline-badge-dark"> Kode Rencana Tahunan Kegiatan </span></label>
                                        <select name="kodert" class="form-control <?= ($validation2->hasError('kodert')) ? 'is-invalid' : ''; ?>" id="kodert" value="<?= old('kodert'); ?>">
                                            <?php foreach ($rtk as $pk) : ?>
                                                <option><?= $pk['kode_rencana_tahunan_kegiatan']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation2->getError('kodert'); ?>
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

                <?php foreach ($penataankawasan as $var) : ?>
                    <div id="editpk<?= $var['id'] ?>" class="modal animated fadeInDown" role="dialog" tabindex="-1" aria-labelledby="editpk" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">UPDATE DATA PENATAAN KAWASAN</h5>
                                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                </div>
                                <form action="organisasi-kawasan/editpk/<?= $var['id']; ?>" method="post" id="form1">
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
                                            <label for="kodepk">
                                                <span class="badge outline-badge-dark"> Nomor Surat Keputusan Penataan Kawasan </span></label>
                                            <input type="text" class="form-control" id="editkodepk" name="editkodepk" value="<?= $var['kode_penataan_kawasan']; ?>">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="editskpk">
                                                <span class="badge outline-badge-dark"> Nomor Surat Keputusan Penataan Kawasan </span></label>
                                            <input type="text" class="form-control" id="editskpk" name="editskpk" value="<?= $var['no_sk']; ?>">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="edittglskpk">
                                                <span class="badge outline-badge-dark"> Tanggal Berlaku Surat Keputusan Penataan Kawasan </span></label>
                                            <input id="edittglskpk" name="edittglskpk" class="form-control" type="date" value="<?= $var['tanggal_berlaku']; ?>">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="editkodert">
                                                <span class="badge outline-badge-dark"> Kode Rencana Tahunan Kegiatan </span></label>
                                            <select class="form-control" id="editkodert" name="editkodert">
                                                <option selected=""><?= $var['kode_rencana_tahunan_kegiatan']; ?></option>
                                                <?php foreach ($rtk as $pk) : ?>
                                                    <option><?= $pk['kode_rencana_tahunan_kegiatan']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
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
                                    <h5 class="modal-title">HAPUS DATA PENATAAN KAWASAN</h5>
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
                                    <form action="organisasi-kawasan/hapuspk/<?= $var['id']; ?>" class="form-vertical" method="post">
                                        <ul class="list-group ">
                                            <li class="list-group-item"><strong> Kode Penataan Kawasan =</strong> <?= $var['kode_penataan_kawasan']; ?></li>
                                            <li class="list-group-item"><strong> No. SK = </strong><?= $var['no_sk']; ?></li>
                                            <li class="list-group-item"><strong> Tanggal Berlaku = </strong><?= $var['tanggal_berlaku']; ?></li>
                                            <li class="list-group-item"><strong> Kode Rencana Tahunan Kegiatan = </strong><?= $var['kode_rencana_tahunan_kegiatan']; ?></li>
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
                                <h5 class="modal-title">INPUT DATA <br>UNIT MANAJEMEN TERKECIL</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </button>
                            </div>
                            <form action="organisasi-kawasan/saveumt" method="post">
                                <div class="modal-body">
                                    <div class="form-group mb-4">
                                        <label for="kodepkumt">
                                            <span class="badge outline-badge-dark"> Kode Penataan Kawasan </span></label>
                                        <select class="form-control <?= ($validation2->hasError('kodepkumt')) ? 'is-invalid' : ''; ?>" id="kodepkumt" name="kodepkumt">
                                            <?php foreach ($penataankawasan as $pk) : ?>
                                                <option><?= $pk['kode_penataan_kawasan']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation2->getError('kodepkumt'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="kodeumt">
                                            <span class="badge outline-badge-dark"> Kode Unit Menejemen Terkecil </span></label>
                                        <input type="text" class="form-control <?= ($validation2->hasError('kodeumt')) ? 'is-invalid' : ''; ?>" id="kodeumt" name="kodeumt" value="<?= old('kodeumt'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation2->getError('kodeumt'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="tipeumt">
                                            <span class="badge outline-badge-dark"> Tipe Unit Menejemen Terkecil </span></label>
                                        <input type="text" class="form-control <?= ($validation2->hasError('tipeumt')) ? 'is-invalid' : ''; ?>" id="tipeumt" name="tipeumt" value="<?= old('tipeumt'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation2->getError('tipeumt'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="umt">
                                            <span class="badge outline-badge-dark"> No. Surat Keputusan Unit Menejemen Terkecil </span></label>
                                        <input type="text" class="form-control <?= ($validation2->hasError('umt')) ? 'is-invalid' : ''; ?>" id="umt" name="umt" value="<?= old('umt'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation2->getError('umt'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="tglumt">
                                            <span class="badge outline-badge-dark"> Tanggal Berlaku Unit Menejemen Terkecil </span></label>
                                        <input id="tglumt" name="tglumt" class="form-control <?= ($validation2->hasError('tglumt')) ? 'is-invalid' : ''; ?>" type="date" value="<?= old('tglumt'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation2->getError('tglumt'); ?>
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

                <?php foreach ($umt as $var) : ?>

                    <div id="editumt<?= $var['id'] ?>" class="modal animated fadeInDown" role="dialog" tabindex="-1" aria-labelledby="editumt" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">UPDATE DATA <br>UNIT MANEJEMEN TERKECIL</h5>
                                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                </div>
                                <form action="organisasi-kawasan/editumt/<?= $var['id']; ?>" method="post">
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
                                            <label for="kodepkumt">
                                                <span class="badge outline-badge-dark"> Kode Penataan Kawasan </span></label>
                                            <select class="form-control" id="kodepkumt" name="kodepkumt">
                                                <option selected=""><?= $var['kode_penataan_kawasan']; ?></option>
                                                <?php foreach ($penataankawasan as $pk) : ?>
                                                    <option><?= $pk['kode_penataan_kawasan']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="kodeumt">
                                                <span class="badge outline-badge-dark"> Kode Unit Menejemen Terkecil </span></label>
                                            <input type="text" class="form-control" id="kodeumt" name="kodeumt" value="<?= $var['kode_umt']; ?>">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="tipeumt">
                                                <span class="badge outline-badge-dark"> Tipe Unit Menejemen Terkecil </span></label>
                                            <input type="text" class="form-control" id="tipeumt" name="tipeumt" value="<?= $var['tipe_umt']; ?>">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="umt">
                                                <span class="badge outline-badge-dark"> No. Surat Keputusan Unit Menejemen Terkecil </span></label>
                                            <input type="text" class="form-control" id="umt" name="umt" value="<?= $var['umt']; ?>">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="tglumt">
                                                <span class="badge outline-badge-dark"> Tanggal Berlaku Unit Menejemen Terkecil </span></label>
                                            <input id="tglumt" name="tglumt" class="form-control" type="date" value="<?= $var['tanggal_berlaku']; ?>">
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
                                    <h5 class="modal-title">HAPUS DATA <br>UNIT MANAJEMEN TERKECIL</h5>
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
                                    <form action="organisasi-kawasan/hapusumt/<?= $var['id']; ?>" class="form-vertical" method="post">
                                        <ul class="list-group ">
                                            <li class="list-group-item"><strong> Kode Penataan Kawasan =</strong> <?= $var['kode_penataan_kawasan']; ?></li>
                                            <li class="list-group-item"><strong> Kode Unit Menejemen Terkecil =</strong> <?= $var['kode_umt']; ?></li>
                                            <li class="list-group-item"><strong> Tipe Unit Menejemen Terkecil = </strong><?= $var['tipe_umt']; ?></li>
                                            <li class="list-group-item"><strong> No. Surat Keputusan UMT = </strong><?= $var['umt']; ?></li>
                                            <li class="list-group-item"><strong> Tanggal Berlaku SK = </strong><?= $var['tanggal_berlaku']; ?></li>
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
                                <h5 class="modal-title">INPUT DATA ZONASI KAWASAN</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </button>
                            </div>
                            <form action="organisasi-kawasan/savezonasi" method="post">
                                <div class="modal-body">
                                    <div class="form-group mb-4">
                                        <label for="kodepkzonasi">
                                            <span class="badge outline-badge-dark"> Kode Penataan Kawasan </span></label>
                                        <select class="form-control <?= ($validation2->hasError('kodepkzonasi')) ? 'is-invalid' : ''; ?>" id="kodepkzonasi" name="kodepkzonasi">
                                            <?php foreach ($penataankawasan as $pk) : ?>
                                                <option><?= $pk['kode_penataan_kawasan']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation2->getError('kodezonasi'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="kodezonasi">
                                            <span class="badge outline-badge-dark"> Kode Zonasi </span></label>
                                        <input type="text" class="form-control <?= ($validation2->hasError('kodezonasi')) ? 'is-invalid' : ''; ?>" id="kodezonasi" name="kodezonasi" value="<?= old('kodezonasi'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation2->getError('kodezonasi'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="zonasi">
                                            <span class="badge outline-badge-dark"> Zonasi </span></label>
                                        <input type="text" class="form-control <?= ($validation2->hasError('zonasi')) ? 'is-invalid' : ''; ?>" id="zonasi" name="zonasi" value="<?= old('zonasi'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation2->getError('zonasi'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="skzonasi">
                                            <span class="badge outline-badge-dark"> No. Surat Keputusan Zonasi </span></label>
                                        <input type="text" class="form-control <?= ($validation2->hasError('skzonasi')) ? 'is-invalid' : ''; ?>" id="skzonasi" name="skzonasi" value="<?= old('skzonasi'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation2->getError('skzonasi'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="deszonasi">
                                            <span class="badge outline-badge-dark"> Deskripsi Zonasi </span></label>
                                        <input type="text" class="form-control <?= ($validation2->hasError('deszonasi')) ? 'is-invalid' : ''; ?>" id="deszonasi" name="deszonasi" value="<?= old('deszonasi'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation2->getError('deszonasi'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="landuse">
                                            <span class="badge outline-badge-dark"> Arahan Penggunaan Lahan </span></label>
                                        <input type="text" class="form-control <?= ($validation2->hasError('landuse')) ? 'is-invalid' : ''; ?>" id="landuse" name="landuse" value="<?= old('landuse'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation2->getError('landuse'); ?>
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

                <?php foreach ($zonasi as $var) : ?>

                    <div id="editzonasi<?= $var['id'] ?>" class="modal animated fadeInDown" role="dialog" tabindex="-1" aria-labelledby="editzonasi" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">UPDATE DATA ZONASI KAWASAN</h5>
                                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                </div>
                                <form action="organisasi-kawasan/editzonasi/<?= $var['id']; ?>" method="post">
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
                                            <label for="kodepkzonasi">
                                                <span class="badge outline-badge-dark"> Kode Penataan Kawasan </span></label>
                                            <select class="form-control" id="kodepkzonasi" name="kodepkzonasi">
                                                <option selected=""><?= $var['kode_penataan_kawasan']; ?></option>
                                                <?php foreach ($penataankawasan as $pk) : ?>
                                                    <option value="<?= $pk['kode_penataan_kawasan']; ?>"><?= $pk['kode_penataan_kawasan']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="kodezonasi">
                                                <span class="badge outline-badge-dark"> Kode Zonasi </span></label>
                                            <input type="text" class="form-control" id="kodezonasi" name="kodezonasi" value="<?= $var['kode_zonasi']; ?>">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="zonasi">
                                                <span class="badge outline-badge-dark"> Zonasi </span></label>
                                            <input type="text" class="form-control" id="zonasi" name="zonasi" value="<?= $var['zonasi']; ?>">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="skzonasi">
                                                <span class="badge outline-badge-dark"> No. Surat Keputusan Zonasi </span></label>
                                            <input type="text" class="form-control" id="skzonasi" name="skzonasi" value="<?= $var['sk']; ?>">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="deszonasi">
                                                <span class="badge outline-badge-dark"> Deskripsi Zonasi </span></label>
                                            <input type="text" class="form-control" id="deszonasi" name="deszonasi" value="<?= $var['deskripsi']; ?>">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="landuse">
                                                <span class="badge outline-badge-dark"> Arahan Penggunaan Lahan </span></label>
                                            <input type="text" class="form-control" id="landuse" name="landuse" value="<?= $var['land_use']; ?>">
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
                                    <h5 class="modal-title">HAPUS DATA ZONASI KAWASAN</h5>
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
                                    <form action="organisasi-kawasan/hapuszonasi/<?= $var['id']; ?>" class="form-vertical" method="post">
                                        <ul class="list-group ">
                                            <li class="list-group-item"><strong> Kode Penataan Kawasan =</strong> <?= $var['kode_penataan_kawasan']; ?></li>
                                            <li class="list-group-item"><strong> Kode Zonasi =</strong> <?= $var['kode_zonasi']; ?></li>
                                            <li class="list-group-item"><strong> Zonasi = </strong><?= $var['zonasi']; ?></li>
                                            <li class="list-group-item"><strong> No. Surat Keputusan Zonasi = </strong><?= $var['sk']; ?></li>
                                            <li class="list-group-item"><strong> Deskripsi = </strong><?= $var['deskripsi']; ?></li>
                                            <li class="list-group-item"><strong> Arahan Land Use = </strong><?= $var['land_use']; ?></li>
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
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">INPUT DATA <i>LAND MANAGEMENT UNITS</i></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </button>
                            </div>
                            <form action="organisasi-kawasan/savelmu" method="post">
                                <div class="modal-body">
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="kodepklmu">
                                                <span class="badge outline-badge-dark"> Kode Penataan Kawasan </span></label>
                                            <select class="form-control <?= ($validation2->hasError('kodepklmu')) ? 'is-invalid' : ''; ?>" id="kodepklmu" name="kodepklmu" value="<?= old('kodepklmu'); ?>">
                                                <?php foreach ($penataankawasan as $pk) : ?>
                                                    <option><?= $pk['kode_penataan_kawasan']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('kodepklmu'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="kodelmu">
                                                <span class="badge outline-badge-dark"> Kode <i>Land Management Units</i></span></label>
                                            <input type="text" class="form-control <?= ($validation2->hasError('kodelmu')) ? 'is-invalid' : ''; ?>" id="kodelmu" name="kodelmu" value="<?= old('kodelmu'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('kodelmu'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="lmu">
                                                <span class="badge outline-badge-dark"> <i>Land Management Units</i> </span></label>
                                            <input type="text" class="form-control <?= ($validation2->hasError('lmu')) ? 'is-invalid' : ''; ?>" id="lmu" name="lmu" value="<?= old('lmu'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('lmu'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="sklmu">
                                                <span class="badge outline-badge-dark"> No. Surat Keputusan LMU </span></label>
                                            <input type="text" class="form-control <?= ($validation2->hasError('sklmu')) ? 'is-invalid' : ''; ?>" id="sklmu" name="sklmu" value="<?= old('sklmu'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('sklmu'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="deslmu">
                                                <span class="badge outline-badge-dark"> Deskripsi <i>Land Management Units</i> </span></label>
                                            <input type="text" class="form-control <?= ($validation2->hasError('deslmu')) ? 'is-invalid' : ''; ?>" id="deslmu" name="deslmu" value="<?= old('deslmu'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('deslmu'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="altitude">
                                                <span class="badge outline-badge-dark"> Ketinggian Kawasan </span></label>
                                            <input type="text" class="form-control <?= ($validation2->hasError('altitude')) ? 'is-invalid' : ''; ?>" id="altitude" name="altitude" value="<?= old('altitude'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('altitude'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="slope">
                                                <span class="badge outline-badge-dark"> Kelerengan Kawasan </span></label>
                                            <input type="text" class="form-control <?= ($validation2->hasError('slope')) ? 'is-invalid' : ''; ?>" id="slope" name="slope" value="<?= old('slope'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('slope'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="jenistanah">
                                                <span class="badge outline-badge-dark"> Jenis Tanah </span></label>
                                            <input type="text" class="form-control <?= ($validation2->hasError('jenistanah')) ? 'is-invalid' : ''; ?>" id="jenistanah" name="jenistanah" value="<?= old('jenistanah'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation2->getError('jenistanah'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="pl">
                                            <span class="badge outline-badge-dark"> Arahan Penggunaan Lahan </span></label>
                                        <input type="text" class="form-control <?= ($validation2->hasError('pl')) ? 'is-invalid' : ''; ?>" id="pl" name="pl" value="<?= old('pl'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation2->getError('pl'); ?>
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

                <?php foreach ($lmu as $var) : ?>
                    <div id="editlmu<?= $var['id']; ?>" class="modal animated fadeInDown" role="dialog" tabindex="-1" aria-labelledby="editlmu" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">UPDATE DATA <br><i>LAND MANAGEMENT UNITS</i></h5>
                                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                </div>
                                <form action="organisasi-kawasan/editlmu/<?= $var['id']; ?>" method="post">
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
                                            <div class="form-group col-md-6">
                                                <label for="kodepklmu">
                                                    <span class="badge outline-badge-dark"> Kode Penataan Kawasan </span></label>
                                                <select class="form-control" id="kodepklmu" name="kodepklmu">
                                                    <option selected=""><?= $var['kode_penataan_kawasan']; ?></option>
                                                    <?php foreach ($penataankawasan as $pk) : ?>
                                                        <option><?= $pk['kode_penataan_kawasan']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="kodelmu">
                                                    <span class="badge outline-badge-dark"> Kode LMU </span></label>
                                                <input type="text" class="form-control" id="kodelmu" name="kodelmu" value="<?= $var['kode_lmu']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-row mb-4">
                                            <div class="form-group col-md-6">
                                                <label for="lmu">
                                                    <span class="badge outline-badge-dark"> LMU </span></label>
                                                <input type="text" class="form-control" id="lmu" name="lmu" value="<?= $var['lmu']; ?>">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="sklmu">
                                                    <span class="badge outline-badge-dark"> No. Surat Keputusan LMU </span></label>
                                                <input type="text" class="form-control" id="sklmu" name="sklmu" value="<?= $var['sk']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-row mb-4">
                                            <div class="form-group col-md-6">
                                                <label for="deslmu">
                                                    <span class="badge outline-badge-dark"> Deskripsi LMU </span></label>
                                                <input type="text" class="form-control" id="deslmu" name="deslmu" value="<?= $var['deskripsi']; ?>">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="altitude">
                                                    <span class="badge outline-badge-dark"> <i>Altitude</i> </span></label>
                                                <input type="text" class="form-control" id="altitude" name="altitude" value="<?= $var['altitude']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-row mb-4">
                                            <div class="form-group col-md-6">
                                                <label for="slope">
                                                    <span class="badge outline-badge-dark"> <i>Slope</i> </span></label>
                                                <input type="text" class="form-control" id="slope" name="slope" value="<?= $var['slope']; ?>">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="jenistanah">
                                                    <span class="badge outline-badge-dark"> Jenis Tanah </span></label>
                                                <input type="text" class="form-control" id="jenistanah" name="jenistanah" value="<?= $var['jenis_tanah']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="pl">
                                                <span class="badge outline-badge-dark"> Penutupan Lahan </span></label>
                                            <input type="text" class="form-control" id="pl" name="pl" value="<?= $var['pl']; ?>">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Tutup</button>
                                        <button type="submit" class="btn btn-info" id="editlmu">Perbarui</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div id="hapuslmu<?= $var['id'] ?>" class="modal animated fadeInDown" role="dialog" tabindex="-1" aria-labelledby="hapuslmu" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">HAPUS DATA <i>LAND MANAGEMENT UNITS</i></h5>
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
                                    <form action="organisasi-kawasan/hapuslmu/<?= $var['id']; ?>" class="form-vertical" method="post">
                                        <ul class="list-group ">
                                            <li class="list-group-item"><strong> Kode Penataan Kawasan =</strong> <?= $var['kode_penataan_kawasan']; ?></li>
                                            <li class="list-group-item"><strong> Kode Zonasi =</strong> <?= $var['kode_lmu']; ?></li>
                                            <li class="list-group-item"><strong> Zonasi = </strong><?= $var['lmu']; ?></li>
                                            <li class="list-group-item"><strong> No. Surat Keputusan Zonasi = </strong><?= $var['sk']; ?></li>
                                            <li class="list-group-item"><strong> Deskripsi = </strong><?= $var['deskripsi']; ?></li>
                                            <li class="list-group-item"><strong> <i>Altitude</i> = </strong><?= $var['altitude']; ?></li>
                                            <li class="list-group-item"><strong> <i>Slope</i> = </strong><?= $var['slope']; ?></li>
                                            <li class="list-group-item"><strong> Jenis Tanah = </strong><?= $var['jenis_tanah']; ?></li>
                                            <li class="list-group-item"><strong> Penutupan Lahan = </strong><?= $var['pl']; ?></li>
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

                <!-- modal zonasilmu -->
                <div id="inputzonasilmu" class="modal animated fadeInDown" role="dialog" tabindex="-1" aria-labelledby="inputzonasilmu" aria-hidden="false">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">INPUT DATA ZONASI<br><i>LAND MANAGEMENT UNITS</i></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </button>
                            </div>
                            <form action="organisasi-kawasan/savezonasilmu" method="post">
                                <div class="modal-body">
                                    <div class="form-group mb-4">
                                        <label for="kodezonasilmu">
                                            <span class="badge outline-badge-dark"> Kode Zonasi <i>Land Management Units</i></span></label>
                                        <input type="text" class="form-control <?= ($validation2->hasError('kodezonasilmu')) ? 'is-invalid' : ''; ?>" value="<?= old('kodezonasilmu') ?>" id="kodezonasilmu" name="kodezonasilmu">
                                        <div class="invalid-feedback">
                                            <?= $validation2->getError('kodezonasilmu'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="kodezonlmu-lmu">
                                            <span class="badge outline-badge-dark"> Kode LMU </span></label>
                                        <select class="form-control <?= ($validation2->hasError('kodezonlmu-lmu')) ? 'is-invalid' : ''; ?>" value="<?= old('kodezonlmu-lmu') ?>" id="kodezonlmu-lmu" name="kodezonlmu-lmu">
                                            <?php foreach ($lmu as $var) : ?>
                                                <option><?= $var['kode_lmu']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation2->getError('kodezonlmu-lmu'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="kodezonlmu-zonasi">
                                            <span class="badge outline-badge-dark"> Kode Zonasi </span></label>
                                        <select class="form-control <?= ($validation2->hasError('kodezonlmu-zonasi')) ? 'is-invalid' : ''; ?>" value="<?= old('kodezonlmu-zonasi') ?>" id="kodezonlmu-zonasi" name="kodezonlmu-zonasi">
                                            <?php foreach ($zonasi as $var) : ?>
                                                <option value="<?= $var['kode_zonasi']; ?>"><?= $var['kode_zonasi']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation2->getError('kodezonlmu-zonasi'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="altitudezonasilmu">
                                            <span class="badge outline-badge-dark"> Ketinggian Kawasan </span></label>
                                        <input type="text" class="form-control <?= ($validation2->hasError('altitudezonasilmu')) ? 'is-invalid' : ''; ?>" value="<?= old('altitudezonasilmu') ?>" id="altitudezonasilmu" name="altitudezonasilmu">
                                        <div class="invalid-feedback">
                                            <?= $validation2->getError('altitudezonasilmu'); ?>
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
                <?php foreach ($zonasilmu as $var4) : ?>
                    <div id="editzonasilmu<?= $var4['id'] ?>" class="modal animated fadeInDown" role="dialog" tabindex="-1" aria-labelledby="editzonasilmu" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">UPDATE DATA ZONASI<br><i>LAND MANAGEMENT UNITS</i></h5>
                                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                </div>
                                <form action="organisasi-kawasan/editzonasilmu/<?= $var4['id']; ?>" method="post">
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
                                            <label for="kodezonasilmu">
                                                <span class="badge outline-badge-dark"> Kode Zonasi <i>Land Management Units</i></span></label>
                                            <input type="text" class="form-control" id="kodezonasilmu" name="kodezonasilmu" value="<?= $var4['kode_zonasi_lmu']; ?>">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="kodezonlmu-lmu">
                                                <span class="badge outline-badge-dark"> Kode LMU </span></label>
                                            <select class="form-control" id="kodezonlmu-lmu" name="kodezonlmu-lmu" value="<?= $var4['kode_lmu']; ?>">
                                                <option selected=""><?= $var4['kode_lmu']; ?></option>
                                                <?php foreach ($lmu as $var) : ?>
                                                    <option value="<?= $var['kode_lmu']; ?>"><?= $var['kode_lmu']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="kodezonlmu-zonasi">
                                                <span class="badge outline-badge-dark"> Kode Zonasi </span></label>
                                            <select class="form-control" id="kodezonlmu-zonasi" name="kodezonlmu-zonasi" value="<?= $var4['kode_zonasi']; ?>">
                                                <option selected=""><?= $var4['kode_zonasi']; ?></option>
                                                <?php foreach ($zonasi as $var) : ?>
                                                    <option value="<?= $var['kode_zonasi']; ?>"><?= $var['kode_zonasi']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="altitudezonasilmu">
                                                <span class="badge outline-badge-dark"> Ketinggian Kawasan </span></label>
                                            <input type="text" class="form-control" id="altitudezonasilmu" name="altitudezonasilmu" value="<?= $var4['altitude']; ?>">
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Tutup</button>
                                            <button type="submit" class="btn btn-info" id="editzonasilmu">Perbarui</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div id="hapuszonasilmu<?= $var4['id'] ?>" class="modal animated fadeInDown" role="dialog" tabindex="-1" aria-labelledby="hapuszonasilmu" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">HAPUS DATA ZONASI<i>LAND MANAGEMENT UNITS</i></h5>
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
                                    <form action="organisasi-kawasan/hapuszonasilmu/<?= $var4['id']; ?>" class="form-vertical" method="post">
                                        <ul class="list-group ">
                                            <li class="list-group-item"><strong> Kode Zonasi LMU =</strong> <?= $var4['kode_zonasi_lmu']; ?></li>
                                            <li class="list-group-item"><strong> Kode LMU =</strong> <?= $var4['kode_lmu']; ?></li>
                                            <li class="list-group-item"><strong> Kode Zonasi = </strong><?= $var4['kode_zonasi']; ?></li>
                                            <li class="list-group-item"><strong> <i>Altitude</i> = </strong><?= $var4['altitude']; ?></li>
                                        </ul>
                                        <div class="form-group">
                                            <input type="hidden" value="DELETE" name="_method">
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>Batal</button>
                                            <button type="submit" class="btn btn-danger" id="hapuszonasilmu">Hapus</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- end modal zonasi lmu -->
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
        if ('<?= ($validation2->hasError('kodepk')) ?>') {
            inputpk = $('#inputpk').modal('show');
        } else if ('<?= ($validation2->hasError('skpk')) ?>') {
            inputpk = $('#inputpk').modal('show');
        } else if ('<?= ($validation2->hasError('tglskpk')) ?>') {
            inputpk = $('#inputpk').modal('show');
        } else if ('<?= ($validation2->hasError('kodert')) ?>') {
            inputpk = $('#inputpk').modal('show');
        } else {
            inputpk = $('#inputpk').modal('hide');
        }
    </script>
    <script>
        let inputumt;
        if ('<?= ($validation2->hasError('kodepkumt')) ?>') {
            inputumt = $('#inputumt').modal('show');
        } else if ('<?= ($validation2->hasError('kodeumt')) ?>') {
            inputumt = $('#inputumt').modal('show');
        } else if ('<?= ($validation2->hasError('tipeumt')) ?>') {
            inputumt = $('#inputumt').modal('show');
        } else if ('<?= ($validation2->hasError('umt')) ?>') {
            inputumt = $('#inputumt').modal('show');
        } else if ('<?= ($validation2->hasError('tglumt')) ?>') {
            inputumt = $('#inputumt').modal('show');
        } else {
            inputumt = $('#inputumt').modal('hide');
        }
    </script>
    <script>
        let inputzonasi;
        if ('<?= ($validation2->hasError('kodepkzonasi')) ?>') {
            inputzonasi = $('#inputzonasi').modal('show');
        } else if ('<?= ($validation2->hasError('kodezonasi')) ?>') {
            inputzonasi = $('#inputzonasi').modal('show');
        } else if ('<?= ($validation2->hasError('zonasi')) ?>') {
            inputzonasi = $('#inputzonasi').modal('show');
        } else if ('<?= ($validation2->hasError('deszonasi')) ?>') {
            inputzonasi = $('#inputzonasi').modal('show');
        } else if ('<?= ($validation2->hasError('landuse')) ?>') {
            inputzonasi = $('#inputzonasi').modal('show');
        } else {
            inputzonasi = $('#inputzonasi').modal('hide');
        }
    </script>
    <script>
        let inputlmu;
        if ('<?= ($validation2->hasError('kodepklmu')) ?>') {
            inputlmu = $('#inputlmu').modal('show');
        } else if ('<?= ($validation2->hasError('kodelmu')) ?>') {
            inputlmu = $('#inputlmu').modal('show');
        } else if ('<?= ($validation2->hasError('lmu')) ?>') {
            inputlmu = $('#inputlmu').modal('show');
        } else if ('<?= ($validation2->hasError('sk')) ?>') {
            inputlmu = $('#inputlmu').modal('show');
        } else if ('<?= ($validation2->hasError('deslmu')) ?>') {
            inputlmu = $('#inputlmu').modal('show');
        } else if ('<?= ($validation2->hasError('altitude')) ?>') {
            inputlmu = $('#inputlmu').modal('show');
        } else if ('<?= ($validation2->hasError('slope')) ?>') {
            inputlmu = $('#inputlmu').modal('show');
        } else if ('<?= ($validation2->hasError('jenistanah')) ?>') {
            inputlmu = $('#inputlmu').modal('show');
        } else if ('<?= ($validation2->hasError('pl')) ?>') {
            inputlmu = $('#inputlmu').modal('show');
        } else {
            inputlmu = $('#inputlmu').modal('hide');
        }
    </script>
    <script>
        let inputzonasilmu;
        if ('<?= ($validation2->hasError('kodezonasilmu')) ?>') {
            inputzonasilmu = $('#inputzonasilmu').modal('show');
        } else if ('<?= ($validation2->hasError('kodezonlmu-lmu')) ?>') {
            inputzonasilmu = $('#inputzonasilmu').modal('show');
        } else if ('<?= ($validation2->hasError('kodezonlmu-zonasi')) ?>') {
            inputzonasilmu = $('#inputzonasilmu').modal('show');
        } else if ('<?= ($validation2->hasError('altitudezonasilmu')) ?>') {
            inputzonasilmu = $('#inputzonasilmu').modal('show');
        } else {
            inputzonasilmu = $('#inputzonasilmu').modal('hide');
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