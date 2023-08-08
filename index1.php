<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $school = "BASS";
    function timothy(){
       global $school;
      
        $name ="Timothy";
        $salary = 2000;
        $age = 18;
        $mylikes = array("coding", "reading", 233.3, true);
        $likes = implode(", ", $mylikes);
        echo "My name is $name,
        My expected salary is  $salary,
        My age is $age,
        My school is $school";
    }
      echo timothy();

?>
</body>
</html>