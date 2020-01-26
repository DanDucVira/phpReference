<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>if Statements</title>
</head>
<body>
    <h1>if Statements</h1>

    <?php
        //simple if statement 
    if(20 < 10){
        echo "three is less than 10.";
    }
    else{
        echo "three isnt less than 10.";
    }
    echo "<br>";
    if(10 < 10){
        echo "three is less than 10.";
    }
    //elseif() is used for testing another condition if a if statement
    elseif(10 < 20){
        echo "three isnt less than 10.";
    }
    
    
    
    ?>
</body>
</html>