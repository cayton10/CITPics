<?
  session_start();
  require_once('../dbConfig/config.php');

  //if(!empty($_POST))
  {
    //If posted from Registration form, add user to DB
    //Create local variables from $_POST field
    $commentID = null;
    echo $commentID;
    echo gettype($commentID) . "<br />";
    //NULL for auto incremented value on user entry
    $comment = htmlspecialchars(trim($_POST['commentBody']));
    echo $comment;
    echo gettype($comment)  . "<br />";
    $upTime = date("Y-m-d G:i:s");
    echo $upTime;
    echo gettype($upTime)  . "<br />";
    $picID = htmlspecialchars(trim($_POST['picID']));
    //Value from picID field is string convert to int
    $picID = (int)$picID;
    echo (int)$picID;
    echo gettype($picID);


    //Prepare query just like B. Morgan told me to WRITE to the DB
    $query = "INSERT INTO comment VALUES (?,?,?,?)";

    //Create stmt object
    $stmt = $db->prepare($query);
    if(!($smt = $db->prepare($query)))
    {
        echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
    }

    //Bind data params to query
    $stmt->bind_param('s,s,s,i', $commentID, $comment, $upTime, $picID);
    if (!$stmt->bind_param('s,s,s,i', $commentID, $comment, $upTime, $picID)) {
        echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
    }
    //Execute statement
    if($stmt->execute())
    {
        echo "True <br/>";
    }
    else
        echo "False <br/>";

    //After execution, get results from server so we can check for success
    $stmt->store_result();
    //DECLARE JSON RESPONSE ARRAY
    printf($stmt ->store_result());
    echo $stmt->execute();
    echo "<br/>";
    $response = [];
    echo $stmt->affected_rows;

    echo $stmt->errno;

    //Access num_rows as property of stmt after execution to count records
    if($stmt->affected_rows <= 0)
    {
        $response['success'] = false;
        $response['message'] = "Could not update comment in DB.";
    }
        else
    {
        $response['success'] = true;
        $reponse['message'] = "Comment successfully added to DB.";
    }
    //LICK STAMP AND SEND IT
    echo(json_encode($response));
    echo $reponse['message'];
}

//else
//header('location: ../comments.php');
?>