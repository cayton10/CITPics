<?
    require_once('dbConfig/config.php');
    require_once('header.php');
    require_once('php_scripts/print_Users.php');

    if(!isset($_SESSION['name']) && $_SESSION['isAdmin'] != 1)
    {
        header('location:index.php');
    }

    
    

    
    

    //QUERY DB TO BRING DOWN ALL REGISTERED USERS. 
        //Query user table to restrict duplicate emails on registration
        $query = "SELECT u_ID, u_FName, u_LName, u_Email FROM user";


        //Prep stmt
        $stmt = $db->prepare($query);
    
        $stmt->execute();
        //Store result of query

        $stmt->store_result();
        
        //Bind results on success
        $stmt->bind_result($userID, $userFName, $userLName, $userEmail);
        
        while($stmt->fetch())
        {
            //Dump all user ID and Names into array for output
            $allUsers[] = array("User ID"=>$userID, "First Name"=>$userFName, "Last Name"=>$userLName, "Email"=>$userEmail); 
        }
        //Declare session variable for allUsers array
        $_SESSION['allUsers'] = $allUsers;
        $keys = array_keys($_SESSION['allUsers'][0]);
        ?>
 <div class="site-wrap">

<!-- UPLOAD SUCCESS MODAL -->
<div class="modal fade" id="uploadSuccess" tabindex="-1" role="dialog" aria-hidden="">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title registration" id="uploadTitle">Success</h5>
      </div>
      <div class="modal-body text-center">
        Upload complete. 
      </div>
      <div class="modal-footer">
            <button type="button" class="col-5 close btn btn-primary text-center" data-dismiss="modal">Close</button>
            <a id="gallery" class="col-5 gallery btn btn-primary text-center"
                href="feed.php" role="button">Gallery</a>
      </div>
    </div>
  </div>
</div>
<!-- UPLOAD FAILURE MODAL -->
<div class="modal fade" id="uploadFail" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title registration">Failed</h5>
      </div>
      <div class="modal-body text-center" id="failMessage"></div>
      <div class="modal-footer">
        <button type="button" class="col-5 close btn btn-primary text-center" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!--BEGIN MAIN-->
<main id="main">
<div class="hero-section">
  <!-- HERO CONTAINER -->
  
  <div class="container">
    <div class="row align-items-center">

    
      <div class="col-12 hero-text-image">
        <!-- USER INFORMATION -->
        <div class="row justify-content-around align-items-center">
          <div class="col-10 col-md-10 col-lg-10 text-left text-lg-left bg-white py-5 uploadForm" id="login-form">
          <h2 class="text-center registration">All Users</h2>
          <?
            if(isset($_SESSION['allUsers']))
                {
                    echo print_Users($_SESSION['allUsers']);
                }
          ?>
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

