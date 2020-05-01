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
            <div class="row mb-5 justify-content-around" id="userPosts">
              <input name="userID" value="<?echo $id?>" hidden="true" id="userID"></input>
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