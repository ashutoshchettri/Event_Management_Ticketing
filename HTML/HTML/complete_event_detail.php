<!DOCTYPE html>
<html>
    <head>
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

            .mother_div{
                display:grid;
                grid-template-columns: 1fr 430px;
                box-shadow:0px 0px 5px rgba(0,0,0,0.4);
                margin-top:30px;
                margin-left:30px;
                margin-right:30px;
            }
            .complete_image{
                height:400px;
                width:100%;
                border-radius:5px;
            }
            .book{
                display:block;
                text-align: center;
                padding-top:10px;
                padding-bottom:10px;
                padding-left:15px;
                padding-right:15px;
                font-size:18px;
                color:white;
                border-style:none;
                background-color:blue;
                border-radius:7px;
                margin-left:120px;
                margin-top:40px;
                cursor:pointer;
            }
            .book:hover{
                opacity:0.7;
            }

        </style>
    </head>

    <body>
        <div class="main_div" style=" background-image:url('../GRAPHICS/raj2.png');
    background-size:270% 270%;">
            <div class="logo_div">
               <a href="index.php"> <img src="../GRAPHICS/logo.png" alt="" class="logo_pic"></a>
            </div>
            <div class="navigation_div">
                <ul style="margin-left:290px;">
                    <li class="nav_li"><a href="index.php"><button class="home_nav_button">Home</button></a></li>
                    <!-- <li class="nav_li"><a href="./HTML/aboutus.php"><button class="nav_buttons">About Us</button></a></li> -->
                    <li class="nav_li"><div class="contact_container_div"><button class="nav_buttons_contact">Contact</button>
                    <div class="contact_list_div">
                        <a href="#">aaar@gmail.com</a>
                        <a href="#">twitter.com/aaar</a>

                    </div>
                    
                    </div></li>
                    
                </ul>
            </div>


<?php
    // Include the database connection file
    include('dbconnection.php');
    session_start();

    // Check if the event ID is provided in the URL
    if (isset($_GET['event_id'])) {
        $eventId = $_GET['event_id'];


        // Query to fetch event details from events table
        $eventQuery = "SELECT * FROM events WHERE event_id = $eventId";
        $eventResult = $connection->query($eventQuery);

        // Query to fetch ticket details from ticket table linked to the event_id
        $ticketQuery = "SELECT * FROM ticket WHERE event_id = $eventId";
        $ticketResult = $connection->query($ticketQuery);

        // Check if the event exists
        if ($eventResult->num_rows > 0) {
            $eventData = $eventResult->fetch_assoc();
            // Extract event details
            $eventTemplate = $eventData['event_template'];
            $eventTitle = $eventData['event_title'];
            $eventDate = $eventData['event_date'];
            $eventTime=$eventData['event_time'];
            $eventDescription=$eventData['event_description'];
            $eventLocation=$eventData['event_location'];
            $eventCategory=$eventData['category'];
            
           

            // Check if there are linked ticket records
            if ($ticketResult->num_rows > 0) {
                echo '<div class="ticket-details">';
                while ($ticketData = $ticketResult->fetch_assoc()) {
                    // Extract ticket details
                    $ticketPrice = $ticketData['price'];
                    $ticketId=$ticketData['ticket_id'];
                    // You can extract other ticket details here

                    // Display the ticket details
                    
                    // Display other ticket details here
                }
                echo '</div>';
            } else {
                echo '<p>No tickets found for this event.</p>';
            }

            // Display the organizer name
            $organizerId = $eventData['organizer_id'];
            $organizerQuery = "SELECT organizer_name FROM organizer_table WHERE organizer_id = $organizerId";
            $organizerResult = $connection->query($organizerQuery);
            if ($organizerResult->num_rows > 0) {
                $organizerData = $organizerResult->fetch_assoc();
                $organizerName = $organizerData['organizer_name'];
                
            } else {
                echo '<p>Organizer not found.</p>';
            }
            // Check if the user is logged in and has an attendee ID
if (isset($_SESSION['user_id'])) {
    $attendee_id = $_SESSION['user_id'];
}
        } else {
            echo 'Event not found.';
        }
    } else {
        echo 'Event ID not provided.';
    }

  
    echo '<div class="mother_div">';
            
    echo '<div class="complete_template">';
    echo '<img class="complete_image" src="' . $eventTemplate . '" alt="">';
    echo '</div>';

    echo '<div class="complete_event_info" style="margin-left:20px;">';
    echo '<p style="color:blue;  font-size:22px;">' . $eventTitle . '</p>';
    echo '<p style="font-style:italic; font-size:18px; font-weight:700; margin-top:20px;">' . $organizerName . '</p>';
    echo '<p style="color: rgb(204, 0, 102); margin-top:12px; font-style:italic;">' . $eventDate . '</p>';
    echo '<p style="color:blue; margin-top:12px; font-size:15px; font-style:italic;">' . $eventTime . '</p>';
    echo '<p style="margin-top:12px; font-style:italic; font-size:20px;">"' . $eventDescription . '"</p>';
    echo '<p style="margin-top:12px; font-style:italic; font-size:20px; color: green;">Ticket Price: ' . $ticketPrice . '</p>';
    echo '<p style="margin-top:12px; font-style:italic; font-size:20px; color: red;">Category: ' . $eventCategory . '</p>';
    
    echo '<p style="margin-top:12px; font-style:italic; font-size:20px; color: brown;">Venue: ' . $eventLocation . '</p>';
    // Modify the "Book now" button to be a form
echo '<form action="ticket_order.php" method="post">';
echo '<input type="hidden" name="event_id" value="' . $eventId . '">';
echo '<input type="hidden" name="attendee_id" value="' . $attendee_id . '">';
echo '<input type="hidden" name="ticket_id" value="' . $ticketId . '">';
echo '<input type="submit" value="Book now" class="book">';
echo '</form>';

    
    echo '</div>';

    echo '</div>';
    $connection->close();
    ?>
 


            
            
            </div>
        
    </body>
</html>




