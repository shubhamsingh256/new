<?php
include 'common.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
    }
 
 else {
     $user_id = $_SESSION['id'];
$items= $_GET['itemsid'];
  $query="update user_items set status='confirmed' where user_id=" . $user_id . " and product_id in (" . $items . ") and status='Added to cart'";
 $result=mysqli_query($con, $query) or die($mysqli_error($con));}
?>      
<head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
                <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
                <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<link href="assign2.css" rel="stylesheet" type="text/css">        
                <title>sucess page</title>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">
                      <h3 align="center">Your order is confirmed. Thank you for shopping with us.</h3><hr>
                    <p align="center">Click <a href="product.php">here</a> to purchase any other item.</p>
                </div>
            </div>
        </div>
        <?php include("footer.php");
        ?>
    </body>
</html>