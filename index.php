<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./CSS/index.css">
        <style>
            .contact_container_div{
                /* border-style:solid; */
                border-width:0.1px;
                display:inline-block;
                position:relative;
                margin-right:40px;
            }
            .contact_list_div{
                display:none;
                position:absolute;
                background-color:white;
                max-width:160px;
                /* border-style:solid; */
                border-width:0.1px;
                box-shadow:2px 2px 5px rgba(177, 177, 40,0.5);
                border-radius:12px;
                margin-top:5px;
            }
            .contact_list_div a{
                color:#b1b128;
                padding:12px 16px;
                text-decoration:none;
                display:block;
                
            }
            .contact_container_div:hover .contact_list_div{
                display:block;
            }

        </style>
    </head>

    <body>
        <div class="main_div">
            <div class="logo_div">
               <a href="index.php"> <img src="./GRAPHICS/logo.png" alt="" class="logo_pic"></a>
            </div>
            <div class="navigation_div">
                <ul>
                    <li class="nav_li"><a href="index.php"><button class="home_nav_button">Home</button></a></li>
                    <li class="nav_li"><a href="./HTML/aboutus.php"><button class="nav_buttons">About Us</button></a></li>
                    <li class="nav_li"><div class="contact_container_div"><button class="nav_buttons_contact">Contact</button>
                    <div class="contact_list_div">
                        <a href="#">aaar@gmail.com</a>
                        <a href="#">twitter.com/aaar</a>

                    </div>
                    
                    </div></li>
                    <li class="nav_li"><a href="./HTML/login.php" style="margin-right:0px;"><button class="nav_buttons">Organize</button></a></li>
                </ul>
            </div>
            <div class="content">
                <p class="go">GO EXPLORE</p>
                <p class="get_advent">get adventurous</p>
                <p class="welcome">"Join our web application and experience the power of Event Connections.
                    We seamlessly connect organizers and attendeed, providing a platform to discover, attend,
                     and rank events."</p>
                     <a href="./HTML/categories.php"><button class="upcoming">Upcoming Events</button></a>
            </div>
        </div>
    </body>
</html>