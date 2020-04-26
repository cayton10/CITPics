<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Login</title>
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
              <div class="row justify-content-around" id="logo">
                <div class="col-8 col-md-6 col-lg-5 col-xl-4"> 
                    <img class="img" src="img/cit_logo_white.svg" id="CITPics-logo-white" alt="custom site logo"/>
                </div>
              </div>
              <!-- LOGIN FORM -->
              <div class="row justify-content-around align-items-center">
                <div class="col-10 col-md-10 col-lg-8 text-left text-lg-left bg-white py-5" data-aos="fade-right" id="login-form">
                  <h2 class="text-center registration">Member Login</h2>
                  <form method="POST" action="php_scripts/login_user.php" id="loginForm" autocomplete="off">
                    <div class="form-group">
                      <label for="email">Email Address</label>
                      <input name="email" type="email" class="form-control cit" id="email" 
                              aria-describedby="emailHelp" placeholder="tony_stark@starkindustries.com" value="<?=$_POST['email'];?>" 
                              required="required" autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input name="password" type="password" class="form-control cit" id="password" placeholder="**********" 
                             required="required" autocomplete="off">
                    </div>
                    <div class="row">
                      <div class="col-12 passwordError text-center" id="passwordError">
                            <p>Username and/or password error. Check credentials or <a class="link" href="register.php">register</a> an account.</p>
                      </div>
                    </div>
                    <div class="row justify-content-around">
                      <div class="form-actions col-6 col-md-4">
                        <button id="login" type="button" class="btn btn-outline-white btn-block">Submit</button>
                      </div>
                    </div>
                    <div class="form-check center">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="remember-check-label" for="exampleCheck1">Remember Me</label>
                    </div>
                     <!-- HR BREAK FOR REGISTER / LOGIN -->
                    <hr class="col-6 col-md-4">
                      <div class="row justify-content-around or">
                          <h3 id="or">OR</h3>
                      </div>
                    <hr class="col-6 col-md-4 bottom">

                    <h2 class="text-center registration">Not a member?</h2>
                    <div class="row justify-content-around">
                      <div class="col-6 col-md-4">
                        <a id="register" class="btn btn-outline-white btn-block"
                              href="register.php" role="button">Register</a>
                      </div>
                    </div>
                  </form>
                  <!-- END LOGIN FORM -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END HERO CONTAINER -->
      </div>
    </main>

    <!-- BEGIN FOOTER -->
    <?php
    require_once("footer.php");
    ?>
  </div> <!-- .site-wrap -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
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
  <!-- Include custom JS -->
  <script src="js/jQuery.js"></script>

</body>

</html>
