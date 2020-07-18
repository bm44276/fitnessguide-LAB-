<?php
    require "../backValidation\dbConnection.php";
    $obj = new Db();
            if(isset($_POST['submit'])){
                $image = $_FILES['photo']['name'];
                $target = "../uploads/".basename($image);
                $title =  $_POST['title'];
                $text = $_POST['text'];
                if(empty($image) || empty($title) || empty($text)){
                    header("Location: addFood.php?form=empty");
                }else{
                    $obj->uploadsFood($image, $title, $text, $target);
                }

            }else{
                header("Location: addFood.php?error=formNotSubmitted");
            }
    
    
    ?>