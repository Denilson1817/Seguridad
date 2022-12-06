<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
session_start();
$DB_HOST=$_ENV["DB_HOST"];
$DB_USER=$_ENV["DB_USER"];
$DB_PASSWORD=$_ENV["DB_PASSWORD"];
$DB_NAME=$_ENV["DB_NAME"];
$DB_PORT=$_ENV["DB_PORT"];

/*attempt to connect to MySQL database */
$db=mysqli_connect("$DB_HOST","$DB_USER","$DB_PASSWORD","$DB_NAME","$DB_PORT");
?>