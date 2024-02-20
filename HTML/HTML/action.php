<?php
session_start();
include('dbconnection.php');

if(isset($_POST['register'])){
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $username=$_POST['user_name'];
    $email=$_POST['email'];
    $phone=$_POST['phone_no'];
    $password=$_POST['password'];
    $retype_password=$_POST['password_again'];
    $dob=$_POST['date'];

  

    if($password=$retype_password){
        $password=md5($password);
    }
    if(isset($_FILES['profile_picture_img'])){
        $image=$_FILES['profile_picture_img'];
        $uploadDirectory='profile_pic_uploads/';
        $fileName=uniqid().'_'.$image['name'];
        $filePath=$uploadDirectory.$fileName;

        if(move_uploaded_file($image['tmp_name'],$filePath)){
            
            $sql="INSERT INTO attendee_table(first_name,last_name,user_name,email,phone_no,password,dob,role_id,profile_pic)
            VALUES ('$first_name','$last_name','$username','$email','$phone','$password','$dob',2,'$filePath')";
            $result=$connection->query($sql);
            
        
            header("Location: successful.php");
            // $query="INSERT INTO user(profile_pic)
            // VALUES('$filePath')";
            // $resultimg=$connection->query($query);
            // if($resultimg){
            //     echo "Image uploaded";
            // }
          
        }
    }
   

}
elseif (isset($_POST['register_org'])){
    $organization=$_POST['organization'];
    $org_email=$_POST['org_email'];
    $org_address=$_POST['org_address'];
    $org_phone=$_POST['org_phone_no'];
    $org_password=$_POST['org_password'];
    $org_password_again=$_POST['org_password_again'];
    // $_SESSION['org_name']=$org_name;
    // $_SESSION['organ']=$organization;
    // $_SESSION['org_contact']=$org_phone;
    // $_SESSION['organ_address']= $org_address;
    // $_SESSION['org_email']=$org_email;

    if($org_password=$org_password_again){
        $org_password=md5($org_password);
    }
    if(isset($_FILES['org_profile_picture_img'])){
        $org_image=$_FILES['org_profile_picture_img'];
        $org_uploadDirectory='profile_pic_uploads/';
        $org_fileName=uniqid().'_'.$org_image['name'];
        $org_filePath=$org_uploadDirectory.$org_fileName;

        if(move_uploaded_file($org_image['tmp_name'],$org_filePath)){
            
            $sql="INSERT INTO organizer_table(organizer_name,organization_name,email,address,phone,password,role_id,profile_pic)
            VALUES ('$org_name','$organization','$org_email','$org_address','$org_phone','$org_password',3,'$org_filePath')";
            $result2=$connection->query($sql);
            
        
            header("Location: successful.php");
            // $query="INSERT INTO user(profile_pic)
            // VALUES('$filePath')";
            // $resultimg=$connection->query($query);
            // if($resultimg){
            //     echo "Image uploaded";
            // }
          
        }
    }
    

}
    if(isset($_POST['register_admin'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $retype_password=$_POST['password_again'];

    if($password=$retype_password){
        $password=md5($password);
    }       
            $sql="INSERT INTO TBLAdmin(admin_name,admin_email,admin_password,role_id)
            VALUES ('$name','$email','$password',1)";
            $result=$connection->query($sql);
            
        
            header("Location: admin_login.php");
            // $query="INSERT INTO user(profile_pic)
            // VALUES('$filePath')";
            // $resultimg=$connection->query($query);
            // if($resultimg){
            //     echo "Image uploaded";
            // }
          
    }

if(isset($_POST['login_submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sqllogin="SELECT * FROM attendee_table WHERE email='$email'";
    $resultlogin=$connection->query($sqllogin);
    $sql_login="SELECT * FROM organizer_table WHERE email='$email'";
    $result_login=$connection->query($sql_login);

    $rowlogin=$resultlogin ->fetch_assoc();
    $row_login=$result_login->fetch_assoc();

    if($rowlogin['password']==md5($password)){
        $_SESSION['user_id']=$rowlogin['attendee_id'];
        
        $_SESSION['email']=$rowlogin['email'];
        $_SESSION['role_id']=$rowlogin['role_id'];
        $_SESSION['profile_pic']=$rowlogin['profile_pic'];
        $_SESSION['name']=$rowlogin['first_name'];
        $_SESSION['name2']=$rowlogin['last_name'];
        $_SESSION['phone_no']=$rowlogin['phone_no'];
        $_SESSION['dob']=$rowlogin['dob'];
        if($rowlogin['role_id']==2){
            header("Location: new_user_index.php");
        } 
    }
    elseif($row_login['password']==md5($password)){
        
        $_SESSION['user_id']=$row_login['organizer_id'];
        $_SESSION['email']=$row_login['email'];
        $_SESSION['role_id']=$row_login['role_id'];
        $_SESSION['profile_pic']=$row_login['profile_pic'];
        $_SESSION['name']=$row_login['organizer_name'];
       
        $_SESSION['org_name']=$row_login['organizer_name'];
        $_SESSION['organ']=$row_login['organization_name'];
        $_SESSION['org_contact']=$row_login['phone'];
        $_SESSION['organ_address']= $row_login['address'];
        $_SESSION['org_email']=$row_login['email'];
        if($row_login['role_id']==3){
            header("Location: new_user_index_org.php");
        }
        }
    }
    
    if (isset($_POST['login_admin'])) {
        $admin_email = $_POST['email'];
        $admin_password = $_POST['password'];
    
        // Use a prepared statement with parameter binding
        $adminlogin = "SELECT * FROM TBLAdmin WHERE admin_email = ?";
        $stmt = $connection->prepare($adminlogin);
        $stmt->bind_param("s", $admin_email);
        $stmt->execute();
        $resultadmin = $stmt->get_result();
        
        if ($resultadmin->num_rows === 1) {
            $admin_login = $resultadmin->fetch_assoc();
            // Verify the password using password_verify() instead of md5()
            if ($admin_login['admin_password']==md5($admin_password)) {
                $_SESSION['admin_id'] = $admin_login['admin_id'];
                $_SESSION['admin_email'] = $admin_login['admin_email'];
                $_SESSION['admin_name'] = $admin_login['admin_name'];
                $_SESSION['role_id'] = $admin_login['role_id'];
                header("Location: admin_index.php");
            } else {
                echo "Invalid password";
            }
        } else {
            echo "Admin user not found";
        }
    }
?>