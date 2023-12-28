<?php
include_once 'database/connection.php';
    
     session_start();
    if(!isset($_SESSION['email'])) header('Location: login.php');

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

$users = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()){
        $users[] = $row;
    }
}


?>

<!DOCTYPE html>
<html>
    <head>
        <title>View Users- Inventory Management System </title>
        <link rel="stylesheet" type="text/css" href="css/login.css?v=<?= time(); ?>">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://use.fontawesome.com/0c7a3095b5.js"></script>

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
                            <h1 class="section_header"><i class="fa fa-list"></i>List of Users</h1>
                                <div class="section_content">
                                    <div class="users">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Email</th>
                                                    <th>Created at</th>
                                                    <th>Updated at</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach($users as $user) { ?>
                                                        <tr>
                                                            <td class="firstName"><?php echo $user['first_name']; ?></td>
                                                            <td class="lastName"><?php echo $user['last_name']; ?></td>
                                                            <td class="email"><?php echo $user['email']; ?></td>
                                                            <td><?php echo $user['created_at']; ?></td>
                                                            <td><?php echo $user['updated_at']; ?></td>
                                                            <td>
                                                                <a href="database/user_delete.php?id=<?php echo $user['id']; ?>"><i class="fa fa-trash"></i>Delete</a>
                                                            </td>
                                                        </tr> 
                                                <?php } ?>
                                             
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
            function Script() {

                this.initialize = function() {
                    this.registerEvents();
                };

                this.registerEvents = function() {
                    document.addEventListener('click', function(e) {
                        targetElement = e.target;
                        classList = targetElement.classList;

                        if (classList.contains('deleteUser')) {
                            e.preventDefault();
                            userId = targetElement.dataset.userid;
                            fname = targetElement.dataset.fname;
                            lname = targetElement.dataset.lname;
                            Fullname = fname + ' ' + lname;

                            if(window.confirm('Are you sure you want to delete this user '+Fullname+' ?')){
                                $.ajax({
                                        method: 'POST',
                                        data: {
                                            id: userId,
                                            table: 'users'
                                        },
                                        url: 'database/delete.php',
                                        dataType: 'json',
                                        success: function(data){
                                            message = data.success ?
                                                Fullname + ' successfully deleted!' : 'Error processing your request!';

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
                };
            }

            var script = new Script();
            script.initialize();
        </script>

    </body>
</html> 