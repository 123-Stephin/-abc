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
                                <img src="img/c13.jpg" alt="Cannon">
                            </a>
                        </div>
                    </div>

                    <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="thumbnail">
                        <h1>Sold by</h1><br>
                                <h3 color="black">Car dilwado</h3>
                                <p>Posted On:</p>
                             <p>09/24/2022</p>
                            <a href="#">
                                <h1>₹ 2,00,000</h1>
                            </a>
                            <center>
                                <div class="caption">
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Make Offer</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(11)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=11" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Make Offer</a>
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
                            <h1>Toyota Corolla Altis (2009)</h1>
                            <h2>Petrol |  81000.0 km | Manual</h2>
                            <h3></h3><br><br>
                            <h3>DWARKA, DELHI</h3>
                        </div>
                    </div>

                    <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="thumbnail">
                            <center>
                                <h3>DWARKA, DELHI</h3>
                                <p>Contact to owner :9855300443</p>
                                    </center>
                            <center>
                                <div class="caption">
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Make Offer</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(11)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                               <div class="map-area">
                                               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56062.11214730973!2d77.01007577362078!3d28.57330560479992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1a9c31eec4e1%3A0x39493976cba4c89a!2sDwarka%2C%20New%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1664039662859!5m2!1sen!2sin" width="250" height="120" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                       <h3>Additonal Vehicle Information : </h3>
                            <ul>
                                <li>Color: Black
                                <li>Insurance Type: Comprehensive
                                <li>Make Month: March
                                <li>Registration Place: DL
                                <li>Exchange: Yes
                                <li>Finance: Yes
                            
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
