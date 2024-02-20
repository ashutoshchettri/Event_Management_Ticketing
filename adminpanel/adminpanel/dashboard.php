<?php
    include "../HTML/dbconnection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv=""X-UA-Compatible" contents=""IE=edge">
    <meta name="viewport" content=""width=device-width,initial-scale=1.0">
    <link rel="stylesheet"  href="dashboard.css">
    <title>dashboard</title>
</head>

<body>
    <div class="container">
      <div class="side-menu">
           <div class="brand-name">
        <h1>Dashboard Panel</h1>
    </div>
    <ul>
        <li class="dashboard-item">Dashboard</li>
       <a href="user.php"><li>User</li></a> 
       <a href="ticket.php"><li>Ticket</li></a>
        <a href="event.php"><li>Event</li></a>
        <a href="admin.php"><li>Admin</li></a>
        <li>Logout</li>
    </ul>
    </div>
    <div class="two">
        <!-- <img id="aaa" src="img-01.jpg" alt="" > -->
    </div>
    </div>
</body>

</html>