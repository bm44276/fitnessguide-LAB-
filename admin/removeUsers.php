<?php
    require "../backValidation\dbConnection.php";
    session_start();
    if(!isset($_SESSION['username'])){
        header("location: ../logOut.php");
    }
    $obj = new DB();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminCss/table.css">
    <title>Document</title>
</head>
<body>
    <div class="all">
<header>
        <?php
        if($_SESSION['admin'] == 1){
          include "adminHeader.php";
          
        }else{
            header("location: ../logOut.php");
        }
          ?>
    </header>
    <div>
    <?php
    if($_SESSION['admin'] == 1){
         
          include "adminOptions.php";
    }
    ?>
    </div>

    <div class="container">
        <div class="content">
                        <table border="1">
                            <thead>
                                <tr>
                                    <th class="title">Name</th>
                                    <th class="title">Surname</th>
                                    <th class="title">Email</th>
                                    <th class="title">Username</th>
                                    <th class="title">Remove</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                            
                                <?php 
                                    
                                    $result = $obj->getAllUsers();

                                    while($row = mysqli_fetch_assoc($result)){

                                        ?>
                                            <tr>
                                                <td><?php echo $row['name']?></td>
                                                <td><?php echo $row['surname']?></td>
                                                <td><?php echo $row['email']?></td>
                                                <td><?php echo $row['username']?></td>
                                                <td><a href="removeUsersDB.php?ID=<?php echo $row['ID']?>">Remove</a></td>
                                            </tr>

                                        <?php
                                    }

                                ?>
                            
                            </tbody>
                        </table>
             </div>           
    </div>
    </div>
</body>
</html>