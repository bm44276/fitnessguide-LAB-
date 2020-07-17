<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/signUpPage.css">
    <link rel="icon" type="image/ico" href="images/Component 12 – 1@2x.png" >
    <script defer src="frontValidation\SignUpValidate.js"></script>
</head>
<body>
    <div class="all">
    <header>
        <div class="logo" >
            <img src="images/Component 12 – 1@2x.png" alt="">
            <h1>YourFitnessGuide</h1>
        </div>
    </header>
    <main>
        <div>
            <h1>Sign Up Today</h1>
            <a href="logInPage.php">Log In</a>
        </div>

        <form onsubmit="return validate()" action="backValidation\addUser.php"  method="POST">

            <h1>Sign Up</h1>

            <section class="firstName">
                    <input type="text" name="first-name" id="first-name" required placeholder="First Name">
                    <input type="text" name="last-name" id="last-name" required placeholder="Last Name">
            </section>

            <section class="Sign-email">
                   
                    <input type="email" name="email" id="user-email" required placeholder="Email" >
            </section>

            <section class="Sign-username">
                    <input type="text" name="user-name" id="user-name" required placeholder="Username">
                    <input type="password" name="password" id="user-password" required min="6" max = "10" placeholder="Password">
            </section>

            <section class="submit-button">
                    <input type="submit" name="submit" id="submit" value="Sign Up">
            </section>

        </form>
        <?php
                     $fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    if(strpos($fullURL, "UsernameIsTaken") == true){  
                        
                        ?>
                           <script>
                               var username = document.getElementById("user-name");
                               username.placeholder = "Username is taken";
                               username.style = "border: 1px solid red";
                           </script> 
                        <?php
                        
                    }else if(strpos($fullURL, "InvalidFormPassword") == true){
                        ?>
                        <script>
                            var password = document.getElementById("user-password");
                            password.placeholder = "Password must be at least 6 characters";
                            password.style = "border: 1px solid red";
                        </script> 
                     <?php
                     
                    }
                ?>

    </main>
    </div>
    <div class="container"></div>

</body>
</html>
