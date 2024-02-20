<!DOCTYPE html>
<html>
    <head>
        <style>
            *{
                box-sizing: border-box;
                margin: 0px;
                
            }
            p{
                font-family:Arial;
            }
            .event-div{
                display: grid;
                grid-template-columns: 200px 1fr;
                margin-top:18px;
                box-shadow:0px 0px 5px rgba(0,0,0,0.4);
                padding:8px;
}
.image_template_class{
    height:100px;
    width:200px;

}
        </style>

    </head>
    <body>
    <?php
// session_start();
include('dbconnection.php');
// $user_email=$_SESSION['org_email'];
if(isset($_SESSION['user_id'])){
    $user_id=$_SESSION['user_id'];
}

$sql = "SELECT e.* 
          FROM events e
          INNER JOIN ticket t ON e.event_id = t.event_id
          INNER JOIN ticket_order o ON t.ticket_id = o.ticket_id
          WHERE o.attendee_id = $user_id";

$result = $connection->query($sql);


// $sql="SELECT events.* FROM events
// INNER JOIN organizer_table ON events.organizer_id = organizer_table.organizer_id
// WHERE organizer_table.organizer_id = $user_id";
// $result = $connection->query($sql);



if ($result->num_rows > 0) {
    $divCount = 0;
    while ($row = $result->fetch_assoc()) {
        $divCount++;
        $eventId = $row['event_id'];
        $eventTemplate=$row['event_template'];
        $eventTitle=$row['event_title'];
        $eventDate = $row['event_date'];
        $eventTime=$row['event_time'];
        $eventAddress=$row['event_location'];

        // Display the event in a div
        echo '<div class="event-div">';
        echo '<div style="margin-right:50px;">';
       echo '<img class="image_template_class" src="'.$eventTemplate.'" alt="">';
       echo'</div>';
       echo '<div style="margin-left:20px;">';
        echo '<p style=" font-size:17px; margin-bottom:8px; font-weight:bold;">' . $eventTitle . '</p>';
        echo '<p style="color:#e75480; font-size:14px;">Starting Date: ' . $eventDate . '</p>';
        echo '</div>';
        echo '</div>';

        // Break the loop after displaying 3 events in separate divs
        if ($divCount===1) {
            
            break;
        }
    }
} else {
    echo 'No upcoming events found.';
}

// Step 4: Close the database connection
$connection->close();
?>
        
    </body>
</html>
