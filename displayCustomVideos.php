
<?php 
    session_start();
    require "backValidation\dbConnection.php";
    if(!isset($_SESSION['username'])){
        header("Location: logInPage.php");
     }
     
     $query = "SELECT * FROM customusers WHERE ID = '$_SESSION[custom]';";

     $info = $DB->query($query);

     $row = mysqli_fetch_array($info);

    /* the formula for BMI is weight in kilograms divided by height in meters squared
     58kg/(1.65)^2
     the range is  18.5 to 24.9 normal*/
     $result = $row['weight']/($row['height']^2);


    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
    <?php
            if($_SESSION['admin'] == 1){
                include "admin\adminUserHeader.php";
            }else{
                include "inc/header.php" ;
            }
           ?>
    </header>
    <h1>Hello to your custom workouts</h1>
    <p><?php echo $result?></p>
    <?php
        if($result <= 18.5){
            echo "underweight";
        }else if ($result >= 24.9){
            echo "overweight sorry";
        }else{
            echo "normal";
        }
    ?>
</body>
</html>