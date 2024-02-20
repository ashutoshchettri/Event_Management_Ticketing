<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../CSS/login.css">
        <style>
            .register_as{
                color:blue;
                text-decoration:none;
            }
            .register_as:hover{
                color:green;
            }
            .google_facebook{
                margin-top:30px;
            }
        </style>
    </head>
    <body>
        <div class="main_div">
            <div class="login_section_div">
                <a href="../index.php"><img src="../GRAPHICS/logo.png" alt="logo" class="logo_pic"></a>
                <p style="text-align:center; font-size:20px; font-weight:550; font-family:Arial; margin-bottom:20px;">Welcome!</p>
            <div style="height:300px; width:350px; margin:auto; margin-bottom:30px;">

            <form action="action.php" method="POST">
                <input type="text" name="email" placeholder="Email Address" class="input_login" required>
                <input type="password" name="password" placeholder="Password" class="input_login" required> 
                <a href="" style="text-decoration:none; color:orange; float:right; margin-top:3px; margin-bottom:10px;">Forgot Password?</a>
                <input type="submit" value="SIGN IN" name="login_admin" class="login_submit_button">
            </form>
            <p style="font-size:13px; color:black;font-weight:700; text-align:center; margin-top:17px;">Don't have an account?</p>
            <p style="margin-top:20px; text-align:center; font-family:arial; font-weight:bold; color:indigo;">Sign up </p>
            <p style="margin-top:20px; text-align:center; font-family:arial; font-weight:bold; color:indigo;"><a href="register.php" class="register_as">Attendee</a> <span>Or</span> <a href="register2.php" class="register_as">Organizer</a></p>
            <a href="register.php" style="display:block; text-align:center; text-decoration:none; font-size:14px; font-weight:700; margin-top:12px;"></a>
            <!-- <p style="text-align:center; margin-top:20px; ">Or</p>     -->
        </div>

        <div style="height:100px; width:420px; margin:auto; margin-bottom:20px;">
        <button class="google_facebook">
            <img style="margin-right: 8px; vertical-align:middle;height:25px; width:25px; border-radius:20px; object-fit:cover; object-fit:center;" src="../GRAPHICS/google.png" alt="">Sign in with google</button>
            <button class="google_facebook">
                <img style="margin-right: 8px; vertical-align:middle;height:25px; width:25px; border-radius:20px; object-fit:cover; object-fit:center;" src="../GRAPHICS/facebook.png" alt="">Sign in with facebook</button>
            </button>
            
        </div>
            </div>

            <div class="template_section_div">
                <img src="../GRAPHICS/guitar_event.jpg" alt="Guitarist" style="height:100%; width:530px;">
            </div>
        </div>
    </body>
</html>