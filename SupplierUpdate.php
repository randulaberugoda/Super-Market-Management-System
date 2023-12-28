<?php
session_start();
@include 'config.php';

$supplier = array(); 
$updateMessage = '';

if (isset($_POST['search'])) {
    
    if (!empty($_POST['supplier_id'])) {
        $customer_id = mysqli_real_escape_string($conn, $_POST['supplier_id']);

        
        $query = "SELECT * FROM newsupplier WHERE id = '$supplier_id'";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $supplier = mysqli_fetch_assoc($result);
        } else {
            
            $updateMessage = "Supplier not found. Please check the ID.";
        }
    }
}


if (isset($_POST['update'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $companyName = mysqli_real_escape_string($conn, $_POST['companyName']);
    $contactNumber = mysqli_real_escape_string($conn, $_POST['contactNumber']);
    $productType = mysqli_real_escape_string($conn, $_POST['productType']);
    $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);

    $query = "UPDATE newsupplier SET name = '$name', address = '$address', companyName = '$companyName', contactNumber = '$contactNumber', productType = '$productType', quantity = '$quantity' WHERE id = '$id'";

    if (mysqli_query($conn, $query)) {
        $updateMessage = "Supplier details updated successfully.";
    } else {
        $updateMessage = "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Update Supplier</title>
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
    <div class="backgroundUpdateSup">
        <h1 align="center">Update Supplier Details</h1>

        <form method="post">
            <label for="supplier_id">Enter Supplier ID:</label>
            <input type="text" name="supplier_id">
            <input type="submit" name="search" value="Search">
        </form>

        <?php if (!empty($supplier)): ?>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $supplier['id']; ?>">
            <label for="name">Name:</label>
            <input type="text" name="name" value="<?php echo $supplier['name']; ?>"><br><br>

            <label for="dateOfBirth">Address:</label>
            <input type="text" name="address" value="<?php echo $supplier['address']; ?>"><br><br>

            <label for="nic">NIC:</label>
            <input type="text" name="companyName" value="<?php echo $supplier['companyName']; ?>"><br><br>

            <label for="gender">Contact Number:</label>
            <input type="text" name="contactNumber" value="<?php echo $supplier['contactNumber']; ?>"><br><br>

            <label for="contactNumber">Product Type:</label>
            <input type="text" name="productType" value="<?php echo $supplier['productType']; ?>"><br><br>

            <label for="email">Quantity:</label>
            <input type="text" name="quantity" value="<?php echo $supplier['quantity']; ?>"><br><br>

            <input type="submit" name="update" value="Update">
        </form>
        <?php endif; ?>

        <p>
            <?php echo $updateMessage; ?>
        </p>

        <a class="addsupplier" href="SupplierView.php"><input type="button" name="addsupplier" id="addsupplier"
                value="View Suppliers" style="margin: 100px;"></a>

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