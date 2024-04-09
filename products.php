<?php
require_once('dbconnect.php');
session_start();
?>
<!-- Author: Maxim Zharkov -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title> Products page </title>
    <link rel="stylesheet" href="navBarStyle.css">
    <link rel="stylesheet" href="footerStyle.css">
<!--    <script src="productsJS.js" defer></script>-->
    <link rel="stylesheet" href="productsStyling.css">
</head>
<body>
<div class="main-content">
    <button id="topBtn" title="Go to top">Top</button>
    <div class="navBar" id="main-navBar">
        <a href="home.php" id="exception"><img src="images/uclan-logo.svg" alt="UCLAN Logo"></a>
        <h3 id="hello-phrase"> Hello, <?php  if (isset($_SESSION['user_full_name'])) { echo $_SESSION['user_full_name']; } else { echo 'Guest'; }; ?></h3>
        <a href="home.php">Home</a>
        <a class="active" href="products.php"> Products </a>
        <a href="cart.php"> Cart </a>
        <?php if (!isset($_SESSION['user_email'])): ?>
            <a href="sign-up.php">Log in/Sign up</a>
        <?php endif; ?>
        <button class="hamburger" onclick="toggleMenu()">☰</button>
    </div>

    <div id="hamburger-navBar">
        <a href="home.php">Home</a>
        <a class="active" href="products.php"> Products </a>
        <a href="cart.php"> Cart </a>
    </div>

    <div id="navContainer" style="padding: 10px; margin: 10px;"></div>

    <div class="search-container">
        <form action="products.php" method="get">
            <input type="text" name="search_query" placeholder="Search products...">
            <button type="submit">Search</button>
        </form>
    </div>
    <?php

    $searchQuery = isset($_GET['search_query']) ? trim($_GET['search_query']) : '';

    if (!empty($searchQuery)) {
        $stmt = $pdo->prepare("SELECT * FROM tbl_products WHERE product_title LIKE :searchQuery OR product_desc LIKE :searchQuery");
        $stmt->bindValue(':searchQuery', '%' . $searchQuery . '%');
    } else {
        $stmt = $pdo->prepare("SELECT * FROM tbl_products");
    }

    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <div id="items-container">
        <?php foreach ($products as $product): ?>
            <div class="item-box">
                <img src="<?php echo htmlspecialchars($product['product_image']); ?>" alt="<?php echo htmlspecialchars($product['product_title']); ?>">
                <h3><?php echo htmlspecialchars($product['product_title']); ?></h3>
                <p><?php echo htmlspecialchars($product['product_desc']); ?></p>
                <p class="price">Only £<?php echo htmlspecialchars($product['product_price']); ?></p>
                <!-- If you need a 'Read More' link -->
                <a href="item.php?product_id=<?php echo $product['product_id']; ?>" class="readMoreLink">Read more</a>
                <!-- If you need an 'Add to Cart' button -->
                <button class="add-to-cart" data-id="<?php echo $product['product_id']; ?>" data-title="<?php echo htmlspecialchars($product['product_title']); ?>" data-price="<?php echo htmlspecialchars($product['product_price']); ?>">Add to Cart</button>
            </div>
        <?php endforeach; ?>
    </div>


    <footer class="site-footer clearfix" id="footer">
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
</div>

<script>

    function toggleMenu() {
        let hamburgerNavBar = document.getElementById("hamburger-navBar");
        if (hamburgerNavBar.style.display === "none" || hamburgerNavBar.style.display === "") {
            hamburgerNavBar.style.display = "block";
        } else {
            hamburgerNavBar.style.display = "none";
        }
    }
    let buyButton = document.getElementById("add-to-cart");

        document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll('.add-to-cart').forEach(function(button) {
            button.addEventListener('click', function() {
                <?php if(isset($_SESSION['user_email'])): ?>
                // User is logged in, add the product to the cart
                let productId = this.getAttribute('data-id');
                let productTitle = this.getAttribute('data-title');
                let productPrice = this.getAttribute('data-price');

                // Create a product object
                let product = { id: productId, title: productTitle, price: productPrice };

                // Get existing cart from localStorage or initialize an empty array
                let cart = localStorage.getItem('cart') ? JSON.parse(localStorage.getItem('cart')) : [];

                // Add product to cart
                cart.push(product);

                // Save updated cart back to localStorage
                localStorage.setItem('cart', JSON.stringify(cart));
                fetch('reset_order_flag.php')
                    .then(response => response.text())
                    .then(data => console.log(data))
                    .catch(error => console.error('Error:', error));
                alert('Product added to cart!');
                <?php else: ?>
                // User is not logged in, redirect to the login page
                alert("You should log in first.");
                <?php endif; ?>
            });
        });
    });



</script>

</body>
</html>