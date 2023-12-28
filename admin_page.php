<?php
@include 'config.php';

session_start();

if(!isset( $_SESSION['admin_name'])){
    header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>

    <!--custom css file-->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="container">
        <div class="content">
            <h3>Hi ,<span>admin</span></h3>
            <h1>Welcome <span>
                    <?php echo $_SESSION['admin_name']  ?>
                </span></h1>
            <p>this is an admin page </p>

            <a href="register_form.php" class="btn">Register</a>
            <a href="logout.php" class="btn">Logout</a> <br><br>
            <a href="home_admin.php" class="btn">home</a>
        </div>
    </div>
</body>

</html>