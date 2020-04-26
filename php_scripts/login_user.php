<?
    //START SESSION TO BRING IN ADMIN SESSION VAR
    session_start();
    if(!empty($_SESSION['isAdmin']))
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
        header('../login.php');
    }    
?>