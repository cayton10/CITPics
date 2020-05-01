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
        $id = htmlspecialchars(trim($_POST['u_ID']));
        //First fire query to get appropriate image and user who uploaded.
        $query = "SELECT p_ID,
                         p_Filename 
                  FROM   pic
                  WHERE u_ID=$id";


        //Prep stmt
        $stmt = $db->prepare($query);
    
        $stmt->execute();
        //Store result of query

        $stmt->store_result();
        //Return error handling in JSON array
        $allPics = [];
        if($stmt->num_rows == 0)
        {
            $allPics['success'] = false;
            $allPics['message'] = "No pictures to load.";
        }
        else
        {
           //Bind results on success
            $stmt->bind_result($picID, $filename);
            while($stmt->fetch())
                {
                    //Dump all photos into array
                    $allPics[] = array("p_ID"=>$picID,
                                        "p_Filename"=>$filename);
                }
            $allPics['success'] = true;
            $allPics['message'] = "All pics from user # " . $id;

        }

        //Set header with appropriate json information... lick the stamp, and send it
        header('Content-Type: application/json');
        echo json_encode($allPics);

    }
    /**IF REQUEST TYPE IS NOT POST, REDIRECT TO REGISTRATION PAGE */
    else
    {
        header('location:../register.php');
    }
?>