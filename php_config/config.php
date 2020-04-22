<? //CREATE DB CONNECTION 
    //Create variable 'db' with mysqli class using appropriate DB parameters

    @$db = new mysqli('localhost', 'root', 'root', 'citpics');

    if (mysqli_connect_errno())
    {
        echo "<p>Error: Could not connect to database. Error: </p>" . mysqli_connect_errno();
        exit();
    }

?>

