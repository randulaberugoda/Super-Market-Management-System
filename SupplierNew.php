<?php
session_start();
@include 'config.php';

if (isset($_POST['submit'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $companyName = mysqli_real_escape_string($conn, $_POST['companyName']);
    $contactNumber = mysqli_real_escape_string($conn, $_POST['contactNumber']);
    $productType = mysqli_real_escape_string($conn, $_POST['productType']);
    $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);

    $query = "INSERT INTO newsupplier (id, name, address, companyName, contactNumber, productType, quantity)
              VALUES ('$id', '$name', '$address', '$companyName', '$contactNumber', '$productType', '$quantity')";

    if (mysqli_query($conn, $query)) {
        echo "<script type='text/javascript'>alert('Record inserted successfully');</script>";
    } else {
        echo "<script type='text/javascript'>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
}

$connection = mysqli_connect("localhost", "root", "", "user_db");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT * FROM newsupplier ORDER BY id DESC LIMIT 1";
$result = mysqli_query($connection, $sql);
?>



<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>New Supplier</title>
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

    <title>Last Entered Supplier</title>


    <div class="supplier-list-container">
        <h2>Last Entered Supplier</h2>
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
            <?php if ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td>
                    <?php echo $row["id"]; ?>
                </td>
                <td>
                    <?php echo $row["name"]; ?>
                </td>
                <td>
                    <?php echo $row["address"]; ?>
                </td>
                <td>
                    <?php echo $row["companyName"]; ?>
                </td>
                <td>
                    <?php echo $row["contactNumber"]; ?>
                </td>
                <td>
                    <?php echo $row["productType"]; ?>
                </td>
                <td>
                    <?php echo $row["quantity"]; ?>
                </td>
            </tr>
            <?php else: ?>
            <tr>
                <td colspan="7">No Suppliers found.</td>
            </tr>
            <?php endif; ?>
        </table>


        <div class="backgroundNewSup">
            <h1 align="center">New Supplier</h1>

            <form method="post">
                <label for="id" id="id1">Supplier ID : </label>
                <input type="text" id="id" name="id">
                <br><br>

                <label for="lname" id="lname1">Name: </label>
                <input type="text" id="name" name="name">
                <br><br>

                <label for="bdate" id="address1">Address: </label>
                <input type="text" id="address" name="address">
                <br><br>

                <label for="nic" id="nic1">Company Name: </label>
                <input type="text" id="companyName" name="companyName">
                <br><br>

                <label for="gender" id="gender1">Contact Number: </label>
                <input type="text" id="contactNumber" name="contactNumber">
                <br><br>

                <label for="tpno">Product type: </label>
                <input type="text" id="productType" name="productType">
                <br><br>

                <label for="email" id="email1">Quantity: </label>
                <input type="text" id="quantity" name="quantity">
                <br><br>

                <input type="submit" value="submit" name="submit">

            </form>
        </div>
        <a class="addsupplier" href="SupplierView.php"><input type="button" name="addsupplier" id="addsupplier"
                value="View Supplier" margin:100px></a>
        <a class="back" href="SupplierManageHome.php"><input type="button" name="backr" id="back" value="Back"></a>
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