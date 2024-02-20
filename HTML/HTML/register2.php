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
                <input type="text" name="organization" placeholder="Organization Name(eg.InfoTech Pvt.Ltd)" class="input_register" id="orgname"> 
                <input type="text" name="org_email" placeholder="Email" class="input_register" id="orgemail">
                <input type="text" name="org_address" placeholder="Address" class="input_register" id="orgaddress">
                <input type="text" name="org_phone_no" placeholder="Phone Number" class="input_register" id="orgphone">
                <input type="password" name="org_password" placeholder="Password" class="input_register" id="orgpass">
                <input type="password" name="org_password_again" placeholder="Confirm Password" class="input_register" id="orgcpass">
                <input type="file" name="org_profile_picture_img" accept="image/jpeg" required>
                <input type="submit" class="register_submit_button" value="Register" name="register_org" style="margin-top:50px;" onclick="return validateOrg()">
                
            </form>  
        </div>

        

       
            </div>

            <div class="template_section_div">
                <img src="../GRAPHICS/guitar_event.jpg" alt="Ted" style="height:100%; width:530px;">
            </div>
        </div>
    </body>
</html>