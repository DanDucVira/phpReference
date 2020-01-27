<?php
    

    if(isset($_POST['submit'])){
        $name = ["Daniel", "Student", "peter", "samid","tom"];
        $minimun = 5;
        $maximun = 10;
       $userName = $_POST['username'];
        $passWord = $_POST['password'];


        if(strlen($username < $minimun)){
            echo "username has to be longer than five";
        }
        
        if(strlen($username > $maximun)){
            echo "username has to be shorter than 10";
        }

        if(!in_array($username,$name)){
                echo "Sorry you cannot login";
        }
    //     echo "Hello," . $userName;
    //     echo "<br>";
    //     echo "Your password is " . $passWord;
    // }
    
    } 
    
    ?>
