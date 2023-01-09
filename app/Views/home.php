<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sistem Informasi Pengelolaan KHDTK UGM">

    <!-- ========== Page Title ========== -->
    <title>KHDTK APPS - Sistem Informasi Pengelolaan KHDTK UGM</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="<?= base_url('front_page/assets/img/favicon.png') ?>" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="<?= base_url('front_page/assets/css/bootstrap.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('front_page/assets/css/font-awesome.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('front_page/assets/css/flaticon-set.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('front_page/assets/css/magnific-popup.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('front_page/assets/css/owl.carousel.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('front_page/assets/css/owl.theme.default.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('front_page/assets/css/animate.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('front_page/assets/css/bootsnav.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('front_page/assets/css/style.css') ?>" rel="stylesheet">
    <link href="<?= base_url('front_page/assets/css/responsive.css') ?>" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="front_page/assets/js/html5/html5shiv.min.js"></script>
      <script src="front_page/assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,600,700" rel="stylesheet">

</head>

<body>

    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!-- Header 
    ============================================= -->
    <header id="home">
        <div class="container">
            <div class="row">
                <!-- Start Navigation -->
                <nav id="mainNav" class="navbar navbar-default navbar-fixed white bootsnav on no-full nav-box no-background">

                    <div class="container">
                        <!-- Start Atribute Navigation -->
                        <div class="attr-nav">
                            <ul>
                                <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
                            </ul>
                        </div>
                        <!-- End Atribute Navigation -->

                        <!-- Start Header Navigation -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand" href="index.php"><img src="<?= base_url('front_page/assets/img/logo.png') ?>" class="logo" alt="Logo"></a>
                        </div>
                        <!-- End Header Navigation -->

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="navbar-menu">
                            <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                                <li>

                                    <a class="smooth-menu" href="<?= base_url('/register'); ?>">DAFTAR</a>

                                </li>
                                <li>
                                    <a class="smooth-menu" href="<?= base_url('/apps/dashboard'); ?>">MASUK</a>
                                </li>
                                <!-- Modal -->
                                <div class="modal fade login-modal" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">

                                            <div class="modal-header" id="loginModalLabel">
                                                <h4 class="modal-title">Login</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                                    </svg></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="mt-0">
                                                    <div class="form-group">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                            <circle cx="12" cy="7" r="4"></circle>
                                                        </svg>
                                                        <input type="email" class="form-control mb-2" id="exampleInputEmail1" placeholder="Email">
                                                    </div>
                                                    <div class="form-group">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                                                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                                        </svg>
                                                        <input type="password" class="form-control mb-4" id="exampleInputPassword1" placeholder="Password">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary mt-2 mb-2 btn-block">Login</button>
                                                </form>

                                                <div class="division">
                                                    <span>OR</span>
                                                </div>

                                                <div class="social">
                                                    <a href="javascript:void(0);" class="btn social-fb"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook">
                                                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                                        </svg> <span class="brand-name">Facebook</span></a>
                                                    <a href="javascript:void(0);" class="btn social-github"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github">
                                                            <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                                        </svg> <span class="brand-name">Github</span></a>
                                                </div>


                                            </div>
                                            <div class="modal-footer justify-content-center">
                                                <div class="forgot login-footer">
                                                    <span>Looking to <a href="javascript:void(0);">create an account</a>?</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div>

                    <!-- Start Side Menu -->
                    <div class="side">
                        <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                        <div class="widget">
                            <h4 class="title">Fitur</h4>
                            <ul class="link">
                                <li><a href="<?= base_url('/apps/dashboard'); ?>">Basis Data KHDTK</a></li>
                                <li><a href="<?= base_url('/apps/maps'); ?>">Web GIS KHDTK</a></li>
                            </ul>
                        </div>
                        <div class="widget address">
                            <h4 class="title">Kontak kami</h4>
                            <ul>
                                <li>
                                    <i><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                        </svg></i><br>
                                    Telp. (0274) 512102, 6491420 <br>
                                    Fax. (0274) 550541
                                </li>
                                <li>
                                    <i><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                            <circle cx="12" cy="10" r="3"></circle>
                                        </svg></i><br>
                                    Fakultas Kehutanan UGM<br>
                                    Jl. Agro No. 1 Bulaksumur Yogyakarta 55281
                                </li>
                                <li>
                                    <i><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg></i><br>
                                    <a href="mailto:fkt@ugm.ac.id">fkt@ugm.ac.id</a>
                                </li>
                                <li>
                                    <i><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <line x1="2" y1="12" x2="22" y2="12"></line>
                                            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                                        </svg></i><br>
                                    <a href="http://fkt.ugm.ac.id">fkt.ugm.ac.id</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Side Menu -->
                </nav>
                <!-- End Navigation -->
                <div class="clearfix"></div>

            </div>
        </div>
    </header>
    <!-- End Header -->

    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area content-double box-nav background-move bg-gray" style="background-image: url(<?= base_url('front_page/assets/img/bg-2.png') ?>);">
        <div class="container">
            <div class="row">
                <div class="double-items">
                    <div class="col-md-6 left-info simple-video">
                        <div class="content" data-animation="animated fadeInUpBig">
                            <h1>
                                SISTEM INFORMASI PENGELOLAAN <span>KHDTK GETAS</span>
                            </h1>
                            <p>
                                Sistem informasi pengelolaan kawasan hutan untuk keperluan penelitian dan pengembangan, pendidikan dan pelatihan serta kepentingan ekonomi sosial dan budaya pada kawasan KHDTK Fakultas Kehutanan Universitas Gadjah Mada.
                            </p>
                            <a class="btn btn-theme border btn-md" href="<?= base_url('/apps/dashboard'); ?>">Pelajari lebih lanjut</a>
                        </div>
                    </div>
                    <div class="col-md-6 right-info">
                        <div class="thumb animated">
                            <img src="<?= base_url('front_page/assets/img/illustrations/1.png') ?>" alt="Thumb">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start About 
    ============================================= -->
    <div id="about" class="about-area border-top default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 info">
                    <h2>Membangun Sistem Informasi <br> Pengelolaan KHDTK Getas UGM.</h2>
                    <p>
                        Membangun sistem pengelolaan yang dapat dijangkau oleh semua pihak terkait dengan pemaparan data yang lebih menarik dan interaktif dengan membuat sistem informasi berbasis web.
                    </p>
                    <ul>
                        <li>Lebih terstruktur.</li>
                        <li>Efektivitas penggunaan data.</li>
                        <li>Pemaparan data.</li>
                    </ul>
                    <div class="fun-facts">
                        <h3>KHDTK Getas dalam angka</h3>
                        <div class="row">
                            <div class="col-md-4 col-sm-4 item">
                                <div class="fun-fact">
                                    <div class="timer" data-to="75" data-speed="5000">75</div>
                                    <span class="medium">Cakupan Kawasan</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 item">
                                <div class="fun-fact">
                                    <div class="timer" data-to="100" data-speed="5000">100</div>
                                    <span class="medium">Data Terhimpun</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 item">
                                <div class="fun-fact">
                                    <div class="timer" data-to="98" data-speed="5000">98</div>
                                    <span class="medium">Tingkat Keberhasilan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 features">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 equal-height">
                            <div class="item">
                                <i class="flaticon-intersect"></i>
                                <h4>Penataan & Pengorganisasian Kawasan</h4>
                                <p>
                                    Menata dan mengorganisir kawasan KHDTK Getas UGM.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 equal-height">
                            <div class="item">
                                <i class="flaticon-concept"></i>
                                <h4>Potensi Sumberdaya Hutan</h4>
                                <p>
                                    Menghitung dan memonitoring sumberdaya hutan pada kawasan KHDTK Getas UGM.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 equal-height">
                            <div class="item">
                                <i class="flaticon-talk"></i>
                                <h4>Potensi & Pengelolaan Sosial Ekonomi dan Budaya</h4>
                                <p>
                                    Mengelola potensi sosial ekonomi dan budaya pada kawasan KHDTK Getas UGM.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 equal-height">
                            <div class="item">
                                <i class="flaticon-file"></i>
                                <h4>Rencana Pengelolaan dan Realisasi </h4>
                                <p>
                                    Merancang sistem pengelolaan dan merealisasikan rencana pengelolaan yang telah dibuat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start Footer 
    ============================================= -->
    <footer class="default-padding bg-light">
        <div class="container">
            <!-- Start Footer Bottom -->
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="col-lg-6 col-md-6 col-sm-7">
                            <p>constructed by <a href="#">endyarfian</a> &copy; <?= date('Y'); ?>.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer Bottom -->
        </div>
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="<?= base_url('front_page/assets/js/jquery-1.12.4.min.js') ?>"></script>
    <script src="<?= base_url('front_page/assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('front_page/assets/js/equal-height.min.js') ?>"></script>
    <script src="<?= base_url('front_page/assets/js/jquery.appear.js') ?>"></script>
    <script src="<?= base_url('front_page/assets/js/jquery.easing.min.js') ?>"></script>
    <script src="<?= base_url('front_page/assets/js/jquery.magnific-popup.min.js') ?>"></script>
    <script src="<?= base_url('front_page/assets/js/modernizr.custom.13711.js') ?>"></script>
    <script src="<?= base_url('front_page/assets/js/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('front_page/assets/js/count-to.js') ?>"></script>
    <script src="<?= base_url('front_page/assets/js/wow.min.js') ?>"></script>
    <script src="<?= base_url('front_page/assets/js/jquery.backgroundMove.js') ?>"></script>
    <script src="<?= base_url('front_page/assets/js/bootsnav.js') ?>"></script>
    <script src="<?= base_url('front_page/assets/js/main.js') ?>"></script>


</body>

</html>