<?php
    include 'session.php';
    if(!isset($_SESSION['User'])){ //nese ska session ktheje main page
        header("location: index.php"); // Redirecting To Home Page
    }

?>
<!DOCTYPE html>
<html>

<head>
    <title>WEB</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
            <button class="dropbtn">
            <i><?php echo $login_session; ?></i>
               <i class="fa fa-caret-down"></i>
             </button>
             <div class="dropdown-content">
                <a href="logout.php">Logout</a>
                        <!-- <a href="#">Link 2</a>
                        <a href="#">Link 3</a> -->
             </div>
             </div>
             </div>
        
        </li>
                

    </ul>

    <div class="container">
        <h1>Welcome to the Phone Shop</h1>
    </div>
    <div class="container">
        <h2>Enjoy online shopping</h2>
    </div>

    <div class="flex-container">
        <h4>Products</h4>
    </div>

    

    <div>

        <div class="cont">
            <div class="item">
                <div class="image-item"><img
                        src="https://tekshanghai.com/wp-content/uploads/2019/09/iPhone11_pro_3.jpg">
                </div>
                <h3>IPhone</h3>
                <h5>Starting $999</h5>
                <p>
                    Triple-camera system (Ultra Wide, Wide, Telephoto)
                    Up to 20 hours of video playback1
                    Water resistant to a depth of 4 meters for up to 30 minutes2
                    5.8” or 6.5” Super Retina XDR display3
                </p>
                <button class="item-button">Buy</button>

            </div>
            <div class="item">
                <div class="image-item"><img
                        src="https://tekshanghai.com/wp-content/uploads/2019/09/iPhone11_pro_3.jpg">
                </div>
                <h3>IPhone</h3>
                <h5>Starting $999</h5>
                <p>
                    Triple-camera system (Ultra Wide, Wide, Telephoto)
                    Up to 20 hours of video playback1
                    Water resistant to a depth of 4 meters for up to 30 minutes2
                    5.8” or 6.5” Super Retina XDR display3
                </p>
                <button class="item-button">Buy</button>

            </div>
            <div class="item">
                <div class="image-item"><img
                        src="https://tekshanghai.com/wp-content/uploads/2019/09/iPhone11_pro_3.jpg">
                </div>
                <h3>IPhone</h3>
                <h5>Starting $999</h5>
                <p>
                    Triple-camera system (Ultra Wide, Wide, Telephoto)
                    Up to 20 hours of video playback1
                    Water resistant to a depth of 4 meters for up to 30 minutes2
                    5.8” or 6.5” Super Retina XDR display3
                </p>
                <button class="item-button">Buy</button>

            </div>
            <div class="item">
                <div class="image-item"><img
                        src="https://tekshanghai.com/wp-content/uploads/2019/09/iPhone11_pro_3.jpg">
                </div>
                <h3>IPhone</h3>
                <h5>Starting $999</h5>
                <p>
                    Triple-camera system (Ultra Wide, Wide, Telephoto)
                    Up to 20 hours of video playback1
                    Water resistant to a depth of 4 meters for up to 30 minutes2
                    5.8” or 6.5” Super Retina XDR display3
                </p>
                <button class="item-button">Buy</button>

            </div>
            <div class="item">
                <div class="image-item"><img
                        src="https://tekshanghai.com/wp-content/uploads/2019/09/iPhone11_pro_3.jpg">
                </div>
                <h3>IPhone</h3>
                <h5>Starting $999</h5>
                <p>
                    Triple-camera system (Ultra Wide, Wide, Telephoto)
                    Up to 20 hours of video playback1
                    Water resistant to a depth of 4 meters for up to 30 minutes2
                    5.8” or 6.5” Super Retina XDR display3
                </p>
                <button class="item-button">Buy</button>

            </div>
            <div class="item">
                <div class="image-item"><img
                        src="https://tekshanghai.com/wp-content/uploads/2019/09/iPhone11_pro_3.jpg">
                </div>
                <h3>IPhone</h3>
                <h5>Starting $999</h5>
                <p>
                    Triple-camera system (Ultra Wide, Wide, Telephoto)
                    Up to 20 hours of video playback1
                    Water resistant to a depth of 4 meters for up to 30 minutes2
                    5.8” or 6.5” Super Retina XDR display3
                </p>
                <button class="item-button">Buy</button>

            </div>


        </div>

    </div>

    

    <footer>
        <div class="footer-container">
          <div class="left-col">
            <img src="FLIPSTORE.png" alt="" class="logo">
            <div class="social-media">
              <a href="#"><i class="fa fa-facebook-official"></i></a>
              <a href="#"><i class="fa fa-twitter-square"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
              <a href="#"><i class="fa fa-youtube-play"></i></a>
              <a href="#"><i class="fa fa-linkedin-square"></i></a>
            </div>
            <p class="rights-text">© 2020 Created By FlipStore All Rights Reserved.</p>
          </div>
  
          <div class="right-col">
            <h1>Our Newsletter</h1>
            <div class="border"></div>
            <p>Enter Your Email to get our news and updates.</p>
            <div class="border"></div>
            <form action="" class="newsletter-form">
              <input type="text" class="txtb" placeholder="Enter Your Email">
              <input type="submit" class="btn" value="submit">
            </form>
          </div>
        </div>
      </footer>






</body>

</html>