
<!DOCTYPE html>
<html>
    <head>
        <title>AKON Login- Inventory Management System </title>

        <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    <body id="loginBody">

        <div class="container">
            <div class="loginHeader">
                <h1>SMS</h1>
                <h3>Inventory Management System</h3>
            </div>
            <div class="loginBody">
                <form action="database/login_form.php" method="POST">
                    <div class="loginInputsContainer">
                        <label for="username">Username</label>
                        <input placeholder="username" name="email" type="text" id="username" />
                    </div>
                    <div class="loginInputsContainer">
                        <label for="password">Password</label>
                        <input placeholder="password" name="password" type="password" id="password" />
                    </div>
                    <div class="loginButtonContainer">
                        <button>login</button>
                    </div>
                </form>

            </div>
        </div>

    </body>
</html> 
