<?php
    include 'session.php';
    if(!isset($_SESSION['Logged'])){ //nese ska session ktheje main page
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
else if(isset($_SESSION['Admin'])){
    echo '<li class="li-bar"><a href="Logged-In.php">Home</a></li>
    <li class="li-bar"><a href="contact.php">Contact</a></li>
    <li class="li-bar"><a href="about.php">About</a></li>
    <li class="li-bar"><a href="create.php">Add Phone</a></li>
    <li class="li-bar"><a href="products.php">All Phones</a></li>
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
        <?php
                    // Include config file
                  
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM phone";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            
                                while($row = mysqli_fetch_array($result)){
                                        
                                        echo "<div class='item'>";
                                        echo "<a href='./read.php?id=".$row['id']."'>";
                                        echo "<div class='image-item'>
                                        <img src='img/".$row['profile_image']."'>";
                                        echo '</div>';
                                        echo "</a>";    
                                        echo "<h3>" . $row['name'] . "</h3>";
                                        echo "<h5>Starting at " . $row['price'] . " €</h5>";
                                        echo "<p>About this phone : " . $row['description'] . "</p>";
                                        echo "<button class='item-button'>Buy</button>";
                                        
                                        echo "</div>";
                                       
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>   
           


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