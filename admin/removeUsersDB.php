<?php 
      require "../backValidation\dbConnection.php";

    $id = $_GET["ID"];
    echo $id;

    $query = "DELETE FROM accounts WHERE ID = $id";

    $DB->query($query);

    header("Location:removeUsers.php");