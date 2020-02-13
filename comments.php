<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Comments</title>
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
  <!-- CUSTOM CSS FILE -->
  <link href="css/custom.css" rel="stylesheet">

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

    <header>
      <?
        require_once("header.php");
      ?>
  </header>


    <main id="main">
      
        <!-- GRADIENT BACKGROUND AND MESSAGE -->     
        <div class="hero-section inner-page">
          <div class="container">
            <div id="hero-row-feed" class="row-fluid align-items-end text-center">
              <div class="col-12 text-center my-0">
                <h1 id="gallery-text" data-aos="fade" data-aos-delay="300">Comments</h1>
              </div>
            </div>        
          </div>
        </div>
        <!-- END HERO SECTION  -->

    <section class="site-section">
      <div class="container">
        <div class="row justify-content-around">
          <div class="col-md-10 blog-content">
            <div class="row mb-5 justify-content-around">
              <div class="col-12 col-sm-8">
                <!-- IMAGE FROM FEED TO COMMENT ON -->
                <figure><img src="img/img_1.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
                  <figcaption>Image to be commented on</figcaption></figure>
              </div>
            </div>
            

       <!-- PHOTO COMMENTS -->   
            <div class="pt-5">
              <h3 class="mb-5 comment-count">3 Total Comments</h3>
              <ul class="comment-list">
                <li class="comment">
                  <div class="comment-body">
                    <h3 class="userName comment">Yoda</h3>
                    <div class="meta">February 6, 2020 at 6:40pm</div>
                    <p>Do or do not. There is no try.</p>
                    
                  </div>
                </li>

                <li class="comment">
                  <div class="comment-body">
                    <h3 class="userName comment">Brian Morgan</h3>
                    <div class="meta">February 6, 2020 at 6:39pm</div>
                    <p>Try harder.</p>
                    
                  </div>
                </li>

                <li class="comment">
                  <div class="comment-body">
                    <h3 class="userName comment">Jean Doe</h3>
                    <div class="meta">January 9, 2018 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                  </div>
                </li>
              </ul>
              <!-- END comment-list -->
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5 comment-count">Leave a comment</h3>
                <form action="#" class="">
                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="" id="message" cols="30" rows="10" class="form-control summary"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Post Comment" class="btn btn-primary" id="post-comment">
                  </div>
                </form>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
      

      


    </main>
    <footer>
      <?
        require_once("footer.php");
      ?>
    </footer>
  </div> <!-- .site-wrap -->
  
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
  <!-- CUSTOM JQUERY FILE -->
    <script src="js/jQuery.js"></script>
  <!-- JQUERY UI FILE FOR CLASS ANIMATION TRANSISITONS -->
  <script
  src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
  integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
  crossorigin="anonymous"></script>

  </body>
</html>
