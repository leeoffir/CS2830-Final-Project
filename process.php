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

    if(isset($_POST['action']) && !empty($_POST['action'])){
      $action = $_POST['action'];
      switch ($action) {
        case 'about': displayAbout(); break;


        default:  break;
      }
    }

    function displayAbout(){
    echo 'This is the fan page for the greatest Quarterback of all time Tom Brady.
    <br><br>
    Only a true fan knows the login credientials to view this page.
    <br><br>
    This
    ';
    }




?>
