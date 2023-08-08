<?php
$username = "root";
$password = "";
$hostname = "localhost";
$dbname = "your_database_name";


$dbconnect = new mysqli($hostname, $username, $password);

if ($dbconnect->connect_error){
die("Could not select dbName:". $dbconnect->connect_error);
}
echo "Connected to MySQL succesfully";
$dbconnect->close()
?>