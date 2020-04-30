<?
  session_start();
  require_once('../dbConfig/config.php');

//Declare response array for ajax turn
//Store error handling messages for output
$response = [];

/**FROM PHP TEXTBOOK CHAPTER 17 HELPFUL FOR TROUBLE SHOOTING
 * FILE UPLOADS AND ERROR HANDLING. USE CONTROL FLOW 'IF' 
 * AND STORE IN $RESPONSE ARRAY TO REPORT AS JSON OBJECT.
 * OUTPUT ON RETURN IF ISSUES ARISE.
 */

  if($_FILES['img']['error'] > 0)
  {
      
      $response['error'] = "Error: ";
      //SWITCH STATEMENT FROM BOOK USEFUL FOR TRACKING DOWN ERRORS W/ UPLOAD
      switch ($_FILES['img']['error'])
      { //Since error values are from 1-8 but skip 5
        case 1:
            $response['success'] = false;
            $response['error'] .= 'File exceeded upload_max_filesize.';
            break;
        case 2:
            $response['success'] = false;
            $response['error'] .= 'File exceeded max_file_size.';
            break;
        case 3:
            $response['success'] = false;
            $response['error'] .= 'File only partially uploaded.';
            break;
        case 4:
            $response['success'] = false;
            $response['error'] .= 'No file uploaded.';
            break;
        case 6:
            $response['success'] = false;
            $response['error'] .= 'Cannot upload file: No temp directory specified.';
            break;
        case 7:
            $response['success'] = false;
            $response['error'] .= 'Upload failed: Cannot write to disk.';
            break;
        case 8:
            $response['success'] = false;
            $response['error'] .= 'A PHP extension blocked the file upload.';
            break;

      }

  }
  
  //Check that post request isn't empty
  else if(!empty($_POST) && $_FILES['img']['error'] == 0)
  {


     /**STORE PHOTO IN TEMP FOLDER WHILE CHECKING FOR PROPER 
     * FILE PARAMETERS. IF PARAMETERS CHECK OUT, STORE PHOTO
     * IN APPROPRIATE DIRECTORY
     */
    //Declare response array for logging information
   


    //Here's the uploads directory relative path
    $uploaded_file = '../../../uploads/';
    $img = $_FILES['img']['name'];
    $tmp = $_FILES['img']['tmp_name'];

    //Place img file where we want it. 
    $uploaded_file .= $img;
    //If file is uploaded and found in temporary directory,
    if(is_uploaded_file($tmp))
    {
        //If we can't move the file from temp storage to the uploads directory,
        if(!move_uploaded_file($tmp, $uploaded_file))
        {
            $response['success'] = false;
            $response['error'] = "Problem: Could not move file to destination directory.";
        }
        else if(empty($_SESSION['userID']))
        {
            $response['success'] = false;
            $response['error'] = "Invalid user.";
        }
        else

        //If it works, log appropriate response for uploading
        $response['success'] = true;
        $response['message'] = "Image uploaded successfully. ";

        
        
        /**LOAD INFORMATION FROM AJAX CALL INTO VARIABLES FOR 
         * DB UPLOAD INSERT VALUES INTO pic TABLE AFTER IMG
         * HAS BEEN PLACED IN UPLOADS FOLDER.
         */

        
        
        $p_ID = null;
        //NULL for auto incremented value on picture ID
        $fileName = htmlspecialchars(trim($_POST['file']));
        $imgTitle = htmlspecialchars(trim($_POST['title']));
        $imgSummary = htmlspecialchars(trim($_POST['summary']));
        //Set timestamp
        $upTime = date("Y-m-d G:i:s");
        $likes = 0;
        $userID = $_SESSION['userID'];

        //Prepare query just like B. Morgan told me to WRITE to the DB
        $query = "INSERT INTO pic VALUES (?,?,?,?,?,?,?)";

        //Create stmt object
        $stmt = $db->prepare($query);

        //Bind data params to query
        $stmt->bind_param('issssii', $p_ID, $fileName, $imgTitle, $imgSummary, $upTime, $likes, $userID);

        //Execute statement
        $stmt->execute();

        //After execution, get results from server so we can check for success
        $stmt->store_result();

        //Access num_rows as property of stmt after execution to count records
        if($stmt->affected_rows == 0)
        {
            $response['success'] = false;
            $response['error'] .= 'Could not upload file.';
        }   
        else
        {
            $response['success'] = true;
            $response['message'] .= 'Info added to database.';
        }
        
    }
    //Set header with appropriate json information... lick the stamp, and send it
    header('Content-Type: application/json');
    echo(json_encode($response));

  }
  

  else
  {
      header('location:../upload.php');
  }
?>