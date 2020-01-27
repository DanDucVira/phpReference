<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Constants</title>
</head>
<body>
    <h1>Constants</h1>

    <?php
        $number = 10;
        echo $number;
        echo "<br>";
        define("name", "Sarah");

        echo name;

        // Works as of PHP 5.3.0
 
const CONSTANT = 'Hello World';
 
 
echo CONSTANT;
 
 
// Works as of PHP 5.6.0
 
const ANOTHER_CONST = CONSTANT.'; Goodbye World';
 
echo ANOTHER_CONST;
 
 
const ANIMALS = array('dog', 'cat', 'bird');
 
echo ANIMALS[1]; // outputs "cat"
 
 
// Works as of PHP 7
 
define('ANIMALS', array(
 
'dog',
 
'cat',
 
'bird'
 
));
 
echo ANIMALS[1]; // outputs "cat"

    ?>
</body>
</html>