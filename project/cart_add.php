<?php
 include 'common.php';
  $item_id=$_GET['id'];
 $user_id=$_SESSION['id'];
 $query="INSERT INTO user_items(user_id, product_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
 $query_result=mysqli_query($con,$query);
  header('location:product.php');
  ?>