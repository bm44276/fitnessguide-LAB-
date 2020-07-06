
<?php 
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: logInPage.php");
     }
 
     if($_SESSION['custom'] != 0){
         header("location: displayCustomVideos.php");
        }else{
            header("location: custom.php");
        }

 ?>