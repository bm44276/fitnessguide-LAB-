<?php

    session_start();

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
                include "admin\adminHeader.php" ;
            }else{
                include "inc/header.php" ;
            }
           ?>
        </header>

        <main>
            <div class="imgDiv">
                <img src="images/Component 3 – 2.png" alt="">
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
                    <div>
                        <video controls poster=""> <source src="Lower Body 12.mp4" type="video/mp4"></video> 
                        <p style="letter-spacing: 1px; margin-top: 5px">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum fuga veritatis nostrum sit a laboriosam voluptatibus quas maxime omnis porro repellat maiores amet accusamus corrupti, harum vel suscipit facilis. Maxime!</p>
                    </div>
                           
                </div>
            </section>
            <section class="sector2 fod">
                 <a href="food.php" style="text-decoration:none;"><h1  style="color:black">Food</h1></a>   
                <div class="sec1">
                    <div>
                        <img src="images/background.png" alt="">
                        <p style="letter-spacing: 1px; margin-top: 5px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum aliquam molestiae blanditiis quas nisi deserunt, perspiciatis laborum laudantium dolorum perferendis aliquid, ratione, recusandae fugiat. Doloremque facere ab reprehenderit cum nam?</p>
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
