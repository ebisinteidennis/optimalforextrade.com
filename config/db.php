<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
@define('DB_SERVER', 'localhost');
@define('DB_USERNAME', 'u242897466_optimalforextr');
@define('DB_PASSWORD', '8u|4A1&u;AB');
@define('DB_NAME', 'u242897466_optimalforextr');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>