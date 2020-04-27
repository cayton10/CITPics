<?
  require_once('../dbConfig/config.php');

  if(!empty($_POST))
  {
    //Create session var to store u_FName from DB
    $_SESSION['name'];
    //Assign variable values with posted credentials
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));
    //Encrypt password
    $password = md5($password);

    //If credentials are valid, redirect to feed(gallery). Else show appropriate error
    //Query user table
    $query = "SELECT u_ID, u_FName, u_LName, u_isAdmin FROM user WHERE u_Email=? AND u_Password=?";

    //Prep stmt
    $stmt = $db->prepare($query);
    //Bind params
    $stmt->bind_param('ss', $email, $password);
    $stmt->execute();
    $stmt->store_result();
    //If stored result number of rows = 1, this is our valid user
    
    /**RETURN JSON DATA POSITIVE RESPONSE FOR AJAX CALL */
    //Define response array for ajax returns
    $response = [];

    if($stmt->num_rows == 1)
    {
      //Bind results on success
      $stmt->bind_result($id, $name, $lname, $isAdmin);
      //Get record
      $stmt->fetch();
      //Store userID 'u_ID' for photo uploads and commenting
      $_SESSION['userID'] = $id;
      //Store u_FName into session variable for later use
      $_SESSION['name'] = $name;
      //Store u_LName into session variable for later use
      $_SESSION['lName'] = $lname;
      //Store admin value for control flow in redirection
      $_SESSION['isAdmin'] = $isAdmin;
      $response['success'] = true;
      $response['message'] = 'Email and Password Exist';      
    }
    else if($stmt->num_rows != 1)
    {
      $response['success'] = false;
      $response['error'] = 'Wrong Email or Password';
    }
    //Set header and return json
    header('Content-Type: application/json');
    die(json_encode($response));
  }
  else
  {
      header('location:../login.php');
  }
?>