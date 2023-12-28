<?php
include_once 'connection.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM users  WHERE id = $id";


    $conn->query($sql);
}

$conn->close();

header("Location: ../users-view.php");
exit();
?>  }