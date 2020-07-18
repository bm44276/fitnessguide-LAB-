<?php
  
class DB{

 
    function connect(){
        $DB = new mysqli("localhost",'root','','yourfitnessguidedb');

        if($DB -> connect_error){
            die("Lidhja nuk u realizua.." . $DB -> connect_error);
        }else{
            return $DB;
        }
    }
    
    function addUser($name,$surname,$email,$username,$Password){
            $usernameTaken = "SELECT * FROM accounts WHERE username = '$username';";
            $result = $this->connect()->query($usernameTaken);
            $num = mysqli_num_rows($result);

            if($num==0){
                $query = "INSERT INTO accounts (name,surname,email,username,password) VALUES ('$name','$surname','$email','$username','$Password');";
                $this->connect()->query($query);
    
                header("location:../thankYouPage.php");
            }else{
                header("location:../signUpPage.php?UsernameIsTaken");
            }
    }

    function getUser($username){
        $query = "SELECT * FROM accounts WHERE username = '$username';";

        $result = $this->connect()->query($query);
        return $result;
    }

    function getNewsetVideo($table,$num){
        $query = "SELECT * FROM $table ORDER BY ID DESC LIMIT $num;";

        $result = $this->connect()->query($query);
        return $result;
    }   
    
    function getVideos($type){
        $query = "SELECT * FROM $type ORDER BY ID DESC;";
        $result = $this->connect()->query($query);
        return $result;
    }

    function getSearchedVideos($table,$as){
        $query = "SELECT * from  $table WHERE name LIKE '%$as%';";
        $result = $this->connect()->query($query);
        return $result;
    }

    function createCustom($weight,$height,$gender,$username){
        $query = "INSERT INTO customusers (weight,height,gender) VALUES ($weight,$height,'$gender');";
        $this->connect()->query($query);

        $num = (mysqli_fetch_array($this->connect()->query("SELECT * FROM customusers ORDER BY ID DESC LIMIT 1")));
        

        $updateusercustom = "UPDATE accounts SET custom = '$num[ID]' WHERE username = '$username';";

        $this->connect()->query($updateusercustom);
        header("location: setCustom.php");
    }

    function getCustomInfo($custom){
        $query = "SELECT * FROM customusers WHERE ID = '$custom';";
        $result = $this->connect()->query($query);
        return $result;
    }

    function displayCustomVideos($gender,$state){
        if($gender == 'B'){
            $selectVideos = "SELECT * FROM customvideos WHERE state = '$state';";
            $result = $this->connect()->query($selectVideos);
            return $result;
        }else{
            $selectVideos = "SELECT * FROM customvideos WHERE state = '$state' AND gender = '$gender';";
            $result = $this->connect()->query($selectVideos);
            return $result;
        }
    }

    function getCustomId($username){
        $query = "SELECT * FROM accounts WHERE username = '$username';";
        $result = $this->connect()->query($query);
        $row = mysqli_fetch_array($result);
        return $row['custom'];
    }
    
    function changeCustomInfo($height,$weight,$gender,$custom){
        
        $updateusercustom = "UPDATE customusers SET height = '$height',  weight = '$weight', gender = '$gender'  WHERE ID = '$custom';";

        $this->connect()->query($updateusercustom);


        header("location: setCustom.php");
    }

    function changeAccountInfo($name,$surname,$email,$username){

            $query = "UPDATE accounts SET name = '$name', surname = '$surname', email = '$email' WHERE   username = '$username'";
            $this->connect()->query($query);

    }

    function changePassword($username,$oldpassword,$newpassword){
        

        $query = "SELECT * FROM accounts WHERE username = '$username';";

        $result = $this->connect()->query($query);
        $num = mysqli_num_rows($result);

        if($num == 1){
            $row = mysqli_fetch_array($result);

            if(password_verify($oldpassword,$row['password'])){
               
                
               if(strlen("$newpassword") < 6){
                    header("location: profile.php?PassLengthNotEnough");
                }else{

                    $hashedPassword = password_hash($newpassword, PASSWORD_DEFAULT);

                  
                    $changePasswordQuery  = "UPDATE accounts SET password = '$hashedPassword' WHERE username = '$username'";
                    $this->connect()->query($changePasswordQuery );

                    header("location: profile.php?PasswordChangedSuccessfully");
                }

            }else{
            header("location: profile.php?passwordIncorrect");
            }

    }else{
    header("location: profile.php?AccountNotFound");
     }
    }

    function getVideoType($type){
        $query = "SELECT * FROM $type ORDER BY ID DESC;";
        $result = $this->connect()->query($query);
        return $result;
    }

    function getAllUsers(){
        $query = "SELECT * FROM accounts;";
        $result = $this->connect()->query($query);
        return $result;
    }
  
      function uploadsFood($image, $title, $text, $target){
            $sql = "Insert into food (image,title,text) values ('$image', '$title', '$text');";
            $this->connect()->query($sql);

            if(move_uploaded_file($_FILES['photo']['tmp_name'], $target)){
                header("Location: addFood.php?success=fileSent");
            }else{
                header("Location: addFood.php?error=fileNotSent");
            }
    }

    function showFood(){
        $query = "SELECT * FROM food order by id desc;";
        $result = $this->connect()->query($query);
        return $result;
    }

}     
