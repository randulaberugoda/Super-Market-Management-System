<?php
include_once 'connection.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM products  WHERE id = $id";


    $conn->query($sql);
}

$conn->close();

header("Location: ../product-view.php");
exit();
?>  }