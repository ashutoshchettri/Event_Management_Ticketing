<?php
session_start();
include('dbconnection');
$event=$_SESSION['event_title'];
echo $event;
?>