<?
require_once('dbConfig/config.php');
require_once("header.php");
//On page load, query DB

//Set up image id for DB query
$id = htmlspecialchars(trim($_GET['id']));
//First fire query to get appropriate image and user who uploaded.
$query = "SELECT u_FName, 
                 u_LName
          FROM user 
          WHERE u_ID=$id";
       //Prep stmt
       $stmt = $db->prepare($query);
       $stmt->bind_param("i", $id);
       $stmt->execute();
       //Store result of query
       
       $stmt->store_result();
       //Bind results on success
       $stmt->bind_result($userFirst, $userLast);
       $stmt->fetch();
        //Full name array and merging w/ implode()
       $name = array($userFirst, $userLast);
       $fullName = implode(" ", $name);
?>
    <main id="main">
      
        <!-- GRADIENT BACKGROUND AND MESSAGE -->     
        <div class="hero-section inner-page">
          <div class="container">
            <div id="hero-row-feed" class="row-fluid align-items-end text-center">
              <div class="col-12 text-center my-0">
                <h1 id="gallery-text" data-aos="fade" data-aos-delay="300">Photos from: <?echo $fullName?></h1>
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
                <!-- LIST ALL USER IMAGES -->
                <figure><img src="../../uploads/<?echo $filename?>" alt="Free Website Template by Free-Template.co" class="img-fluid" id="commentPhoto">
                  <figcaption>Photo uploaded by: <? echo $fullName;?> </figcaption></figure>
              </div>
            </div>
            

       <!-- PHOTO COMMENTS -->
          <div class="pt-5">
            <?php
            //If there are no comments... 
              if(empty($allComments))
              {
                //Output this:
                echo "<h3 class='mb-5 comment-count'>Be the first to comment!</h3>"; 
              }
              else
              {
                //Output elements and loop through all comment info.
                echo "<h3 class='mb-5 comment-count'>" . $total . " " . " Total Comments</h3>
                        <ul class='comment-list' id='commentList'>";
                          
                echo "<br/>";
                //For loop to access individual comments
                for ($i=0; $i < $allComments[$i]; $i++) {

                  //For each to access comment data
                  foreach ($allComments[$i] as $key => $value) {
                    //Use variable variables to give access to key name
                    //outside of foreach.
                    $$key = $value;
                    $$key = $value;
                    $$key = $value;
                  }
                  //Make date real pretty

                  $date = date('n.d.Y  @  g:i a', strtotime($c_Date));


                  //OUTPUT COMMENT INFORMATION 
                  echo "<li class='comment'>
                          <div class='comment-body'>
                            <h3 class='userName comment'>Comment:</h3>
                              <div class='meta'>" . $date . "</div>
                                <p>" . $c_Text . "</p>
                          </div>
                        </li>";

                }
                //FINISH OFF OUR UNORDERED LIST
                echo "</ul>";
              }
              ?>

              <!-- END comment-list -->
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5 comment-count">Leave a comment</h3>
                <form action="" id="commentForm">
                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="commentBody" id="message" cols="30" rows="10" class="form-control summary"></textarea>
                    <input name="picID" value="<?echo $id?>" hidden="true" id="userID"></input>
                  </div>
                  <div class="form-group">
                    <input type="button" value="Post Comment" class="btn btn-primary" id="post-comment">
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
    <div id="adminTrigger"></div> 
  </body>
</html>