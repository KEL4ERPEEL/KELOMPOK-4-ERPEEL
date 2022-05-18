<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Landing Page</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
<script src="https://kit.fontawesome.com/83348e384c.js" crossorigin="anonymous"></script>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Squadfree - v4.7.0
  * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-transparent">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1 class="text-light"><a href="index.html" style="color: #193B58;"><span>CARI PEMAIN</span></a></h1>


            </div>

            <nav id="navbar" class="navbar">
                @if (Route::has('login'))
                    <ul>
                        @auth
                            <li><a class="nav-link scrollto active" href="{{ url('/home') }}"
                                    style="color: #193B58;">Home</a></li>
                            <li><a class="nav-link scrollto" href="#about" style="color: #193B58;">About Us</a></li>
                            <li><a class="nav-link scrollto" href="#services" style="color: #193B58;">Services</a></li>
                            <li ><a class="btn btn-primary" href="" style="border-radius: 40px">Let's Get Started</a></li>
                            <li><a class="nav-link scrollto" href=""><i class="fa fa-power-off fa-xl" style="font-size: 30px"></i></a></li>
                        @else
                            <li><a class="nav-link scrollto active" href="{{ url('/home') }}"   
                                    style="color: #193B58;">Home</a></li>
                            <li><a class="nav-link scrollto" href="#about" style="color: #193B58;">About Us</a></li>
                            <li><a class="nav-link scrollto" href="#services" style="color: #193B58;">Services</a></li>
                            <li><a class="btn btn-primary" href="{{ route('login') }}">Log in</a></li>
                            @if (Route::has('register'))
                                <li><a class="btn btn-primary" href="{{ route('register') }}">Register</a></li>
                            @endif
                        @endauth

                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                @endif
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="row">
            <div class="col hero-container " data-aos="fade-up">
               <h2>LET`S ENJOY</h2>
               <h1>SOCCER</h1>
            </div>
            
            
        </div>

    </section><!-- End Hero -->


    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
