<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Return Values from Functions</title>
</head>
<body>
        <h1>Return values from functions</h1>

        <?php
            function addNumbers($num1,$num2){
                $sum = $num1 + $num2;
                return $sum;
            }
           $result = addNumbers(42,76);
            echo $result;
        
        
        
        ?>
</body>
</html>