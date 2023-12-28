<?php
session_start();
@include 'config.php';

$customer = array(); // Initialize an empty array to store customer details
$updateMessage = '';

if (isset($_POST['search'])) {
    // Check if the customer ID is provided
    if (!empty($_POST['customer_id'])) {
        $customer_id = mysqli_real_escape_string($conn, $_POST['customer_id']);

        // Fetch the existing customer details based on the customer ID
        $query = "SELECT * FROM newcustomer WHERE id = '$customer_id'";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $customer = mysqli_fetch_assoc($result);
        } else {
            // Handle errors if customer not found
            $updateMessage = "Customer not found. Please check the ID.";
        }
    }
}

// Update customer details
if (isset($_POST['update'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $dateOfBirth = mysqli_real_escape_string($conn, $_POST['dateOfBirth']);
    $nic = mysqli_real_escape_string($conn, $_POST['nic']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $contactNumber = mysqli_real_escape_string($conn, $_POST['contactNumber']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $query = "UPDATE newcustomer SET name = '$name', dateOfBirth = '$dateOfBirth', nic = '$nic', gender = '$gender', contactNumber = '$contactNumber', email = '$email' WHERE id = '$id'";

    if (mysqli_query($conn, $query)) {
        $updateMessage = "Customer details updated successfully.";
    } else {
        $updateMessage = "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Update Customer</title>
    <link rel="stylesheet" href="CustomerManage.css">
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
    <div class="backgroundUpdateCus">
        <h1 align="center">Update Customer Details</h1>

        <form method="post">
            <label for="customer_id">Enter Customer ID:</label>
            <input type="text" name="customer_id">
            <input type="submit" name="search" value="Search">
        </form>

        <?php if (!empty($customer)): ?>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $customer['id']; ?>">
            <label for="name">Name:</label>
            <input type="text" name="name" value="<?php echo $customer['name']; ?>"><br><br>

            <label for="dateOfBirth">Date of Birth:</label>
            <input type="text" name="dateOfBirth" value="<?php echo $customer['dateOfBirth']; ?>"><br><br>

            <label for="nic">NIC:</label>
            <input type="text" name="nic" value="<?php echo $customer['nic']; ?>"><br><br>

            <label for="gender">Gender:</label>
            <input type="text" name="gender" value="<?php echo $customer['gender']; ?>"><br><br>

            <label for="contactNumber">Contact Number:</label>
            <input type="text" name="contactNumber" value="<?php echo $customer['contactNumber']; ?>"><br><br>

            <label for="email">Email:</label>
            <input type="text" name="email" value="<?php echo $customer['email']; ?>"><br><br>

            <input type="submit" name="update" value="Update">
        </form>
        <?php endif; ?>

        <p>
            <?php echo $updateMessage; ?>
        </p>

        <a class="addcustomer" href="CustomerView.php"><input type="button" name="addcustomer" id="addcustomer"
                class="button" value="View Customers" style="margin: 100px;"></a>

        <button class="button" onclick="goBack()">Back</button>
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