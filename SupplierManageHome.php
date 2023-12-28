<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Supplier Management</title>
    <link rel="stylesheet" href="SupplierManage.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <header>
        <div class="header-left">
            <img src="SMS1.png" alt="Supermarket Logo">
            <h1>S M S</h1>
        </div>
        <div class="header-center">
            <h2 style="color: aqua;">Supplier Management System</h2>
        </div>
        <div class="header-right">
            <p><img src="user1.png" style="height: 15px; width: 15px;">

            </p>

            <p id="datetime"></p>
        </div>
    </header>
    <div class="containerbig">
        <div class="sidebar">

            <!--list of menus-->
            <div class="sidebar-menus">
                <a href="CustomerManageHome.php">Customer Management System</a>
                <a href="#">Employee Managment System</a>
                <a href="#">Inventory Mnagement System</a>
                <a href="SupplierManageHome.php">Supplier Management System</a>
                <a href="BillingSystem.php">Billing System</a>

                <div class="button-container">


                    <a href="home_admin.php" class="home-button">Home</a>

                </div>
            </div>
        </div>
        <div class="container">

            <div class="content">

                <div class="menu">
                    <a href="SupplierNew.php" class="block_img">
                        <section class="main-block">
                            + Add New Supplier
                        </section>
                    </a>
                    <a href="SupplierView.php" class="block_img">
                        <section class="main-block">
                            View Suppliers
                        </section>
                    </a>
                    <a href="SupplierDelete.php" class="block_img">
                        <section class="main-block">
                            - Delete Supplier
                        </section>
                    </a>
                    <a href="SupplierUpdate.php" class="block_img">
                        <section class="main-block">
                            Update Supplier

                        </section>
                    </a>
                    <a href="SupplierSearch.php" class="block_img">
                        <section class="main-block">
                            Search Supplier
                        </section>
                    </a>

                </div>

            </div>

        </div>
    </div>



</body>
<footer>
    <div class="footer-content">
        <div class="footer-section about">
            <h3>About Us</h3>
            <p> We have been serving our community for many years, providing top-quality products and
                exceptional
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
                <li><a href="#">Employee Management</a></li>
                <li><a href="CustomerManageHome.php">Customer Management</a></li>
                <li><a href="BillingSystem.php">Billing System</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        &copy; 2023 Supermarket Management System | Developed by Team Dev Infinity
    </div>
</footer>


<script src="home.js"></script>

</html>