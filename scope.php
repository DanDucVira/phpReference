<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scope</title>
</head>
<body>
    <h1>Scope</h1>
    <?php
        $x = "outside";

        function covert(){
            $x = "inside";
        }

        echo $x;

        echo "<br>";

      covert();
    
    ?>
</body>
</html>