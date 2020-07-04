<?php
    session_start();
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
        <h1>Results:</h1>
        <section>

           
                       <?php
                            require "backValidation\dbConnection.php";
                            

                            if(isset($_POST['Submit'])){
                            $as = $_POST['search'];

                            $query1 = "SELECT * from  fullbody WHERE name LIKE '%$as%';";
                            $result = $DB->query($query1);

                            while($row = mysqli_fetch_assoc($result)){
                                $videoName = basename($row['videopath'],".mp4");
                                ?>
                                <div class="videos">  
                                    <h1 style="letter-spacing: 1px; margin-top: 5px"><?php echo $videoName?></h1>
                                    <video controls poster="admin/<?php echo $row['photopath']?>"  src="admin/<?php echo $row['videopath']?>" type="video/mp4"></video> 
                                    
                                </div>

                                <?php
                                }
                                $query2 = "SELECT * from  lowerbody WHERE name LIKE '%$as%';";
                                $result = $DB->query($query2);

                            while($row = mysqli_fetch_assoc($result)){
                                $videoName = basename($row['videopath'],".mp4");
                                ?>
                                <div class="videos">  
                                    <h1 style="letter-spacing: 1px; margin-top: 5px"><?php echo $videoName?></h1>
                                    <video controls poster="admin/<?php echo $row['photopath']?>"  src="admin/<?php echo $row['videopath']?>" type="video/mp4"></video> 
                                    
                                </div>

                                <?php
                                }


                                $query3 = "SELECT * from  upperbody WHERE name LIKE '%$as%';";
                                $result = $DB->query($query3);

                            while($row = mysqli_fetch_assoc($result)){
                                $videoName = basename($row['videopath'],".mp4");
                                ?>
                                <div class="videos">  
                                    <h1 style="letter-spacing: 1px; margin-top: 5px"><?php echo $videoName?></h1>
                                    <video controls poster="admin/<?php echo $row['photopath']?>"  src="admin/<?php echo $row['videopath']?>" type="video/mp4"></video> 
                                    
                                </div>

                                <?php
                                }


                                $query3 = "SELECT * from  cardio WHERE name LIKE '%$as%';";
                                $result = $DB->query($query3);

                            while($row = mysqli_fetch_assoc($result)){
                                $videoName = basename($row['videopath'],".mp4");
                                ?>
                                <div class="videos">  
                                    <h1 style="letter-spacing: 1px; margin-top: 5px"><?php echo $videoName?></h1>
                                    <video controls poster="admin/<?php echo $row['photopath']?>"  src="admin/<?php echo $row['videopath']?>" type="video/mp4"></video> 
                                    
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
    
</body>
</html>



   
