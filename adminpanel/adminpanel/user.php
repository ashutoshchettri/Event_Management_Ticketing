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
     <h1>User Panel</h1>
 </div>
 <ul>
    <li>Dashboard</li>
    <li class="user-item"><a href="user.php" class="user-link">User</a></li> 
    <a href="ticket.php"><li>Ticket</li></a>
     <a href="event.php"><li>Event</li></a>
     <a href="admin.php"><li>Admin</li></a>
     <li>Logout</li>
 </ul>
 </div>
    <main class="table">
        <section class=""table_header">
            <h1>User Details</h1>
        </section>
        <section class=""table_body">
        <table>
              <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Date of birth</th>
                </tr>
              </thead>
              <tbody>
              <?php
        
                // Fetch data from the 'contactus' table and display it in the table
                    include("../HTML/dbconnection.php");

                    $sql = "SELECT * FROM attendee_table";
                    $result = mysqli_query($connection, $sql);
                        if (!$result) {
                            echo "Error fetching data: " . mysqli_error($connection);
                        } else {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>{$row['first_name']}</td>"; 
                                echo "<td>{$row['last_name']}</td>";
                                echo "<td>{$row['email']}</td>";
                                echo "<td>{$row['phone_no']}</td>";
                                echo "<td>{$row['dob']}</td>";
                                echo "</tr>";
                            }
            
                         }
                ?>

              </tbody>
             
        </table>
        </section>
    </main>
 </body>
 </html>
 <?php
    