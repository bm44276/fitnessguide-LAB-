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
    <link rel="stylesheet" href="adminCss\addVideos.css">
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
    <div>
    <?php
    if($_SESSION['admin'] == 1){
         
          include "adminOptions.php";
    }
    ?>
    </div>
    <main>
    <form action="addVideoDB.php" method="POST" enctype='multipart/form-data'>
            <h1>Add Videos</h1>
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
    <main/>
        <footer>
            <img src="../images/Component 12 – 1@2x.png" alt="">
            <h3>&copy; YourFitnessGuide.com</h3>
        </footer>
</body>
</html>
   
