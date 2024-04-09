<?php
require_once('dbconnect.php');
session_start();
?>
<!-- Author: Maxim Zharkov -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Store Home Page </title>
    <link rel="stylesheet" href="navBarStyle.css">
    <link rel="stylesheet" href="homeStyling.css">
    <link rel="stylesheet" href="footerStyle.css">
</head>
<body>
<div class="main-content">

    <div class="navBar" id="main-navBar">
        <a href="home.php" id="exception"><img src="images/uclan-logo.svg" alt="UCLAN Logo"></a>
        <h3 id="hello-phrase"> Hello, <?php  if (isset($_SESSION['user_full_name'])) { echo $_SESSION['user_full_name']; } else { echo 'Guest'; }; ?></h3>
        <a class="active" href="home.php">Home</a>
        <a href="products.php"> Products </a>
        <a href="cart.php"> Cart </a>
        <?php if (!isset($_SESSION['user_email'])): ?>
            <a href="sign-up.php">Log in/Sign up</a>
        <?php endif; ?>
        <button class="hamburger" onclick="toggleMenu()">☰</button>
    </div>

    <div id="hamburger-navBar">
        <a class="active" href="home.php">Home</a>
        <a href="cart.php"> Cart </a>
        <a href="products.php"> Products </a>
    </div>

    <h1 id="main-Heading" class="centerElements"> Where opportunity creates success </h1>
    <p id="intro-p" class="centerElements"> Every student at the Univeristy of Central Lancashire is automatically a
        member of the Students' Union. <br>
        We're here to make life better for students - inspiring you to succeed and achieve your goals. <br> <br>
        Everything you need to know about UCLan Students' Union. Your membership starts here.
    </p>
    <p class="centerElements" id="video-heading"> Together </p>
    <div class="video-container">
        <video id="local-video" controls>
            <source src="images/uclan-classroom.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <p id="second-video-heading" class="centerElements"> Join our global community </p>
    <div class="video-container">
        <iframe id="embedded-video" src="https://www.youtube.com/embed/PF-wXuJG9ao?si=aaOfTkCac1hcOQpJ"
                title="YouTube video player"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
    </div>
</div>
<div id="latest-offers">
    <h2 class="offers-heading">Latest Offers</h2>
    <div class="offers-container">
        <?php
        // Query the database for offers
        $stmt = $pdo->prepare("SELECT * FROM tbl_offers");
        $stmt->execute();
        $offers = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Iterate over each offer and display it
        foreach ($offers as $offer) {

            echo "<div class=\"offer\">";
            echo "<h3>" . htmlspecialchars($offer['offer_title']) . "</h3>";
            echo "<p>" . htmlspecialchars($offer['offer_dec']) . "</p>";
            echo "</div>";
        }
        ?>
    </div>
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

    window.onload = function () {
        // checking for the first ever visit to initialize cartItems in the localStorage.
        let hasVisited = window.localStorage.hasVisited;
        if (hasVisited === undefined) {
            let cartItems = [];
            window.localStorage["cartItems"] = JSON.stringify(cartItems);
        }
        window.localStorage.hasVisited = true;
    }

</script>
</body>
</html>