<?php 
include 'common.php'; ?>

<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
                <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
                <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<link href="assign2.css" rel="stylesheet" type="text/css">        
                <title>product page</title>
    </head>
    <body>
       
            
      <?php  include 'header.php'; ?>
         <?php  include 'check_if_added.php'; ?>
        
        <div class="section">
        <div class="container row-style">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1> 
                <p>  We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
            </div></div><hr>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/CAM1.jpeg">
                        <div class="caption">
                            <h3>Cannon EOS</h3>
                            
                            <p>Price:Rs 36000.00</p>                       
                             <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login_1.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                
                                if (check_if_added_to_cart(1)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                                </div>
                    </div></div>
                     <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/CAM2.jpeg">
                        <div class="caption">
                            <h3>Sony</h3>
                            
                            <p>Price:Rs 75000.00</p>
                             <?php if (!isset($_SESSION['email'])) { ?> 
                             <p><a href="login_1.php"  class="btn btn-primary btn-block">Buy Now</a></p> 
                               <?php       
                               } else { 
                                   if (check_if_added_to_cart(2)) { 
                                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';    
                               }else{
                                   ?>
                             <a href="cart_add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                             <?php
                               }
                               }
                               ?>
                        </div>
                </div></div>
                          <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/CAM3.jpeg">
                        <div class="caption">
                            <h3>Canon</h3>
                            
                            <p>Price:Rs 46000.00</p>
                           <?php if (!isset($_SESSION['email'])) { ?> 
                             <p><a href="login_1.php"  class="btn btn-primary btn-block">Buy Now</a></p> 
                               <?php       
                               } else { 
                                   if (check_if_added_to_cart(3)) { 
                                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';    
                               }else{
                                   ?>
                             <a href="cart_add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                             <?php
                               }
                               }
                               ?>
                        </div>
                </div></div>
                               <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/CAM4.jpeg">
                        <div class="caption">
                            <h3>Nikon</h3>
                            
                            <p>Price:Rs 56000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?> 
                             <p><a href="login_1.php"  class="btn btn-primary btn-block">Buy Now</a></p> 
                               <?php       
                               } else { 
                                   if (check_if_added_to_cart(4)) { 
                                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';    
                               }else{
                                   ?>
                             <a href="cart_add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                             <?php
                               }
                               }
                               ?>
                        </div>
                </div></div>
            </div>
              <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/wat1.jpeg">
                        <div class="caption">
                            <h3>Timex</h3>
                            
                            <p>Price:Rs 5600.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?> 
                             <p><a href="login_1.php"  class="btn btn-primary btn-block">Buy Now</a></p> 
                               <?php       
                               } else { 
                                   if (check_if_added_to_cart(5)) { 
                                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';    
                               }else{
                                   ?>
                             <a href="cart_add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                             <?php
                               }
                               }
                               ?>
                        </div>
                    </div></div>
                     <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/watch2.jpeg">
                        <div class="caption">
                            <h3>Gypsy</h3>
                            
                            <p>Price:Rs 7000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?> 
                             <p><a href="login_1.php"  class="btn btn-primary btn-block">Buy Now</a></p> 
                               <?php       
                               } else { 
                                   if (check_if_added_to_cart(6)) { 
                                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';    
                               }else{
                                   ?>
                             <a href="cart_add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                             <?php
                               }
                               }
                               ?>
                        </div>
                </div></div>
                          <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/wat4.jpeg">
                        <div class="caption">
                            <h3>Los colusis</h3>
                            
                            <p>Price:Rs 4600.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?> 
                             <p><a href="login_1.php"  class="btn btn-primary btn-block">Buy Now</a></p> 
                               <?php       
                               } else { 
                                   if (check_if_added_to_cart(7)) { 
                                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';    
                               }else{
                                   ?>
                             <a href="cart_add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                             <?php
                               }
                               }
                               ?>
                        </div>
                </div></div>
                               <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/watch.jpg">
                        <div class="caption">
                            <h3>Frji</h3>
                            
                            <p>Price:Rs 5600.00</p>
                          <?php if (!isset($_SESSION['email'])) { ?> 
                             <p><a href="login_1.php"  class="btn btn-primary btn-block">Buy Now</a></p> 
                               <?php       
                               } else { 
                                   if (check_if_added_to_cart(8)) { 
                                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';    
                               }else{
                                   ?>
                             <a href="cart_add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                             <?php
                               }
                               }
                               ?>
                        </div>
                </div></div>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/shi4.jpeg">
                        <div class="caption">
                            <h3>Time</h3>
                            
                            <p>Price:Rs 1200.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?> 
                             <p><a href="login_1.php"  class="btn btn-primary btn-block">Buy Now</a></p> 
                               <?php       
                               } else { 
                                   if (check_if_added_to_cart(9)) { 
                                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';    
                               }else{
                                   ?>
                             <a href="cart_add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                             <?php
                               }
                               }
                               ?>
                        </div>
                    </div></div>
                     <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/shi3.jpeg">
                        <div class="caption">
                            <h3>Nike</h3>
                            
                            <p>Price:Rs 700.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?> 
                             <p><a href="login_1.php"  class="btn btn-primary btn-block">Buy Now</a></p> 
                               <?php       
                               } else { 
                                   if (check_if_added_to_cart(10)) { 
                                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';    
                               }else{
                                   ?>
                             <a href="cart_add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                             <?php
                               }
                               }
                               ?>
                        </div>
                </div></div>
                          <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/shi2.jpeg">
                        <div class="caption">
                            <h3>Lee Copper</h3>
                            
                            <p>Price:Rs 1600.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?> 
                             <p><a href="login_1.php"  class="btn btn-primary btn-block">Buy Now</a></p> 
                               <?php       
                               } else { 
                                   if (check_if_added_to_cart(11)) { 
                                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';    
                               }else{
                                   ?>
                             <a href="cart_add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                             <?php
                               }
                               }
                               ?>
                        </div>
                </div></div>
                               <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/shi1.jpeg">
                        <div class="caption">
                            <h3>Woodland</h3>
                            
                            <p>Price:Rs 600.00</p>
                           <?php if (!isset($_SESSION['email'])) { ?> 
                             <p><a href="login_1.php"  class="btn btn-primary btn-block">Buy Now</a></p> 
                               <?php       
                               } else { 
                                   if (check_if_added_to_cart(12)) { 
                                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';    
                               }else{
                                   ?>
                             <a href="cart_add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                             <?php
                               }
                               }
                               ?>
                        </div>
                </div></div>
            </div>
            
    </div>
          
       
   <?php                        include 'footer.php'; ?>
    </body></html>   
        