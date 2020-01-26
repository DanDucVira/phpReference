<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays</title>
</head>
<body>
<h1>ARRAYS</h1>
    <?php
    //older way to make an array in php
    $numberList = array();

    //better way

    // $users = ["juanita","maria"];
    // print_r($users);
    // $numbers = [2,3,4,5,6,];
    // echo $numbers[2];
    
    // print_r($numbers);
    echo "<br>";
$names = ["Daniel","Sarah","jose"];
$names = array("first_name" => "Daniel");

echo $names['first_name'];
    
    ?>
</body>
</html>