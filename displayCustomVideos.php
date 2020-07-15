
<?php 
    session_start();
    require "backValidation\dbConnection.php";
    $obj = new DB();
    if(!isset($_SESSION['username'])){
        header("Location: logInPage.php");
     }
     
    

     $info = $obj->getCustomInfo($_SESSION['custom']);

     $row = mysqli_fetch_array($info);

    /* the formula for BMI is weight in kilograms divided by height in meters squared
     58kg/(1.65)^2
     the range is  18.5 to 24.9 normal*/
   
     $result = $row['weight']/($row['height']^2);
   

     $_SESSION['gender'] = $row['gender'];

     $_SESSION['height'] = $row['height'];
     $_SESSION['weight'] = $row['weight'];
    
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="css\displayCustomVideos.css">
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
    <?php
        if($result <= 18.5){
            $_SESSION['state'] = "underweight";
        }else if ($result >= 24.9){
            $_SESSION['state'] = "overweight";
        }else{
            $_SESSION['state'] = "normal";
        }
        ?>
            <div class="info">
                <p>Basen on the canculations of your height (<?php echo $row['height']?>) and your weight (<?php echo $row['weight']?>) you are in the <?php echo $_SESSION['state']?> range </p>
                <p>Here are some videos we recommend for you</p>
            </div>
        <?php

        $result2 = $obj->displayCustomVideos($_SESSION['gender'],$_SESSION['state']);
       
    ?>
     <main>
            <div class="vid">
                <?php
                    
                    if($_GET['videoID'] == 'Empty'){

                        $firstrowID = mysqli_fetch_array($result2);

                        $_GET['videoID'] = $firstrowID['ID'];

                    }

                    $currentVideo = "SELECT * FROM customvideos WHERE ID = '$_GET[videoID]'";
                    $result3 = $obj->connect()->query($currentVideo);
                    $video = mysqli_fetch_array($result3);

                ?>
            <video controls poster="admin/<?php echo $video['photopath']?>"  src="admin/<?php echo $video['videopath']?>" id="videoPlaying"></video> 
                     <p style="letter-spacing: 1px; margin-top: 5px" id="videotitle"><?php echo $video['name']?></p>
            </div>

            <div class="oVid">
            <p style="margin-bottom: 5px;">Up next:</p>
                <?php
                    while($row = mysqli_fetch_assoc($result2)){
                    
                     ?>

                    <div>
                    <a href="displayCustomVideos.php?videoID=<?php echo $row['ID']?>"><img src= "admin/<?php echo $row['photopath']?>" alt="image"></a>
                    <a href="displayCustomVideos.php?videoID=<?php echo $row['ID']?>"><p><?php echo $row['name']?></p></a>
                    </div>

                    <?php
                    }
                    ?>
                
            </div>
           
        </main>
    
        <div class="link">
                  <a href="changeCustom.php">Change your custom information</a>
        </div>

        <footer>
             <?php include "inc/footer.php" ;?>
        </footer>
    
</body>
</html>
