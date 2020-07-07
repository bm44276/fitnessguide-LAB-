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
    <title>Your Fitnes Guide | Home</title>
    <link rel="stylesheet" href="css/home.css">
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
            <div class="imgDiv">
                <video src="images\backgroundvideo.mp4" autoplay id="myVideo" loop></video>
            </div>
            <section class="sector1">
                <div class="sect1">
                    <h1>Workout at home for free.</h1>
                    <p>
                        We believe fitness should be accessible to everyone,
                        everywhere,regardless of income or access to a gym. 
                        <br>
                        With hundreds of professional workouts, 
                        healthy recipes and informative articles, 
                        as well as one of the most positive communities 
                        on the web, you’ll have everything you need to
                        reach your personal fitness goals – for free!
                    </p>
                </div>
                <div class="sect2">
                        <div class="flexImg">
                                <a href="workouts.php"><div class="workouts"><h1>Workouts</h1></div></a> 
                                <a href="costum.php"><div class="Costum"><h1>Costum</h1></div></a>    
                        </div>
                        <div class="flexImg">
                                <a href="food.php"><div class="food"><h1>Food</h1></div></a>
                                <a href="profile.php"><div class="profile"><h1>Profile</h1></div></a> 
                        </div>
                </div>
                        
            </section>

            <section class="sector2 workO">
                    <a href="workouts.php" style="text-decoration:none;"><h1  style="color:black">WorkOuts</h1> </a>  
                <div class="sec1">
                     <div id="info1">
                <h3>Why exercise</h3>
                <p>Exercising is more than just keeping your body in shape and looking good.<br> Excercising reduces your risk of heart disease, high blood pressure, osteoporosis, diabetes, and obesity.</p>
            </div>
            <div id="info2">
                <h3>Why use us</h3>
                <p>As a new begginer anyone needs help, with our website we will show you different<br>types of exercises shall they be homeworkout or gym ones</p>
            </div>
                           
                </div>
            </section>
            <section class="sector2 fod">
                 <a href="food.php" style="text-decoration:none;"><h1  style="color:black">Food</h1></a>   
                <div class="sec1">
                    <div id="info3">
                <h3>Nutrition Information</h3>
                <p>In our page you will also find information about foods that help you in a healthier diet and to build muscle</p>
            </div>

            <div id="info3">
                <h3>Healthy Information</h3>
                <p>Good nutrition is an important part of leading a healthy lifestyle. Combined with physical activity, your diet can help you to reach and maintain a healthy weight, reduce your risk of chronic diseases (like heart disease and cancer), and promote your overall health.</p>
            </div>
                </div>
            </section>

            <section class="sector2 cost">
                <a href="costum.php" style="text-decoration:none;"><h1  style="color:black">Costum</h1></a>
                <div class="secCostum">
                    <p>
                        Not sure where to start?
                        The website offers a costum workout page where you can add your favorite workout based on your height and weight.
                        All you need to do is click the link on the navigation bar that says Costum.
                    </p>
                </div>
            </section>
        </main>

        <footer>
             <?php include "inc/footer.php" ;?>
        </footer>

</body>
</html>
