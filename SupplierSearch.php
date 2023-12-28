<?php
@include("config.php");

$connection = mysqli_connect("localhost", "root", "", "user_db");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$supplier_id = "";
$supplier_data = [];

if (isset($_POST["search_supplier"])) {
    $supplier_id = mysqli_real_escape_string($connection, $_POST["supplier_id"]);

    $sql = "SELECT * FROM newsupplier WHERE id = '$supplier_id'";
    $result = mysqli_query($connection, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $supplier_data = mysqli_fetch_assoc($result);
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Search Supplier</title>
    <link rel="stylesheet" type="text/css" href="SupplierManage.css">
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
    <div class="search-Supplier-container">
        <h2>Search Supplier</h2>
        <form method="POST">
            <label for="supplier_id">Supplier ID:</label>
            <input type="text" name="supplier_id" id="supplier_id" value="<?php echo $supplier_id; ?>" required>
            <button type="submit" name="search_supplier">Search</button>
        </form>

        <?php if (!empty($supplier_data)): ?>
        <h3>Supplier Information</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Company Name</th>
                <th>Contact Number</th>
                <th>Product Type</th>
                <th>Quantity</th>
            </tr>
            <tr>
                <td>
                    <?php echo $supplier_data["id"]; ?>
                </td>
                <td>
                    <?php echo $supplier_data["name"]; ?>
                </td>
                <td>
                    <?php echo $supplier_data["address"]; ?>
                </td>
                <td>
                    <?php echo $supplier_data["companyName"]; ?>
                </td>
                <td>
                    <?php echo $supplier_data["contactNumber"]; ?>
                </td>
                <td>
                    <?php echo $supplier_data["productType"]; ?>
                </td>
                <td>
                    <?php echo $supplier_data["quantity"]; ?>
                </td>
            </tr>
        </table>
        <?php endif; ?>

        <br>
        <button class="ok-btn" onclick="goBack()">Back</button>
    </div>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
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

</html>