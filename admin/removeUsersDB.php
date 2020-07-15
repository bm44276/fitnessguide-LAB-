<?php 
      require "../backValidation\dbConnection.php";
      $obj = new DB();

    $id = $_GET["ID"];
    echo $id;

    $query = "DELETE FROM accounts WHERE ID = $id";

    $obj->connect()->query($query);

    header("Location:removeUsers.php");