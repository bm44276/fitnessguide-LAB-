<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: logInPage.php");
 }
    require "backValidation\dbConnection.php";
    $obj = new Db();
    if(isset($_GET["type"])){
        $type = $_GET['type'];
        $result = $obj->getFood($type);
        
    }
$result2 = $obj->top4Food();
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/checkfood.css">
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
               while($row = mysqli_fetch_assoc($result)){
               ?>
                <div class="main">
                    <div class="sec1">
                        <img src="uploads/<?php echo $row['image']?>" alt="<?php echo $row['title']?>">
                    </div>

                    <div class="sec2"> 
                        <h1><?php echo $row['title']?></h1>
                        <p><?php echo $row['text']?></p>
                    </div>
                   
                </div>
            <?php } ?> 

            <footer>
            <?php include "inc/footer.php" ;?>
        </footer>
    
</body>
</html>