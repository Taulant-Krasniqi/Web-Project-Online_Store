<?php

$conn = mysqli_connect("localhost", "snap", "snap1647", "web_login");
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

// Storing Session
if(isset($_SESSION['User'])){
$user_check = $_SESSION['User'];
// SQL Query To Fetch Complete Information Of User
$query = "SELECT Username from login where Username = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['Username'];
}
?>