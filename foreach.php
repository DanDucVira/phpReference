<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>For Each</title>
</head>
<body>
    <h1>For Each</h1>

    <?php
    
    $numbers = [245,123,141,5,6,677,232];
    foreach($numbers as $number){
        echo $number . "<br>";
    }
    ?>
</body>
</html>