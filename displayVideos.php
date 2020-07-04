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
        <h1><?php echo  $_GET['type']; ?></h1>
        <section>

           
                       <?php
                            require "backValidation\dbConnection.php";
                            

                            $type = $_GET['type'];
                            $query = "SELECT * FROM $type;";
                            $result = $DB->query($query);

                            while($row = mysqli_fetch_assoc($result)){
                                $videoName = basename($row['videopath'],".mp4");
                                ?>
                                <div class="videos">  
                                    <h1 style="letter-spacing: 1px; margin-top: 5px"><?php echo $videoName?></h1>
                                    <video controls poster="admin/<?php echo $row['photopath']?>"  src="admin/<?php echo $row['videopath']?>" type="video/mp4"></video> 
                                    
                                </div>


                                <?php
                                }
                                ?>
                        
                            <?php
                           
                            ?>
                        
            </div>

         
               
            
            
        </section>

    </main>

    <footer>
    <?php include "inc/footer.php" ;?>
    </footer>
    
</body>
</html>



   
