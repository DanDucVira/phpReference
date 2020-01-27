<?php
    

    if(isset($_POST['submit'])){
       $userName = $_POST['username'];
        $passWord = $_POST['password'];

        echo "Hello," . $userName;
        echo "<br>";
        echo "Your password is " . $passWord;
    }
    
    
    
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Form</h1>

 

    <form action="form.php" method="post">
        <input type="text" name="username" placeholder="enter Username">
        <br>
        <input type="password" name="password" placeholder="enter password">
        <br>
        <input type="submit" name="submit">
    
    </form>
</body>
</html>