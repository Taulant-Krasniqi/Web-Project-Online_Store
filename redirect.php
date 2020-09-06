<?php
include('session.php');
    if(isset($_SESSION['User'])){
        header("location: profile.php"); // Redirecting To Home Page
    }
    else{
        header("location: index.php");
    }
?>
