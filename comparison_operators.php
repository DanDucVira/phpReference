<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Comparison and logical operators</title>
</head>
<body>
 <h1>Comparison and logical Operators</h1>   

<?php
echo "<br>";

//equal ==
//identical ===
// compare > < >= <= <>
//not equal !=
// not identical !==
//and &&
//or ||
//not !


if( 4 < 4){
    echo "it is true";
}


if( 4 <= 4){
    echo "it is true";
}
if( 4 == 4){
    echo "it is true";
}
if( 4 === 4){
    echo "it is true";
}
if( 4 === 4 || 5 < 10){
    echo "it is true";
}
if( 4 === 4 && 5 < 10){
    echo "it is true";
}

?>



</body>
</html>