<?php
    require "../backValidation\dbConnection.php";

    if(isset($_POST['submit'])){

        $photoName = $_FILES['photo']['name'];
        $photoTmpName = $_FILES['photo']['tmp_name'];

        $videoName = $_FILES['video']['name'];
        $videoTmpName = $_FILES['video']['tmp_name'];

        $type = $_POST['type']; 
        
        
    

        $fileName = basename($videoName, ".mp4"); 

        if (!is_dir("videos/$type/ $fileName")) {
            mkdir("videos/$type/ $fileName", 0777, true);
        }

        $fileDestinationphoto = "videos/$type/ $fileName/".$photoName;
        $fileDestinationvideo = "videos/$type/ $fileName/".$videoName;
       

       if((move_uploaded_file($photoTmpName, $fileDestinationphoto )) && (move_uploaded_file($videoTmpName, $fileDestinationvideo))){
            $query = "INSERT INTO $type (photopath,videopath) VALUES ('$fileDestinationphoto','$fileDestinationvideo');";
            $DB->query($query);
       }


    }else{
        header("location:addVideos.php?NotSubmited");            
    }
