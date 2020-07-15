<?php
    require "../backValidation\dbConnection.php";
    $obj = new DB();

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
            $query = "INSERT INTO $type (name,photopath,videopath) VALUES ('$fileName','$fileDestinationphoto','$fileDestinationvideo');";
            $obj->connect()->query($query);
            header("location:addVideos.php?Successful");      
       }


    }else{
        header("location:addVideos.php?NotSubmited");            
    }






    
    if(isset($_POST['submit2'])){

        $photoName = $_FILES['photo']['name'];
        $photoTmpName = $_FILES['photo']['tmp_name'];

        $videoName = $_FILES['video']['name'];
        $videoTmpName = $_FILES['video']['tmp_name'];

        $type = $_POST['type']; 
        $type2 = $_POST['type2']; 
        
        
    

        $fileName = basename($videoName, ".mp4"); 

        if (!is_dir("videos/custom/$type/$fileName")) {
            mkdir("videos/custom/$type/$fileName", 0777, true);
        }

        $fileDestinationphoto = "videos/custom/$type/$fileName/".$photoName;
        $fileDestinationvideo = "videos/custom/$type/$fileName/".$videoName;
       

       if((move_uploaded_file($photoTmpName, $fileDestinationphoto )) && (move_uploaded_file($videoTmpName, $fileDestinationvideo))){
            $query = "INSERT INTO customvideos (name,photopath,videopath,state,gender) VALUES ('$fileName','$fileDestinationphoto','$fileDestinationvideo','$type','$type2');";
            $obj->connect()->query($query);
            header("location:addVideos.php?Successful");      
       }


    }else{
        header("location:addVideos.php?NotSubmited");            
    }
