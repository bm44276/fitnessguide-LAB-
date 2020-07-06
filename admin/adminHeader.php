<style>
  *{
    margin: 0;
    padding: 0;
}

body{
    font-family: Arial, Helvetica, sans-serif;
    background-color: white;
}

header{
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    border-bottom: 5px #41819A solid;
    height: 75px;
}

header .logo{
    display: flex;
    justify-content: space-evenly;
    align-items: center;
}
header .logo img{
    width: 100px;
    margin-right: 10px;
}
header .logo h1{
    color: #2382FF;
    font-size: 25px;
}
header form {
    width: 500px;
    align-items: center;
}

header form input[type="text"]{
    width: 400px;
    border: 1px #1616F9 solid;
    border-radius: 40px;
    outline: none;
    padding-left: 10px;
    height: 25px;
    letter-spacing: 1px;
    cursor: pointer;
}
header form input[type="text"]:hover{
    background-color: #f1f1f1;
}

header form input[type="submit"]{
    border: 1px #1616F9 solid;
    border-radius: 40px;
    outline: none;
    letter-spacing: 1px;
    font-size: 14px; 
    padding: 5px;
    background-color: white;
    cursor: pointer;
    margin-left: 5px;
}

header form input[type="submit"]:hover{
    background-color:#1616F9;
    color:white;
}


nav ul li{
    display: inline;
}


li a{
    font-size: 18px;
    text-decoration: none;
    color: #2382FF;
    letter-spacing: 1px;
    padding: 5px;
    border-left: 1px #2382FF solid;
}

li a:hover{
    text-decoration: underline;
}
       </style>
       
       <div class="logo" >
                <img src="images/Component 12 – 1@2x.png" alt="">
                <h1>YourFitnessGuide</h1>
        </div>
            <form action="../displayResearched.php" method="POST">
                <input type="text" name="search" id="search" placeholder="Search...">
                <input type="submit" name="Submit" value="Submit">
            </form>
        <nav>
            <ul>
                    <li><a href="../home.php">Home</a></li>
                    <li><a href="../workouts.php">Workout</a></li>
                    <li><a href="../food.php">Food</a></li>
                    <li><a href="../setCustom.php">Custom</a></li>
                    <li><a href="../profile.php">Profile</a></li>
                    <li><a href="addVideos.php">Manage</a></li>
                    <li><a href="../logOut.php">Log Out</a></li>
              </ul>
        </nav>
