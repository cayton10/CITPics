<?
  session_start();
  require_once('../dbConfig/config.php');

  if(!empty($_POST))
  {
    //If posted from Registration form, add user to DB
    //Create local variables from $_POST field
    $userId = null;
    //NULL for auto incremented value on user entry
    $fName = htmlspecialchars(trim($_POST['fName']));
    $lName = htmlspecialchars(trim($_POST['lName']));
    $email = htmlspecialchars(trim($_POST['email']));
    $zipCode = htmlspecialchars(trim($_POST['zipCode']));
    $password = htmlspecialchars(trim($_POST['password']));
    //Encrypt password to pass into DB using md5() function
    $password = md5($password);
    //Define check for admin
    $adminCheck;
    if($email != "admin@citpics.com"){
        $adminCheck = 0;
    }

    //Prepare query just like B. Morgan told me to WRITE to the DB
    $query = "INSERT INTO user VALUES (?,?,?,?,?,?,?)";

    //Create stmt object
    $stmt = $db->prepare($query);

    //Bind data params to query
    $stmt->bind_param('isssssi', $userId, $fName, $lName, $email, $password, $zipCode, $adminCheck);

    //Execute statement
    $stmt->execute();

    //After execution, get results from server so we can check for success
    $stmt->store_result();

    //Access num_rows as property of stmt after execution to count records
    if($stmt->affected_rows == 0)
        echo "ERROR occurred";
        
        else

        header('location:../login.php');
  }
?>