<?
    require_once('../dbConfig/config.php');
    

    //Query user table to restrict duplicate emails on registration
    $query = "SELECT u_Email FROM user";


    //Prep stmt
    $stmt = $db->prepare($query);
 
    $stmt->execute();
    //Store result of query

    $stmt->store_result();
    
    //Bind results on success
    $stmt->bind_result($email);
    
    while($stmt->fetch())
    {
        //Define an index variable and assign
       
        //Dump emails into allEmail array for comparison
        $allEmail[] = array("email"=>$email);
        
    }
    //Return email array as JSON
    echo json_encode($allEmail);
?>