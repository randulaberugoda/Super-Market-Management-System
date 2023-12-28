<?php
session_start();
@include 'config.php';

if (isset($_POST['submit'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $dateOfBirth = mysqli_real_escape_string($conn, $_POST['dateOfBirth']);
    $nic = mysqli_real_escape_string($conn, $_POST['nic']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $contactNumber = mysqli_real_escape_string($conn, $_POST['contactNumber']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $query = "INSERT INTO newcustomer (id, name, dateOfBirth, nic, gender, contactNumber, email)
              VALUES ('$id', '$name', '$dateOfBirth', '$nic', '$gender', '$contactNumber', '$email')";

    if (mysqli_query($conn, $query)) {
        echo "<script type='text/javascript'>alert('Record inserted successfully');</script>";
    } else {
        echo "<script type='text/javascript'>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
}
// Connect to the database && Check cus mang. db name
$connection = mysqli_connect("localhost", "root", "", "user_db");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Display data from the db, ordered by the 'id' column in descending order to get the last entered customer
$sql = "SELECT * FROM newcustomer ORDER BY id DESC LIMIT 1";
$result = mysqli_query($connection, $sql);
?>






<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>New Customer Entry</title>
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
    <div class="container">
        <div class="content">
            <div class="customer-list">
                <h2>Last Entered Customer</h2>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Date Of Birth</th>
                        <th>NIC</th>
                        <th>Gender</th>
                        <th>Contact Number</th>
                        <th>Email</th>
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
                            <?php echo $row["dateOfBirth"]; ?>
                        </td>
                        <td>
                            <?php echo $row["nic"]; ?>
                        </td>
                        <td>
                            <?php echo $row["gender"]; ?>
                        </td>
                        <td>
                            <?php echo $row["contactNumber"]; ?>
                        </td>
                        <td>
                            <?php echo $row["email"]; ?>
                        </td>
                    </tr>
                    <?php else: ?>
                    <tr>
                        <td colspan="7">No customers found.</td>
                    </tr>
                    <?php endif; ?>
                </table>
            </div>

            <div class="new-customer-form">
                <h1>New Loyalty Customer</h1>
                <form method="post">
                    <label for="id" id="id1">Customer ID : </label>
                    <input type="text" id="id" name="id"><br><br>

                    <label for="lname" id="lname1">Name: </label>
                    <input type="text" id="lname" name="name"><br><br>

                    <label for="bdate" id="bdate1">Date of Birth: </label>
                    <input type="text" id="bdate" name="dateOfBirth"><br><br>

                    <label for="nic" id="nic1">NIC: </label>
                    <input type="text" id="nic" name="nic">
                    <br><br>

                    <label for="gender" id="gender1">Gender: </label>
                    <input type="text" id="gender" name="gender"><br><br>

                    <label for="tpno">Contact Number: </label>
                    <input type="text" id="tpno" name="contactNumber"><br><br>

                    <label for="email" id="email1">Email: </label>
                    <input type="text" id="email" name="email"><br><br>
                    <input type="submit" value="Submit" name="submit">
                </form>
            </div>
        </div>

        <div class="navigation-buttons">
            <a href="CustomerView.php" class="button">View Customers</a>
            <a href="CustomerManageHome.php" class="button" style="margin-bottom: 100px;">Back</a>
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

</html>