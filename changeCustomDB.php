<?php
    session_start();
    require "backValidation\dbConnection.php";
    $obj = new DB();
    if(isset($_POST['submit'])){

        $weight = $obj->connect()->real_escape_string($_POST['weight']);
        $height = $obj->connect()->real_escape_string($_POST['height']); 
        $gender = $obj->connect()->real_escape_string($_POST['gender']);
        
        $obj->changeCustomInfo($height,$weight,$gender,$_SESSION['custom']);


    }else{
        header("location: setCustom.php?NotSubmited");
    }