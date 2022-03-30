<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>SMP IHYAUL ULUM MODO</title>

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Constra HTML Template v1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url()?>assets/images/logo1.png" />

    <!-- Themefisher Icon font -->
    <link rel="stylesheet" href="<?= base_url()?>assets/plugins/themefisher-font/style.css">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="<?= base_url()?>assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Animate css -->
    <link rel="stylesheet" href="<?= base_url()?>assets/plugins/animate/animate.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="<?= base_url()?>assets/plugins/slick/slick.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/plugins/slick/slick-theme.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/style.css?v=0.0.1">

</head>

<body id="body">

    <!-- Start Top Header Bar -->
    <section class="top-header">
        <div class="container">
            <div class="row mt-40">
                <div class="col-md-12">
                    <div class="text-center">
                        <img class="img-circle" src="<?= base_url()?>assets/images/logo1.png" height="170" width="170">
                        <h2>SMP IHYAUL ULUM MODO</h2>
                    </div>
                </div>
            </div>

    </section><!-- End Top Header Bar -->


    <!-- Main Menu Section -->
    <section class="menu">
        <nav class="navbar navigation">
            <div class="container">
                <div class="navbar-header">
                    <h2 class="menu-title">Main Menu</h2>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div><!-- / .navbar-header -->

                <!-- Navbar Links -->
                <div id="navbar" class="navbar-collapse collapse text-center">
                    <ul class="nav navbar-nav">

                        <!-- Home -->
                        <li class="dropdown ">
                            <a href="<?= base_url()?>">Home</a>
                        </li><!-- / Home -->


                        <!-- Elements -->
                        <li class="dropdown dropdown-slide">
                            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                                data-delay="350" role="button" aria-haspopup="true" aria-expanded="false">Profile <span
                                    class="tf-ion-ios-arrow-down"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?= base_url()?>profile/vismis">Visi Misi</a></li>
                                <li><a href="<?= base_url()?>profile/struktur">Struktur Organisasi</a></li>
                                <li><a href="<?= base_url()?>profile/gurukaryawan">Guru dan Karyawan</a></li>
                                <li><a href="<?= base_url()?>profile/prestasi">Prestasi Sekolah</a></li>
                            </ul>
                        </li><!-- / Elements -->


                        <!-- Pages -->
                        <li class="dropdown dropdown-slide">
                            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                                data-delay="350" role="button" aria-haspopup="true" aria-expanded="false">Akademik <span
                                    class="tf-ion-ios-arrow-down"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?= base_url()?>akademik">Kalender Akademik</a></li>
                                <li><a href="<?= base_url()?>akademik/kuri">Kurikulum</a></li>
                            </ul>
                        </li><!-- / Pages -->



                        <!-- Blog -->
                        <li class="dropdown dropdown-slide">
                            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                                data-delay="350" role="button" aria-haspopup="true" aria-expanded="false">Kesiswaan
                                <span class="tf-ion-ios-arrow-down"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?= base_url()?>kesiswaan">Ekstrakurikuler</a></li>
                            </ul>
                        </li><!-- / Blog -->

                        <!-- Shop -->
                        <li class="dropdown dropdown-slide">
                            <a href="<?= base_url()?>fasilitas">Fasilitas</a>
                        </li><!-- / Blog -->

                        <li class="dropdown dropdown-slide">
                            <a href="<?= base_url()?>galeri">Galeri
                            </a>
                        </li>

                        <li class="dropdown dropdown-slide">
                            <a href="<?= base_url()?>contact">Hubungi Kami
                            </a>
                        </li>
                    </ul><!-- / .nav .navbar-nav -->

                </div>
                <!--/.navbar-collapse -->
            </div><!-- / .container -->
        </nav>
    </section>