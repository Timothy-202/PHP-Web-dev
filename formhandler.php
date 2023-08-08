<?php
require_once "connecting.php";


$query = "INSERT INTO registration(firstName, secondName, email, telephone) VALUES (?, ? , ?, ?)";

 $st = mysqli_prepare($dbconnect,$query);
 mysqli_stmt_bind_param($st, "ssss", $fName, $sName, $email, $tel);

$fName = $_POST["firstName"];
$sName = $_POST["secondName"];
$email = $_POST["email"];
$tel = $_POST["telephone"];
if( mysqli_stmt_execute($st)){
    echo "Submitted succesfully";

}
else{
    die ("Execution failed".mysqli_error($dbconnect));
}
echo "This is the first name". " ". $fName;
echo "This my secondName". " ".$sName;
 mysqli_stmt_execute($st);
mysqli_stmt_close($st);
 mysqli_close($dbconnect);


?>