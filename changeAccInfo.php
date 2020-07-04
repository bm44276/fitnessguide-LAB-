<?php
  require "backValidation\dbConnection.php";
    session_start();

  if (isset($_POST['submit-button'])){

        $name = $DB->real_escape_string($_POST['first-name']);
        $surname = $DB->real_escape_string($_POST['last-name']);
        $email = $DB->real_escape_string($_POST['email']);

        $oldpassword = $DB->real_escape_string($_POST['password']);
        $newpassword = $DB->real_escape_string($_POST['newPassword']);
        


        if(empty(trim($name))){
            header("location: profile.php?InvalidForm");

        }else if(empty(trim($surname))){
            header("location: profile.php?InvalidForm");

        }else if(empty(trim($email))){
            header("location: profile.php?InvalidForm");

        }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            header("location: profile.php?InvalidForm");

        }else if(empty(trim($oldpassword)) && empty(trim($newpassword))){   
            $ID = $_SESSION['ID'];
            $query = "UPDATE accounts SET name = '$name', surname = '$surname', email = '$email' WHERE ID = $ID;";
            $DB->query($query);

            $_SESSION['name'] = $name;
            $_SESSION['surname'] = $surname;
            $_SESSION['email'] = $email;
            header("location: profile.php?changed");
        }else{
            
            $username = $_SESSION['username'];

            $query = "SELECT * FROM accounts WHERE username = '$username';";

            $result = $DB->query($query);
            $num = mysqli_num_rows($result);

            if($num == 1){
                $row = mysqli_fetch_array($result);

                if(password_verify($oldpassword,$row['password'])){

                $hashedPassword = password_hash($newpassword, PASSWORD_DEFAULT);

                $ID = $_SESSION['ID'];
                $query2 = "UPDATE accounts SET name = '$name', surname = '$surname', email = '$email' password = '$hashedPassword' WHERE ID = $ID;";
                $DB->query($query2);

                $_SESSION['name'] = $name;
                $_SESSION['surname'] = $surname;
                $_SESSION['email'] = $email;
                header("location: profile.php?changedFullInfo");

        }else{
          header("location: profile.php?passwordIncorrect");
        }
    }else{
        header("location: profile.php?AccountNotFound");
    }
           
    }
}else{
    header("location: profile.php?NotSubmited");
}