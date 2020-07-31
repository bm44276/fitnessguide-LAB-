<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/logInPage.css">
    <link rel="icon" type="image/ico" href="images/Component 12 – 1@2x.png" >
    <script defer src="frontValidation\LogInValidate.js"></script>
</head>
<body>
<div class="all">
    <header>
        <div class="logo" >
            <img src="images/Component 12 – 1@2x.png" alt="">
            <h1>YourFitnessGuide</h1>
        </div>
        <nav>
            <form onsubmit="return validate()" action="backValidation\logIn.php" method="POST">
                <input type="text" name="username" id="username" placeholder="Username">
                <input type="password" name="password" id="password" placeholder="Password">  
                <input type="submit" name="submit" value="Sign In">
            </form>
            <?php
                     $fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    if(strpos($fullURL, "UsernameNotFound") == true){  
                        
                        ?>
                           <script>
                               var username = document.getElementById("username");
                               username.placeholder = "Username not found";
                               username.style = "border: 1px solid red";
                           </script> 
                        <?php
                        
                    }else if(strpos($fullURL, "PasswordIncorrect") == true){
                        ?>
                            <script>
                               var password = document.getElementById("password");
                               password.placeholder = "incorrect password";
                               password.style = "border: 1px solid red";
                           </script>   
                <?php
                    }
                ?>
        </nav>
    </header>
    <main>
        <div>
            <br><br><br>
        <p>
            Welcome to <strong>Your Fitness Guide</strong> website here you will be entertained with a lot of workouts, mostly home workouts. 
            <br> You can find a lot of workouts like full body workouts to upper body etc.
        </p>
        <br><br>
        <p>
            You also can make custom workouts based on your height weight and gender <strong>Sign up Today</strong> for more.
        </p>
        <br> <br> <br>
            <a href="signUpPage.php">Sign Up</a>
        </div>

    </main>
    <footer>
            <img src="images/Component 12 – 1@2x.png" alt="">
            <h3>&copy; YourFitnessGuide.com</h3>
    </footer>
</div>
</body>
</html>
