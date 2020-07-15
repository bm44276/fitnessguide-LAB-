<?php
    require "../backValidation\dbConnection.php";
    $obj = new DB();
    session_start();
    if(!isset($_SESSION['username'])){
        header("location: ../logOut.php");
    }

    if(isset($_POST['submit'])){

        $id = $_POST['ID'];
        $type = $_POST['type'];
        $fileName = $_POST['videoname'];
        $videopath = $_POST['videopath'];
        $photopath = $_POST['photopath'];

        if((unlink($videopath)) && (unlink($photopath))){

            if (is_dir("videos/$type/ $fileName")) {
                rmdir("videos/$type/ $fileName");

                $query = "DELETE FROM $type WHERE ID = $id";

                $obj->connect()->query($query);
                header("location: removeVideos.php?type=FullBody");
            }  
        }
        header("location: removeVideos.php?type=FullBody");
    }
