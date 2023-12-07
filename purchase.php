<?php
if (isset($_POST['buy_now'])) {
    // Process the purchase here
    // For example, you can store the purchase information in a database or send an email confirmation to the user.
    
    // After processing the purchase, you can redirect the user to a thank you page or the homepage.
    header("Location: thank_you.php");
    exit();
} else {
    // If the 'buy_now' parameter is not set, redirect the user back to the cart or home page.
    header("Location: cart.php");
    exit();
}
?>
