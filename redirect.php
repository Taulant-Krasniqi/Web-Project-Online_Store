<?php
include('session.php');
    if(isset($_SESSION['Logged'])){
        header("location: Logged-In.php"); // Redirecting To Home Page
    }
    else{
        header("location: index.php");
    }
?>
