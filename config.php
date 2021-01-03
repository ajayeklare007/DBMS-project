<?php
/* this file containe DB configuration*/

define('DB_SERVER', 'LOCALHOST');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'login');

//try to make connection to DB

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//check the connection

if($conn == false){
    die("Error: Cannot Connect");
}

?>

̥