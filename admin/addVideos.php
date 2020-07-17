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
    <div class="all">
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
    <form action="addVideoDB.php" method="POST" enctype='multipart/form-data' id="VidForm">
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
        <br>
            <input type="submit" name="submit">
        </form>
        
        <form action="addVideoDB.php" method="POST" enctype='multipart/form-data' id="CosForm">
            <h1>Add Custum Videos</h1>
            <label for="">Photo</label>
            <input type="file" name="photo">
            <br>
            <label for="">Video</label>
            <input type="file" name="video">
            <br>
            <select name = "type"> 
                <option value="Normal">Normal</option>
                <option value="Overweight">OverWeight</option>
                <option value="UnderWeight">UnderWeight</option>
            </select>
            <br>
            <select name = "type2"> 
                <option value="M">Male</option>
                <option value="F">Female</option>
            </select>
            <br>
            <input type="submit" name="submit2">
        </form>
        <button id="btn" onclick="myfun()" style="width:300px">Change to Custom</button>
    </main>
        <footer>
            <img src="../images/Component 12 – 1@2x.png" alt="">
            <h3>&copy; YourFitnessGuide.com</h3>
        </footer>
        </div>
    
    <script>
        let btn = document.getElementById('btn');
        let cos= document.getElementById('CosForm');
        cos.style.display = "none";
        let vid = document.getElementById('VidForm');
        function myfun(){
          if(vid.style.display ==  "block"){
          btn.innerHTML = "Change to Videos";
          vid.style.display = "none";
          cos.style.display = "block";
          }else{
            btn.innerHTML = "Change to Costum";
            cos.style.display = "none";
            vid.style.display = "block";
          }
         
        }

    </script>
</body>
</html>
   
