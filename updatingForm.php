<?php
require_once "connecting.php";
$question = "SELECT * FROM registration WHERE id = ?";
$statement = mysqli_prepare($dbconnect,$query);
mysqli_stmt_bind_param($statement, "i",$id);
mysqli_stmt_execute($statement);
$result = mysqli_stmt_get_result($statement);
$data = mysqli_fetch_assoc($result);

if($data){
}

?>