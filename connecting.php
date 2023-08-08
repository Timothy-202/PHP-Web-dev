<?php
$hostname = "localhost";
$username = "root";
$password = "";

$dbname = "registration";


$dbconnect = mysqli_connect($hostname, $username, $password,$dbname);

if ($dbconnect->connect_error){
 die("Could not select dbName:". $dbconnect->connect_error);
}
?>