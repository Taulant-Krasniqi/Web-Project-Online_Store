
<body>  

<ul class="nav-bar">
<?php

include('session.php');
if(isset($_SESSION['User'])){
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


        <div class="navbar">
             <div class="dropdown">
            <button class="dropbtn">
            <!-- <i><?php echo $login_session; ?></i> -->
               <i class="fa fa-caret-down"></i>
             </button>
             <div class="dropdown-content">
                <a href="logout.php">Logout</a>
                        <!-- <a href="#">Link 2</a>
                        <a href="#">Link 3</a> -->
             </div>
             </div>
             </div>

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
    
