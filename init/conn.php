<?php 
ob_start();
// Start the session
session_start();

// define('DBHOST', 'localhost');
// define('DBUSER', 'root');
// define('DBPASS', '');
// define('DBNAME', 'dum');


// define('WEBROOT', 'http://localhost:8012/dum/');



define('DBHOST', 'localhost');
define('DBUSER', 'dum_username');
define('DBPASS', 'dum_username');
define('DBNAME', 'dum_db07');


define('WEBROOT', 'http://dumindia.in/');

$db = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME) or die('Database is not connected: '.mysqli_error($db));
?>