i<?php
    require "dbConnection.php";
    session_start();

    if (isset($_POST['submit'])){

        $username = $DB->real_escape_string($_POST['username']);
        $password = $DB->real_escape_string($_POST['password']);

        if(empty(trim($username))){
            header("location:../logInPage.php?InvalidForm");
        }else if(empty(trim($password))){
            header("location:../logInPage.php?InvalidForm");
        }else{

            $query = "SELECT * FROM accounts WHERE username = '$username';";

            $result = $DB->query($query);
            $num = mysqli_num_rows($result);

            if($num == 1){
                $row = mysqli_fetch_array($result);

                if(password_verify($password,$row['password'])){

                    $_SESSION['ID'] = $row['ID'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['surname'] = $row['surname'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['admin'] = $row['admin'];
                    $_SESSION['custom'] = $row['custom'];

                    header("location:../home.php");


                }else{
                    header("location:../logInPage.php?PasswordIncorrect");
                }

            }else{
                header("location:../logInPage.php?UsernameNotFound");
            }

        }

    }else{

    }