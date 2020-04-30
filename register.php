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
                  <h2 class="text-center registration">New User Registration</h2>
                  <!-- registration processing form send to php script -->
                  <form autocomplete="off" method="POST" action='php_scripts/add_user.php' id="registrationForm">
                    <!-- NAME GROUP -->
                    <div class="form-group name">
                      <div class="row justify-content-between">
                        <div class="col-12 col-md-6">
                          <label for="fName">First Name</label>
                          <input name="fName" type="text" class="form-control cit" id="exampleFirstNameInput" aria-describedby="nameHelp" placeholder="David" autocomplete="user-first-name" required="required">
                        </div>
                        <div class="col-12 col-md-6">
                          <label for="lName">Last Name</label>
                          <input name="lName" type="text" class="form-control cit" id="exampleLastNameInput" aria-describedby="nameHelp" placeholder="Blaine" autocomplete="user-last-name" required="required">
                        </div>
                      </div>
                    </div>
                    <!-- EMAIL AND PW GROUP -->
                    <div class="form-group email">
                      <div class="row justify-content-between">
                        <div class="col-12 col-md-6 email">
                          <label for="email">Email</label>
                          <input name="email" type="text" class="form-control cit" id="registerEmail" placeholder="doYouLike@Street.Magic" autocomplete="user-email" required="required">
                        </div>
                        <div class="col-12 col-md-6">
                          <label for="zipCode">Zip Code</label>
                          <input name="zipCode" autocomplete="user-zip" type="text" inputmode="numeric" parrtern="[0-9]*" class="form-control cit" 
                                  id="exampleInputZip1" placeholder="26452" required="required" minlength="5" maxlength="5">
                        </div>
                        <div class="col-12 emailError text-center" id="emailError">
                          <p>That email is already in use. <a class='link' href="login.php">Login</a> or try another email address.</p>
                        </div>
                      </div>                   
                    </div>
                    <!-- ZIP CODE GROUP -->
                    <div class="form-group zip">
                      <div class="row justify-content-start">
                        <div class="col-12 col-md-6">                 
                          <label for="password">Password</label>
                          <input type="password" name="password" class="form-control cit" id="password" placeholder="**********" autocomplete="user-password" required="required" minlength="6">
                        </div>
                        <div class="col-12 col-md-6">
                          <label for="confirm-password">Confirm Password</label>
                          <input type="password" class="form-control cit" id="confirmPassword" placeholder="**********" autocomplete="user-password" required="required" minlength="6">
                        </div>
                        <div class="col-12 passwordError text-center" id="passwordError">
                          <p><span id="error">!!!!</span> Passwords do not match. Check passwords and try again <span id="error">&#161;&#161;&#161;&#161;</p>
                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-around">
                      <div class="form-actions col-6 col-md-4">
                        <input id="register" type="submit" class="btn btn-outline-white btn-block login" value="Register">
                      </div>
                    </div>
                     <!-- HR BREAK FOR SUBMIT / LOGIN -->
                  <hr class="col-6 col-md-4">
                    <div class="row justify-content-around or">
                    </div>
                  <hr class="col-6 col-md-4 bottom">

                  <h2 class="text-center registration">Already a Member?</h2>
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
</body>

</html>
