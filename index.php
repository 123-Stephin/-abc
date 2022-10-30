<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRijlBGSGgpE7L7z0bmOSocG8biUYpJcBxy9g&usqp=CAU" />
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
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>Affordability at your fingertip</h1>
                       <p></p>
                       <a href="login.php" class="btn btn-danger">Sell Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/c26.jpg" alt="Camera">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Audi A6</p>
                                        <h3>Audi A6 2010 ,Diesel</h3>
                                  
                            
                                   
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/c23.jpg" alt="Car">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Hyundai Elantra</p>
                                    <h3>Hyundai Elantra 2017 ,Petrol</h3>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/c13.jpg" alt="Shirt">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Toyota Corolla Altis</p>
                                   <h3>Toyota Corolla 2009 ,Petrol</h3>
                               </div>
                           </center>
                       </div>
                   </div>
                   
                   
               </div>
           </div>
                
               </div>
           </div>
           <br><br> <br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy <a href="https://projectworlds.in">Wheelz N Dealz</a>. All Rights Reserved.</p>
                   <p>This website is developed by Sirjan & Stephin</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>