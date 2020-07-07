<?php
    session_start();
    require "backValidation\dbConnection.php";

    if(isset($_POST['submit'])){

        $weight = $DB->real_escape_string($_POST['weight']);
        $height = $DB->real_escape_string($_POST['height']); 
        $gender = $DB->real_escape_string($_POST['gender']);
        
        $query = "INSERT INTO customusers (weight,height,gender) VALUES ($weight,$height,'$gender');";
        $DB->query($query);

        $updateusercustom = "UPDATE customusers SET height = '$height',  weight = '$weight', gender = '$gender'  WHERE ID = '$_SESSION[custom]';";

        $DB->query($updateusercustom);


        header("location: setCustom.php");

    }else{
        header("location: setCustom.php?NotSubmited");
    }