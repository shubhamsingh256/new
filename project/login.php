<?php 
include 'common.php'; ?>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
                <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
                <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<link href="assign2.css" rel="stylesheet" type="text/css">        
                <title>Login page</title>
                <style>
                    .background{
                       padding-top: 75px;
    padding-bottom: 50px; 
    text-align: center; 
    color:black; 
    background: url(img/life.jpg) no-repeat center center; 
    background-size:cover;
    height:100%;
                    }
                   
                </style>
    </head>
    <body>
       
      <?php  include "header.php"; ?>
        <div class="background">
            <div class="container">
                
                            <p class="col-lg-offset-2 text-warning label">Login to make a purchase</p>
                           
                               <div class="row row-style">
                                   <div class="col-xs-4">
                                       
                            <form method="post" action="login_submit.php">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" name="email" required="true">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required="true">
                                  <b> <?php if(isset($_GET['error'])) 
                                   {echo $_GET['error'];}?></b>
                                </div>
                                <button class="btn btn-primary">Login</button>
                            </form></div>
                                  
                               </div></div></div>
      
                        
              <?php  include "footer.php"; ?>                      
    </body></html>   
                                      