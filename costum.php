
<?php 
    session_start();

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
            <p>
                Not sure what videos to watch or what will help you,<br> 
                no need to worry, based on some info from you we will <br>
                recommend the best suited video to help you on your journey.
            </p>
        </div>
        <hr>
        <div class="inputs">
            <form action ="addCustom.php" method="POST">
                <input type="number" name="height" id="heights" placeholder="height">
                    <br>
                <input type="number" name="weight" id="weight" placeholder="weight">
                    <br>
               <!-- <div class = "flex-radio">
                    <div>
                        <label for="male">Male</label>
                            <input type="radio" id="male" name="gender" value="male">
                    </div>
                    <br> 
                    <div>
                        <label for="female">Female</label>
                            <input type="radio" id="female" name="gender" value="female">
                    </div>
                    <br>
                    <div>
                        <label for="other">Both</label>
                            <input type="radio" id="other" name="gender" value="other">
                    </div>
                </div>-->
                    <br>
                        <div class="selc">
                            <label for="information">Would you like your videos to be male female or both gender related</label>
                        <select name="gender">
                            <option value="B">Both</option>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                        </select>
                        </div>
                        

                <button>Save</button>

            </form>
        </div>
    </main>

    <footer>
         <?php include "inc/footer.php" ;?>
    </footer>

</body>

</html>
