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
    <title>Document</title>
    <link rel="stylesheet" href="css/workouts.css">
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
            <section class="sector1">
                <div class="sect1">
                    <h1 style="font-size:35px">Workouts </h1>
                    <p>
                        It’s that time of the year when almost everyone has set a resolution for their body. 
                        However, for most people starting to go to the gym is incredibly difficult. 
                        It’s hard to find the time in our busy schedules to actually go to the gym and work out.
                        Well, no worries as with today’s technology you can bring the gym to your home.
                    </p>
                </div>
                <div class="sect2">
                    <h1 style="margin-right: 50px;">Newer Workouts</h1>
                        <div class="flexImg">
                        <?php
                            require "backValidation\dbConnection.php";

                            $query = "SELECT * FROM fullbody ORDER BY ID DESC LIMIT 1;";
                            $result = $DB->query($query);

                            $row = mysqli_fetch_array($result);
                                $videoName = basename($row['videopath'],".mp4");
                                ?>
                            <div>
                            <video controls poster="admin/<?php echo $row['photopath']?>"  src="admin/<?php echo $row['videopath']?>" type="video/mp4"></video> 
                            <p style="letter-spacing: 1px; margin-top: 5px"><?php echo $videoName?></p>
                            </div>
                            <?php
                                 $query = "SELECT * FROM lowerbody ORDER BY ID DESC LIMIT 1;";
                            $result = $DB->query($query);

                            $row = mysqli_fetch_array($result);
                                $videoName = basename($row['videopath'],".mp4");
                                ?>
                                <div>
                            <video controls poster="admin/<?php echo $row['photopath']?>"  src="admin/<?php echo $row['videopath']?>" type="video/mp4"></video> 
                            <p style="letter-spacing: 1px; margin-top: 5px"><?php echo $videoName?></p>
                                 </div>

                        </div>

                        <div class="flexImg">
                        <?php
                            require "backValidation\dbConnection.php";

                            $query = "SELECT * FROM upperbody ORDER BY ID DESC LIMIT 1;";
                            $result = $DB->query($query);

                            $row = mysqli_fetch_array($result);
                                $videoName = basename($row['videopath'],".mp4");
                                ?>
                            <div>
                            <video controls poster="admin/<?php echo $row['photopath']?>"  src="admin/<?php echo $row['videopath']?>" type="video/mp4"></video> 
                            <p style="letter-spacing: 1px; margin-top: 5px"><?php echo $videoName?></p>
                            </div>
                            <?php
                                 $query = "SELECT * FROM cardio ORDER BY ID DESC LIMIT 1;";
                            $result = $DB->query($query);

                            $row = mysqli_fetch_array($result);
                                $videoName = basename($row['videopath'],".mp4");
                                ?>
                            <div>
                            <video controls poster="admin/<?php echo $row['photopath']?>"  src="admin/<?php echo $row['videopath']?>" type="video/mp4"></video> 
                            <p style="letter-spacing: 1px; margin-top: 5px"><?php echo $videoName?></p>
                            </div>
                        </div>
                </div>
                        
            </section>

            <section class="sector2">
                <div class="title">
                    <h1>Full Body</h1> 
                    <a href="displayVideos.php?type=FullBody">More</a>
                </div>
                   
                    <div class="sec1">
                        <?php
                            require "backValidation\dbConnection.php";

                            $query = "SELECT * FROM fullbody ORDER BY ID DESC LIMIT 4;";
                            $result = $DB->query($query);

                            while($row = mysqli_fetch_assoc($result)){
                                $videoName = basename($row['videopath'],".mp4");
                                ?>

                        <div>
                            <video controls poster="admin/<?php echo $row['photopath']?>"  src="admin/<?php echo $row['videopath']?>" type="video/mp4"></video> 
                            <p style="letter-spacing: 1px; margin-top: 5px"><?php echo $videoName?></p>
                        </div>
                            <?php
                                }
                            ?>
                    
                           
                </div>
            </section>

            <section class="sector2">
                <div class="title">
                    <h1>Upper Body</h1> 
                    <a href="displayVideos.php?type=UpperBody">More</a>
                </div>
                   
                    <div class="sec1">
                    <?php
                            require "backValidation\dbConnection.php";

                            $query = "SELECT * FROM upperbody ORDER BY ID DESC LIMIT 4;";
                            $result = $DB->query($query);

                            while($row = mysqli_fetch_assoc($result)){
                                $videoName = basename($row['videopath'],".mp4");
                                ?>

                        <div>
                            <video controls poster="admin/<?php echo $row['photopath']?>"  src="admin/<?php echo $row['videopath']?>" type="video/mp4"></video> 
                            <p style="letter-spacing: 1px; margin-top: 5px"><?php echo $videoName?></p>
                        </div>
                            <?php
                                }
                            ?>
                           
                </div>
            </section>

            <section class="sector2">
                <div class="title">
                    <h1>Lower Body</h1> 
                    <a href="displayVideos.php?type=LowerBody">More</a>
                </div>
                   
                    <div class="sec1">
                    <?php
                            require "backValidation\dbConnection.php";

                            $query = "SELECT * FROM lowerbody ORDER BY ID DESC LIMIT 4;";
                            $result = $DB->query($query);

                            while($row = mysqli_fetch_assoc($result)){
                                $videoName = basename($row['videopath'],".mp4");
                                ?>

                        <div>
                            <video controls poster="admin/<?php echo $row['photopath']?>"  src="admin/<?php echo $row['videopath']?>" type="video/mp4"></video> 
                            <p style="letter-spacing: 1px; margin-top: 5px"><?php echo $videoName?></p>
                        </div>
                            <?php
                                }
                            ?>
                           
                </div>
            </section>

            <section class="sector2">
                <div class="title">
                    <h1>Cardio</h1> 
                    <a href="displayVideos.php?type=Cardio">More</a>
                </div>
                   
                    <div class="sec1">
                    <?php
                            require "backValidation\dbConnection.php";

                            $query = "SELECT * FROM cardio ORDER BY ID DESC LIMIT 4;";
                            $result = $DB->query($query);

                            while($row = mysqli_fetch_assoc($result)){
                                $videoName = basename($row['videopath'],".mp4");
                                ?>

                        <div>
                            <video controls poster="admin/<?php echo $row['photopath']?>"  src="admin/<?php echo $row['videopath']?>" type="video/mp4"></video> 
                            <p style="letter-spacing: 1px; margin-top: 5px"><?php echo $videoName?></p>
                        </div>
                            <?php
                                }
                            ?>
                           
                </div>
            </section>

        </main>

        <footer>
        <?php include "inc/footer.php" ;?>
        </footer>
</body>
</html>