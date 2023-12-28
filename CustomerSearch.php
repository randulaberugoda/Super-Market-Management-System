<?php
@include("config.php");

// Connect to the database
$connection = mysqli_connect("localhost", "root", "", "user_db");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Initialize variables
$customer_id = "";
$customer_data = [];

if (isset($_POST["search_customer"])) {
    // Get the customer ID from the form
    $customer_id = $_POST["customer_id"];

    // Query the database to retrieve the customer with the specified ID
    $sql = "SELECT * FROM newcustomer WHERE id = '$customer_id'";
    $result = mysqli_query($connection, $sql);

    // Fetch the customer data
    if ($result && mysqli_num_rows($result) > 0) {
        $customer_data = mysqli_fetch_assoc($result);
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Customer</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="search-customer-container">
        <h2>Search Customer</h2>
        <form method="POST">
            <label for="customer_id">Customer ID:</label>
            <input type="text" name="customer_id" id="customer_id" value="<?php echo $customer_id; ?>" required>
            <button type="submit" name="search_customer">Search</button>
        </form>

        <?php if (!empty($customer_data)): ?>
            <h3>Customer Information</h3>
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
                <tr>
                    <td><?php echo $customer_data["id"]; ?></td>
                    <td><?php echo $customer_data["name"]; ?></td>
                    <td><?php echo $customer_data["dateOfBirth"]; ?></td>
                    <td><?php echo $customer_data["nic"]; ?></td>
                    <td><?php echo $customer_data["gender"]; ?></td>
                    <td><?php echo $customer_data["contactNumber"]; ?></td>
                    <td><?php echo $customer_data["email"]; ?></td>
                </tr>
            </table>
        <?php endif; ?>
        
        <br>
        <button class="ok-btn" onclick="goBack()">Back</button>
    </div>
    <script>
        function goBack(){
            window.history.back();
        }
    </script>
</body>
</html>