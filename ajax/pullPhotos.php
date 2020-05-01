<?
    require_once('../dbConfig/config.php');
    /** PUT AN AJAX REQUEST METHOD IN PLACE IN ORDER TO PREVENT
     *  PEOPLE FROM SEEING THE JSON OBJECTS CONTAINING PHOTO DATA
     *  STORED IN THE DB. THIS OBVIOUSLY DOESN'T SOLVE ALL SECURITY ISSUES,
     *  BUT IT DOES ELIMINATE AN OBVIOUS ONE. 
     * 
     * IF THE REQUEST METHOD SENT TO THIS PAGE IS OF TYPE 'POST', PULL
     * PHOTO INFORMATION AND STORE AS JSON. 
     */
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        //Query pic table to load all picture information as JSON
        //Use DESC  and ORDER BY to show most recent uploads. 
        $query = "SELECT * FROM pic ORDER BY p_Upload DESC";


        //Prep stmt
        $stmt = $db->prepare($query);
    
        $stmt->execute();
        //Store result of query

        $stmt->store_result();

        //Return error handling in JSON
        if($stmt->num_rows == 0)
        {
            $allPics['success'] = false;
            $allPics['message'] = "No pictures to load.";
        }
        else
        {
            //Bind results on success
            $stmt->bind_result($picID, $picFileName, $picTitle, $picSummary, $picUpTime, $picLikes, $userID);
            while($stmt->fetch())
            {
                //Define index variables and assign
                //Dump pic table information into array for JSON output
                $allPics[] = array("p_ID"=>$picID,
                                "p_Filename"=>$picFileName, 
                                "p_Title"=>$picTitle, 
                                "p_Summary"=>$picSummary, 
                                "p_Upload"=>$picUpTime, 
                                "p_Likes"=>$picLikes, 
                                "u_ID"=>$userID);        
            }

        }

        //Return pics array as JSON
        echo json_encode($allPics);

    }
    /**IF REQUEST TYPE IS NOT POST, REDIRECT TO REGISTRATION PAGE */
    else
    {
        header('location:../register.php');
    }
?>