<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Switch Statements</title>
</head>
<body>
    <h1>Switch Statements</h1>
    <?php
    echo "<br>";


    //switch statements syntax
    $number = 1;
    switch($number < 10){
        case 1:
            echo "this is 1";
            case 2:
            break;
                echo "this is 2";
                case 3:
                break;
                    echo "this is 3";
                    case 4:
                    break;
                        echo "this is 4";
                        default:
                        echo "we couldnt find any of the numbers"
    }

    
    
    ?>
</body>
</html>