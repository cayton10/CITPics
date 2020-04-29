<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>CITPics</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700|Roboto:300,400,700&display=swap" rel="stylesheet">
  <!--GOOGLE FONT-->
  <link href="https://fonts.googleapis.com/css?family=Baumans&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet">
  <!-- FANCY BOX CDN FOR CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />


  <!-- =======================================================
    Template Name: SoftLand
    Template URL: https://bootstrapmade.com/softland-bootstrap-app-landing-page-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com/
  ======================================================= -->
</head>

<body>
    
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

  <header class="site-navbar js-sticky-header site-navbar-target" role="banner" 
            data-aos="fade-right" data-aos-delay="200">

      <div class="container">
        <div class="row align-items-center justify-content-between">
<!-- DISPLAY ACTUAL USERNAME UPON LOGIN -->         
          <div class="col-8 col-md-4 header-logo">           
              <img src="img/badge_logo.svg" id="header-logo" alt="CITPics logo">
              <h1 id="userName"><? echo $_SESSION['name']?></h2>
          </div>

          <div class="col-12 col-md-6 d-none d-lg-block">
            <nav class="site-navigation position-relative text-right" role="navigation">
<!-- LONG MENU -->
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="upload.php" class="nav-link">Upload</a></li>
                <li><a href="feed.php" class="nav-link">gallery</a></li>
                <li><a href="logout.php" class="nav-link">Logout</a></li>
              </ul>
            </nav>
          </div>

<!-- MOBILE BURGER MENU-->
          <div class="col-1 d-inline-block d-lg-none ml-md-0 py-3" style="position: relative; top: 3px;">

            <a href="#" class="burger site-menu-toggle js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
              <span></span>
            </a>
          </div>
<!-- END MOBILE BURGER MENU -->
        </div>
      </div>
      
  </header>