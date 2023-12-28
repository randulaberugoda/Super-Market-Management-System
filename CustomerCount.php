<?php
@include 'config.php';

// Query to get the total number of customers
$countQuery = "SELECT COUNT(*) as totalCustomers FROM newcustomer";
$result = mysqli_query($conn, $countQuery);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $totalCustomers = $row['totalCustomers'];

    $response = array('totalCustomers' => $totalCustomers);
} else {
    $response = array('error' => mysqli_error($conn));
}

header('Content-Type: application/json');
echo json_encode($response);
?>