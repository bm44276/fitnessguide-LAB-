<?php
    require "../backValidation\dbConnection.php";
    session_start();
    if(!isset($_SESSION['username'])){
        header("location: ../logOut.php");
    }
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
          include "adminHeader.php";
        }else{
            header("location: ../logOut.php");
        }
          ?>
    </header>
    <form action="addVideoDB.php" method="POST" enctype='multipart/form-data'>
            <label for="">Photo</label>
            <input type="file" name="photo">
            <br>
            <label for="">Video</label>
            <input type="file" name="video">
            <br>
            <select name = "type"> 
                <option value="FullBody">FullBody</option>
                <option value="LowerBody">LowerBody</option>
                <option value="UpperBody">UpperBody</option>
                <option value="Cardio">Cardio</option>
            </select>
            <input type="submit" name="submit">
        </form>

</body>
</html>
   