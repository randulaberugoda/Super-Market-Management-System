<!DOCTYPE html>
<html>
    <head>
        <title>AKON HomePage- Inventory Management System </title>
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <script src="https://use.fontawesome.com/0c7a3095b5.js"></script>
    </head>
    <body>
        <div class="header">

            <div class="homepageContainer">
                <?php
                session_start();

                if (isset($_SESSION['email'])) {
                    echo '<a href="dashboard.php">Dashboard</a>';
                } else {
                    echo '<a href="login.php">Login</a>';
                }
                ?>
            </div>
        </div>
        <div class="banner">
            <div class="homepageContainer">
                <div class="bannerHeader">
                    <h1>AKON</h1>
                    <p>Inventory Management System</p>
                </div>
                <p class="bannerTagline">
                    To completely transform how supermarkets manage their inventory 
                    by delivering state-of-the-art tools and services that boost 
                    productivity, cut down on waste, and boost profits.
                </p>
                <div class="bannerIcons">
                    <a href=""><i class="fa fa-apple"></i></a>
                    <a href=""><i class="fa fa-android"></i></a>
                    <a href=""><i class="fa fa-windows"></i></a>
                </div>
            </div>
        </div>
                <div class="homepageContainer">
                    <div class="homepageFeatures">
                        <div class="homepageFeature">
                            <span class="featureIcon"><i class="fa fa-gear"></i></span>
                            <h3 class="featureTitle">Editable Theme</h3>
                            <p>Lorem ipsum dolor sit amet, Consectetur adipiscing elit. 
                                Suspendisse fringilla fringilla.</p>
                        </div>
                        <div class="homepageFeature">
                            <span class="featureIcon"><i class="fa fa-star"></i></span>
                            <h3 class="featureTitle">Flat Design</h3>
                            <p>Lorem ipsum dolor sit amet, Consectetur adipiscing elit. 
                                Suspendisse fringilla fringilla.</p>
                        </div>
                        <div class="homepageFeature">
                            <span class="featureIcon"><i class="fa fa-gear"></i></span>
                            <h3 class="featureTitle">Reach Your Audience</h3>
                            <p>Lorem ipsum dolor sit amet, Consectetur adipiscing elit. 
                                Suspendisse fringilla fringilla.</p>
                        </div>
                    </div>  
                    
                </div>
                <div class="homepageNotified">
                    <div class="homepageContainer">
                        <div class="homepageNotifiedContainer">
                                <div class="emailForm">
                                    <h3>Get Notified of Any Updates!</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Suspendisse fringilla fringilla nisl congue.
                                    Maecenas nec condimentum libero, at elementum nauris.
                                    Phasellus eget nisi dapibus, ultricies nisi at, hendreit
                                    risusuis ornare luctus id sollicitudin ante lobortis at.</p>
                                    <form action="">
                                        <div class="formContainer">
                                            <input type="text" placeholder="Email Address" />
                                            <button>Notify</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="video">
                                    <iframe src="https://www.youtube.com/embed/gBCkj0" width="500px"
                                    height="300px" frameborder="0"></iframe>
                                </div>
                        </div>
                    </div>
                </div> 
                <div class="socials">
                    <div class="homepageContainer">
                        <h3 class="socialHeader">Say Hii & Get in Touch</h3>
                        <p class="socialText">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="socialIconsContainer">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-pinterest"></i></a>
                            <a href=""><i class="fa fa-youtube"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                            <a href=""><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                 </div>
                 <div class="footer">
                    <div class="homepageContainer">
                        <a href="">Contact</a>
                        <a href="">Press</a>
                        <a href="">Email</a>
                        <a href="">Support</a>
                        <a href="">Privacy & Policy</a>
                    </div>
                 </div>
    </body>          
</html> 
  