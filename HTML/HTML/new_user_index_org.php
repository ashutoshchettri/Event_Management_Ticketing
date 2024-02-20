<?php
session_start();
// if(!isset($_SESSION['email'])){
//     header("Location: login.php");
// }
// else if($_SESSION['role_id']!==3){
// header("Location: login.php");
// }
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css" integrity="sha512-9YHSK59/rjvhtDcY/b+4rdnl0V4LPDWdkKceBl8ZLF5TB6745ml1AfluEU6dFWqwDw9lPvnauxFgpKvJqp7jiQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../CSS/index.css">
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
.profile_div{
    border-width:0.1px;
                display:inline-block;
                position:relative;
                /* margin-right:40px; */
}
.user_profile_pic{
    height:30px;
    width:30px;
    border-radius:12.5px;
    object-fit:cover;
    object-position:top;
    vertical-align:middle;
    margin-right:10px;
}
.logout_div{
    display:none;
                position:absolute;
                background-color:white;
                min-width:180px;
                /* border-style:solid; */
                border-width:0.1px;
                box-shadow:2px 2px 5px rgba(177, 177, 40,0.5);
                border-radius:12px;
                margin-top:2px;
                transition: background-color 0.15, color 0.15s;
}
.logout_div:hover{
    background-color:#c2c236;
    

}
.logout_div a{
                color:#b1b128;
                padding:12px 16px;
                text-decoration:none;
                display:block;
                
            }
            .profile_div:hover .logout_div{
                display:block;
            }
            .logout_div a:hover{
                color:white;
            }
        </style>
    </head>

    <body>
        <div class="main_div" style="background-image:url('../GRAPHICS/raj2.png'); background-size:130% 130%;">
            <div class="logo_div">
               <a href="new_user_index_org.php"> <img src="../GRAPHICS/logo.png" alt="" class="logo_pic"></a>
            </div>
            <div class="navigation_div">
                <ul style="margin-left:100px;">
                    <li class="nav_li"><div class="profile_div"><a href="organizer_dashboard.php"><button class="home_nav_button" ><?php $filePath=$_SESSION['profile_pic']; echo '<img class="user_profile_pic" style="" src="'.$filePath.'">'?>Profile</button></a>
                <!-- <div class="logout_div">
                    <a href="logout.php">Logout</a>
                </div> -->
                </div></li>
                    <li class="nav_li"><a href="aboutus.php"><button class="nav_buttons">About Us</button></a></li>
                    <li class="nav_li"><div class="contact_container_div"><button class="nav_buttons_contact">Contact</button>
                    <div class="contact_list_div">
                        <a href="#">aaar@gmail.com</a>
                        <a href="#">twitter.com/aaar</a>

                    </div>
                    
                    </div></li>
                    
                    <!-- <li class="nav_li"><a href="organizer_details.php" style="margin-right:0px;"><button class="nav_buttons">Organize</button></a></li> -->
                    
                    
                </ul>
            </div>
            <div class="content" style="width:700px;">
            <?php
            // $first_name = isset($_SESSION['first_name']) ? $_SESSION['first_name'] : 'error';
            // echo '<p class="go">' .$first_name. '</p>';
         if(isset($_SESSION['name'])){
            $name=$_SESSION['name'];
           echo '<p class=go style="margin-bottom:40px; ">Welcome '.$name.' !</p>';
 
         }
                       

            ?>    
            
                
                
                     <a href="organizer_details.php"><button class="upcoming">Organize Event</button></a>
                     <a href="logout.php"><button class="upcoming" style="margin-left:15px;">Logout</button></a>  
            </div>
        </div>
    </body>
</html>