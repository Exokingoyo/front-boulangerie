<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Front Boulangerie </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="Home/assets/img/favicon.png" rel="icon">
  <link href="Home/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="Home/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="Home/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="Home/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="Home/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="Home/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="Home/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="Home/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="Home/assets/img/logo.png" alt="">
        <span>FlexStart</span>
      </a>

      <!-- ======= Navbar ======= -->
      @include('Home.component.navbar')
      <!-- .navbar -->

    </div>
  </header><!-- End Header -->



  <main id="main">
    @yield("main")
  </main>

  <!-- ======= Footer ======= -->
  @include("Home.Component.Footer")
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="Home/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="Home/assets/vendor/aos/aos.js"></script>
  <script src="Home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="Home/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="Home/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="Home/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="Home/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="Home/assets/js/main.js"></script>

</body>

</html>