<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title> <?= $title; ?> </title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('dashboard/assets/img/favicon.ico') ?>" />
    <link href="<?= base_url('dashboard/assets/css/loader.css') ?>" rel="stylesheet" type="text/css" />
    <script src="<?= base_url('dashboard/assets/js/loader.js') ?>"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,600,700" rel="stylesheet">
    <link href="<?= base_url('dashboard/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('dashboard/assets/css/plugins.css') ?>" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="<?= base_url('dashboard/plugins/apex/apexcharts.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('dashboard/assets/css/dashboard/dash_1.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('dashboard/assets/css/dashboard/dash_2.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('dashboard/assets/css/users/user-profile.css') ?>" rel="stylesheet" type="text/css" />
    <script src="<?= base_url('dashboard/plugins/sweetalerts/promise-polyfill.js') ?>"></script>
    <link href="<?= base_url('dashboard/plugins/sweetalerts/sweetalert2.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('dashboard/plugins/sweetalerts/sweetalert.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('dashboard/assets/css/components/custom-sweetalert.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('dashboard/assets/css/pages/faq/faq.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('dashboard/assets/css/pages/faq/faq2.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('dashboard/assets/css/pages/helpdesk.css'); ?>" rel="stylesheet" type="text/css" />
    <script src="<?= base_url('dashboard/plugins/apex/apexcharts.min.js') ?>"></script>
    <script src="<?= base_url('dashboard/assets/js/dashboard/dash_1.js') ?>"></script>
    <script src="<?= base_url('dashboard/assets/js/dashboard/dash_2.js') ?>"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url('dashboard/assets/css/widgets/modules-widgets.css') ?>">
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

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
                            <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Cari...">
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
    <?= $this->renderSection('content'); ?>

    <div class="footer-wrapper">
        <div class="footer-section f-section-1">
            <p class=""><b><?= $footer; ?></b></p>
        </div>
        <div class="footer-section f-section-2">
            <p class=""><?= $credit; ?></p>
        </div>
    </div>
    </div>
    </div>
    <!--  END CONTENT AREA  -->
    </div>

    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="<?= base_url('dashboard/assets/js/libs/jquery-3.1.1.min.js') ?>"></script>
    <script src="<?= base_url('dashboard/bootstrap/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('dashboard/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('dashboard/plugins/perfect-scrollbar/perfect-scrollbar.min.js') ?>"></script>
    <script src="<?= base_url('dashboard/assets/js/app.js') ?>"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="<?= base_url('dashboard/assets/js/custom.js') ?>"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

    <script src="<?= base_url('dashboard/plugins/sweetalerts/sweetalert.js') ?>"></script>
    <script src="<?= base_url('dashboard/plugins/sweetalerts/sweetalert2.min.js'); ?>"></script>
    <script src="<?= base_url('dashboard/assets/js/pages/faq/faq.js'); ?>"></script>
    <script src="<?= base_url('dashboard/assets/js/pages/faq/faq2.js'); ?>"></script>
    <script src="<?= base_url('dashboard/assets/js/pages/helpdesk.js'); ?>"></script>

    <script src="<?= base_url('dashboard/assets/js/widgets/modules-widgets.js'); ?>"></script>

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->


</body>

</html>