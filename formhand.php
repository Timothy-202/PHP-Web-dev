<?php
require_once "connecting.php";


$query = "INSERT INTO registration(myName,  inputEmail) VALUES (?, ? )";

 $st = mysqli_prepare($dbconnect,$query);
 mysqli_stmt_bind_param($st,"ss", $sName,   $email,);

$sName = $_POST["myName"];
$email = $_POST["inputEmail"];

if( mysqli_stmt_execute($st)){
    echo "Submitted succesfully";

}
else{
    die ("Execution failed".mysqli_error($dbconnect));
}
echo "This is the first name". " ". $sName;
echo "This my email". " ".$email;
 mysqli_stmt_execute($st);
mysqli_stmt_close($st);
mysqli_close($dbconnect);


?>