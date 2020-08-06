<?php  
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: logInPage.php");
     }
 
 require "backValidation\dbConnection.php";
     $obj = new Db();
     $result = $obj->showFood();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/food.css">
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
        <h1>Healthy Food</h1>
       <section>
           <?php
               while($row = mysqli_fetch_assoc($result)){
               ?>
            <a href="checkFood.php?type=<?php echo $row['id']?>">
                <div>
                    <img src="uploads/<?php echo $row['image']?>" alt="">
                    <h3>  <?php echo $row['title']?> </h3>
                </div>
                 </a>
            <?php } ?> 
        </section> 

    </main>

        <footer>
            <?php include "inc/footer.php" ;?>
        </footer>

</body>
</html>
