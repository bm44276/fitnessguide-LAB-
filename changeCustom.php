
<?php 
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: logInPage.php");
     }
 
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Fitnes Guide | Costum</title>
    <link rel="stylesheet" href="css/costum.css">
    <link rel="icon" type="image/ico" href="images/Component 12 – 1@2x.png" >
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
    
        
        <main>
        <div>
            <h1>Change Your Custom</h1>
        </div>
        <hr>
            <div class="inputs">
            <form action ="" method="POST">
                <input type="number" name="height" id="heights" placeholder="height" step=".01">
                    <br>
                <input type="number" name="weight" id="weight" placeholder="weight" step=".01">
                    <br>
                    <br>
                        <div class="selc">
                            <label for="information">Would you like your videos to be male female or both gender related</label>
                        <select name="gender">
                            <option value="B">Both</option>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                        </select>
                        </div>
                        

                <button name="submit">Change</button>

            </form>
        </div>
    </main>


    <footer>
         <?php include "inc/footer.php" ;?>
    </footer>

</body>

</html>
