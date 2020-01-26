<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> functions parameters</title>
</head>
<body>
    <h1>Functions parameters</h1>
    <?php

       function greeting($message){
        echo "<h1>$message</h1>";
       } 
       greeting("Hello");
    

       function calculate($num1, $num2){
        $sum = $num1 * $num2;
        echo "<h2>$sum</h2>";
       }
       calculate(23, 45);
    
    ?>
</body>
</html>