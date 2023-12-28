<?php
     // Start the session.
     session_start();
    if(!isset($_SESSION['email'])) header('Location: login.php');

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Add Product- Inventory Management System </title>

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
                            <h1 class="section_header"><i class="fa fa-plus"></i>Create Product</h1>
                                <div id="userAddFormContainer">
                                <form action="database/add.php" method="POST" class="appForm" enctype="multipart/form-data">
                                    <div class="appFormInputContainer">
                                        <label for="product_name">Product Name</label>
                                        <input type="text" class="appFormInput" id="product_name" placeholder="Enter Product Name..." name="product_name" />
                                    </div>

                                    <div class="appFormInputContainer">
                                        <label for="description">Description</label>
                                        <textarea  class="appFormInput productTextAreaInput" placeholder="Product Description..." id="description" name="description"></textarea>
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