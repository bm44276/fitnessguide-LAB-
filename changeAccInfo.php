<?php
  require "backValidation\dbConnection.php";
    session_start();

  if (isset($_POST['submit-button'])){

        $name = $DB->real_escape_string($_POST['first-name']);
        $surname = $DB->real_escape_string($_POST['last-name']);
        $email = $DB->real_escape_string($_POST['email']);

      


        if(empty(trim($name))){
            header("location: profile.php?InvalidForm");

        }else if(empty(trim($surname))){
            header("location: profile.php?InvalidForm");

        }else if(empty(trim($email))){
            header("location: profile.php?InvalidForm");

        }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            header("location: profile.php?InvalidForm");

        }else
           
            $query = "UPDATE accounts SET name = '$name', surname = '$surname', email = '$email' WHERE   username = '$_SESSION[username]'";
            $DB->query($query);

            $_SESSION['name'] = $name;
            $_SESSION['surname'] = $surname;
            $_SESSION['email'] = $email;
            header("location: profile.php?changed");
        }
            
        if(isset($_POST['change-password'])){

            $oldpassword = $DB->real_escape_string($_POST['password']);
            $newpassword = $DB->real_escape_string($_POST['newPassword']);
            
            $username = $_SESSION['username'];

            $query = "SELECT * FROM accounts WHERE username = '$username';";

            $result = $DB->query($query);
            $num = mysqli_num_rows($result);

            if($num == 1){
                $row = mysqli_fetch_array($result);

                if(password_verify($oldpassword,$row['password'])){

                $hashedPassword = password_hash($newpassword, PASSWORD_DEFAULT);

                $ID = $_SESSION['ID'];
                $changePasswordQuery  = "UPDATE accounts SET password = '$hashedPassword' WHERE username = '$_SESSION[username]'";
                $DB->query($changePasswordQuery );

                header("location: profile.php?PasswordChangedSuccessfully");
                
                }else{
                header("location: profile.php?passwordIncorrect");
                }

        }else{
        header("location: profile.php?AccountNotFound");
         }
    }else{
        header("location: profile.php?NotSubmited");
    }
    
