<?php
require_once('dbconnect.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['process_payment']) && $_SESSION['order_placed'] == false) {
    // Ensure the user is logged in
    if (isset($_SESSION['user_email'])) {
        $userId = $_SESSION['user_id'];
        $productIds = $_POST['product_ids'];
        $orderDate = date('Y-m-d H:i:s');

        $insertOrder = $pdo->prepare("INSERT INTO tbl_orders (order_date, user_id, product_ids) VALUES (?, ?, ?)");
        $insertOrder->execute([$orderDate, $userId, $productIds]);

        $orderPlaced = true;
        echo "<script>localStorage.clear();</script>";

        echo "<script>alert('Order placed successfully!');</script>";
        $_SESSION['order_placed'] = true;
        echo "<script>window.location.href = 'home.php';</script>";
    } else {

        $loginRequired = true;
    }
}
?>

<!-- Author: Maxim Zharkov -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="navBarStyle.css">
    <link rel="stylesheet" href="footerStyle.css">
    <link rel="stylesheet" href="cartStyling.css">
    <script src="cart.js"></script>
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
        <h1 id="shopping-cart-title"> Shopping cart </h1>
        <p class="flex-box-element"> The items you have added to your shopping cart are: </p>
        <table id="shopping-cart-table" class="flex-box-element">
            <tr>
                <th></th>
                <th> Product </th>
                <th> Price</th>
            </tr>

        </table>
        <span>

        <form method="post" onsubmit="populateProductIds(event)">
            <input type="hidden" name="process_payment" value="1">
            <input type="hidden" name="product_ids" id="product-ids">
            <button type="submit" id="process-payment-button">Process payment</button>
        </form>
    </span>
    </div>

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

    function populateProductIds(event) {
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        let productIds = cart.map(item => item.id).join(',');
        document.getElementById('product-ids').value = productIds;
    }


    document.addEventListener('DOMContentLoaded', function() {

        document.querySelector('form').addEventListener('submit', populateProductIds);
    });

    document.addEventListener('DOMContentLoaded', function() {
        function toggleMenu() {
            let hamburgerNavBar = document.getElementById("hamburger-navBar");
            if (hamburgerNavBar.style.display === "none" || hamburgerNavBar.style.display === "") {
                hamburgerNavBar.style.display = "block";
            } else {
                hamburgerNavBar.style.display = "none";
            }
        }

        function populateCartTable() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const cartTable = document.getElementById('shopping-cart-table');
            // Clear existing table rows, except for the header
            while (cartTable.rows.length > 1) {
                cartTable.deleteRow(1);
            }
            cart.forEach(item => {
                const row = cartTable.insertRow(-1);
                row.insertCell(0).textContent = item.quantity;
                row.insertCell(1).textContent = item.title;
                row.insertCell(2).textContent = `£${item.price}`;
                const removeBtnCell = row.insertCell(3);
            });
        }

        function populateProductIds(event) {
            event.preventDefault();

            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const productIds = cart.map(item => item.id).join(',');

            document.getElementById('product-ids').value = productIds;

            event.target.submit();
        }

        populateCartTable();

        document.querySelector('form').addEventListener('submit', populateProductIds);
    });



</script>

</body>
</html>