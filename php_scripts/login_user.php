<?
    //START SESSION TO BRING IN ADMIN SESSION VAR
    session_start();
    //If admin session variable is set,
    if(isset($_SESSION['isAdmin']))
    {
        //If not an admin
        if($_SESSION['isAdmin'] == 0)
        {
            //Send to gallery
            header('location:../feed.php');
        }
        else
        {
            //Send to admin page
            header('location:../admin.php');
        }

    }
    else
    {
        //If 'isAdmin' session variable is empty, send back to login
        header('location:../login.php');
    }    
?>