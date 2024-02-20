<?php
// Include the database connection file
include('dbconnection.php');

// Check if the necessary parameters are provided via POST
if (isset($_POST['event_id']) && isset($_POST['attendee_id']) && isset($_POST['ticket_id'])) {
    // Retrieve parameters from POST data
    $eventId = $_POST['event_id'];
    $attendeeId = $_POST['attendee_id'];
    $ticketId = $_POST['ticket_id'];

    // Get the current date
    $orderDate = date('Y-m-d');

    // Fetch the ticket price from the ticket table
    $ticketPriceQuery = "SELECT price FROM ticket WHERE ticket_id = $ticketId";
    $ticketPriceResult = $connection->query($ticketPriceQuery);
    if ($ticketPriceResult->num_rows > 0) {
        $ticketData = $ticketPriceResult->fetch_assoc();
        $ticketPrice = $ticketData['price'];

        // Insert the booking details into the ticket_order table
        $insertOrderQuery = "INSERT INTO ticket_order (attendee_id, ticket_id, quantity, order_date) VALUES ($attendeeId, $ticketId,1, '$orderDate')";
        if ($connection->query($insertOrderQuery) === TRUE) {
            // Success message
            header("Location: user_dashboard.php");
        } else {
            // Error message
            echo "Error: " . $insertOrderQuery . "<br>" . $connection->error;
        }
    } else {
        // Ticket not found or invalid ticket ID
        echo "Ticket not found.";
    }
} else {
    // Required parameters not provided via POST
    echo "Invalid request.";
}

// Close the database connection
$connection->close();
?>
