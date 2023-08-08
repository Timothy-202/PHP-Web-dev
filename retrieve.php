<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet"href = "day9\Bootstrap\css\bootstrap.min.css"/>
</head>
<body>
<?php
require_once "connecting.php";

$query = "SELECT * FROM registration";

$result = mysqli_query($dbconnect,$query);
while($data = mysqli_fetch_assoc($result)){
    echo "This is your firstname". $data['firstName']. 
    '<a href = "updatingForm.php?id='. $data['id'] . '"
    class = "btn btn-sm btn-primary">Edit</a>';
}

?>
    
</body>
</html>
