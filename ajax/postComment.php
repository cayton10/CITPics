<?
  session_start();
  require_once('../dbConfig/config.php');

  if(!empty($_POST))
  {
    //If posted from Registration form, add user to DB
    //Create local variables from $_POST field
    $commentID = null;

    //NULL for auto incremented value on user entry
    $comment = htmlspecialchars(trim($_POST['c_Text']));

    $upTime = date("Y-m-d G:i:s");

    $picID = htmlspecialchars(trim($_POST['p_ID']));
    //Value from picID field is string convert to int
    $picID = (int)$picID;



    //Prepare query just like B. Morgan told me to WRITE to the DB
    $query = "INSERT INTO comment VALUES (?,?,?,?)";

    //Create stmt object
    $stmt = $db->prepare($query);
    if(!($smt = $db->prepare($query)))
    {
        echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
    }

    //Bind data params to query
    $stmt->bind_param('sssi', $commentID, $comment, $upTime, $picID);

    //Execute statement
    if($stmt->execute())

    //After execution, get results from server so we can check for success
    $stmt->store_result();
    //DECLARE JSON RESPONSE ARRAY


    $response = [];

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
    //Set header and return json
    header('Content-Type: application/json');
    echo(json_encode($response));

}

else
header('location: ../comments.php');
?>