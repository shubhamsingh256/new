<?php
include 'common.php';
if(!isset($_SESSION)){
header('location:index.php');}
$old=$_POST['old_password'];
$old = mysqli_real_escape_string($con, $old);
$new=$_POST['New_password'];
$new= mysqli_real_escape_string($con, $new);
$renew=$_POST['new_password'];
$renew = mysqli_real_escape_string($con, $renew);
$email=$_SESSION['email'];
$query = "SELECT email, password FROM user WHERE email ='$email'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);
$orig_pass = $row['password'];
$email= $_SESSION['email'];
if ($new != $renew) {
    header('location: setting.php?error=The two passwords don\'t match');
} else {
    if ($old == $orig_pass) {
        $query = "UPDATE  user SET password ='$new' WHERE email ='$email'";
       $result= mysqli_query($con, $query) or die(mysqli_error($con));
        header('location: setting.php?error=Password Updated');
    } else
        header('location: setting.php?error=Wrong Old Password');
}
?>

            
