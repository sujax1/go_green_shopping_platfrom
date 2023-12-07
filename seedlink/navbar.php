<div class="navbar">
        <link rel="stylesheet" href="style2.css">
        <a href="homepage.php" class="logo"><img src="images\WhatsApp_Image_2023-11-08_at_22.07.58_5a68cfab-removebg-preview.png" alt="Your Logo" />SEEDLINK</a>
    <nav>
     <ul id="MenuItems">
        <li><i class="fa fa-home" aria-hidden="true"></i><a href="homepage.php"> Home</a></li>
        <li><i class="fa fa-bars" aria-hidden="true"></i><a href="products.php"> Products</a></li>
        <li><i class="fa fa-shopping-cart" aria-hidden="true"></i><a href="shopping_cart.php"> Shopping Cart</a></li>
        <li><i class="fa fa-user" aria-hidden="true"></i><a href="<?php echo isset($_SESSION['username']) ? "profile.php?id={$_SESSION['user_id']}" : "login_page.php"?>"> <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : "Login"?></a></li>
        <li><a href="logout.php"><i class="fa fa-fw fa-power-off"></i> <?php echo isset($_SESSION['username']) ? "Logout" : "" ?></a></li>
        <li><a href="admin_index.php"><?php if(isset($_SESSION['username']) &&  ($_SESSION['username'] == 'admin') ) {
            echo "Panel";
        } else {
            echo ""; 
        } ?></a></li>


     </ul>
    </nav>
    <img src="images/menu.png" onclick="menutoggle()" class="menu-icon">
</div>