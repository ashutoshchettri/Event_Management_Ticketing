<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../CSS/register.css">
        <script src="script.js"></script>
    </head>
    <body>
        <div class="main_div">
            <div class="login_section_div">
                <a href="../index.php"><img src="../GRAPHICS/logo.png" alt="logo" class="logo_pic"></a>
                <p style="text-align:center; font-size:20px; font-weight:550; font-family:Arial; margin-bottom:20px;">Register</p>
            
                <div style="height:520px; width:350px; margin:auto; margin-bottom:0px;">

            <form action="action.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="first_name" placeholder="First Name" class="input_register" id="first">
                <input type="text" name="last_name" placeholder="Last Name" class="input_register" id="last"> 
                <input type="text" name="user_name" placeholder="Username" class="input_register" id="usrname">
                <input type="text" name="email" placeholder="Email" class="input_register" id="email">
                <input type="text" name="phone_no" placeholder="Phone Number" class="input_register" id="num">
                <input type="password" name="Password" placeholder="Password" class="input_register" id="pass">
                <input type="password" name="password_again" placeholder="Confirm Password" class="input_register" id="cpass">
                <p style="margin-top:3px; margin-bottom:3px; font-weight:bold;">DOB</p>
                <input type="date" name="date" placeholder="DOB" class="input_register" style="margin-bottom:30px;" required>
                
                <input type="submit" class="register_submit_button" value="Register" name="register" onclick="return validate()">
                
            </form>  
        </div>

        

       
            </div>

            <div class="template_section_div">
                <img src="../GRAPHICS/guitar_event.jpg" alt="Ted" style="height:100%; width:530px;">
            </div>
        </div>
    </body>
</html>