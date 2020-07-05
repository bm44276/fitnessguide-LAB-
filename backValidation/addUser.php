<?php
    require "dbConnection.php";

    if (isset($_POST['submit'])){

        $name = $DB->real_escape_string($_POST['first-name']);
        $surname = $DB->real_escape_string($_POST['last-name']);
        $email = $DB->real_escape_string($_POST['email']);
        $username = $DB->real_escape_string($_POST['user-name']);
        $password = $DB->real_escape_string($_POST['password']);
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
            
            $usernameTaken = "SELECT * FROM accounts WHERE username = '$username';";
            $result = $DB->query($usernameTaken);
            $num = mysqli_num_rows($result);

            if($num==0){
                $query = "INSERT INTO accounts (name,surname,email,username,password) VALUES ('$name','$surname','$email','$username','$hashedPassword');";
                $DB->query($query);
    
                header("location:../thankYouPage.php");
            }else{
                header("location:../signUpPage.php?UsernameIsTaken");
            }
        }


    }else{
        header("location:../signUpPage.php?NotSubmited");
    }