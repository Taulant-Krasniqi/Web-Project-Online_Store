<?php

$conn = mysqli_connect("localhost", "snap", "snap1647", "web_login");
session_start();// Starting Session
// Storing Session
$user_check = $_SESSION['User'];
// SQL Query To Fetch Complete Information Of User
$query = "SELECT Username from login where Username = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['Username'];
?>