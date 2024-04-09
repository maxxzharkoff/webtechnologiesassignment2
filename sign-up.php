<!-- Author: Maxim Zharkov -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="navBarStyle.css">
    <link rel="stylesheet" href="footerStyle.css">
    <link rel="stylesheet" href="cartStyling.css">
<!--    <script src="sign-up.js"></script>-->
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
        <h1 id="shopping-cart-title"> Sign up </h1>
        <p class="flex-box-element"> Please enter your details </p>
        <form id="sign-up-form" action="sign-up.php" method="post">
                <div class="form-element">
                    <label> Please enter your full name: <input type="text" id="username" name="user_full_name"> </label> <br>
                </div>
                <div class="form-element">
                    <label for="address" > Please enter your address: <input type="text" id="address" name="user_address"> </label> <br>
                </div>
                <div class="form-element">
                    <label for="email"> Please enter your email: <input type="email" id="email" name="user_email"> </label> <br>
                </div>
                <div class="form-element">
                    <label for="password"> Please enter a password: <input type="password" id="password" name="user_password"> </label> <br>
                </div>
            <div>
            <div>
                <a href="log-in.php"> Already have an account? Log in </a>
            </div>
            <button type="submit" id="process-payment-button" style="margin-right: 100px"> Sign up </button>
            </div>
        </form>
        <span>
            <?php
            require_once('dbconnect.php');
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $username = trim($_POST['user_full_name']);
                $email = filter_var(trim($_POST['user_email']), FILTER_VALIDATE_EMAIL);
                $password = trim($_POST['user_password']);
                $address = trim($_POST['user_address']);

                if (empty($username))  {
                    $errors['user_full_name'] = "Username cannot be empty";
                } else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
                    $errors['user_full_name'] = "Username contains invalid characters";
                }
                else if (empty($email)) {
                    $errors['user_email'] = "Email cannot be empty";
                } else if (empty($password)) {
                    $errors['user_password'] = "Password cannot be empty";
                } else if (empty($address)) {
                    $errors['user_address'] = "Address cannot be empty";
                }

                if (empty($errors)) {
                    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                    $timestamp = date("Y-m-d H:i:s");;
                    $randomid = uniqid();
                    $insertStmt = $pdo->prepare("INSERT INTO tbl_users (user_full_name, user_email, user_pass, user_address, user_timestamp) VALUES (?, ?, ?, ?, ?)");
                    $insertStmt->execute([$username, $email, $hashedPassword, $address, $timestamp]);
                } else {
                    $errorMessages = json_encode($errors);
                }

            }

            ?>
            <?php if (!empty($errors)): ?>
                <script type="text/javascript">
        var errors = <?php echo $errorMessages; ?>;

        var alertMsg = errors.join("\n");

        alert(alertMsg);
    </script>
            <?php endif; ?>

    </span>
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

</script>

</body>
</html>