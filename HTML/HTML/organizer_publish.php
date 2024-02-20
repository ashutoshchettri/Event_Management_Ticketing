<?php
session_start();
if(!isset($_SESSION['email'])){
header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="../CSS/organize.css">
    </head>
    <body>
        <div class="main_div" style="height:725px;">
            <div class="header_div">
                <div class="logo_div">
                   <a href="new_user_index.php"> <img src="../GRAPHICS/logo.png" alt="" class="logo_pic"></a>
                </div>
                <div class="organizer_heading_div">
                    <p class="organizer_heading_p">Publish Your Event</p>
                </div>
            </div>
<form action="event_entry.php" method="POST">


            <div style="border-width:1px; width:900px;margin-bottom:0px; margin-left:50px;padding-left:20px; display:grid;grid-template-columns:1fr 300px ;">
                <div style="height:400px;">
                    <p style="font-size:18px; font-family:arial; font-weight:700; margin-top:60px;">When should we publish your event?</p>
                <br>
                
                    <input type="radio" id="publishNow" name="scheduleOption" style="cursor: pointer;">
                    <label for="publishNow" style="font-family: arial; font-size: 18px; margin-left: 20px;">Publish Now</label>
                    <br><br>
                    <input type="radio" id="scheduleLater" name="scheduleOption" style="cursor: pointer;">
                    <label for="scheduleLater" style="font-family: arial; font-size: 18px; margin-left: 20px;">Schedule for Later</label>
                  
                         
                  
                <div style="display:grid; grid-template-columns: 1fr 1fr;  border-width:0.2px; margin-bottom:30px; margin-top:50px;">
                    <div style="height:80px; border-color:blue; border-width:0.1px; ">
                    <label for="Start Date" style="font-family: arial; font-weight:500; color:rgb(44, 40, 40)">Start Date</label>
                    <input type="date" class="input_data_smalls" name="start_date_for_publish">
                    </div>
                    <div style="height:80px; border-color:red; border-width:0.1px; ">
                        <label for="Start Time" style="font-family: arial; font-weight:500; color:rgb(44, 40, 40)">Start Time</label>
                        <input type="time" class="input_data_smalls" name="start_time_for_publish">
                    </div>
                </div>
                <input type="submit" class="final_publish_button" value="Publish" name="publish_final">
                
                </div>


                    <div>
                    <p style="text-align:center; margin-bottom:7px; font-family:arial; font-weight:bold; color:blue">
                    Preview Your Event</p>
                    <div style="height:400px; background-color:rgb(233, 233, 233);">
                
        <?php
        if (isset($_SESSION['event_card'])) {
            $image_card = $_SESSION['event_card'];
            echo '<img style="height: 200px; width: 300px; display:block; margin-bottom:14px;" src="' . $image_card . '" alt="Uploaded Image">';
        } else {
            echo "Image not found in session!";
        }
        ?> 
           <?php

if(isset($_SESSION['event_title'])){
    $event_title=$_SESSION['event_title'];
}
if(isset($_SESSION['address'])){
    $address=$_SESSION['address'];
}
if(isset($_SESSION['start_date'])){
    $date=$_SESSION['start_date'];
}
if(isset($_SESSION['start_time'])){
    $time=$_SESSION['start_time'];
}
if(isset($_SESSION['organizer'])){
    $organizer=$_SESSION['organizer'];
}
if(isset($_SESSION['price'])){
    $ticketPrice=$_SESSION['price'];
}
// $event_title = isset($_SESSION['event_title']) ? $_SESSION['event_title'] : '';
// $address = isset($_SESSION['address']) ? $_SESSION['address'] : '';
// $date = isset($_SESSION['start_date']) ? $_SESSION['start_date'] : '';
// $time = isset($_SESSION['start_time']) ? $_SESSION['start_time'] : '';
// $organizer = isset($_SESSION['organizer']) ? $_SESSION['organizer'] : '';
// $ticketPrice = isset($_SESSION['price']) ? $_SESSION['price'] : '';

echo '<p style="font-family:arial; font-weight:bold; font-size:17px; width:280px; line-height:18px; margin-left: 7px; margin-bottom:25px;">' .$event_title. '</p>';
echo '<p style="font-family:arial; font-weight:500; font-size:17px; width:300px; line-height:4px; margin-left: 7px; margin-bottom:20px;">' .$address. '</p>';
echo '<p style="font-family:arial; font-weight:500; color:rgb(231, 84, 128); display:inline-block; margin-left: 7px; margin-right:20px; margin-bottom:20px;">' .$date. '</p>';
echo '<p style="font-family:arial; font-weight:500; color:rgb(231, 84, 128); display:inline-block; margin-left: 7px;">' .$time. '</p>';
echo '<p style="font-family:arial; font-weight:500; font-size:17px; width:300px; line-height:4px; margin-bottom:20px; margin-left: 7px;">' .$organizer. '</p>';
echo '<p><span style="font-family:arial; font-weight:500; font-size:17px; width:300px; line-height:4px; margin-bottom:20px; margin-left: 7px;">Ticket Price:</span> ' .$ticketPrice. '</p>';


?>
           
            
            </div>
                    </div>
                
            </div>

            <div class="footer_final">
            <div class="details_bar"><input type="submit" name='details' value="Details" class="detailss_button"></div>
            <div class="ticket_bar"><input type="submit" name='ticket' value="Ticket" class="ticketss-button"></div>
            <div class="publish_bar"><input type="submit" name='publish' value="Publish" class="publishss_button"></div>
    
            </div>
            </form>
            </div>
           
    </body>
</html>