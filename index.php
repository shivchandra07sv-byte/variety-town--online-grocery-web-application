<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Variety Town</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="navbar">
        <h1>Variety Town</h1>
        <div class="nav-links">
            <a href="dashboard.php">Home</a>
            <a href="contactform.php">Contact</a>
            <a href="About.html">About</a>
            <?php if(isset($_SESSION['user_id'])): ?>
                <a href="orders.php">My Orders</a>
                <a href="logout.php">Logout</a>
            <?php else: ?>
                <a href="login.php">Login</a>
                <a href="register.php">Register</a>
            <?php endif; ?>
        </div>
    </div>

    <section class="hero-section">
        <h1>WELCOME TO VARIETY TOWN</h1>
    </section>
</body>
</html>