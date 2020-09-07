<?php

$error = ''; // Variable To Store Error Message
if (isset($_POST['submit'])) {

    require 'session.php';
if (empty($_POST['user']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else{   
// Define $username and $password
$username = $_POST['user'];
$password = $_POST['password'];
// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "snap", "snap1647", "web_login");
// SQL query to fetch information of registerd users and finds user match.
$password = md5($password);
$query = "SELECT username, password from login where username=? AND password=? LIMIT 1";
// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$stmt->bind_result($username, $password);
$stmt->store_result();
if($stmt->fetch()) {
$_SESSION['User'] = $username; // Initializing Session
header("location: redirect.php"); // Redirecting To Profile Page
}else{
    header("location:404.html?Invalid= Please Enter Correct User Name and Password ");
}
}
mysqli_close($conn); // Closing Connection
}
?>