<?php
include_once 'database/connection.php';
// Start the session.
session_start();
if(!isset($_SESSION['email'])) header('Location: login.php');

if (isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT * FROM products WHERE id = $id";
    $result = $conn->query($sql);

    $products = array();
    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();
        $id = $product['id'];
        // $email = $product['email'];
        $product_name = $product['product_name'];
        $description = $product['description'];
        $img = $product['img'];


    } else {
        echo "Product not found.";
    }

    $result->close();
} else {
    echo "No ID specified in the URL.";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Product- Inventory Management System </title>

        <?php include('partials/app-header-scripts.php'); ?>
        
    </head>
    <body>
        <div id="dashboardMainContainer">
            <?php include('partials/app-sidebar.php') ?> 
            <div class="dashboard_content_container" id="dashboard_content_container">
                <?php include('partials/app-topnav.php') ?> 
                <div class="dashboard_content">
                    <div class="dashboard_content_main"> 
                        <div class="row">
                            
                            <div class="col-12">
                            <h1 class="section_header"><i class="fa fa-plus"></i>Update Product</h1>
                                <div id="userAddFormContainer">
                                <form action="database/update_product.php" method="POST" class="appForm" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                                    <div class="appFormInputContainer">
                                        <label for="product_name">Product Name</label>
                                        <input type="text" class="appFormInput" id="product_name" value="<?php echo $product_name; ?>" placeholder="Enter Product Name..." name="product_name" />
                                    </div>

                                    <div class="appFormInputContainer">
                                        <label for="description">Description</label>
                                        <textarea  class="appFormInput productTextAreaInput" placeholder="Enter Product Description..." id="description" name="description"><?php echo $description; ?></textarea>
                                    </div>

                                    <div class="appFormInputContainer">
                                        <label for="product_name">Product Image</label>
                                        <input type="file" name="img"/>
                                    </div>
                                    <button type="submit" class="appBtn"><i class="fa fa-plus"></i> Create Product</button>
                                </form>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>

        <?php include('partials/app-scripts.php'); ?>

    </body>
</html> 