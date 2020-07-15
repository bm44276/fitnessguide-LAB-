<?php
    require "dbConnection.php";
    $obj = new DB();
    if (isset($_POST['submit'])){

        $name = $obj->connect()->real_escape_string($_POST['first-name']);
        $surname = $obj->connect()->real_escape_string($_POST['last-name']);
        $email = $obj->connect()->real_escape_string($_POST['email']);
        $username = $obj->connect()->real_escape_string($_POST['user-name']);
        $password = $obj->connect()->real_escape_string($_POST['password']);
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);


        if(empty(trim($name))){
            header("location:../signUpPage.php?InvalidForm");
        }else if(empty(trim($surname))){
            header("location:../signUpPage.php?InvalidForm");
        }else if(empty(trim($email))){
            header("location:../signUpPage.php?InvalidForm");
        }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            header("location:../signUpPage.php?InvalidForm");
        }else if(empty(trim($username))){
            header("location:../signUpPage.php?InvalidForm");
        }else if(empty(trim($password))){
            header("location:../signUpPage.php?InvalidForm");
        }else if(strlen("$password") < 6){
            header("location:../signUpPage.php?InvalidFormPassword");
        }else{
           
            $obj->addUser($name,$surname,$email,$username,$hashedPassword);
        }


    }else{
        header("location:../signUpPage.php?NotSubmited");
    }