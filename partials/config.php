<?php
/* Database configuration settings: using constants for db server, db username, db pwd and db name */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'dbzavrsniprojekat');
 
/* Connect to 'dbzavrsni projekat' database */
$con = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($con === false){
    die("ERROR: Could not connect. " . $con->connect_error);
}
if (!$con->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $mysqli->error);
    exit();
} 

?>