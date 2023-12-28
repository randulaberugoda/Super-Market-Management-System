<?php
@include 'config.php';

session_start();

if(!isset( $_SESSION['user_name'])){
    header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Supermarket Management System</title>
</head>

<body>
    <header>
        <div class="header-left">
            <img src="SMS1.png" alt="Supermarket Logo">
            <h1>S M S</h1>
        </div>
        <div class="header-right">
            <p><img src="user1.png" style="height: 15px; width: 15px;">
                <?php echo $_SESSION['user_name']  ?>
            </p>
            <p id="datetime"></p>
        </div>
    </header>

    <main>

        <section class="main-block">
            <h2>Inventory Management System</h2>
            <img src="inventry.png" class="block_img">
        </section>

        <a href="CustomerManageHome.php" style="text-decoration: none;">
            <section class="main-block">
                <h2>Customer Management System</h2>
                <img src="cust.png" class="block_img">
            </section>
        </a>
        <a href="BillingSystem.php" style="text-decoration: none;">
            <section class="main-block">
                <h2>Billing System</h2>
                <img src="bill.png" class="block_img">
            </section>
        </a>
    </main>


    <a href="logout.php" class="btn">Logout</a>
    <footer>
        <div class="footer-content">
            <div class="footer-section about">
                <h3>About Us</h3>
                <p> We have been serving our community for many years, providing top-quality products and exceptional
                    service. At our supermarket, we take pride in offering a wide selection of fresh produce, pantry
                    staples, and household essentials. Our dedicated team is committed to ensuring your shopping
                    experience is convenient and enjoyable.</p>
            </div>
            <div class="footer-section contact">
                <h3>Contact Information</h3>
                <p>Email: SMS@supermarket.com</p>
                <p>Phone: +94-456-7890</p>
                <p>Address: 123 Main St, City, Country</p>
            </div>
            <div class="footer-section links">
                <h3>Quick Links</h3>
                <ul>

                    <li><a href="SupplierManageHome.php">Supplier Management</a></li>
                    <li><a href="#">Inventory Management</a></li>
                    <li><a href="error_page.php">Employee Management</a></li>
                    <li><a href="#">Customer Management</a></li>
                    <li><a href="BillingSystem.php">Billing System</a></li>
                </ul>
            </div>
        </div>s
        <div class="footer-bottom">
            &copy; 2023 Supermarket Management System | Developed by Team Dev Infinity
        </div>
    </footer>
    <script src="home.js"></script>
</body>

</html>