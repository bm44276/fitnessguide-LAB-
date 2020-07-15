<?php
  require "backValidation\dbConnection.php";
    session_start();
    $obj = new DB();
  if (isset($_POST['submit-button'])){

        $name = $obj->connect()->real_escape_string($_POST['first-name']);
        $surname = $obj->connect()->real_escape_string($_POST['last-name']);
        $email = $obj->connect()->real_escape_string($_POST['email']);

      


        if(empty(trim($name))){
            header("location: profile.php?InvalidForm");

        }else if(empty(trim($surname))){
            header("location: profile.php?InvalidForm");

        }else if(empty(trim($email))){
            header("location: profile.php?InvalidForm");

        }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            header("location: profile.php?InvalidForm");

        }else
           
            $obj->changeAccountInfo($name,$surname,$email,$_SESSION['username']);

            $_SESSION['name'] = $name;
            $_SESSION['surname'] = $surname;
            $_SESSION['email'] = $email;
            header("location: profile.php?changed");
        }
            
        if(isset($_POST['change-password'])){

            $oldpassword = $obj->connect()->real_escape_string($_POST['password']);
            $newpassword = $obj->connect()->real_escape_string($_POST['newPassword']);
            
            $obj->changePassword($_SESSION['username'],$oldpassword,$newpassword);
           
    }else{
        header("location: profile.php?NotSubmited");
    }
    
