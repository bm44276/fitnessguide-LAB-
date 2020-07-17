<?php
    session_start();
    require "backValidation\dbConnection.php";
    $obj = new DB();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/displayVideos.css">
    <link rel="icon" type="image/ico" href="images/Component 12 – 1@2x.png" >
</head>
<body>
<div class="all">
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
        <h1>Results:</h1>
        <section>
           
                       <?php
                          
                            

                            if(isset($_POST['Submit'])){
                            $as = $_POST['search'];

                            $result = $obj->getSearchedVideos("fullbody",$as);

                            while($row = mysqli_fetch_assoc($result)){
                                $videoName = basename($row['videopath'],".mp4");
                                ?>
                                <div class="videos">  
                                    <video controls poster="admin/<?php echo $row['photopath']?>"  src="admin/<?php echo $row['videopath']?>" type="video/mp4"></video> 
                                    <h1 style="letter-spacing: 1px; margin-top: 5px"><?php echo $videoName?></h1>
                                </div>
                                <?php
                                }
                                $result = $obj->getSearchedVideos("lowerbody",$as);

                            while($row = mysqli_fetch_assoc($result)){
                                $videoName = basename($row['videopath'],".mp4");
                                ?>
                                <div class="videos">  
                                    <video controls poster="admin/<?php echo $row['photopath']?>"  src="admin/<?php echo $row['videopath']?>" type="video/mp4"></video> 
                                   <h1 style="letter-spacing: 1px; margin-top: 5px"><?php echo $videoName?></h1>
                                </div>
                                <?php
                                }


                                $result = $obj->getSearchedVideos("upperbody",$as);

                            while($row = mysqli_fetch_assoc($result)){
                                $videoName = basename($row['videopath'],".mp4");
                                ?>
                                <div class="videos">  
                                    <video controls poster="admin/<?php echo $row['photopath']?>"  src="admin/<?php echo $row['videopath']?>" type="video/mp4"></video> 
                                     <h1 style="letter-spacing: 1px; margin-top: 5px"><?php echo $videoName?></h1>
                                </div>

                                <?php
                                }


                                $result = $obj->getSearchedVideos("cardio",$as);

                            while($row = mysqli_fetch_assoc($result)){
                                $videoName = basename($row['videopath'],".mp4");
                                ?>
                                <div class="videos">  
                                    <video controls poster="admin/<?php echo $row['photopath']?>"  src="admin/<?php echo $row['videopath']?>" type="video/mp4"></video> 
                                     <h1 style="letter-spacing: 1px; margin-top: 5px"><?php echo $videoName?></h1>
                                </div>

                                <?php
                                }
                            }

                                ?>
                        
            </div>
    
        </section>

    </main>

    <footer>
    <?php include "inc/footer.php" ;?>
    </footer>
    </div>
</body>
</html>
