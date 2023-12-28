<?php
// Start the session.
session_start();
if(!isset($_SESSION['email'])) header('Location: login.php');

?>
<!DOCTYPE html>
<html>
    <head>
    
        <title>Add Users- Inventory Management System </title>

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
                            <h1 class="section_header"><i class="fa fa-plus"></i>Create User</h1>
                                <div id="userAddFormContainer">
                                <form action="database/user_form.php" method="POST" class="appForm">
                                    <div class="appFormInputContainer">
                                        <label for="first_name">First Name</label>
                                        <input type="text" class="appFormInput" id="first_name" name="first_name" />
                                    </div>
                                    <div class="appFormInputContainer">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" class="appFormInput"  id="last_name" name="last_name" />
                                    </div>
                                    <div class="appFormInputContainer">
                                        <label for="email">Email</label>
                                        <input type="text" class="appFormInput"  id="email" name="email" />
                                    </div>
                                    <div class="appFormInputContainer">
                                        <label for="password">Password</label>
                                        <input type="password" class="appFormInput"  id="password" name="password" />
                                    </div>
                                    <button type="submit" class="appBtn"><i class="fa fa-plus"></i> Create User</button>
                                </form>
<!--                                --><?php //if(isset($_SESSION['response'])) {
//                                        $response_message = $_SESSION['response']['message'];
//                                        $is_success = $_SESSION['response']['success'];
//                                    ?>
<!--                                        <div class="responseMessage">-->
<!--                                            <p class="responseMessage --><?php //= $is_success ? 'responseMessage_success' : 'responseMessage_error' ?><!--">-->
<!--                                            --><?php //= $response_message ?>
<!--                                            </p>-->
<!--                                        </div>-->
<!--                                --><?php //unset($_SESSION['response']); } ?>
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