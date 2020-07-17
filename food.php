<?php  
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: logInPage.php");
     }
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/food.css">
    <link rel="icon" type="image/ico" href="images/Component 12 – 1@2x.png" >
</head>
<body>
<div class="all">
    <header>
    <?php
            if($_SESSION['admin'] == 1){
                include "admin\adminUserHeader.php";
            }else{
                include "inc/header.php" ;
            }
           ?>
    </header>

    <main>
        <h1>Healthy Food</h1>
       <section>
            <div>
                <img src="Foods\broccoli.jpg" alt="">
                <h3>Broccoli</h3>
                <p>
                    Broccoli is a cruciferous vegetable that tastes great both raw and cooked. 
                    It’s an excellent source of fiber and vitamins C and K and contains a decent amount of protein compared with other vegetables.
                </p>
            </div>

            <div>
                <img src="Foods/salmon.jpg" alt="">
                <h3>Salmon</h3>
                <p>
                    Salmon is a type of oily fish that’s incredibly popular due to its excellent taste and high amount of nutrients, 
                    including protein and omega-3 fatty acids. It also contains some vitamin D.
                </p>
            </div>

            <div>
                <img src="Foods/basic-oatmeal.jpg" alt="">
                <h3>Oatmeal</h3>
                <p>
                    Oatmeal is not only a boost in protein and healthy fat, but also a rich, creamy, custardy texture that takes oatmeal to a whole new level. 
                </p>
            </div>
            
        </section>


        <section>
            <div>
                <img src="Foods\lamb.jpg" alt="">
                <h3>Lamb</h3>
                <p>
                    Lambs are usually grass-fed, and their meat tends to be high in omega-3 fatty acids.
                </p>
            </div>

            <div>
                <img src="Foods/strawberries.jpg" alt="">
                <h3>strawberries</h3>
                <p>
                    Strawberries are highly nutritious and low in both carbs and calories.
                    They are loaded with vitamin C, fiber, and manganese and are arguably among the most delicious foods in existence.
                </p>
            </div>

            <div>
                <img src="Foods/leanBeef.jpg" alt="">
                <h3>Lean Beef</h3>
                <p>
                Lean beef is among the best sources of protein in existence and loaded with highly bioavailable iron. Choosing the fatty cuts is fine if you’re on a low-carb diet. 
                </p>
            </div>
            
        </section>

        <section>
            <div>
                <img src="Foods\Eggs.jpg" alt="">
                <h3>Eggs</h3>
                <p>
                    Studies have shown that eating eggs at breakfast increases feelings of fullness, 
                    reduces calorie intake at the next meal and helps maintain steady blood sugar and insulin levels.
                </p>
            </div>

            <div>
                <img src="Foods/shellfish.jpg" alt="">
                <h3>Shellfish</h3>
                <p>
                    Shellfish ranks similarly to organ meats when it comes to nutrient density. Edible shellfish include clams, mollusks, and oysters.
                </p>
            </div>

            <div>
                <img src="Foods/garlic.jpg" alt="">
                <h3>Garlic</h3>
                <p>
                    Garlic is incredibly healthy. It contains bioactive organosulfur compounds that have powerful biological effects, including improved immune function.
                </p>
            </div>
            
        </section>   

        <section>
            <div>
                <img src="Foods\carrots.jpg" alt="">
                <h3>Carrots</h3>
                <p>
                    Carrots are a popular root vegetable. They are extremely crunchy and loaded with nutrients like fiber and vitamin K.
                </p>
            </div>

            <div>
                <img src="Foods/asparagus.jpg" alt="">
                <h3>Asparagus</h3>
                <p>
                    Asparagus is a popular vegetable. It’s low in both carbs and calories but loaded with vitamin K.
                </p>
            </div>

            <div>
                <img src="Foods/shrimp.jpeg" alt="">
                <h3>Shrimp</h3>
                <p>
                Shrimp is a type of crustacean related to crabs and lobsters. It tends to be low in fat and calories but high in protein. It’s also loaded with various other nutrients, including selenium and vitamin B12.
                </p>
            </div>
            
        </section>   

        <section>
            <div>
                <img src="Foods\ChickenBreast.jpg" alt="">
                <h3>Chicken breast</h3>
                <p>   
                    Chicken breast is low in fat and calories but extremely high in protein. It’s a great source of many nutrients. 
                    Again, feel free to eat fattier cuts of chicken if you’re not eating that many carbs.
                </p>
            </div>

            <div>
                <img src="Foods/Bananas.jpg" alt="">
                <h3>Bananas</h3>
                <p>
                    Bananas are among the world’s best sources of potassium. They’re also high in vitamin B6 and fiber, as well as convenient and portable.
                </p>
            </div>

            <div>
                <img src="Foods/Chia seeds.jpg" alt="">
                <h3>Chia seeds</h3>
                <p>
                    Chia seeds are among the most nutrient-dense foods on the planet. A single ounce (28 grams) packs 11 grams of fiber and significant amounts of magnesium, manganese, calcium, and various other nutrients.
                </p>
            </div>
            
        </section> 

        <section>
            <div>
                <img src="Foods\Avocados.jpg" alt="">
                <h3>Avocados</h3>
                <p>   
                    Avocados are different than most fruits because they are loaded with healthy fats instead of carbs. 
                    Not only are they creamy and tasty but also high in fiber, potassium, and vitamin C.
                </p>
            </div>

            <div>
                <img src="Foods/amonds.jpg" alt="">
                <h3>Almonds</h3>
                <p>
                    Almonds are a popular nut loaded with vitamin E, antioxidants, magnesium, and fiber. Studies show that almonds can help you lose weight and improve metabolic health.
                </p>
            </div>

            <div>
                <img src="Foods/Yogurt.jpeg" alt="">
                <h3>Yogurt</h3>
                <p>
                    Greek yogurt is high in protein, helps reduce appetite and may aid weight loss. Certain types also contain beneficial probiotics.
                </p>
            </div>
            
        </section> 

        <section>
            <div>
                <img src="Foods\Coconuts.jpg" alt="">
                <h3>Coconuts</h3>
                <p>   
                    Coconuts are loaded with fiber and powerful fatty acids called medium-chain triglycerides.
                </p>
            </div>

            <div>
                <img src="Foods/fish.jpg" alt="">
                <h3>Tuna</h3>
                <p>
                    Tuna is very popular in Western countries and tends to be low in fat and calories while high in protein. It’s perfect for people who need to add more protein to their diets but keep calories low.
                </p>
            </div>

            <div>
                <img src="Foods/onions.jpg" alt="">
                <h3>Onions</h3>
                <p>
                    Onions have a very strong flavor and are very popular in many recipes. 
                    They contain a number of bioactive compounds believed to have health benefits.
                </p>
            </div>
            
        </section> 

    </main>

    <footer>
    <?php include "inc/footer.php" ;?>
    </footer>
    </div>
</body>
</html>
