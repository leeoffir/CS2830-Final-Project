<?php

    $correctUser = 'test';
    $correctPass = 'pass';

    if(isset($_POST['submit'])){
        $user = htmlspecialchars($_POST['user']);
        $pass =  htmlspecialchars($_POST['pass']);
        if($user == $correctUser){
            if($pass == $correctPass){
                 header("Location: profile.php");
            } else {
                echo "incorrect password";
            }
        } else {
            echo "invalid user";
        }
    }




?>
