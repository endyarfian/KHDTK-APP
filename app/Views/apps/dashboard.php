<?= $this->extend('template/dashboard'); ?>
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

                <li class="menu active">
                    <a href="/apps/dashboard" aria-expanded="true" class="dropdown-toggle">
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

            <div class="row layout-top-spacing">

                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-one">
                        <div class="widget-heading">
                            <h6 class="">Statistics</h6>

                            <div class="task-action">
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="pendingTask" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="pendingTask" style="will-change: transform;">
                                        <a class="dropdown-item" href="javascript:void(0);">View</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="w-chart">

                            <div class="w-chart-section total-visits-content">
                                <div class="w-detail">
                                    <p class="w-title">Total Visits</p>
                                    <p class="w-stats">423,964</p>
                                </div>
                                <div class="w-chart-render-one">
                                    <div id="total-users"></div>
                                </div>
                            </div>


                            <div class="w-chart-section paid-visits-content">
                                <div class="w-detail">
                                    <p class="w-title">Paid Visits</p>
                                    <p class="w-stats">7,929</p>
                                </div>
                                <div class="w-chart-render-one">
                                    <div id="paid-visits"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-card-four">
                        <div class="widget-content">
                            <div class="w-header">
                                <div class="w-info">
                                    <h6 class="value">Expenses</h6>
                                </div>
                                <div class="task-action">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="pendingTask" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="19" cy="12" r="1"></circle>
                                                <circle cx="5" cy="12" r="1"></circle>
                                            </svg>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="pendingTask" style="will-change: transform;">
                                            <a class="dropdown-item" href="javascript:void(0);">This Week</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-content">

                                <div class="w-info">
                                    <p class="value">$ 45,141 <span>this week</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up">
                                            <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                            <polyline points="17 6 23 6 23 12"></polyline>
                                        </svg></p>
                                </div>

                            </div>

                            <div class="w-progress-stats">
                                <div class="progress">
                                    <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <div class="">
                                    <div class="w-icon">
                                        <p>57%</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-account-invoice-two">
                        <div class="widget-content">
                            <div class="account-box">
                                <div class="info">
                                    <div class="inv-title">
                                        <h5 class="">Total Balance</h5>
                                    </div>
                                    <div class="inv-balance-info">

                                        <p class="inv-balance">$ 41,741.42</p>

                                        <span class="inv-stats balance-credited">+ 2453</span>

                                    </div>
                                </div>
                                <div class="acc-action">
                                    <div class="">
                                        <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                            </svg></a>
                                        <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card">
                                                <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                                <line x1="1" y1="10" x2="23" y2="10"></line>
                                            </svg></a>
                                    </div>
                                    <a href="javascript:void(0);">Upgrade</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-chart-three">
                        <div class="widget-heading">
                            <div class="">
                                <h5 class="">Unique Visitors</h5>
                            </div>

                            <div class="dropdown ">
                                <a class="dropdown-toggle" href="#" role="button" id="uniqueVisitors" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="19" cy="12" r="1"></circle>
                                        <circle cx="5" cy="12" r="1"></circle>
                                    </svg>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="uniqueVisitors">
                                    <a class="dropdown-item" href="javascript:void(0);">View</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Update</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                </div>
                            </div>
                        </div>

                        <div class="widget-content">
                            <div id="uniqueVisits"></div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-activity-five">

                        <div class="widget-heading">
                            <h5 class="">Activity Log</h5>

                            <div class="task-action">
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="pendingTask" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="pendingTask" style="will-change: transform;">
                                        <a class="dropdown-item" href="javascript:void(0);">View All</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Mark as Read</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget-content">

                            <div class="w-shadow-top"></div>

                            <div class="mt-container mx-auto">
                                <div class="timeline-line">

                                    <div class="item-timeline timeline-new">
                                        <div class="t-dot">
                                            <div class="t-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                                </svg></div>
                                        </div>
                                        <div class="t-content">
                                            <div class="t-uppercontent">
                                                <h5>New project created : <a href="javscript:void(0);"><span>[Cork Admin Template]</span></a></h5>
                                            </div>
                                            <p>27 Feb, 2020</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline timeline-new">
                                        <div class="t-dot">
                                            <div class="t-success"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                                    <polyline points="22,6 12,13 2,6"></polyline>
                                                </svg></div>
                                        </div>
                                        <div class="t-content">
                                            <div class="t-uppercontent">
                                                <h5>Mail sent to <a href="javascript:void(0);">HR</a> and <a href="javascript:void(0);">Admin</a></h5>
                                            </div>
                                            <p>28 Feb, 2020</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline timeline-new">
                                        <div class="t-dot">
                                            <div class="t-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                </svg></div>
                                        </div>
                                        <div class="t-content">
                                            <div class="t-uppercontent">
                                                <h5>Server Logs Updated</h5>
                                            </div>
                                            <p>27 Feb, 2020</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline timeline-new">
                                        <div class="t-dot">
                                            <div class="t-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                </svg></div>
                                        </div>
                                        <div class="t-content">
                                            <div class="t-uppercontent">
                                                <h5>Task Completed : <a href="javscript:void(0);"><span>[Backup Files EOD]</span></a></h5>
                                            </div>
                                            <p>01 Mar, 2020</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline timeline-new">
                                        <div class="t-dot">
                                            <div class="t-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file">
                                                    <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                                    <polyline points="13 2 13 9 20 9"></polyline>
                                                </svg></div>
                                        </div>
                                        <div class="t-content">
                                            <div class="t-uppercontent">
                                                <h5>Documents Submitted from <a href="javascript:void(0);">Sara</a></h5>
                                                <span class=""></span>
                                            </div>
                                            <p>10 Mar, 2020</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline timeline-new">
                                        <div class="t-dot">
                                            <div class="t-dark"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server">
                                                    <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                                                    <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                                                    <line x1="6" y1="6" x2="6" y2="6"></line>
                                                    <line x1="6" y1="18" x2="6" y2="18"></line>
                                                </svg></div>
                                        </div>
                                        <div class="t-content">
                                            <div class="t-uppercontent">
                                                <h5>Server rebooted successfully</h5>
                                                <span class=""></span>
                                            </div>
                                            <p>06 Apr, 2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-shadow-bottom"></div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                    <div class="widget-four">
                        <div class="widget-heading">
                            <h5 class="">Visitors by Browser</h5>
                        </div>
                        <div class="widget-content">
                            <div class="vistorsBrowser">
                                <div class="browser-list">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chrome">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <circle cx="12" cy="12" r="4"></circle>
                                            <line x1="21.17" y1="8" x2="12" y2="8"></line>
                                            <line x1="3.95" y1="6.06" x2="8.54" y2="14"></line>
                                            <line x1="10.88" y1="21.94" x2="15.46" y2="14"></line>
                                        </svg>
                                    </div>
                                    <div class="w-browser-details">
                                        <div class="w-browser-info">
                                            <h6>Chrome</h6>
                                            <p class="browser-count">65%</p>
                                        </div>
                                        <div class="w-browser-stats">
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-primary" role="progressbar" style="width: 65%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="browser-list">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-compass">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon>
                                        </svg>
                                    </div>
                                    <div class="w-browser-details">

                                        <div class="w-browser-info">
                                            <h6>Safari</h6>
                                            <p class="browser-count">25%</p>
                                        </div>

                                        <div class="w-browser-stats">
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 35%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="browser-list">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <line x1="2" y1="12" x2="22" y2="12"></line>
                                            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                                        </svg>
                                    </div>
                                    <div class="w-browser-details">

                                        <div class="w-browser-info">
                                            <h6>Others</h6>
                                            <p class="browser-count">15%</p>
                                        </div>

                                        <div class="w-browser-stats">
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="row widget-statistic">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                            <div class="widget widget-one_hybrid widget-followers">
                                <div class="widget-heading">
                                    <div class="w-title">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="9" cy="7" r="4"></circle>
                                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                            </svg>
                                        </div>
                                        <div class="">
                                            <p class="w-value">31.6K</p>
                                            <h5 class="">Followers</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content">
                                    <div class="w-chart">
                                        <div id="hybrid_followers"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                            <div class="widget widget-one_hybrid widget-referral">
                                <div class="widget-heading">
                                    <div class="w-title">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link">
                                                <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                                                <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                                            </svg>
                                        </div>
                                        <div class="">
                                            <p class="w-value">1,900</p>
                                            <h5 class="">Referral</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content">
                                    <div class="w-chart">
                                        <div id="hybrid_followers1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                            <div class="widget widget-one_hybrid widget-engagement">
                                <div class="widget-heading">
                                    <div class="w-title">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle">
                                                <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                                            </svg>
                                        </div>
                                        <div class="">
                                            <p class="w-value">18.2%</p>
                                            <h5 class="">Engagement</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content">
                                    <div class="w-chart">
                                        <div id="hybrid_followers3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-card-one">
                        <div class="widget-content">

                            <div class="media">
                                <div class="w-img">
                                    <img src="<?= base_url('dashboard/assets/img/90x90.jpg') ?>" alt="avatar">
                                </div>
                                <div class="media-body">
                                    <h6>Jimmy Turner</h6>
                                    <p class="meta-date-time">Monday, Nov 18</p>
                                </div>
                            </div>

                            <p>"Duis aute irure dolor" in reprehenderit in voluptate velit esse cillum "dolore eu fugiat" nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>

                            <div class="w-action">
                                <div class="card-like">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up">
                                        <path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path>
                                    </svg>
                                    <span>551 Likes</span>
                                </div>

                                <div class="read-more">
                                    <a href="javascript:void(0);">Read More <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-right">
                                            <polyline points="13 17 18 12 13 7"></polyline>
                                            <polyline points="6 17 11 12 6 7"></polyline>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-card-two">
                        <div class="widget-content">

                            <div class="media">
                                <div class="w-img">
                                    <img src="<?= base_url('dashboard/assets/img/90x90.jpg') ?>" alt="avatar">
                                </div>
                                <div class="media-body">
                                    <h6>Dev Summit - New York</h6>
                                    <p class="meta-date-time">Bronx, NY</p>
                                </div>
                            </div>

                            <div class="card-bottom-section">
                                <h5>4 Members Going</h5>
                                <div class="img-group">
                                    <img src="<?= base_url('dashboard/assets/img/90x90.jpg') ?>" alt="avatar">
                                    <img src="<?= base_url('dashboard/assets/img/90x90.jpg') ?>" alt="avatar">
                                    <img src="<?= base_url('dashboard/assets/img/90x90.jpg') ?>" alt="avatar">
                                    <img src="<?= base_url('dashboard/assets/img/90x90.jpg') ?>" alt="avatar">
                                </div>
                                <a href="javascript:void(0);" class="btn">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-five">

                        <div class="widget-heading">

                            <a href="javascript:void(0)" class="task-info">

                                <div class="usr-avatar">
                                    <span>FD</span>
                                </div>

                                <div class="w-title">

                                    <h5>Figma Design</h5>
                                    <span>Design Reset</span>

                                </div>

                            </a>

                            <div class="task-action">
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="pendingTask" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="pendingTask" style="will-change: transform;">
                                        <a class="dropdown-item" href="javascript:void(0);">View Project</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit Project</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Mark as Done</a>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="widget-content">

                            <p>Doloribus nisi vel suscipit modi, optio ex repudiandae voluptatibus officiis commodi. Nesciunt quas aut neque incidunt!</p>

                            <div class="progress-data">

                                <div class="progress-info">
                                    <div class="task-count"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square">
                                            <polyline points="9 11 12 14 22 4"></polyline>
                                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                        </svg>
                                        <p>5 Tasks</p>
                                    </div>
                                    <div class="progress-stats">
                                        <p>86.2%</p>
                                    </div>
                                </div>

                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 65%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                            </div>

                            <div class="meta-info">

                                <div class="due-time">
                                    <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline points="12 6 12 12 16 14"></polyline>
                                        </svg> 3 Days Left</p>
                                </div>


                                <div class="avatar--group">

                                    <div class="avatar translateY-axis more-group">
                                        <span class="avatar-title">+6</span>
                                    </div>
                                    <div class="avatar translateY-axis">
                                        <img alt="avatar" src="<?= base_url('dashboard/assets/img/90x90.jpg') ?>" />
                                    </div>
                                    <div class="avatar translateY-axis">
                                        <img alt="avatar" src="<?= base_url('dashboard/assets/img/90x90.jpg') ?>" />
                                    </div>
                                    <div class="avatar translateY-axis">
                                        <img alt="avatar" src="<?= base_url('dashboard/assets/img/90x90.jpg') ?>" />
                                    </div>

                                </div>

                            </div>


                        </div>

                    </div>

                </div>

            </div>

            <!-- END MAIN CONTAINER -->
            <?= $this->endSection(); ?>