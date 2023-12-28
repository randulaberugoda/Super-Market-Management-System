<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Customer Management</title>
    <link rel="stylesheet" href="CustomerManage.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <header>
        <div class="header-left">
            <img src="SMS1.png" alt="Supermarket Logo">
            <h1>S M S</h1>
        </div>
        <div class="header-center">
            <h2 style="color: aqua;">Customer Management System</h2>
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


                    <a href="admin_page.php" class="home-button">Home</a>

                </div>
            </div>
        </div>
        <div class="container">

            <div class="customer-count">
                <label for="cusAmt">Total Loyalty Customers: </label>
                <div id="cusAmt1"></div>
            </div>
            <div class="content">


                <div class="menu">
                    <a href="CustomerNew.php" class="block_img">
                        <section class="main-block">
                            + Add New Customer
                        </section>
                    </a>
                    <a href="CustomerView.php" class="block_img">
                        <section class="main-block">
                            View Customers
                        </section>
                    </a>
                    <a href="CustomerDelete.php" class="block_img">
                        <section class="main-block">
                            - Delete Customer
                        </section>
                    </a>
                    <a href="CustomerUpdate.php" class="block_img">
                        <section class="main-block">
                            Update Customer

                        </section>
                    </a>
                    <a href="CustomerSearch.php" class="block_img">
                        <section class="main-block">
                            Search Customer
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
<script type="text/javascript">
    function updateCustomerCount() {
        $.ajax({
            url: 'CustomerCount.php',
            dataType: 'json',
            success: function (data) {
                if (data.error) {
                    $('#cusAmt1').text('Error: ' + data.error);
                } else {
                    $('#cusAmt1').text(data.totalCustomers);
                }
            }
        });
    }

    // Update the count initially
    updateCustomerCount();

    // Update the count every 5 seconds (you can adjust the interval)
    setInterval(updateCustomerCount, 5000);
</script>

<script src="home.js"></script>

</html>