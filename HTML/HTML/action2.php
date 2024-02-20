<?php
session_start();
include('dbconnection.php');

if(isset($_POST['register'])){
    $org_name=$_POST['organizer_name'];
    $organization=$_POST['organization_name'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $phone=$_POST['phone_no'];
    $password=$_POST['password'];
    $retype_password=$_POST['password_again'];
   

  

    if($org_password=$org_retype_password){
        $org_password=md5($org_password);
    }
    if(isset($_FILES['profile_picture_img'])){
        $image=$_FILES['profile_picture_img'];
        $uploadDirectory='profile_pic_uploads/';
        $fileName=uniqid().'_'.$image['name'];
        $filePath=$uploadDirectory.$fileName;

        if(move_uploaded_file($image['tmp_name'],$filePath)){
            
            $sql="INSERT INTO organizer_table(organizer_name,organization_name,email,address,phone,password,role_id,profile_pic)
            VALUES ('$org_name','$organization','$email','$address','$phone','$password',3,'$filePath')";
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


if(isset($_POST['login_submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sqllogin="SELECT * FROM attendee_table WHERE email='$email'";
    $sqllogin2="SELECT * FROM organizer_table WHERE email='$email'" ;
    $resultlogin=$connection->query($sqllogin);
    $resultlogin2=$connection->query($sqllogin2);

    $rowlogin=$resultlogin ->fetch_assoc();
    $rowlogin2=$resultlogin2->fetch_assoc();
    if($rowlogin['password']==md5($password)){
        $_SESSION['user_id']=$rowlogin['user_id'];
        $_SESSION['email']=$rowlogin['email'];
        $_SESSION['role_id']=$rowlogin['role_id'];
        $_SESSION['profile_pic']=$rowlogin['profile_pic'];
        $_SESSION['name']=$rowlogin['first_name'];
        if($rowlogin['role_id']=='2'){
            header("Location: new_user_index.php");
        }
        
    }

    else if($rowlogin2['password']==md5($password)){
        $_SESSION['organizer_id']=$rowlogin2['organizer_id'];
        $_SESSION['org_email']=$rowlogin2['email'];
        $_SESSION['profile_pic']=$rowlogin2['profile_pic'];
        if($rowlogin2['role_id']=='3'){
            header("Location: new_user_index2.php");
        }

    }
}


?>