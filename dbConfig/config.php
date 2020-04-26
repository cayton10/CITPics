<? 
    session_start();
    //CREATE DB CONNECTION 
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PW', 'root');
    define('DB_NAME', 'citpics');
    //Create variable 'db' with mysqli class using appropriate DB parameters
    @$db = new mysqli(DB_HOST, DB_USER, DB_PW, DB_NAME);
?>

