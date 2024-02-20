<?php
    include "../HTML/dbconnection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv=""X-UA-Compatible" contents=""IE=edge">
    <meta name="viewport" content=""width=device-width,initial-scale=1.0">
    <link rel="stylesheet"  href="Adminpanel.css">
    <title>Admin Panel</title>
</head>

<body>
      <div class="side-menu">
           <div class="brand-name">
        <h1>Admin Panel</h1>
    </div>
    <ul>
        <a href="dashboard.php"><li>Dashboard</li></a>
       <a href="user.php"><li>User</li></a> 
       <a href="ticket.php"><li>Ticket</li></a>
        <a href="event.php"><li>Event</li></a>
        <a href="admin.php"><li>Admin</li></a>
        <a href=""><li>Logout</li></a>
       
    </ul>
    </div>
</body>

</html>