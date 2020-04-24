<?
  session_start();
  require_once('dbConfig/config.php');
  require_once('header.php');
?>

  <div class="site-wrap">
    <!--BEGIN MAIN-->
    <main id="main">
      <div class="hero-section">
        <!-- HERO CONTAINER -->
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12 hero-text-image">
              <!-- UPLOAD FORM -->
              <div class="row justify-content-around align-items-center">
                <div class="col-10 col-md-10 col-lg-8 text-left text-lg-left bg-white py-5 uploadForm" id="login-form">
                  <h2 class="text-center login">Upload Photo</h2>
                  <form id="uploadForm" method="POST" action=''>
                      <!-- UPLOAD IMAGE AND PREVIEW -->
                      <div class="row-fluid mt-4">
                        <div class="col-12">
                          <div class="row justify-content-between align-items-center">
                            <div class="col-8">
                                <input type="file" name="img[]" class="file col-8" accept="image/*">
                                <div class="input-group my-3">
                                  <input type="text" class="form-control" disabled placeholder="Upload File" id="file">                               
                                </div>
                            </div>
                            <div class="col-4">
                              <div class="input-group-append">
                                <button type="button" class="col-12 browse btn btn-primary text-center">Browse</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--IMAGE PREVIEW WINDOW-->
                        <div class="ml-2 col-sm-6 img-preview">
                          <img src="https://placehold.it/80x80" id="preview" class="img-thumbnail">
                        </div>
                      
                    <!-- TITLE -->
                        <div class="form-group image">
                          <div class="row justify-content-between">
                            <div class="col-12 img-title">
                              <label for="exampleInputTitle">Image Title</label>
                              <input type="name" class="form-control cit" id="exampleTitle" placeholder="Trip to Hawaii" required>
                            </div>
                            <div class="col-12">
                    <!-- SUMMARY -->
                              <label for="exampleInputImageSummary">Image Summary</label>
                              <textarea type="name" class="form-control summary" id="image-summary" 
                                placeholder="This is placeholder text for the volcano picture I'm going to upload." rows="3" required></textarea>
                            </div>
                          </div>
                        </div>
                    <!-- END FORM FIELDS -->
                    <!-- SUBMIT -->
                    <div class="row justify-content-around">
                      <div class="form-actions col-6 col-md-4">
                        <button id="login" type="submit" class="btn btn-outline-white btn-block">Post</button>
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
