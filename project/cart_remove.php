<?php
include 'common.php';
if (isset($_GET['id']) && is_numeric($_GET['id']))
    { //is_numeric is  a function used for checking that the get is not empty
$user_id=$_SESSION['id'];
$item_id=$_GET['id'];
$query = "DELETE FROM user_items WHERE product_id='$item_id' AND user_id='$user_id' ";
    $res = mysqli_query($con, $query) or die($mysqli_error($con));
    header("location:cart_page.php");
}else
{
    header("location:cart_page.php");}
?>