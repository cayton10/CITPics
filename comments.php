<?
require_once('dbConfig/config.php');
require_once("header.php");
?>
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
   
      <?
        require_once("footer.php");
      ?>
  </body>
</html>
