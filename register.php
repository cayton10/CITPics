<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Register</title>
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

    <!--BEGIN MAIN-->
    <main id="main">
      <div class="hero-section">
        <!-- HERO CONTAINER -->
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12 hero-text-image">
              <!--SITE LOGO-->
              <div class="row justify-content-around" id="logo"><!-- BANNER FOR SITE LOGO AND REGISTRATION BUTTON -->
                <div class="col-8 col-md-6 col-lg-5 col-xl-4"> 
                    <img class="img" src="img/cit_logo_white.svg" id="CITPics-logo-white" alt="custom site logo"/>
                </div>
              </div>
              <!-- REGISTRATION FORM -->
              <div class="row justify-content-around align-items-center">
                <div class="col-10 col-md-10 col-lg-8 text-left text-lg-left bg-white py-5" id="login-form">
                  <h2 class="text-center login">Register</h2>
                  <form>
                    <!-- NAME GROUP -->
                    <div class="form-group name">
                      <div class="row justify-content-between">
                        <div class="col-12 col-md-6">
                          <label for="exampleInputFName">First Name</label>
                          <input type="name" class="form-control cit" id="exampleFirstNameInput" aria-describedby="nameHelp" placeholder="David">
                        </div>
                        <div class="col-12 col-md-6">
                          <label for="exampleInputLName">Last Name</label>
                          <input type="name" class="form-control cit" id="exampleLastNameInput" aria-describedby="nameHelp" placeholder="Blaine">
                        </div>
                      </div>
                    </div>
                    <!-- EMAIL AND PW GROUP -->
                    <div class="form-group email">
                      <div class="row justify-content-between">
                        <div class="col-12 col-md-6">
                          <label for="exampleInputEmail1">Email</label>
                          <input type="email" class="form-control cit" id="exampleInputEmail1" placeholder="doYouLike@Street.Magic">
                        </div>
                        <div class="col-12 col-md-6">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control cit" id="exampleInputPassword1" placeholder="**********">
                        </div>
                      </div>
                    </div>
                    <!-- ZIP CODE GROUP -->
                    <div class="form-group zip">
                      <div class="row justify-content-start">
                        <div class="col-12 col-md-6">
                          <label for="exampleInputZip1">Zip Code</label>
                          <input type="Zip" class="form-control cit" id="exampleInputZip1" placeholder="26452">
                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-around">
                      <div class="form-actions col-6 col-md-4">
                        <button id="login" type="submit" class="btn btn-outline-white btn-block">Submit</button>
                      </div>
                    </div>
                     <!-- HR BREAK FOR SUBMIT / LOGIN -->
                  <hr class="col-6 col-md-4">
                    <div class="row justify-content-around or">
                    </div>
                  <hr class="col-6 col-md-4 bottom">

                  <h2 class="text-center login">Already a Member?</h2>
                  <div class="row justify-content-around">
                    <div class="col-6 col-md-4">
                      <a id="login" class="btn btn-outline-white btn-block"
                             href="login.php" role="button">Login</a>
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
