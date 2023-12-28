<?php
include_once 'connection.php';

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hashPassword = password_hash($password, PASSWORD_DEFAULT);


    $data = "INSERT INTO users (first_name, last_name, email, password ,created_at,updated_at) VALUES ('$first_name','$last_name','$email','$hashPassword',NOW(), NOW())";

    if ($conn->query($data) === TRUE) {
        header("Location: ../users-view.php");
//        echo 'done';
        exit;
    } else {
        echo "Error: " . $data . "<br>" . $conn->error;
    }

$conn->close();
?>