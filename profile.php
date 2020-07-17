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
    <title>Your Fitness Guide | Profile</title>
    <link rel="stylesheet" href="css/profile.css" type="text/css">
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

    <div class="main">

        <div class="section1">
          <h1>Edit Account Information</h1>
          <button id="btn" onclick="myfun()" style="width:300px">Change Password</button>
            <form action="changeAccInfo.php" method="POST" id="nameForm">
              <div>
                 <input type="text" name="first-name" id="first-name" required placeholder="First Name" value="<?php echo $_SESSION['name']?>"> 
              </div>

              <div>
                  <input type="text" name="last-name" id="last-name" required placeholder="Last Name"  value="<?php echo  $_SESSION['surname']?>">
              </div>

              <div>
                  <input type="email" name="email" id="user-email" required placeholder="Email"  value="<?php echo $_SESSION['email']?>">
              </div>
              <button type="submit" name="submit-button">Save</button>
            </form>
          
          <form action="changeAccInfo.php" method="POST" id = "passwordForm">
            <div>
                  <input type="password" name="password" id="password"  placeholder="Old password">
              </div>

              <div>
                  <input type="password" name="newPassword" id="newPassword"  placeholder="New password">
              </div>

              <button type="submit" name="change-password">Save</button>
            </form>
        </div>
        <?php
                     $fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    if(strpos($fullURL, "passwordIncorrect") == true){  
                        
                        ?>
                           <script>
                               var oldpassword = document.getElementById("password");
                               oldpassword.placeholder = "Incorrect password";
                               oldpassword.style = "border: 1px solid red";
                           </script> 
                        <?php
                        
                    }else if(strpos($fullURL, "PassLengthNotEnough") == true){
                        ?>
                            <script>
                               var newpassword = document.getElementById("newPassword");
                               newpassword.placeholder = "Password must be at least 6 characters";
                               newpassword.style = "border: 1px solid red";
                           </script>   
                <?php
                    }else if(strpos($fullURL, "PasswordChangedSuccessfully") == true){
                      ?>
                          <script>
                             alert("Password changed");
                         </script>   
              <?php
                  }
                ?>
     
          
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
    <script>
        let btn = document.getElementById('btn');
        let passf = document.getElementById('passwordForm');
        passf.style.display = "none";
        let userf = document.getElementById('nameForm');
        function myfun(){
          if(userf.style.display ==  "block"){
          btn.innerHTML = "Change General";
          userf.style.display = "none";
          passf.style.display = "block";
          }else{
            btn.innerHTML = "Change Password";
            passf.style.display = "none";
            userf.style.display = "block";
          }
         
        }

    </script>
</body>
</html>
