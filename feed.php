<?
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
          <div class="row mb-5 align-content-center" id="postOutput">
           
            

          </div>
        </div>
      </div>
      <div id="galleryTrigger"></div>
    </main>

     <?php
      require_once("footer.php");
     ?>
  </body>
</html>
