<?php 
include 'common.php';
if (isset($_SESSION['email']))
  {   header('location: product.php'); }?>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
                <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
                <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<link href="assign2.css" rel="stylesheet" type="text/css">        
                <title>index page</title>
    </head>
    <body>
        <?php                        include 'header.php'; 
        include "modal.php"?>
        
        <div id="banner_image" >
        <div class="container">
            <div class="row row-style">
                    <div class="col-xs-8 col-xs-offset-3">
           <div id="banner_content">
                   
          <a href="product.php" class="bt btn-danger btn-lg active">
              Shop Now</a>
               </div></div> 
         </div>
       

        </div></div>
       <?php include 'footer.php'; ?>
    </body>
</html>