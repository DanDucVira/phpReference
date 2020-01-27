<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array Functions</title>
</head>
<body>
    <h1>Array Functions</h1>

    <?php
    $list = [345,34,535,3242,12];

    echo max($list);
    echo "<br>";

    echo min($list);
    echo "<br>";

    print_r($list);
    echo "<br>";

    sort($list);
    
    
    ?>
</body>
</html>