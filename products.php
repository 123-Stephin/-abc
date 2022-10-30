<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Wheelz N Dealz</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <div class="container">
                <div class="jumbotron">
                    <h1>Welcome to Wheelz N Dealz!</h1>
                    <p>GET BEST PRICE IN 10 MINUTES</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="car1.php">
                                <img src="img/c21.jpg" alt="Cannon">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>₹ 8,00,534</h3>
                                    <h4>2018 - 30500.0 km</h4>
                                    <p>Honda Wr-V i-VTEC VX,2018,Petrol</p>
                                    <p>MODEL TOWN, DELHI</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="car1.php" role="button" class="btn btn-primary btn-block">View Details</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="car1.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">View Details</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/c5.jpg" alt="Car2">
                            </a>
                            <center>
                                <div class="caption">
                                <h3>₹ 3,95,000</h3>
                                    <h4>2015 - 73000 km</h4>
                                    <p>Maruti Suzuki Wagon R 2015 ,CNG</p>
                                    <p>SWARGATE, PUNE</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="car2.php" role="button" class="btn btn-primary btn-block">View Details</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(2)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="car2.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">View Details</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/c22.jpg" alt="Volkswagen Polo">
                            </a>
                            <center>
                                <div class="caption">
                                <h3>₹ 4,50,000</h3>
                                    <h4>2012 - 68.0 km</h4>
                                    <p>Volkswagen Polo 2012 ,Diesel</p>
                                    <p>HSR LAYOUT, BANGALURU</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">View Details</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(3)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="car3.php?id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">View Details</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/c23.jpg" alt="Olympus">
                            </a>
                            <center>
                                <div class="caption">
                                <h3>₹ 4,99,000</h3>
                                    <h4>2012 - 69000.0 km</h4>
                                    <p>Toyota Etios Liva 2012 ,Diesel</p>
                                    <p>HSR LAYOUT, BANGALURU</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">View Details</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(4)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="car4.php?id=4" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">View Details</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/c16.jpg" alt="Titan 301">
                            </a>
                            <center>
                                <div class="caption">
                                <h3>₹ 5,55,000</h3>
                                    <h4>2014 - 50000.0 km</h4>
                                    <p>Renault Duster 2014 ,Diesel</p>
                                    <p>KAILASH NAGAR, MUMBAI</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">View Details</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(5)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="car5.php?id=5" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">View Details</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/c15.jpg" alt="Titan 201">
                            </a>
                            <center>
                                <div class="caption">
                                <h3>₹ 2,35,000</h3>
                                    <h4>2009 - 77000.0 km</h4>
                                    <p>Honda City 2009 ,Petrol</p>
                                    <p>NETAJI SUBHASH PLACE, DELHI</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">View Details</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(6)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="car6.php?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">View Details</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/c9.jpg" alt="htm milan">
                            </a>
                            <center>
                                <div class="caption">
                                <h3>₹ 4,40,000</h3>
                                    <h4>2016 - 46087.0 km</h4>
                                    <p>Maruti Suzuki Celerio 2016 ,Petrol</p>
                                    <p>GHATKOPAR WEST, MUMBAI</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">View Details</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(7)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="car7.php?id=7" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">View Details</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/c24.jpg" alt="Favre Leuba">
                            </a>
                            <center>
                                <div class="caption">
                                <h3>₹ 11,9,000</h3>
                                    <h4>2017 - 90681.0 km</h4>
                                    <p>Hyundai Elantra 2017 ,Petrol</p>
                                    <p>CHARAN SINGH COLONY, JAIPUR</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">View Details</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(8)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="car8.php?id=8" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">View Details</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/c25.jpg" alt="Raymond shirt">
                            </a>
                            <center>
                                <div class="caption">
                                <h3>₹ 12,8,000</h3>
                                    <h4>2016 - 90681.0 km</h4>
                                    <p>Datsun Redigo 2016 ,Petrol</p>
                                    <p>SECTOR 9, FARIDABAD</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">View Details</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(9)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="car9.php?id=9" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">View Details</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/c26.jpg" alt="Charles shirt">
                            </a>
                            <center>
                                <div class="caption">
                                <h3>₹ 15,00,000</h3>
                                    <h4>2010 - 19000.0 km</h4>
                                    <p>Audi A6 2010 ,Diesel</p>
                                    <p>FRAZOR TOWN, BENGALURU</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">View Details</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(10)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="car10.php?id=10" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">View Details</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/c13.jpg" alt="HXR">
                            </a>
                            <center>
                                <div class="caption">
                                <h3>₹ 2,00,000</h3>
                                    <h4>2009 - 81000.0 km</h4>
                                    <p>Toyota Corolla Altis 2009 ,Petrol</p>
                                    <p>DWARKA, DELHI</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">View Details</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(11)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="car11.php?id=11" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">View Details</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/c27.jpg" alt="PINK">
                            </a>
                            <center>
                                <div class="caption">
                                <h3>₹ 2,65,000</h3>
                                    <h4>2008 - 85000.0 km</h4>
                                    <p>Maruti Suzuki Swift 2008 ,Petrol</p>
                                    <p>MEHDIPATNAM, HYDERABAD</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">View Details</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(12)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="car12.php?id=12" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">View Details</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br><br><br>
           <footer class="footer">
               <div class="container">
                <center>
                   <p>Copyright &copy <a href="https://projectworlds.in">Wheelz N Dealz</a>.All Rights Reserved.</p>
                   <p>This website is developed by Sirjan & Stephin</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
