
<?php 
    session_start();
    require "backValidation\dbConnection.php";
    if(!isset($_SESSION['username'])){
        header("Location: logInPage.php");
     }
     
     $query = "SELECT * FROM customusers WHERE ID = '$_SESSION[custom]';";

     $info = $DB->query($query);

     $row = mysqli_fetch_array($info);

    /* the formula for BMI is weight in kilograms divided by height in meters squared
     58kg/(1.65)^2
     the range is  18.5 to 24.9 normal*/
   
     $result = $row['weight']/($row['height']^2);

     $_SESSION['gender'] = $row['gender'];
    
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

        $result2;
        if($_SESSION['gender'] == 'B'){
            $selectVideos = "SELECT * FROM customvideos WHERE state = '$_SESSION[state]';";
            $result2 = $DB->query($selectVideos);
        }else{
            $selectVideos = "SELECT * FROM customvideos WHERE state = '$_SESSION[state]' AND gender = '$_SESSION[gender]';";
            $result2 = $DB->query($selectVideos);
        }

        


    ?>
     <main>
            <div class="vid">
                <?php
                    
                    if($_GET['videoID'] == 'Empty'){

                        $firstrowID = mysqli_fetch_array($result2);

                        $_GET['videoID'] = $firstrowID['ID'];

                    }

                    $currentVideo = "SELECT * FROM customvideos WHERE ID = '$_GET[videoID]'";
                    $result3 = $DB->query($currentVideo);
                    $video = mysqli_fetch_array($result3);

                ?>
            <video controls poster="admin/<?php echo $video['photopath']?>"  src="admin/<?php echo $video['videopath']?>" id="videoPlaying"></video> 
                     <p style="letter-spacing: 1px; margin-top: 5px" id="videotitle"><?php echo $video['name']?></p>
            </div>

            <div class="oVid">

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
</body>
</html>
