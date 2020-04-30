<?
require_once('dbConfig/config.php');
require_once("header.php");
//On page load, query DB
//Get user's name
if(!isset($_SESSION['name']))
{
  header('location:index.php');
}

//Set up image id for DB query
$id = htmlspecialchars(trim($_GET['id']));
//First fire query to get appropriate image and user who uploaded.
$query = "SELECT p_Filename, 
                 u_FName, 
                 u_LName 
          FROM   pic p
          JOIN   user u 
          ON p.u_ID = u.u_ID 
          WHERE p_ID=$id";
       //Prep stmt
       $stmt = $db->prepare($query);
       $stmt->bind_param("i", $id);
       $stmt->execute();
       //Store result of query
       
       $stmt->store_result();
       //Bind results on success
       $stmt->bind_result($picFileName, $userFirst, $userLast);
       $stmt->fetch();
       
       $name = array($userFirst, $userLast);
       $fullName = implode(" ", $name);

//Second, fire query to get all comments in DESC order
$query = "SELECT c_ID, 
                 c_Text,
                 c_Date
          FROM comment
          WHERE p_ID=$id
          ORDER BY c_Date DESC";
          

          $stmt = $db->prepare($query);

          $stmt->bind_param("i", $id);
          $stmt->execute();

          //Store results of query
          $stmt->store_result();
          
          $total = $stmt->num_rows;
          //Bind results
          $stmt->bind_result($commentID, $comment, $commentDate);
          //Run while loop to store results of comment query
          while($stmt->fetch())
            {
                //Define an index variable and assign
                //Dump emails into allEmail array for output on success
                $allComments[] = array("c_ID"=>$commentID,
                                "c_Text"=>$comment, 
                                "c_Date"=>$commentDate);                          
            }

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
                <figure><img src="../../uploads/<?echo $picFileName?>" alt="Free Website Template by Free-Template.co" class="img-fluid" id="commentPhoto">
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
                    <input name="picID" value="<?echo $id?>" hidden="true" id="picID"></input>
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
  </body>
</html>
