<?php require_once('dbconnect.php') ?>
<!-- Author: Maxim Zharkov -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="navBarStyle.css">
    <link rel="stylesheet" href="footerStyle.css">
    <link rel="stylesheet" href="cartStyling.css">
    <script src="log-in.js"></script>
    <title> Cart </title>
</head>
<body>
<div class="main-content">
    <div class="navBar" id="main-navBar">
        <a href="home.php" id="exception"><img src="images/uclan-logo.svg" alt="UCLAN Logo"></a>
        <h3 id="student-shop-phrase"> Student Shop </h3>
        <a href="home.php">Home</a>
        <a href="products.php"> Products </a>
        <a href="cart.php"> Cart </a>
        <a class="active" href="sign-up.php"> Log in/Sign up </a>
        <button class="hamburger" onclick="toggleMenu()">☰</button>
    </div>

    <div id="hamburger-navBar">
        <a href="home.php">Home</a>
        <a href="products.php"> Products </a>
        <a class="active" href="cart.php"> Cart </a>
    </div>

    <div id="shopping-cart-elements">
        <h1 id="shopping-cart-title"> Log in </h1>
        <p class="flex-box-element"> Please enter your details </p>
        <form id="login-form" action="log-in.php" method="post">
        <span class="flex-box-element">
            <label> Please enter your email: <input type="email" name="user_email" required> </label> <br>
            <label> Please enter your password: <input type="password" name="user_password" required> </label> <br>
        </span>
            <button type="submit" id="login-button">Log in</button>
        </form>
        <span>
        <a href="sign-up.php">Do not have an account yet? Sign up</a>
    </span>
    </div>
</div>
<?php

session_start(); // Start the session to potentially store user data upon successful login.

require_once('dbconnect.php'); // Your PDO connection file.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var(trim($_POST['user_email']), FILTER_VALIDATE_EMAIL);
    $password = trim($_POST['user_password']);

    if (empty($email) || !$email) {
        exit('Invalid email address.');
    }

    if (empty($password)) {
        exit('Please enter your password.');
    }

    $stmt = $pdo->prepare("SELECT user_id, user_email, user_pass, user_full_name FROM tbl_users WHERE user_email = :email");
    $stmt->bindParam(':email', $email);

    $stmt->execute();

    if ($user = $stmt->fetch(PDO::FETCH_ASSOC)) {
        if (password_verify($password, $user['user_pass'])) {
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['user_email'] = $user['user_email'];
            $_SESSION['user_full_name'] = $user['user_full_name'];

            header("Location: home.php");
            exit();
        } else {
            exit('The password you entered was not valid.');
        }
    } else {
        exit('No user found with that email address.');
    }
} else {
    exit('Invalid request method.');
}


?>
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