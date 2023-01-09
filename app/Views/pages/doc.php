<?= $this->extend('template/dashboard') ?>
<?= $this->section('content') ?>
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
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
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
                <li class="menu active">
                    <a href="/pages/doc" aria-expanded="true" class="dropdown-toggle">
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

            <div class="helpdesk container">

                <div class="helpdesk layout-spacing">

                    <div class="hd-header-wrapper">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h4 class=""><strong>Documentation</strong></h4>
                                <p class="">A knowledge base for KHDTK web apps</p>

                                <div class="row">
                                    <div class="col-xl-6 col-lg-7 col-md-7 col-sm-11 col-11 mx-auto">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                                        <circle cx="11" cy="11" r="8"></circle>
                                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                                    </svg></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Let's find your question in fast way" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hd-tab-section">
                        <div class="row">
                            <div class="col-md-12 mb-5 mt-5">

                                <div class="accordion" id="hd-statistics">
                                    <div class="card">
                                        <div class="card-header" id="hd-statistics-1">
                                            <div class="mb-0">
                                                <div class=" collapsed" data-toggle="collapse" role="navigation" data-target="#collapse-hd-statistics-1" aria-expanded="true" aria-controls="collapse-hd-statistics-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                                        <line x1="12" y1="17" x2="12" y2="17"></line>
                                                    </svg>
                                                    Welcome to KHDTK web apps
                                                </div>
                                            </div>
                                        </div>

                                        <div id="collapse-hd-statistics-1" class="collapse show" aria-labelledby="hd-statistics-1" data-parent="#hd-statistics">
                                            <div class="card-body">
                                                <p>KHDTK web apps is an Database web based appication for managing zone of KHTD Faculty of forestry, Universitas Gadjah Mada. Its goal is to enable you to manage KHDTK much faster, efficient, and easier than you could if you were writing code from scratch. KHDTK web apps lets you creatively focus on your project by minimizing the amount of writting and calculating data.</p>
                                                <p>Where possible, KHDTK web apps has been kept as flexible as possible, allowing you to work in the way you want, not being forced into working any certain way. The system can have core parts easily extended or completely replaced to make the system work the way you need it to. In short, KHDTK web apps is the malleable system that tries to provide the convenience you need while staying out of the way.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="hd-statistics-2">
                                            <div class="mb-0">
                                                <div class=" collapsed" data-toggle="collapse" role="navigation" data-target="#collapse-hd-statistics-2" aria-expanded="false" aria-controls="collapse-hd-statistics-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                                        <line x1="12" y1="17" x2="12" y2="17"></line>
                                                    </svg>
                                                    Getting Started
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse-hd-statistics-2" class="collapse" aria-labelledby="hd-statistics-2" data-parent="#hd-statistics">
                                            <div class="card-body">
                                                <p>To get the most out of KHDTK web apps, you need to understand how the application is structured, by default, and what you can change to meet the needs of your needs.</p>
                                                <p>1. Default Fuctions</p>
                                                <p> - create data</p>
                                                <p> - read data</p>
                                                <p> - update data</p>
                                                <p> - delete data</p>
                                                <p> - modify web gis data</p>
                                                <p>2. Explain database more desireable</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="hd-statistics-3">
                                            <div class="mb-0">
                                                <div class=" collapsed" data-toggle="collapse" role="navigation" data-target="#collapse-hd-statistics-3" aria-expanded="false" aria-controls="collapse-hd-statistics-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                                        <line x1="12" y1="17" x2="12" y2="17"></line>
                                                    </svg>
                                                    Create Fuction
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse-hd-statistics-3" class="collapse" aria-labelledby="hd-statistics-3" data-parent="#hd-statistics">
                                            <div class="card-body">
                                                <p>Users are able to input data by click button on the top-left on each table database, and if there’re errors when you entering data, the system has its own validation by blocking red the input and there's further notification whenever an error occurs. Most of regular users may cannot create data because of restricted access. Users can create data when they have access, user can get access by contacting webmaster or developer of this system.</p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="hd-performance-1">
                                            <div class="mb-0">
                                                <div class="" data-toggle="collapse" role="navigation" data-target="#collapse-hd-performance-1" aria-expanded="false" aria-controls="collapse-hd-performance-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                                        <line x1="12" y1="17" x2="12" y2="17"></line>
                                                    </svg>
                                                    Read Fuction
                                                </div>
                                            </div>
                                        </div>

                                        <div id="collapse-hd-performance-1" class="collapse" aria-labelledby="hd-performance-1" data-parent="#hd-statistics">
                                            <div class="card-body">
                                                <p>Most user of this system has access for view and read the data. You can access it, by select on right sidebar. And most user can get the data by download it on various form. We provide excel, PDF, CSV, or user can just copy data on each table.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="hd-performance-2">
                                            <div class="mb-0">
                                                <div class=" collapsed" data-toggle="collapse" role="navigation" data-target="#collapse-hd-performance-2" aria-expanded="false" aria-controls="collapse-hd-performance-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                                        <line x1="12" y1="17" x2="12" y2="17"></line>
                                                    </svg>
                                                    Update Fuction
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse-hd-performance-2" class="collapse" aria-labelledby="hd-performance-2" data-parent="#hd-statistics">
                                            <div class="card-body">
                                                <p>All the data that has been entered can be changed as needed, if an error occurs. User can update the data by clicking update icon on last column at desire row on each table. Most of regular users may cannot update data because of restricted access. users can update data when they have access, user can get access by contacting webmaster or developer of this system.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="hd-performance-3">
                                            <div class="mb-0">
                                                <div class=" collapsed" data-toggle="collapse" role="navigation" data-target="#collapse-hd-performance-3" aria-expanded="false" aria-controls="collapse-hd-performance-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                                        <line x1="12" y1="17" x2="12" y2="17"></line>
                                                    </svg>
                                                    Delete Fuction
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse-hd-performance-3" class="collapse" aria-labelledby="hd-performance-3" data-parent="#hd-statistics">
                                            <div class="card-body">
                                                <p>All the data that has been entered can be deleted as needed, but it must be careful because it can delete the data underneath or its child data. User can delete the data by clicking delete icon on last column at desire row on each table. Most of regular users may cannot delete data because of restricted access. users can delete data when they have access, user can get access by contacting webmaster or developer of this system.</p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="hd-reports-1">
                                            <div class="mb-0">
                                                <div class="" data-toggle="collapse" role="navigation" data-target="#collapse-hd-reports-1" aria-expanded="false" aria-controls="collapse-hd-reports-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                                        <line x1="12" y1="17" x2="12" y2="17"></line>
                                                    </svg>
                                                    Web GIS Data
                                                </div>
                                            </div>
                                        </div>

                                        <div id="collapse-hd-reports-1" class="collapse" aria-labelledby="hd-reports-1" data-parent="#hd-statistics">
                                            <div class="card-body">
                                                <p>Web GIS data provide by Faculty of Forestry, Universitas Gadjah Mada. and then, the data can be input inside the system by developer. All tiles and basemap provided by several 3rd party.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="hd-backup-1">
                                            <div class="mb-0">
                                                <div class="" data-toggle="collapse" role="navigation" data-target="#collapse-hd-backup-1" aria-expanded="false" aria-controls="collapse-hd-backup-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                                        <line x1="12" y1="17" x2="12" y2="17"></line>
                                                    </svg>
                                                    Credits
                                                </div>
                                            </div>
                                        </div>

                                        <div id="collapse-hd-backup-1" class="collapse" aria-labelledby="hd-backup-1" data-parent="#hd-statistics">
                                            <div class="card-body">
                                                <p>KHDTK web apps was developed by Enlisters Studio and written with PHP, JavaScript, HTML, CSS, and little bit of JSON and GeoJSON. The framework was written with CodeIgniter, with many of the original class libraries, helpers, and theme borrowed from the HTML-base theme of cork-theme. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?= $this->endSection(); ?>