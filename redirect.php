<?php
include('session.php');
    if(isset($_SESSION['User'])){
        header("location: Logged-In.php"); // Redirecting To Home Page
    }
    else{
        header("location: index.php");
    }
?>
