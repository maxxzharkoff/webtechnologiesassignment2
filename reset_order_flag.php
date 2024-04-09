<?php
session_start();

// Check if the user is logged in
if(isset($_SESSION['user_email'])) {
    // Reset the order_placed flag
    $_SESSION['order_placed'] = false;
    echo 'Order placement flag reset.';
} else {
    echo 'User not logged in.';
}
?>