<?php

session_start();
include ('dbconnection.php');
if(!isset($_SESSION['email'])){
header("Location: login.php");
}

if(isset($_POST['details'])){
    header("Location: organizer_details.php");
}
if(isset($_POST['ticket'])){
    $selectedCategory = $_POST['category_list'];

    $event_title=$_POST['event_title'];
   
    $address=$_POST['address'];
    $date=$_POST['start_date'];
    $time=$_POST['start_time'];
    $organizer=$_POST['organizer_name'];
    $event_description=$_POST['description'];
    $unit_in_stock=$_POST['quantity'];
    // $price=$_POST['price'];
    $_SESSION['event_title']=$event_title;
    $_SESSION['address']=$address;
    $_SESSION['start_date']=$date;
    $_SESSION['start_time']=$time;
    $_SESSION['organizer']= $organizer;
    $_SESSION['event_description']=$event_description;
    $_SESSION['category']=$selectedCategory;
    if(isset($_FILES['event_card'])){
        $image=$_FILES['event_card'];
        $uploadDirectory='profile_pic_uploads/';
        $fileName=uniqid().'_'.$image['name'];
        $filePath=$uploadDirectory.$fileName;

        if(move_uploaded_file($image['tmp_name'],$filePath)){
             $_SESSION['event_card'] = $filePath;
        }
    }

    header("Location: organizer_ticket.php");
    
   
}
if(isset($_POST['publish'])){
    if(isset($_POST['price'])){
        $price=$_POST['price'];
        $_SESSION['price']=$price;
    }
    if(isset($_POST['quantity'])){
        $unit_in_stock=$_POST['quantity'];
        $_SESSION['unit_in_stock']=$unit_in_stock;
    }
    if(isset($_POST['sales_start'])){
        $sales=$_POST['sales_start'];
        $_SESSION['sales_start']=$sales;
    }
    if(isset($_POST['sales_end'])){
        $sales_end=$_POST['sales_end'];
        $_SESSION['sales_end']=$sales_end;
    }
    
    
    header("Location: organizer_publish.php");
}

if(isset($_POST['publish_final'])){
    $user_id=$_SESSION['user_id'];
    $role_id=$_SESSION['role_id'];
    $event_title=$_SESSION['event_title'];
    $event_description=$_SESSION['event_description'];
    $date=$_SESSION['start_date'];
    $time=$_SESSION['start_time'];
    $address=$_SESSION['address'];
    $price=$_SESSION['price'];
    $unit_in_stock=$_SESSION['unit_in_stock'];
    

    $connection->begin_transaction();
    try{
        // $vendorInsertQuery="INSERT INTO vendor(user_id,role_id)
        // VALUES('$user_id','$role_id')";
        // $connection->query($vendorInsertQuery);
        // $vendor_id=$connection->insert_id;
        if(isset($_SESSION['event_card'])){
            $filepath=$_SESSION['event_card'];
        }

        if(isset($_SESSION['category'])){
            $categorys=$_SESSION['category'];
        }
        $eventInsertQuery="INSERT INTO events(event_title,event_description,event_date,event_time,event_location,organizer_id,event_template,category)
        VALUES('$event_title','$event_description','$date','$time','$address','$user_id','$filepath','$categorys')";
        $connection->query($eventInsertQuery);

        $event_id=$connection->insert_id;

        $ticketInsertQuery="INSERT INTO ticket(event_id,price,unit_in_stock,sales_start,sales_end)
        VALUES('$event_id','$price','$unit_in_stock','$sales_start','$sales_end')";
        $connection->query($ticketInsertQuery);

        $connection->commit();
        echo "Data Inserted Successfully";
        header("Location: organizer_dashboard.php");

    }
    catch(Exception $e){
        $connection->rollback();
        echo "Echo:".$e->getMessage();
    }
}

?>









