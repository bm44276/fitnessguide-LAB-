<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Fitness Guide | Profile</title>
    <link rel="stylesheet" href="css/profile.css" type="text/css">
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

    <div class="main">

        <div class="section1">
          <h1>Edit Account Information</h1>
            <form action="changeAccInfo.php" method="POST">
              <div>
                 <input type="text" name="first-name" id="first-name" required placeholder="First Name" value="<?php echo $_SESSION['name']?>"> 
              </div>

              <div>
                  <input type="text" name="last-name" id="last-name" required placeholder="Last Name"  value="<?php echo  $_SESSION['surname']?>">
              </div>

              <div>
                  <input type="email" name="email" id="user-email" required placeholder="Email"  value="<?php echo $_SESSION['email']?>">
              </div>

              <div>
                  <input type="password" name="password" id="password"  placeholder="Old password">
              </div>

              <div>
                  <input type="password" name="newPassword" id="newPassword"  placeholder="New password">
              </div>

              <button type="submit" name="submit-button">Save</button>
            </form>
        </div>
     
          
        <div class="section2">
          <h1>Account Info</h1>
          <div>
            <label for="">Firstname: </label>
            <Label><?php echo $_SESSION['name'];?></Label>
          </div>
          <div>
            <label for="">Lastname: </label>
            <Label><?php echo $_SESSION['surname'];?></Label>
          </div>
          <div>
            <label for="">Username: </label>
            <Label><?php echo $_SESSION['username'];?></Label>
          </div>
          

          <div class="email">
            <label>Your Email: </label>
            <Label><?php echo $_SESSION['email'];?></Label>
          </div>   
        </div>

    </div>


  <footer>
    <?php include "inc/footer.php" ;?>
    </footer>
    
</body>
</html>
