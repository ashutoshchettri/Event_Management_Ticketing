<?php
session_start();
if(!isset($_SESSION['email'])){
header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
         integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
         crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="../CSS/organize.css">
    </head>
    <body>
        <div class="main_div">
            <div class="header_div">
                <div class="logo_div">
                   <a href="new_user_index.php"> <img src="../GRAPHICS/logo.png" alt="" class="logo_pic"></a>
                </div>
                <div class="organizer_heading_div">
                    <p class="organizer_heading_p">Add event details below.</p>
                </div>
    
            </div>

            <form action="event_entry.php" method="POST">
            <div class="detail_div">
                <!-- <label for="Add Tickets" style="font-family: arial; font-weight:500; color:rgb(44, 40, 40)">Add Tickets</label> -->
                <div  style="display:grid; grid-template-columns: 1fr 1fr 1fr; margin-top:90px; margin-bottom:50px;">
                    
                    <div style="height:51px; border-color:blue; border-width:0.1px;">
                   <!-- <form action="">
                    <input type="radio"  required>
                    <label for="paid" style="font-family:arial;font-size:18px;">Paid</label>
                   </form>  -->
                  
                    <div class="radio-group">
                        <input type="radio" id="paid" name="payment" value="paid" >
                        <label for="paid" class="custom-radio-label">Paid</label>
                        <input type="radio" id="free" name="payment" value="Free" >
                        <label for="free" class="custom-radio-label">Free</label>
                      </div>
                      
                 
                  
                    
                    </div>
                    <div style="height:51px;  border-color:red; border-width:0.1px;">
                        <label for="price" style="font-family:arial; font-size:18px; font-weight:500;">Price</label>
                        <input type="number" class="input_data_number" name="price" >
                    </div>
                    <div style="height:80px; border-color:red; border-width:0.1px; ">
                        <label for="qualtity" style="font-family: arial; font-weight:500; color:rgb(44, 40, 40); margin-left:0px;">Available Quantity</label>
                        <input type="number" class="input_data_number_quantity" class="quantity" name="quantity">
                    </div>
                </div>

                

                <div style="display:grid; grid-template-columns: 1fr 1fr ;  border-width:0.2px; margin-bottom:20px;">
                    <div style="height:80px; border-color:blue; border-width:0.1px; ">
                    <label for="Sales Start" style="font-family: arial; font-weight:500; color:rgb(44, 40, 40)">Sales Start</label>
                    <input type="date" class="input_data_small" name="sales_start">
                    </div>
                    <div style="height:80px; border-color:red; border-width:0.1px; ">
                        <label for="Start Time" style="font-family: arial; font-weight:500; color:rgb(44, 40, 40)">Start Time</label>
                        <input type="time" class="input_data_small" name="start_time">
                    </div>
                    
                </div>
                

                <div style="display:grid; grid-template-columns: 1fr 1fr;  border-width:0.2px; margin-bottom:10px;">
                    <div style="height:80px; border-color:blue; border-width:0.1px; ">
                        <label for="Sale Ends" style="font-family: arial; font-weight:500; color:rgb(44, 40, 40)">Sales End</label>
                    <input type="date" class="input_data_small" name="sales_end">
                    </div>
                    <div style="height:80px; border-color:blue; border-width:0.1px; ">
                        <label for="End Time" style="font-family: arial; font-weight:500; color:rgb(44, 40, 40)">End Time</label>
                        <input type="time" class="input_data_small" name="end_time">
                    </div>

                </div>
           
            

            
        </div>

        <div class="footer" style="margin-top:132px;">
        <div class="details_bar"><input type="submit" name='details' value="Details" class="details_button"></div>
            <div class="ticket_bar"><input type="submit" name='ticket' value="Ticket" class="tickets-button"></div>
            <div class="publish_bar"><input type="submit" name='publish' value="Publish" class="publishs_button"></div>

        </div>
        </form>
            </div>
    </body>
</html>