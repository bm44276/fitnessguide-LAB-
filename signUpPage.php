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

        <form action="" onsubmit="return validate()">

            <h1>Sign Up</h1>

            <section class="firstName">
                    <input type="text" name="first-name" id="first-name" required placeholder="First Name">
                    <input type="text" name="last-name" id="last-name" required placeholder="Last Name">
            </section>

            <section class="Sign-email">
                    <input type="date" id="date" name="date">
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

    </main>
    <div class="container"></div>

</body>
</html>
