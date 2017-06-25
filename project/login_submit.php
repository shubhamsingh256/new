<?php
include 'common.php';
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=(mysqli_real_escape_string($con,$_POST['password']));
$select="select  * from user where email='$email' and password='$password'";
$query_result=mysqli_query($con,$select) or die(mysqli_error($con));
if(mysqli_num_rows($query_result)==0)
{ 
     header('location:login.php?error=wrong email or password');
}
else
{
 $ro = mysqli_fetch_array($query_result);
 $_SESSION['id']=$ro['id'];
    $_SESSION['email']=$ro['email'];

    header('location:product.php');
} ?>

