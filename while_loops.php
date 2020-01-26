<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=   0,  initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>While loops</title>
</head>
<body>
    <h1>While Loops</h1>
    <?php

    $counter = 0;
    while($counter <= 10){
        echo $counter;

        //one way to add one
        // $counter = $counter +1;

        //the better way
        $counter++;
    }
    
    
    ?>
</body>
</html>