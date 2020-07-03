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
    <header>
        <div class="logo" >
            <img src="images/Component 12 – 1@2x.png" alt="">
            <h1>YourFitnessGuide</h1>
        </div>
        <nav>
            <form action="#" method="POST" onsubmit="return validate()">
                <input type="text" name="username" id="username" placeholder="Username">
                <input type="password" name="password" id="password" placeholder="Password">  
                <input type="submit" name="submit" value="Sign In">
            </form>
        </nav>
    </header>
    <main>
        <div>
            <h1>Join Us Today</h1>
            <a href="signUpPage.php">Sign Up</a>
        </div>

    </main>
    <footer>
            <img src="images/Component 12 – 1@2x.png" alt="">
            <h3>&copy; YourFitnessGuide.com</h3>
    </footer>

</body>
</html>
