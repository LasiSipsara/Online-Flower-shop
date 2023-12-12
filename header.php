<?php
session_start();
?>
<header>
    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>
    <div class="header-logo">
        <img src="asset\logo.png" alt="site Logo">
    </div>

    <nav class="header-navbar">
        <a href="home.php">Home</a>
        <a href="home.php#about">About Us</a>
        <a href="contact-us.php">Contact Us</a>
    </nav>

   

    <div class="header-icons">
        <a href="wishlist.php"><i class="fa-solid fa-heart"></i></a>
        <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
        <div class="header-user-wrapper">
            <a href="" id="header-user-link" ><i class="fa-solid fa-user"></i><span id="header-user-name">
                <?php
                 if(isset($_SESSION['user_name'])){
                    echo $_SESSION['user_name'];
                }else{
                    echo "";
                }

                ?>
            </span></a>
            <div class="user-menu" id="userMenu">
                <ul>
                    <li><a href="#">Your Profile</a></li>
                    <li><a href="login.php" id="loginBtn">Login</a></li>
                    <li><a href="logout.php" id="logoutBtn">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
   

</header>