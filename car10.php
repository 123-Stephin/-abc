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
                    <h3>Welcome to Wheelz N Dealz!</h3>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="img/c26.jpg" alt="Cannon">
                            </a>
                        </div>
                    </div>

                    <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="thumbnail">
                        <h1>Sold by</h1><br>
                                <h3 color="black">K2 pre-owned Cars</h3>
                                <p>Posted On:</p>
                             <p>09/20/2022</p>
                            <a href="#">
                                <h1>₹ 15,00,000</h1>
                            </a>
                            <center>
                                <div class="caption">
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Make Offer</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(10)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=10" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Make Offer</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>


                    <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="thumbnail">
                            <h1Audi A6 (2010)</h1>
                            <h2>Diesel |  19000.0 km | Manual</h2>
                            <h3></h3><br><br>
                            <h3>FRAZOR TOWN, BENGALURU</h3>
                        </div>
                    </div>

                    <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="thumbnail">
                            <center>
                                <h3>FRAZOR TOWN, BENGALURU</h3>
                                <p>Contact to owner :9989884865</p>
                                    </center>
                            <center>
                                <div class="caption">
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Make Offer</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(10)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                               <div class="map-area">
                                               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15550.511047962302!2d77.6050886778079!3d12.995643803440622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae16f6a9f3803d%3A0x61735447195754f1!2sPulikeshi%20Nagar%2C%20Bengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1664039044499!5m2!1sen!2sin" width="250" height="120" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                               </div>
                                                <!--<a href="cart_add.php?id=10" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Contact Owner</a>-->
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>

                    <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="thumbnail">
                            <h2>Description </h2>
                            <p>At k2 pre owned cars we provide various facilities such as quality loan, multi bank loans at lowest EMI, accident free cars and much more..
To avail the best facilities in Bengaluru call us
                       <h3>Additonal Vehicle Information : </h3>
                            <ul>
                                <li>ABS: Yes
                                <li>Accidental: No
                                <li>Adjustable External Mirror: Power
                                <li>Adjustable Steering: Yes
                                <li>Air Conditioning: Automatic Climate Control
                                <li>Number of Airbags: 6 airbags
                                <li>Alloy Wheels: Yes
                                <li>Anti Theft Device: Yes
                                <li>Aux Compatibility: Yes
                                <li>Battery Condition: New
                                <li>Bluetooth: Yes
                                <li>Vehicle Certified: Yes
                                <li>Color: Black
                                <li>Cruise Control: Yes
                                <li>Engine Capacity/Displacement (in Cc): 2995
                                <li>Insurance Type: Comprehensive
                                <li>Lock System: Remote Controlled Central
                                <li>Make Month: July
                                <li>Navigation System: Yes
                                <li>Parking Sensors: Yes
                                <li>Power steering: Yes
                                <li>Power Windows: Front & rear
                                <li>AM/FM Radio: Yes
                                <li>Rear Parking Camera: Yes
                                <li>Registration Place: KA
                                <li>Exchange: Yes
                                <li>Finance: Yes
                                <li>Service History: Available
                                <li>Tyre Condition: New
                                <li>USB Compatibility: Yes
                                    </ul>
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
