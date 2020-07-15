<?php
    session_start();
    require "backValidation\dbConnection.php";
    $obj = new DB();
    if(isset($_POST['submit'])){

        $weight =  $obj->connect()->real_escape_string($_POST['weight']);
        $height =  $obj->connect()->real_escape_string($_POST['height']); 
        $gender =  $obj->connect()->real_escape_string($_POST['gender']);
        


       $obj->createCustom($weight,$height,$gender,$_SESSION['username']);
       $_SESSION['custom'] = $obj->getCustomId($_SESSION['username']);


    }else{
        header("location: setCustom.php?NotSubmited");
    }