<?php 
include 'common.php';
if(isset($_SESSION['id']))
{
    header('location:product.php');}
?>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
                <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
                <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<link href="assign2.css" rel="stylesheet" type="text/css">        
                <title>Signup page</title>
    </head>
    <body>
       
        <?php   include 'header.php'; ?>
        <div clas="section">
        <div class="container">
                <div class=" row row-style">
                    <div class="col-xs-8" style="margin-top:120px; padding-left:150px " >
                        <img src="img/lap.jpg">   
                    </div>
                    <div class="col-xs-4">
                        <h3> SIGN UP</h3>
                        
                      <?php if(isset($_GET['exist'])){
                                       echo $_GET['exist'];} ?>
                        <form method='post' action='signup_script.php'>
                        <div class="form-group">
                       <input type="text" class="form-control" placeholder="NAME" name="name" required="true" >
                              
                        </div>
                        <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" name="email" required="true" >
                                    <div>
                                       <?php if(isset($_GET['eml'])){
                                       echo $_GET['eml'];} ?>
                                       
                                    </div>     
                        </div> 
                        <div class="form-group">
      <input type="password" class="form-control" placeholder="Password" name="password" required="true" >

                                    </div>
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="Contact" name="contact" required="true">
                                   <div>
                                       <?php if(isset($_GET['phn'])){
                                       echo $_GET['phn'];} ?>
                                       
                                    </div>  </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="City" name="city" required="true" >
                                              
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Address" name="address" required="true" >
                                  
                        </div>
                            <button style="float:right" class="btn btn-primary" >Signup</button>
                        </form></div></div></div></div>
         <?php                        include 'footer.php';
         ?> 
    </body>
</html>