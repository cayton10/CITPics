<?
    require_once('../dbConfig/config.php');
    /** PUT AN AJAX REQUEST METHOD IN PLACE IN ORDER TO PREVENT
     *  PEOPLE FROM SEEING THE JSON OBJECTS CONTAINING EMAIL ACCOUNTS
     *  STORED IN THE DB. THIS OBVIOUSLY DOESN'T SOLVE SECURITY ISSUES,
     *  BUT IT DOES ELIMINATE AN OBVIOUS ONE. 
     * 
     * IF THE REQUEST METHOD SENT TO THIS PAGE IS OF TYPE 'POST', PULL
     * EMAIL INFORMATION AND STORE AS JSON. 
     */
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
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
    }
    /**IF REQUEST TYPE IS NOT POST, REDIRECT TO REGISTRATION PAGE */
    else
    {
        header('location:../register.php');
    }
?>