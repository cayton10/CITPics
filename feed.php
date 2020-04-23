<?
session_start();
require_once('dbConfig/config.php');
require_once("header.php");
?>

<!-- END HEADER -->

    <main id="main">
<!-- GRADIENT BACKGROUND AND MESSAGE -->     
        <div class="hero-section inner-page">
          <div class="container">
            <div id="hero-row-feed" class="row-fluid align-items-end text-center">
              <div class="col-12 text-center my-0">
                <h1 id="gallery-text" data-aos="fade" data-aos-delay="300">Gallery</h1>
              </div>
            </div>        
          </div>
        </div>
<!-- END HERO SECTION  -->
      
<!-- BEGIN PICS GALLERY -->
      <div class="site-section">
        <div class="container">
          <div class="row mb-5 align-content-center">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="post-entry">
                <div class="row-fluid text-center photo-title">
                  <h4>Title: Can we please set the max for this at 32?</h4>
                </div>
                <!-- IMAGE SPACE AND LINK TO FULL IMAGE POPUP -->
                <div>
                  <a href="#" class="d-block mb-4 img" alt="click to blow up">
                    <img src="img/img_1.jpg" alt="Image" class="img-fluid post">
                  </a>
                </div>
                <!-- SOCIAL ROW -->
                <div class="row-fluid justify-content-between align-content-center social">
                  <!-- LIKE BUTTON APERTURE -->
                  <div class="col-3 like-button">
                    <button class="like_button" class="text-center" type="submit"><img src="img/empty_aperture.svg" class="img-fluid empty-aperture" 
                      alt="like button"/>
                      Like</button>
                  </div>
                  <!-- END LIKES -->
                  
                  <!-- COMMENT UTILITY LINK -->
                  <div class="col-3 comment">
                    <a href='comments.php' class="d-block mb-4 img" alt="click to comment">
                      <img src="img/comment.svg" class="img-fluid comment_button" alt="comment button"/>
                    </a>                   
                  </div>
                  <!-- END COMMENT UTILITY LINK -->

                  <!-- LIKES COUNTER -->
                  <div class="col-6 likes">
                    <button>total likes</button>
                  </div>
                  <!-- END LIKES COUNTER -->
                </div>
                <!-- IMAGE SUMMARY -->
                <div class="row-fluid align-content-center image-summary">
                  <p class="image_summary">Here's a phone. It's a good thing we're not doing a facebook clone. I feel like that could
                    get out of hand right?
                    <br><br>
                    Anyway, I'd like to try and find a way to limit what's seen by the viewer for this summary, and let them (see more)
                    if they wish to.
                  </p>
                </div>
                <!-- END IMAGE SUMMARY ROW -->

              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="post-entry">
                <div class="row-fluid text-center photo-title">
                  <h4>Title: Or maybe 21?</h4>
                </div>
                <div>
                  <a href="#" class="d-block mb-4 img" alt="click to blow up">
                    <img src="img/img_3.jpg" alt="Image" class="img-fluid post">
                  </a>
                </div>
                <div class="row-fluid justify-content-between align-content-center social">
                  <div class="col-3 like-button">
                    <button class="like_button" class="text-center" type="submit"><img src="img/empty_aperture.svg" class="img-fluid empty-aperture" 
                      alt="like button"/>
                      Like</button>
                  </div>

                  
                  <!-- COMMENT UTILITY LINK -->
                  <div class="col-3 comment">
                    <a href='comments.php' class="d-block mb-4 img" alt="click to comment">
                      <img src="img/comment.svg" class="img-fluid comment_button" alt="comment button"/>
                    </a>                   
                  </div>
                  <!-- END COMMENT UTILITY LINK -->

                  <!-- LIKES COUNTER -->
                  <div class="col-6 likes">
                    <button>total likes</button>
                  </div>
                  <!-- END LIKES COUNTER -->
                </div>
                <!-- IMAGE SUMMARY -->
                <div class="row-fluid align-content-center image-summary">
                  <p class="image_summary">Here's a phone. It's a good thing we're not doing a facebook clone. I feel like that could
                    get out of hand right?
                  </p>
                </div>
                <!-- END IMAGE SUMMARY ROW -->              
              </div>
            </div>
            <!-- END POST ROW -->

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="post-entry">
                <div class="row-fluid text-center photo-title">
                  <h4>Title: I tried to find a place to use this but couldn't</h4>
                </div>
                <div>
                  <a href="#" class="d-block mb-4 img" alt="click to blow up">
                    <img src="img/cit_logo_color.svg" alt="Image" class="img-fluid post">
                  </a>
                </div>
                <div class="row-fluid justify-content-between align-content-center social">
                  <div class="col-3 like-button">
                    <button class="like_button" class="text-center" type="submit"><img src="img/empty_aperture.svg" class="img-fluid empty-aperture" 
                      alt="like button"/>
                      Like</button>
                  </div>
                  <!-- COMMENT UTILITY LINK -->
                  <div class="col-3 comment">
                    <a href='comments.php' class="d-block mb-4 img" alt="click to comment">
                      <img src="img/comment.svg" class="img-fluid comment_button" alt="comment button"/>
                    </a>                   
                  </div>
                  <!-- END COMMENT UTILITY LINK -->

                  <!-- LIKES COUNTER -->
                  <div class="col-6 likes">
                    <button>total likes</button>
                  </div>
                  <!-- END LIKES COUNTER -->
                </div>
                <!-- IMAGE SUMMARY -->
                <div class="row-fluid align-content-center image-summary">
                  <p class="image_summary">This was the first site logo I made for this project. 
                  </p>
                </div>
                <!-- END IMAGE SUMMARY ROW -->                
              </div>
            </div>
            <!-- END PHOTO POST -->

            <div class="col col-sm-6 col-md-4 col-lg-3">
              <div class="post-entry">
                <a href="comments.php" class="d-block mb-4">
                  <img src="img/img_4.jpg" alt="Image" class="img-fluid">
                </a>
                <div class="post-text">
                  <span class="post-meta">December 13, 2019 &bullet; By <a href="#">Admin</a></span>  
                  <h3><a href="#">Chrome now alerts you when someone steals your password</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
                  <p><a href="#" class="readmore">Read more</a></p>
                </div>
              </div>
            </div>
            

          </div>
        </div>
      </div>

    </main>

     <?php
      require_once("footer.php");
     ?>

  </div> <!-- .site-wrap -->
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
  <!-- CUSTOM JQUERY FILE -->
  <script src="js/jQuery.js"></script>
  <!-- JQUERY UI FILE FOR CLASS ANIMATION TRANSISITONS -->
  <script
  src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
  integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
  crossorigin="anonymous"></script>

  </body>
</html>
