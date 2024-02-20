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
        <div class="main_div" style="height:720px;">
            <div class="header_div">
                <div class="logo_div">
                    <a href="new_user_index.php"><img src="../GRAPHICS/logo.png" alt="" class="logo_pic"></a>
                </div>
                <div class="organizer_heading_div">
                    <p class="organizer_heading_p">Add event details below.</p>
                </div>
    
            </div>
                <form action="event_entry.php" method="POST" enctype="multipart/form-data">
                <div class="detail_div">
                <div  style="display:grid; grid-template-columns: 1fr 1fr;">
                    <div style="height:80px;" >
                    <label for="Event Title" style="font-family: arial; font-weight:500; color:rgb(44, 40, 40)">Event Title</label>
                    <input type="text" class="input_data_small" name="event_title" required>
                    </div>
                    <div style="height:80px;" >
                        <label for="Event Organizer" style="font-family: arial; font-weight:500; color:rgb(44, 40, 40)">Organizer</label>
                        <input type="text" class="input_data_small" name="organizer_name" required>
                    </div>
                </div>

                <div style="width:800px; height:85px; margin-bottom:5px; border-color:red;  border-width:0.1px; ">
                    <label for="Description" style="font-family: arial; font-weight:500; color:rgb(44, 40, 40)">Event Description</label>
                    <textarea name="description" style="
                    display:block;
                    margin-top:5px;
                  
                    border-width:2px;
                    border-color:rgb(168, 162, 162);
                    border-radius:5px;
                    padding-top:8px;
                    padding-bottom:8px;
                    padding-right:8px;
                    padding-left:8px;
                    width:767px;
                    font-size:18px;
                    outline:none;
                    height:60px;"></textarea>
                </div>
                   <div style="width:768px; height:70px;  padding-top:10px; margin-bottom:20px;">
                   <label for="Location" style="font-family: arial; font-weight:500; color:rgb(44, 40, 40); margin-right:8px;">Address</label>
                    <input type="text" class="input_data_small" style="margin-top:5px;  vertical-align:middle; width:770px;"name="address" required>
                   </div>
                <div style="display:grid; grid-template-columns: 1fr 1fr;  border-width:0.2px; margin-bottom:20px;">
                    <div style="height:80px; border-color:blue; border-width:0.1px; ">
                    <label for="Start Date" style="font-family: arial; font-weight:500; color:rgb(44, 40, 40)">Start Date</label>
                    <input type="date" class="input_data_small" name="start_date" required>
                    </div>
                    <div style="height:80px; border-color:red; border-width:0.1px; ">
                        <label for="Start Time" style="font-family: arial; font-weight:500; color:rgb(44, 40, 40)">Start Time</label>
                        <input type="time" class="input_data_small" name="start_time" required>
                    </div>
                </div>
                

                <div style="display:grid; grid-template-columns: 1fr 1fr;  border-width:0.2px; margin-bottom:10px;">
                    <div style="height:80px; border-color:blue; border-width:0.1px; ">
                        <label for="End Date" style="font-family: arial; font-weight:500; color:rgb(44, 40, 40)">End Date</label>
                    <input type="date" class="input_data_small" name="end_date" required>
                    </div>
                    <div style="height:80px; border-color:blue; border-width:0.1px; ">
                        <label for="End Time" style="font-family: arial; font-weight:500; color:rgb(44, 40, 40)">End Time</label>
                        <input type="time" class="input_data_small" name="end_time" required>
                    </div>

                </div>
            <div style="display:grid; grid-template-columns: 1fr 1fr;  border-width:0.2px; margin-bottom:40px;">
                
                <div class="file-input_container">
                    <label for="image" class="custom-file-label"><i class="fa-solid fa-upload icon"></i>Upload Image<i class="fa-solid fa-image" style="margin-left:20px;"></i></label>
                    <input type="file" id="image" name="event_card" class="file_input" accept="image/jpeg, image/jpg" >
                  </div>
                  
                <div class="file-input_container">
                <label for="Event_list"  style="font-family: arial; font-weight:500; color:rgb(44, 40, 40); vertical-align:middle;">Event Category </label>

<select required name="category_list" id="category" style="color:#b1b128; padding-left:10px; padding-right:10px; font-size:15px; margin-left:15px; border-color:#b1b128;padding-top:10px; padding-bottom:10px;">
<option value="music">Music</option>
<option value="spirituality">Spirituality</option>
<option value="arts">Arts</option>
<option value="holiday">Holiday</option>
<option value="hobby">Hobbies</option>
<option value="business">Business</option>
<option value="tech">Tech</option>
<option value="others">Others</option>

</select>
                </div>
            </div>
            

            
        </div>

        <div class="footer">
            <div class="details_bar"><input type="submit" name='details' value="Details" class="detail_button"></div>
            <div class="ticket_bar"><input type="submit" name='ticket' value="Ticket" class="ticket-button"></div>
            <div class="publish_bar"><input type="submit" name='publish' value="Publish" class="publish_button"></div>

        </div>
                </form>

            

   
            </div>
    </body>
</html>