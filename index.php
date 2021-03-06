<?
session_start();
if(isset($_SESSION['name']) && $_SESSION['isAdmin'] == 0)
{
  header('location:feed.php');
}
else if(isset($_SESSION['name']) && $_SESSION['isAdmin'] == 1)
{
  header('location:admin.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>CITPics Home</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700|Roboto:300,400,700&display=swap"
    rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">
  
  <!-- CUSTOM CSS FILE-->
  <link href="css/custom.css" rel="stylesheet">


</head>
<body>
  <div class="site-wrap">
    <!--BEGIN HEADER-->
    <header>
      <!-- BANNER MARKUP -->
      <div class="row-fluid" id="gradient">
        <!-- BEING BANNER ITEMS -->
        <div class="container">
          
        <!-- END BANNER ITEMS -->
      </div>
    </header>

    <!--BEGIN MAIN-->
    <main id="main">
      <div class="hero-section">
        <!-- HERO CONTAINER -->
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12 hero-text-image">
              <!--SITE LOGO-->
              <div class="row justify-content-around" id="logo"><!-- BANNER FOR SITE LOGO AND REGISTRATION BUTTON -->
                <div class="col-8 col-md-6 col-lg-5 col-xl-4"> <!--CONSTANT COL WIDTH == NO STACKING -->
                    <img class="img" data-aos="fade-right" src="img/cit_logo_white.svg" id="CITPics-logo-white" alt="custom site logo"/>
                </div>
              </div>
              <!-- REGISTER BOX -->
              <div class="row justify-content-around align-items-center">
                <div class="col-10 col-md-8 col-lg-6 text-center text-lg-left bg-white py-5 m-2" data-aos="fade-right">
                  <h1 class="register-info" data-aos="fade-right">Connect with others:</h1>
                  <!-- UNORDERED LIST DESCRIBES USER FEATURES -->
                  <ul class="list-info">
                    <li class="features" data-aos="fade-right" data-aos-delay="200">Join others in sharing your 
                      experiences through photos
                    </li>
                    <li class="features" data-aos="fade-right" data-aos-delay="500">Show genuine interest by commenting
                      on other's posts
                    </li>
                    <li class="features" data-aos="fade-right" data-aos-delay="800">Like other user photos to share
                      the love
                    </li>
                  </ul>
                  <p id="started" data-aos="fade-right" data-aos-delay="1100">Ready to get started?
                  </p>
                  <div class="row justify-content-around">
                    <div class="col-6 col-md-4" data-aos="fade-down" data-aos-delay="200">
                      <a id="register" class="btn btn-outline-white btn-block"
                              href="register.php" role="button">Register</a>
                    </div>
                  </div>
                  <!-- HR BREAK FOR REGISTER / LOGIN -->
                  <hr class="col-6 col-md-4">
                  <div class="row justify-content-around or">
                      <h3 id="or">OR</h3>
                  </div>
                  <hr class="col-6 col-md-4">
                  <!-- END HR BREAK FOR REGISTER / LOGIN -->
                  <div class="text-center" id="member">
                    <h1 class="register-info" data-aos="fade-right">Already a member?</h1>
                    <div class="row justify-content-around">
                      <div class="col-6 col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <a id="login" class="btn btn-outline-white btn-block" 
                                " href="login.php" role="button">Login</a>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END HERO CONTAINER -->
      </div>
    </main>

    <!-- BEGIN FOOTER -->
    <footer class="footer" role="contentinfo">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-8 col-md-6 mb-4 mb-md-0">
            <h3 class="text-center">About CITPics</h3>
            <p>CITPics is a photo sharing application which anyone can join. Users can upload photo content,
               send likes, and comment on images.
            </p>
          </div>
          <hr class="col-8 col-md-6">
        </div>

        <div class="row justify-content-center text-center my-5">
          <div class="col-md-7">
            <p class="copyright">&copy; Copyright CITPics. All Rights Reserved</p>
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=SoftLand
              -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade - Modified by Benjamin Cayton</a>
            </div>
          </div>
        </div>

      </div>
    </footer>
  </div> <!-- .site-wrap -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Recommended jQuery Inclusion -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Vendor JS Files -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/jquery/jquery-migrate.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/easing/easing.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
  <script src="vendor/sticky/sticky.js"></script>
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

</body>

</html>
