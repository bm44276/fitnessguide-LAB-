<?php
    session_start();
    require "backValidation\dbConnection.php";

    if(isset($_POST['submit'])){

        $weight = $DB->real_escape_string($_POST['weight']);
        $height = $DB->real_escape_string($_POST['height']); 
        $gender = $DB->real_escape_string($_POST['gender']);
        
        $query = "INSERT INTO customusers (weight,height,gender) VALUES ($weight,$height,'$gender');";
        $DB->query($query);

        $num = (mysqli_fetch_array($DB->query("SELECT * FROM customusers ORDER BY ID DESC LIMIT 1")));
        

        $_SESSION['custom'] = $num['ID'];

        $updateusercustom = "UPDATE accounts SET custom = '$num[ID]' WHERE username = '$_SESSION[username]';";

        $DB->query($updateusercustom);


        header("location: setCustom.php");

    }else{
        header("location: setCustom.php?NotSubmited");
    }