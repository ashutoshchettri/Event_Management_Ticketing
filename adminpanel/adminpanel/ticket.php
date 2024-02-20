<?php
    include "../HTML/dbconnection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>userpanel</title>
   <link rel="stylesheet" href="user.css">
</head>
<body>
   <div class="side-menu">
       <div class="brand-name">
    <h1>Ticket Panel</h1>
</div>
<ul>
    <li>Dashboard</li>
    <a href="user.php"><li>User</li></a> 
    <a href="ticket.php"><li>Ticket</li></a>
     <a href="event.php"><li>Event</li></a>
     <a href="admin.php"><li>Admin</li></a>
     <li>Logout</li>
</ul>
</div>
   <main class="table">
       <section class=""table_header">
           <h1>Ticket Details</h1>
       </section>
       <section class=""table_body">
       <table>
             <thead>
               <tr>
                   <th>Event Name</th>
                   <th>Ticket Price</th>
                   <th>Unit in stock</th>
               </tr>
             </thead>
             <tbody>
             <tr> 
               <td>The Element Concert</td>
               <td>Rs 300</td>
               <td>300</td>
           </tr>

             </tbody>
            
       </table>
       </section>
       

   </main>
</body>
</html>