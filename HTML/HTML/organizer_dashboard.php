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
    height:25px;
    width:25px;
    border-radius:12.5px;
    object-fit:cover;
    object-position:top;
    vertical-align:middle;
    margin-right:7px;
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

            #mother_div{
                margin-top:35px;
                
                display:grid;
                grid-template-columns: 250px 1fr;
                padding-right:30px;
            }
            #user_profile_big_div{
                width:230px;
                padding-left:50px;
            }
            #user_profile_pic_big{
                height:120px;
                width:120px;
                
                object-fit: cover;
                object-position:center;
                border-radius: 60px;
                display:block;

            }
            #top{
                padding-left:30px;
            }
        </style>
    </head>

    <body>
        <div class="main_div" style="background-image:url('../GRAPHICS/raj2.png'); background-size:220% 220%;">
            <div class="logo_div">
               <a href="new_user_index_org.php"> <img src="../GRAPHICS/logo.png" alt="" class="logo_pic"></a>
            </div>
            <div class="navigation_div">
                <ul style="margin-left:100px;">
                    <li class="nav_li"><div class="profile_div"><a href="organizer_dashboard.php"><button class="home_nav_button" style="background-color:#b1b128"><?php $filePath=$_SESSION['profile_pic']; echo '<img class="user_profile_pic" src="'.$filePath.'">'?>Profile</button></a>
                <div class="logout_div">
                    <a href="logout.php">Logout</a>
                </div>
                </div></li>
                    <li class="nav_li"><a href="aboutus.php"><button class="nav_buttons">About Us</button></a></li>
                    <li class="nav_li"><div class="contact_container_div"><button class="nav_buttons_contact">Contact</button>
                    <div class="contact_list_div">
                        <a href="#">aaar@gmail.com</a>
                        <a href="#">twitter.com/aaar</a>

                    </div>
                    
                    </div></li>
                    
                   
                    
                    
                </ul>
            </div>

            <div id="mother_div">
            <div style="margin-right:50px;">
        <div id="user_profile_big_div">
           
            <?php
             echo '<img id="user_profile_pic_big" src="'.$filePath.'">';
             if(isset($_SESSION['org_name'])){
                $org_name=$_SESSION['org_name'];
             }
             if(isset($_SESSION['organ'])){
                $organization=$_SESSION['organ'];
             }
             if(isset($_SESSION['org_contact'])){
                $org_phone=$_SESSION['org_contact'];
             }
             if(isset($_SESSION['organ_address'])){
                $org_address=$_SESSION['organ_address'];
             }
             echo '<p style="font-family:arial; font-weight:bold; font-size:22px; margin-top:15px; margin-bottom:3px;">'.$org_name.'</p>';
             echo '<p style="font-family:arial; font-weight:500; font-size:20px; margin-top:10px; color:rgb(128,0,0); margin-bottom:5px;">'.'('.$organization.')'.'</p>';
             echo '<p style="font-family:arial; color:grey; font-weight:500; font-size:15px; margin-top:15px; margin-bottom:5px;">'.'+977 '.$org_phone.'</p>';
             echo '<p style="font-family:arial;  font-weight:500; font-size:17px; margin-top:10px; margin-bottom:5px;">'.$org_address.'</p>';
             ?>
             
             
        <a href="logout.php"><button class="upcoming" style="margin-top:20px; margin-left:0px;">Logout</button></a>
        
        </div>
        
        </div>

            <div style=" padding-left:90px; padding-right:30px;" >
             <div id="heading_div">
                <p style="font-family:arial;font-weight:bold; font-size:30px; text-align:left; margin-top:50px; margin-bottom:30px;">Organized Events</p>
            </div>

            
            <?php 
            include('event_list.php'); 
            ?>

<a href="organizer_details.php" style="display:block; text-align:center; margin-top:20px;"><button class="upcoming">Add Event</button></a>
            
        </div>
            
    
    </div> 
        </div>
    </body>
</html>