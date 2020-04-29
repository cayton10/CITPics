<?
  require_once('../dbConfig/config.php');

  if(!empty($_POST))
  {
    //Assign variable values with posted info from AJAX call
    $picID = $_POST['picID'];
    $likes= $_POST['likes'];

    
    //Query pic table
    $query = "UPDATE pic SET p_Likes='" . $_POST['likes'] . "' WHERE p_ID='" . $_POST['picID'] . "'";

    //Prep stmt
    $stmt = $db->prepare($query);

    $stmt->execute();
    
    $response = [];

    $result = mysqli_query($db, $query);

    if($result)
    {
        $response['success'] = true;
        $response['message'] = "Likes updated successfully.";
    }
    else
    {
      $response['success'] = false;
      $response['error'] = 'Something was wrong with the query';
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