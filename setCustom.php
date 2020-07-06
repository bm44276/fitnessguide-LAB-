
<?php 
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: logInPage.php");
     }
 
     if($_SESSION['custom'] != 0){
         header("location: displayCustomVideos.php?videoID=Empty");
        }else{
            header("location: custom.php");
        }

 ?>