<?php
require_once('dbconnect.php');
session_start();
?>
<!-- Author: Maxim Zharkov -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="navBarStyle.css">
    <link rel="stylesheet" href="footerStyle.css">
    <link rel="stylesheet" href="cartStyling.css">
    <title> Cart </title>
</head>
<body>
<div class="main-content">
    <div class="navBar" id="main-navBar">
        <a href="home.php" id="exception"><img src="images/uclan-logo.svg" alt="UCLAN Logo"></a>
        <h3 id="hello-phrase"> Hello, <?php  if (isset($_SESSION['user_full_name'])) { echo $_SESSION['user_full_name']; } else { echo 'Guest'; }; ?></h3>
        <a href="home.php">Home</a>
        <a href="products.php"> Products </a>
        <a class="active" href="cart.php"> Cart </a>
        <?php if (!isset($_SESSION['user_email'])): ?>
            <a href="sign-up.php">Log in/Sign up</a>
        <?php endif; ?>
        <button class="hamburger" onclick="toggleMenu()">☰</button>
    </div>

    <div id="hamburger-navBar">
        <a href="home.php">Home</a>
        <a href="products.php"> Products </a>
        <a class="active" href="cart.php"> Cart </a>
    </div>

    <div id="shopping-cart-elements">
        <h1 id="shopping-cart-title"> 404 Not found </h1>
        <p class="flex-box-element"> Oops! We can't seem to find the page you're looking for. </p>
    </div>
<footer class="site-footer clearfix">
    <div id="links-container" class="footer-containers">
        <h1 id="links-header" class="footer-headers"> Links </h1>
        <a href="https://www.uclancyprus.ac.cy/student-council/" id="student-council-link"> Student Council </a>
    </div>
    <div id="contact-container" class="footer-containers">
        <h1 class="footer-headers"> Contact </h1>
        <p class="footer-elements"> Email: info@uclancyprus.ac.cy </p>
        <p class="footer-elements"> Phone: + 357 24 69 40 00</p>
    </div>
    <div id="location-container" class="footer-containers">
        <h1 class="footer-headers"> Location </h1>
        <p class="footer-elements"> 12 – 14 University Avenue Pyla, 7080 Larnaka, Cyprus </p>
    </div>
</footer>

<script>

    function toggleMenu() {
        let hamburgerNavBar = document.getElementById("hamburger-navBar");
        if (hamburgerNavBar.style.display === "none" || hamburgerNavBar.style.display === "") {
            hamburgerNavBar.style.display = "block";
        } else {
            hamburgerNavBar.style.display = "none";
        }
    }

</script>

</body>
</html>