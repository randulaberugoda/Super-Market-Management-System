<?php 
@include 'config.php';

$error = [];

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];

   

    // Prepare the SELECT statement
    $select = "SELECT * FROM user_form WHERE email = '$email' AND password = '$pass' AND user_type = '$user_type'";

    // Execute the statement
    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        $error[] = 'User already exists!';
    } else {
        if($pass != $cpass){
            $error[] = 'Passwords do not match!';
        } else {
            // Insert the user into the database
            $insert = "INSERT INTO user_form (name, email, password, user_type) VALUES ('$name','$email','$pass','$user_type')";
            
            if (mysqli_query($conn, $insert)) {
                header('location: login_form.php');
                exit();
            } else {
                $error[] = 'Database error. Please try again later.';
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register form</title>
    <!--custom css file-->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form-container">
        <form action="" method="post">
            <h3>Register now</h3>

            <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                    };
                };
            ?>

            <input type="text" name="name" required placeholder="Enter your name">
            <input type="email" name="email" required placeholder="Enter your email">
            <input type="password" name="password" required placeholder="Enter your password">
            <input type="password" name="cpassword" required placeholder="Confirm your password">
            <select name="user_type">
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select>
            <input type="submit" name="submit" value="Register now" class="form-btn">
            <p>Already have an account? <a href="login_form.php">Login now..</a></p>
        </form>
    </div>
</body>

</html>
