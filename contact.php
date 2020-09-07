<!DOCTYPE html>
<html>

<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/contactus.css">
    <script  src="js/cripts.js"></script>


</head>

<body>

    <ul class="nav-bar">
    <?php

include('session.php');
if(isset($_SESSION['User'])){
    echo '<li class="li-bar"><a href="Logged-In.php">Home</a></li>
    <li class="li-bar"><a href="contact.php">Contact</a></li>
    <li class="li-bar"><a href="about.php">About</a></li>
    ';
}
else{
    echo '<li class="li-bar"><a href="index.php">Home</a></li>
    <li class="li-bar"><a href="contact.php">Contact</a></li>
    <li class="li-bar"><a href="about.php">About</a></li>
    <li class="li-bar"><a href="login.html">Login</a></li>
    <li class="li-bar"><a href="signup.html">Sign Up</a></li>
    ';
}






?>
        <li class="li-bar"><a href="news.html">News</a></li>

        <li class="lisrch">
            <div class="searchi"><input type="text" id="fname" name="firstname" placeholder="Search"></div>
        </li>


        <li class="lisrch">

         <div class="navbar">
        
             <div class="dropdown">
                 <?php

                    include('session.php');
                    if(isset($_SESSION['User'])){
                        
                        echo '<button class="dropbtn">
                        <i> '.$login_session.' </i>
                           <i class="fa fa-caret-down"></i>
                         </button>
                         <div class="dropdown-content">
                            <a href="logout.php">Logout</a>
                                    <!-- <a href="#">Link 2</a>
                                    <a href="#">Link 3</a> -->
                         </div>';
                    
                    }


                 ?>
            
             </div>
             </div>
        
        </li>

    </ul>

   <div class="headd">
       <h1 class="mix">CONTACT US</h1>
       
       <h3 >We'd <img src="https://img.icons8.com/ios/50/000000/like.png"/> to help!</h3>
       <br>
       <p>We like to create things with fun, open-minded people. Feel free to say hello!</p>
   </div>


    <div class="wrapper">
     
        <div id="error_message">

        </div>
        <form action="" id="myform" onsubmit="return validate();">
            <div class="input_field">
                <input type="text" placeholder="Your Name" id="name">
            </div>
            <div class="input_field">
                <input type="text" placeholder="Email" id="email">
            </div>
            <div class="input_field">
                <textarea placeholder="Message" id="message"></textarea>
            </div>
            <div class="btn">
                <input type="submit">
            </div>
        </form>
    </div>


</body>

</html>