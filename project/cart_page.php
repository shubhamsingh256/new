<?php 
include 'common.php';
if(!isset($_SESSION['email']))
{
   header('location:index.php');
   }
?>

<html>
    <head>
         <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
                <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
                <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<link href="assign2.css" rel="stylesheet" type="text/css"> 
    </head>
</head>
<body>
    <div class="section">
<?php

   include 'header.php';
   $user_id=$_SESSION['id'];
    
 $query = "SELECT p.price , p.id ,p.name FROM user_items u inner JOIN products p ON u.product_id = p.id WHERE u.user_id='$user_id' and status='Added to cart'";   
 $query_result=mysqli_query($con,$query) or die(mysqli_error($con));
     $num=mysqli_num_rows($query_result);
        if($num==0)  { ?>
    <center>
          <div class='container' > 
       <div  style= margin-top:150px;><div class='jumbotron' height:100px"> 
        <h1> Your cart is empty</h1>
       <div> <a href='product.php'>click here</a> for adding product</div> 
           </div></div>
       </div>
       </center>
          
          
      <?php }     
      else
      {?>
<center>
  <table class="table-bordered table-responsive table-hover text-center" style="width:500px; height:200px;margin-top:100px">
        <thead>
                                <tr style="width:50px; height:40px">
                                    <th style="text-align:center">Item Number</th>
                                    <th style="text-align:center">Item Name</th>
                                    <th style="text-align:center">Price</th>
                                    <th></th>
                                </tr>
        </thead> <tbody>
        <?php
          
          $sum=0;$id="";
          while($row=mysqli_fetch_assoc($query_result))
       {        
                 $sum=$sum+$row['price'];
                $id .=$row['id'].", "; 
                echo "<tr><td>".$row['id']."</td> <td>".$row['name']."</td> <td> rs".$row['price']."</td> <td><a href='cart_remove.php?id={$row['id']}'class='remove_item_link'> Remove</a></td></tr>"; 
       }
      $id = rtrim($id, ", ");
     echo" <tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?itemsid=" . $id . "' class='btn btn-primary'>Confirm Order</a></td></tr>";
     ?></tbody>
      </table> </center>
          <?php }?>
    </div>
    <?php     include "footer.php"; ?>
</body>
</html>
     