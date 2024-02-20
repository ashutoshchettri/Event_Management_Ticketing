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
                display: inline-block;
                width:220px;
                
                box-shadow:0px 0px 5px rgba(0,0,0,0.4);
                padding:8px;
                margin-right:15px;
                background-color:azure;
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
$currentDate = date('Y-m-d');
// $user_email=$_SESSION['org_email'];
// if(isset($_SESSION['user_id'])){
//     $user_id=$_SESSION['user_id'];
// }

// $sql="SELECT events.* FROM events
// INNER JOIN organizer_table ON events.organizer_id = organizer_table.organizer_id
// WHERE organizer_table.organizer_id = $user_id";
// $result = $connection->query($sql);

// $sql = "SELECT * FROM events WHERE event_date >= '$currentDate' ORDER BY event_date ASC LIMIT 4";

$sql = "SELECT e.event_id, e.event_template As template, e.event_title AS event_name, e.event_date, o.organizer_name, t.price 
        FROM events AS e 
        LEFT JOIN organizer_table AS o ON e.organizer_id = o.organizer_id
        LEFT JOIN ticket AS t ON e.event_id = t.event_id 
        WHERE e.event_date >= '$currentDate' 
        ORDER BY e.event_date ASC 
        LIMIT 3";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    $divCount = 0;
    while ($row = $result->fetch_assoc()) {
        $divCount++;
        $eventId = $row['event_id'];
        $eventTemplate=$row['template'];
        $eventTitle=$row['event_name'];
        $eventDate = $row['event_date'];
        $organizer=$row['organizer_name'];
        $price=$row['price'];
       

        // Display the event in a div
        echo '<div class="event-div">';
        echo '<a href="complete_event_detail.php?event_id=' . $eventId . '">';
        echo '<div style="margin-right:50px;">';
    
       echo '<img class="image_template_class" src="'.$eventTemplate.'" alt="">';
       echo'</div>';
       echo '<div style="margin-left:20px;">';
        echo '<p style=" font-size:17px; margin-bottom:9px; font-weight:bold; margin-top:10px;">' . $eventTitle . '</p>';
        echo '<p style="color:#e75480; font-size:14px;">Starting Date: ' . $eventDate . '</p>';
        echo '<p style="margin-top:9px;">'.$organizer.'</p>';
        echo '<p style="margin-top:9px;">Ticket Price: '.$price.'</p>';
        echo '</div>';
        echo'</a>';
        echo '</div>';

        // Break the loop after displaying 3 events in separate divs
        if ($divCount===3) {
            
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
