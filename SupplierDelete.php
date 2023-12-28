<?php
session_start();
@include 'config.php';

if (isset($_POST['delete'])) {
    $supplier_id = mysqli_real_escape_string($conn, $_POST['supplier_id']);

  
    $query = "DELETE FROM newsupplier WHERE id = '$supplier_id'";

    if (mysqli_query($conn, $query)) {
        echo "<script type='text/javascript'>alert('Supplier deleted successfully');</script>";
    } else {
        echo "<script type='text/javascript'>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
}
?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Delete Suppliers</title>
    <link rel="stylesheet" href="SupplierManage.css">
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
    <div class="backgroundDeleteCus">
        <h1 align="center">Delete Supplier</h1>

        <form method="post">
            <label for="supplier_id" id="supplier_id1">Supplier ID to Delete: </label>
            <input type="text" id="supplier_id" name="supplier_id"><br><br>

            <input type="submit" value="Delete" name="delete">
        </form>
    </div>

    <a class="deletesupplier" href="CustomerView.php"><input type="button" name="deletesupplier" id="deletesupplier"
            value="View Customers"></a>
    <a class="back" href="SupplierManageHome.php"><input type="button" name="back" id="back" value="Back"></a>

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