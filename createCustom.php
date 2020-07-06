<?php
    session_start();
    require "backValidation\dbConnection.php";

    if(isset($_POST['submit'])){

        $weight = $DB->real_escape_string($_POST['weight']);
        $height = $DB->real_escape_string($_POST['height']); 
        $gender = $DB->real_escape_string($_POST['gender']);
        
        $query = "INSERT INTO customusers (weight,height,gender) VALUES ($weight,$height,'$gender');";
        $DB->query($query);

        $num = (mysqli_num_rows($DB->query("SELECT * FROM customusers")));
        
        $updateusercustom = "UPDATE accounts SET custom = $num WHERE username = '$_SESSION[username]';";

        $DB->query($updateusercustom);

        $_SESSION['custom'] = $num;

        header("location: setCustom.php");

    }else{
        header("location: setCustom.php?NotSubmited");
    }