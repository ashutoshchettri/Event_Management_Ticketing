<?php
include('dbconnection.php');
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../CSS/categories.css">
    </head>
    <body>
        <div class="main_div">
            <div class="logo_div">
                <a href="../index.php"><img src="../GRAPHICS/logo.png" alt="" class="logo_pic"></a>
            </div>
            <div class="navigation_div">
                <ul>
                    <li class="nav_li"><a href="../index.php"><button class="nav_buttons">Home</button></a></li>
                    <li class="nav_li"><a href="aboutus.php"><button class="nav_buttons">About Us</button></a></li>
                    <li class="nav_li"><a href="#"><button class="nav_buttons">Contact</button></a></li>
                    <li class="nav_li"><a href="login.php" style="margin-right:0px;"><button class="nav_buttons">Organize</button></a></li>

                </ul>
            </div>
            <hr style="color:#b1b128;">
            <div class="category_trend_div">

                <div class="checkout_trending_categories_div">
                    <p class="checkout_trending_categories_p">Check out trending categories</p>
                </div>

                <div class="categories_div">
                    <div class="category"><button id="music_button" class="category_button"><i class="fa-solid fa-music icon"></i>Music</button></div>
                    <div class="category"><button id="spiritual_button"class="category_button"><i class="fa-solid fa-person-praying icon"></i>Spirituality</button></div>
                    <div class="category"><button id="arts_button" class="category_button"><i class="fa-solid fa-masks-theater icon"></i>Arts</button></div>
                    <div class="category"><button id="holiday_button" class="category_button"><i class="fa-solid fa-champagne-glasses icon"></i>Holiday</button></div>
                    <div class="category"><button id="health_button" class="category_button"><i class="fa-solid fa-kit-medical icon"></i>Health</button></div>
                    <div class="category"><button id="hobbies_button" class="category_button"><i class="fa-solid fa-palette icon"></i>Hobbies</button></div>
                    <div class="category"><button id="business_button" class="category_button"><i class="fa-solid fa-briefcase icon"></i>Business</button></div>
                    <div class="category"><button id="tech_button" class="category_button"><i class="fa-solid fa-microchip icon"></i>Tech</button></div>
                    
                    
                </div>
                <div class="upcoming_events_div"><p class="checkout_trending_categories_p">Upcoming Events</p></div>
                
                <div class="upcoming_events_list_div">
                <?php
                include('upcomming.php');
                ?>    
                
                </div>
            </div>
        </div>
    </body>
</html>