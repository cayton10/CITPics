<?
    session_start();
    //
    if(!isset($_SESSION['name']) || $_SESSION['isAdmin'] != 1)
    {
        header('location:index.php');
    }
    require_once('dbConfig/config.php');

    echo $_SESSION['name'];
    echo $_SESSION['isAdmin'];

    require_once('header.php');
    

    require_once('footer.php');

?>
