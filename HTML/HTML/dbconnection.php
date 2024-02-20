<?php
$servername="localhost";
$username="root";
$password="";
$database="event_user_db";

$connection=new mysqli($servername,$username,$password,$database);


if(!$connection){
    die("connection failed". mysqli_connect_error());
}
?>
