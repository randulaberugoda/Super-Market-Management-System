<?php
include_once 'database/connection.php';
     // Start the session.
     session_start();
    if(!isset($_SESSION['email'])) header('Location: login.php');

    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);

    $products = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()){
            $products[] = $row;
        }
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>View Products - Inventory Management System </title>

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
                            <h1 class="section_header"><i class="fa fa-list"></i>List of Products</h1>
                            <div class="users">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>#</th> 
                                            <th>Image</th>
                                            <th>Product Name</th>
                                            <th>Description</th>
                                            <th>Created at </th>
                                            <th>Updated at</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($products as $product): ?>
                                            <tr>
                                                <td><?php echo $product['id']; ?></td>
                                                <td class="firstName">
                                                    <img class="productsImages" src="images/upload/<?php echo $product['img']; ?>" alt="" />
                                                </td>
                                                <td class="lastName"><?php echo $product['product_name']; ?></td>
                                                <td class="email"><?php echo $product['description']; ?></td>
                                                <td><?php echo $product['created_at']; ?></td>
                                                <td><?php echo $product['updated_at']; ?></td>
                                                <td>
                                                    <a href="product_edit.php?id=<?php echo $product['id']; ?>" class="updateProduct" data-pid=""> <i class="fa fa-pencil"></i> Edit</a>
                                                    <a href="database/product_delete.php?id=<?php echo $product['id']; ?>" ><i class="fa fa-trash"></i> Delete</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php include('partials/app-scripts.php'); ?>
<script>
    function script(){

        this.registerEvents = function(){
            document.addEventListener('click', function(e) {
                        targetElement = e.target;
                        classList = targetElement.classList;

                        

                        if (classList.contains('deleteProduct')) {
                            e.preventDefault();


                            pId = targetElement.dataset.pid;
                            pName = targetElement.dataset.name;

                            if(window.confirm('Are you sure you want to delete this user '+pName+' ?')){
                                title: 'Delete Product',



                                    $.ajax({
                                        method: 'POST',
                                        data: {
                                            id: pId,
                                            table: 'products'
                                        },
                                        url: 'database/delete.php',
                                        dataType: 'json',
                                        success: function(data){
                                            message = data.success ?
                                                pName + ' successfully deleted!' : 'Error processing your request!';

                                            if(data.success){
                                                if(window.confirm(message)){
                                                    location.reload(); 
                                                }
                                            }else window.alert(message);
                                        }
                                    })
                            }else{
                                console.log('will not delete user');
                            }
                        }
                    });
        }


        this.initialize = function(){
            this.registerEvents();
        }
    }


    var script = new script;
    script.initialize();

</script>    
</body>
</html> 
