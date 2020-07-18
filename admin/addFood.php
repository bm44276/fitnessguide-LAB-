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
    <link rel="stylesheet" href="adminCss\addFood.css">
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

        <form action="addFoodDb.php" method="POST" enctype='multipart/form-data' id="foodForm">
                <h1>Add Food</h1>

                <label for="">Photo</label>
                <input type="file" name="photo">
                <br>

                <input type="text" name="title" id="title" placeholder="Title...">
                <br> <br>
                <textarea name="text" id="text" placeholder="Description..."></textarea>
                <br> <br> 

                <input type="submit" name="submit">
        </form>

        <button id="btn" onclick="myfun()" style="width:300px">Change to Edit Food</button>

        <div id="editFood">

        </div>

    </main>


        <footer>
            <img src="../images/Component 12 – 1@2x.png" alt="">
            <h3>&copy; YourFitnessGuide.com</h3>
        </footer>

        <script>
        let btn = document.getElementById('btn');
        let edit = document.getElementById('editFood');
        edit.style.display = "none";
        let food = document.getElementById('foodForm');
        function myfun(){
          if(food.style.display ==  "block"){
          btn.innerHTML = "Change to Add Food";
          food.style.display = "none";
          edit.style.display = "block";
          }else{
            btn.innerHTML = "Change to Edit Food";
            edit.style.display = "none";
            food.style.display = "block";
          }
         
        }

    </script>
</body>
</html>