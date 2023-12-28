<?php
@include 'config.php';
?>

<?php
// Connect to the database && Cheak emp mang. db name
$connection = mysqli_connect("localhost", "root", "", "user_db");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

//display  data from  db
$sql = "SELECT * FROM newcustomer";
$result = mysqli_query($connection, $sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>View Customers</title>
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
    <div class="customer-list-container">
        <h2>Customer List</h2>
        <table id="myTable">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date Of Birth</th>
                <th>NIC</th>
                <th>Gender</th>
                <th>Contact Number</th>
                <th>email</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
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
            <?php endwhile; ?>


        </table>
        <br>
        <button class="button"><a href="CustomerNew.php" class="ok-btn">Back</a></button>
    </div>


    <button class="button" style="margin-bottom: 100px;"><a href="CustomerSearch.php" class="search-button">Search
            Customer</a></button>





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