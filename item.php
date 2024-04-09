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
    <link rel="stylesheet" href="itemStyling.css">
    <title> Item page </title>
</head>
<body>
<div class="main-content">
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

    <?php


    $product_id = isset($_GET['product_id']) ? $_GET['product_id'] : null;


    if ($product_id) {
        $stmt = $pdo->prepare("SELECT * FROM tbl_products WHERE product_id = :product_id");
        $stmt->bindParam(':product_id', $product_id, PDO::PARAM_INT);
        $stmt->execute();
        $product = $stmt->fetch(PDO::FETCH_ASSOC);
    }

    if (!$product) {
        echo "<p>Product not found.</p>";
    }
    ?>

    <div id="item-container">
        <?php if ($product): ?>
            <div class="item-box">
                <img src="<?php echo htmlspecialchars($product['product_image']); ?>" alt="<?php echo htmlspecialchars($product['product_title']); ?>">
                <h3><?php echo htmlspecialchars($product['product_title']); ?></h3>
                <p><?php echo htmlspecialchars($product['product_desc']); ?></p>
                <p class="price">Only £<?php echo htmlspecialchars($product['product_price']); ?></p>
                <button id="buy-button"> Add to Cart </button>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php

// Handle review submission
if (isset($_POST['submit_review']) && isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $product_id = $_POST['product_id'];
    $review_title = $_POST['review_title'];
    $review_desc = $_POST['review_desc'];
    $review_rating = $_POST['review_rating'];
    $review_timestamp = date('Y-m-d H:i:s');

    // Insert review into database
    $stmt = $pdo->prepare("INSERT INTO tbl_reviews (user_id, product_id, review_title, review_desc, review_rating, review_timestamp) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$user_id, $product_id, $review_title, $review_desc, $review_rating, $review_timestamp]);

    // Redirect to avoid form resubmission
    header("Location: item.php?product_id=$product_id");
    exit();
}
?>

<div class="reviews-container">
    <?php
    $reviewsStmt = $pdo->prepare("SELECT * FROM tbl_reviews WHERE product_id = :product_id");
    $reviewsStmt->bindParam(':product_id', $product_id, PDO::PARAM_INT);
    $reviewsStmt->execute();
    $reviews = $reviewsStmt->fetchAll(PDO::FETCH_ASSOC);

    $averageRating = 0;
    if (count($reviews) > 0) {
        $totalRating = 0;
        foreach ($reviews as $review) {
            $totalRating += $review['review_rating'];
            echo "<div class='review'>";
            echo "<h4>" . htmlspecialchars($review['review_title']) . "</h4>";
            echo "<p>" . htmlspecialchars($review['review_desc']) . "</p>";
            echo "<p>Rating: " . $review['review_rating'] . " ⭐</p>";
            echo "</div>";
        }
        $averageRating = $totalRating / count($reviews);
        echo "<p>Average Rating: " . round($averageRating, 2) . " ⭐</p>";
    } else {
        echo "<p>No reviews yet.</p>";
    }
    ?>
</div>

<?php if (isset($_SESSION['user_id'])): ?>
    <div class="review-form">
        <h2>Leave a Review</h2>
        <form action="item.php?product_id=<?php echo $product_id; ?>" method="post">
            <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
            <div class="form-group">
                <label for="review_title">Title:</label>
                <input type="text" id="review_title" name="review_title" required>
            </div>
            <div class="form-group">
                <label for="review_desc">Description:</label>
                <textarea id="review_desc" name="review_desc" required></textarea>
            </div>
            <div class="form-group">
                <label for="review_rating">Rating:</label>
                <select id="review_rating" name="review_rating" required>
                    <option value="1">⭐</option>
                    <option value="2">⭐⭐</option>
                    <option value="3">⭐⭐⭐</option>
                    <option value="4">⭐⭐⭐⭐</option>
                    <option value="5">⭐⭐⭐⭐⭐</option>
                </select>
            </div>
            <button type="submit" name="submit_review">Submit Review</button>
        </form>
    </div>
<?php else: ?>
    <p><a href="log-in.php">Log in</a> to leave a review.</p>
<?php endif; ?>
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